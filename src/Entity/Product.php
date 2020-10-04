<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

class Product
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */
    private $price;

    /**
     * @var int
     */
    private $promoPrice;

    /**
     * @var bool
     */
    private $status;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var Collection
     */
    private $productImages;

    public function __construct()
    {
        $this->productImages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getPromoPrice(): ?int
    {
        return $this->promoPrice;
    }

    public function setPromoPrice(?int $promoPrice): void
    {
        $this->promoPrice = $promoPrice;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getProductImages(): Collection
    {
        return $this->productImages;
    }

    public function setComment(ProductImage $productImage): void
    {
        if (!$this->productImages->contains($productImage)) {
            $this->productImages[] = $productImage;
            $productImage->setProduct($this);
        }
    }

    public function removeProductImage(ProductImage $productImage): void
    {
        if ($this->productImages->contains($productImage)) {
            $this->productImages->removeElement($productImage);
            // set the owning side to null (unless already changed)
            if ($productImage->getProduct() === $this) {
                $productImage->setProduct(null);
            }
        }
    }
}
