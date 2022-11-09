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



//#BlockStart number=98 id=_19_0_3_40d01a2_1635864957642_388856_6397_#_0

//#BlockEnd number=98


#[ORM\Table(name: "`question`")]
#[ORM\Entity(repositoryClass: "App\Repository\QuestionRepository")]
#[ORM\HasLifecycleCallbacks]
class Question extends AbstractEntity
{

    #[ORM\ManyToOne(targetEntity: Activity::class, cascade: ["persist"], fetch: "EAGER", inversedBy: "activityQuestions")]
    #[ORM\JoinColumn(onDelete: "SET NULL")]
    #[MaxDepth(1)]
    protected ?Activity $activity = null;

    #[ORM\Column(name: "`text`", type: Types::TEXT, nullable: true)]
    protected ?string $text = "";

    #[ORM\Column(name: "`order`", type: Types::INTEGER)]
    protected int $order = 0;

    #[ORM\Column(name: "`quality`", type: Types::TEXT, nullable: true)]
    protected ?string $quality = "";

    #[ORM\ManyToOne(targetEntity: AnswerSet::class, cascade: ["persist"], fetch: "EAGER")]
    #[ORM\JoinColumn(onDelete: "SET NULL")]
    #[MaxDepth(1)]
    protected ?AnswerSet $answerSet = null;

    #[ORM\Column(name: "`external_id`", type: Types::STRING, nullable: true)]
    protected ?string $externalId = "";

    #[ORM\Column(name: "`weight`", type: Types::DECIMAL, precision: 10, scale: 2)]
    protected float $weight = 0.0;



    /**
     * Question constructor
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Set activity
     * @param Activity|null $activity the setter value
     * @return Question
     */
    public function setActivity(?Activity $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     * @return Activity|null
     */
    public function getActivity(): ?Activity
    {
        return $this->activity;
    }

    /**
     * Set text
     * @param string|null $text the setter value
     * @return Question
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
     * Set order
     * @param int $order the setter value
     * @return Question
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
     * Set quality
     * @param string|null $quality the setter value
     * @return Question
     */
    public function setQuality(?string $quality): self
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     * @return string|null
     */
    public function getQuality(): ?string
    {
        return $this->quality;
    }

    /**
     * Set answerSet
     * @param AnswerSet|null $answerSet the setter value
     * @return Question
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
     * Set externalId
     * @param string|null $externalId the setter value
     * @return Question
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
     * Set weight
     * @param float $weight the setter value
     * @return Question
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
     * This method is a copy constructor that will return a copy object (except for the id field)
     * Note that this method will not save the object
     * @param Question|null $clone a clone object that is either null or already partially initialized
     * @return Question
     */
    #[Ignore]
    public function getCopy(?Question $clone = null): Question
    {
        if ($clone == null) {
            $clone = new Question();
        }
        $clone->setActivity($this->activity);
        $clone->setText($this->text);
        $clone->setOrder($this->order);
        $clone->setQuality($this->quality);
        $clone->setAnswerSet($this->answerSet);
        $clone->setExternalId($this->externalId);
        $clone->setWeight($this->weight);
//#BlockStart number=99 id=_19_0_3_40d01a2_1635864957642_388856_6397_#_1

//#BlockEnd number=99

        return $clone;
    }

    /**
     * Private to string method auto generated based on the UML properties
     * This is the new way of doing things.
     * @return string
     */
    public function toString(): string
    {
        return "$this->id";
    }

    /**
     * https://symfony.com/doc/current/validation.html
     * we use php version for validation!!!
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {

//#BlockStart number=100 id=_19_0_3_40d01a2_1635864957642_388856_6397_#_2
//        to remove constraint use following code
//        unset($metadata->properties['PROPERTY']);
//        unset($metadata->members['PROPERTY']);
//#BlockEnd number=100

    }

    #[Ignore]
    public function getGeneratedFilterFields(): array
    {
		return [
            "_question.id",
            "_question.text",
            "_question.order",
            "_question.quality",
            "_question.externalId",
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
		     "activity",
        ];
    }

    #[Ignore]
    public static array $manyToManyProperties = [
    ];

    #[Ignore]
    public static array $childProperties = [
    ];

//#BlockStart number=101 id=_19_0_3_40d01a2_1635864957642_388856_6397_#_3

    /**
     * The toString method based on the private __toString autogenerated method
     * If necessary override
     * @return string
     */
    public function __toString(): string
    {
        return $this->toString();
    }
    


//#BlockEnd number=101

}
