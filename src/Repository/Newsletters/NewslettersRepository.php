<?php

namespace App\Repository\Newsletters;

use App\Entity\Newsletters\Newsletters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Newsletters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Newsletters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Newsletters[]    findAll()
 * @method Newsletters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewslettersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Newsletters::class);
    }
}
