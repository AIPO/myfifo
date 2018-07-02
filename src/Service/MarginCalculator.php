<?php

namespace App\Service;

use App\Entity\Warehouse;
use Doctrine\ORM\EntityManager;

class MarginCalculator
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @param $quantity
     * @param $price
     * @param $type
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function addOperation($quantity, $price, $type)
    {
        $puchase = new Warehouse();
        $puchase->setIncome($quantity)->setIncomePrice($price)->setOperationType($type);
        $this->entityManager->persist($puchase);
        $this->entityManager->flush();
    }

    /**
     *
     */
    public function findTotalMargin()
    {
        $operations = $this->entityManager->getRepository(Warehouse::class)->findAll();

        $leftInStock = 0;
        $sum_buy = 0;
        $sum_sell = 0;
        foreach ($operations as $operation) {
            if ($operation->getOperationType() === "IN") {
                $sum_buy += $operation->getIncome() * $operation->getIncomePrice();
                $leftInStock += $operation->getIncome();
            }
            if ($operation->getOperationType() === "OUT") {
                $leftInStock = $leftInStock - $operation->getOutcome();
                $sum_sell += $operation->getOutcome() * $operation->getOutcomePrice();
            }
        }
        //find warehouse value
        if($leftInStock>0){

        }

        return $sum_sell - $sum_buy;
    }
}