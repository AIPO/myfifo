<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WarehouseRepository")
 */
class Warehouse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $income;

    /**
     * @ORM\Column(type="integer")
     */
    private $outcome;

    /**
     * @ORM\Column(type="integer")
     */
    private $outcomePart;

    /**
     * @ORM\Column(type="integer")
     */
    private $leftInStock;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $operationType;

    /**
     * @ORM\Column(type="integer")
     */
    private $incomePrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $outcomePrice;

    public function getId()
    {
        return $this->id;
    }

    public function getIncome(): ?int
    {
        return $this->income;
    }

    public function setIncome(int $income): self
    {
        $this->income = $income;

        return $this;
    }

    public function getOutcome(): ?int
    {
        return $this->outcome;
    }

    public function setOutcome(int $outcome): self
    {
        $this->outcome = $outcome;

        return $this;
    }

    public function getOutcomePart(): ?int
    {
        return $this->outcomePart;
    }

    public function setOutcomePart(int $outcomePart): self
    {
        $this->outcomePart = $outcomePart;

        return $this;
    }

    public function getLeftInStock(): ?int
    {
        return $this->leftInStock;
    }

    public function setLeftInStock(int $leftInStock): self
    {
        $this->leftInStock = $leftInStock;

        return $this;
    }

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(string $operationType): self
    {
        $this->operationType = $operationType;

        return $this;
    }

    public function getIncomePrice(): ?int
    {
        return $this->incomePrice;
    }

    public function setIncomePrice(int $incomePrice): self
    {
        $this->incomePrice = $incomePrice;

        return $this;
    }

    public function getOutcomePrice(): ?int
    {
        return $this->outcomePrice;
    }

    public function setOutcomePrice(int $outcomePrice): self
    {
        $this->outcomePrice = $outcomePrice;

        return $this;
    }
}
