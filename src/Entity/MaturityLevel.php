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



//#BlockStart number=71 id=_19_0_3_40d01a2_1635864718825_476062_6224_#_0

//#BlockEnd number=71


#[ORM\Table(name: "`maturity_level`")]
#[ORM\Entity(repositoryClass: "App\Repository\MaturityLevelRepository")]
#[ORM\HasLifecycleCallbacks]
class MaturityLevel extends AbstractEntity
{

    #[ORM\Column(name: "`level`", type: Types::INTEGER)]
    protected int $level = 0;

    #[ORM\Column(name: "`description`", type: Types::TEXT, nullable: true)]
    protected ?string $description = "";

    #[ORM\Column(name: "`external_id`", type: Types::STRING, nullable: true)]
    protected ?string $externalId = "";



    /**
     * MaturityLevel constructor
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Set level
     * @param int $level the setter value
     * @return MaturityLevel
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set description
     * @param string|null $description the setter value
     * @return MaturityLevel
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set externalId
     * @param string|null $externalId the setter value
     * @return MaturityLevel
     */
    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Get externalId
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }


    /**
     * This method is a copy constructor that will return a copy object (except for the id field)
     * Note that this method will not save the object
     * @param MaturityLevel|null $clone a clone object that is either null or already partially initialized
     * @return MaturityLevel
     */
    #[Ignore]
    public function getCopy(?MaturityLevel $clone = null): MaturityLevel
    {
        if ($clone == null) {
            $clone = new MaturityLevel();
        }
        $clone->setLevel($this->level);
        $clone->setDescription($this->description);
        $clone->setExternalId($this->externalId);
//#BlockStart number=72 id=_19_0_3_40d01a2_1635864718825_476062_6224_#_1

//#BlockEnd number=72

        return $clone;
    }

    /**
     * Private to string method auto generated based on the UML properties
     * This is the new way of doing things.
     * @return string
     */
    public function toString(): string
    {
        return "$this->level";
    }

    /**
     * https://symfony.com/doc/current/validation.html
     * we use php version for validation!!!
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {

//#BlockStart number=73 id=_19_0_3_40d01a2_1635864718825_476062_6224_#_2
//        to remove constraint use following code
//        unset($metadata->properties['PROPERTY']);
//        unset($metadata->members['PROPERTY']);
//#BlockEnd number=73

    }

    #[Ignore]
    public function getGeneratedFilterFields(): array
    {
		return [
            "_maturity_level.id",
            "_maturity_level.level",
            "_maturity_level.description",
            "_maturity_level.externalId",
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
		    
        ];
    }

    #[Ignore]
    public static array $manyToManyProperties = [
    ];

    #[Ignore]
    public static array $childProperties = [
    ];

//#BlockStart number=74 id=_19_0_3_40d01a2_1635864718825_476062_6224_#_3

    /**
     * The toString method based on the private __toString autogenerated method
     * If necessary override
     * @return string
     */
    public function __toString(): string
    {
        return $this->toString();
    }


//#BlockEnd number=74

}
