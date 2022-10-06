<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LocationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationsRepository::class)]
#[ApiResource]
class Locations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'locations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $tenant = null;

    #[ORM\OneToOne(inversedBy: 'locations', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Products $product = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $start_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $end_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTenant(): ?User
    {
        return $this->tenant;
    }

    public function setTenant(?User $tenant): self
    {
        $this->tenant = $tenant;

        return $this;
    }

    public function getProduct(): ?Products
    {
        return $this->product
;
    }

    public function setProduct(Products $product): self
    {
        $this->product = $product
;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }
}
