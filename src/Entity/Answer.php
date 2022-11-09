<?php

/**
 * This is automatically generated file using the Codific Prototizer
 * PHP version 8
 * @category PHP
 * @package  Admin
 * @author   CODIFIC <info@codific.com>
 * @link     http://codific.com
 */

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Abstraction\AbstractEntity;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Symfony\Component\Serializer\Annotation\Ignore;



//#BlockStart number=116 id=_19_0_3_40d01a2_1635865267453_727556_6531_#_0

//#BlockEnd number=116


#[ORM\Table(name: "`answer`")]
#[ORM\Entity(repositoryClass: "App\Repository\AnswerRepository")]
#[ORM\HasLifecycleCallbacks]
class Answer extends AbstractEntity
{

    #[ORM\Column(name: "`text`", type: Types::STRING, nullable: true)]
    protected ?string $text = "";

    #[ORM\Column(name: "`value`", type: Types::DECIMAL, precision: 10, scale: 2)]
    protected float $value = 0.0;

    #[ORM\Column(name: "`weight`", type: Types::DECIMAL, precision: 10, scale: 2)]
    protected float $weight = 0.0;

    #[ORM\Column(name: "`order`", type: Types::INTEGER)]
    protected int $order = 0;

    #[ORM\ManyToOne(targetEntity: AnswerSet::class, cascade: ["persist"], fetch: "EAGER", inversedBy: "answerSetAnswers")]
    #[ORM\JoinColumn(onDelete: "SET NULL")]
    #[MaxDepth(1)]
    protected ?AnswerSet $answerSet = null;



    /**
     * Answer constructor
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Set text
     * @param string|null $text the setter value
     * @return Answer
     */
    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Set value
     * @param float $value the setter value
     * @return Answer
     */
    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Set weight
     * @param float $weight the setter value
     * @return Answer
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Set order
     * @param int $order the setter value
     * @return Answer
     */
    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Set answerSet
     * @param AnswerSet|null $answerSet the setter value
     * @return Answer
     */
    public function setAnswerSet(?AnswerSet $answerSet): self
    {
        $this->answerSet = $answerSet;

        return $this;
    }

    /**
     * Get answerSet
     * @return AnswerSet|null
     */
    public function getAnswerSet(): ?AnswerSet
    {
        return $this->answerSet;
    }


    /**
     * This method is a copy constructor that will return a copy object (except for the id field)
     * Note that this method will not save the object
     * @param Answer|null $clone a clone object that is either null or already partially initialized
     * @return Answer
     */
    #[Ignore]
    public function getCopy(?Answer $clone = null): Answer
    {
        if ($clone == null) {
            $clone = new Answer();
        }
        $clone->setText($this->text);
        $clone->setValue($this->value);
        $clone->setWeight($this->weight);
        $clone->setOrder($this->order);
        $clone->setAnswerSet($this->answerSet);
//#BlockStart number=117 id=_19_0_3_40d01a2_1635865267453_727556_6531_#_1

//#BlockEnd number=117

        return $clone;
    }

    /**
     * Private to string method auto generated based on the UML properties
     * This is the new way of doing things.
     * @return string
     */
    public function toString(): string
    {
        return "$this->text";
    }

    /**
     * https://symfony.com/doc/current/validation.html
     * we use php version for validation!!!
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {

//#BlockStart number=118 id=_19_0_3_40d01a2_1635865267453_727556_6531_#_2
//        to remove constraint use following code
//        unset($metadata->properties['PROPERTY']);
//        unset($metadata->members['PROPERTY']);
//#BlockEnd number=118

    }

    #[Ignore]
    public function getGeneratedFilterFields(): array
    {
		return [
            "_answer.id",
            "_answer.text",
            "_answer.order",
        ];
    }

    #[Ignore]
    public function getUploadFields(): array
    {
        return [
		
        ];
    }
    
    #[Ignore]
    public function getReadOnlyFields(): array
    {
        return [
        ];
    }

    #[Ignore]
    public function getParentClasses(): array
    {
        return [
		     "answerSet",
        ];
    }

    #[Ignore]
    public static array $manyToManyProperties = [
    ];

    #[Ignore]
    public static array $childProperties = [
    ];

//#BlockStart number=119 id=_19_0_3_40d01a2_1635865267453_727556_6531_#_3

    /**
     * The toString method based on the private __toString autogenerated method
     * If necessary override
     * @return string
     */
    public function __toString(): string
    {
        return $this->toString();
    }
    


//#BlockEnd number=119

}
