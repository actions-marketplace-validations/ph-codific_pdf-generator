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

namespace App\Repository;

//#BlockStart number=111 id=_19_0_3_40d01a2_1635865013512_709267_6457_#_0

use App\Entity\AnswerSet;
use App\Pagination\Paginator;
use App\Repository\Abstraction\AbstractRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method AnswerSet|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnswerSet|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnswerSet[]    findAll()
 * @method AnswerSet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnswerSetRepository extends SammCoreEntitiesAbstractRepository
{

    /**
     * AnswerSetRepository constructor.
     * @param ManagerRegistry $registry
     * @param string $entityClassName
     * @return void
     */
    public function __construct(ManagerRegistry $registry, string $entityClassName = AnswerSet::class)
    {
        parent::__construct($registry, $entityClassName);
    }

    /**
     * Duplicate the object and save the duplicate
     * @param AnswerSet $answerSet The object to be duplicated
     * @return AnswerSet
     */
    public function duplicate(AnswerSet $answerSet): AnswerSet
    {
        $clone = $answerSet->getCopy();
        $this->getEntityManager()->persist($clone);
        $this->getEntityManager()->flush();

        return $clone;
    }
    
//#BlockEnd number=111

}
