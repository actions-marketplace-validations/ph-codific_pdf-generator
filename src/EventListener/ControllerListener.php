<?php
declare(strict_types=1);


namespace App\EventListener;


use Doctrine\Common\Annotations\Reader;
use Doctrine\Persistence\Proxy;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\KernelEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ControllerListener implements EventSubscriberInterface
{

    public function __construct(private Reader $reader)
    {
    }

    public function onKernelController(KernelEvent $event)
    {
        $controller = $event->getController();
        if (!\is_array($controller) && method_exists($controller, '__invoke')) {
            $controller = [$controller, '__invoke'];
        }

        if (!\is_array($controller)) {
            return;
        }
        $className = $this->getRealClass(\get_class($controller[0]));
        $object = new \ReflectionClass($className);
        $method = $object->getMethod($controller[1]);

        $classConfigurations = $this->getConfigurations($this->reader->getClassAnnotations($object));
        $methodConfigurations = $this->getConfigurations($this->reader->getMethodAnnotations($method));

        $configurations = [];
        foreach (array_merge(array_keys($classConfigurations), array_keys($methodConfigurations)) as $key) {
            if (!\array_key_exists($key, $classConfigurations)) {
                $configurations[$key] = $methodConfigurations[$key];
            } elseif (!\array_key_exists($key, $methodConfigurations)) {
                $configurations[$key] = $classConfigurations[$key];
            } else {
                if (\is_array($classConfigurations[$key])) {
                    if (!\is_array($methodConfigurations[$key])) {
                        throw new \UnexpectedValueException('Configurations should both be an array or both not be an array.');
                    }
                    $configurations[$key] = array_merge($classConfigurations[$key], $methodConfigurations[$key]);
                } else {
                    // method configuration overrides class configuration
                    $configurations[$key] = $methodConfigurations[$key];
                }
            }
        }

        $request = $event->getRequest();
        foreach ($configurations as $key => $attributes) {
            $request->attributes->set($key, $attributes);
        }
    }

    private function getConfigurations(array $annotations): array
    {
        return [];
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }

    private static function getRealClass(string $class): string
    {
        if (class_exists(Proxy::class)) {
            if (false === $pos = strrpos($class, '\\'.Proxy::MARKER.'\\')) {
                return $class;
            }

            return substr($class, $pos + Proxy::MARKER_LENGTH + 2);
        }

        return $class;
    }
}