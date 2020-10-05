<?php

declare(strict_types=1);

namespace App\Model;

use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\CartItemInterface;
use Doctrine\Common\Collections\Collection;

class Cart implements CartInterface
{

    private $items;

    private $totalPrice;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getItems(): Collection
    {
        return $this->items;
    }

    public function setItem(CartItemInterface $item): void
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
        }
    }

    public function removeItem(CartItemInterface $item): void
    {
        if ($this->items->contains($item)) {
            $this->items->removeElement($item);
        }
    }

    public function setTotalPrice(float $totalPrice): void
    {
        $this->totalPrice = $totalPrice * 100;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice / 100;
    }
}
