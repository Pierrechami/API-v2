<?php

namespace App\Entity;

use App\Entity\Fields;
use App\Entity\Products;
use App\Entity\Locations;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource]

    // collectionOperations: [
    //     'get',
    //     'post',
    //     'products' => [
    //         'method' => 'GET',
    //         'path' => 'user/{id}/products',
    //         'controller' => UserProductsController::class
    //     ]
    // ]
// )]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: Products::class, orphanRemoval: true)]
    private Collection $products;

    #[ORM\OneToMany(mappedBy: 'tenant', targetEntity: Locations::class)]
    private Collection $locations;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: false)]
    private ?City $city = null;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: Fields::class)]
    private Collection $fields;

    #[ORM\Column(length: 15)]
    private ?string $telephone = null;

    #[ORM\OneToOne(mappedBy: 'user', cascade: ['persist', 'remove'])]
    private ?Company $company = null;

    #[ORM\OneToOne(mappedBy: 'user', cascade: ['persist', 'remove'])]
    private ?Winegrower $winegrower = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Comments::class)]
    private Collection $comments;

    #[ORM\Column(length: 255)]
    private ?string $profil_picture = null;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->locations = new ArrayCollection();
        $this->fields = new ArrayCollection();
        $this->setCreatedAt(new \DateTimeImmutable('now'));
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return Collection<int, Products>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Products $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setOwner($this);
        }

        return $this;
    }

    public function removeProduct(Products $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getOwner() === $this) {
                $product->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Locations>
     */
    public function getLocations(): Collection
    {
        return $this->locations;
    }

    public function addLocation(Locations $location): self
    {
        if (!$this->locations->contains($location)) {
            $this->locations->add($location);
            $location->setTenant($this);
        }

        return $this;
    }

    public function removeLocation(Locations $location): self
    {
        if ($this->locations->removeElement($location)) {
            // set the owning side to null (unless already changed)
            if ($location->getTenant() === $this) {
                $location->setTenant(null);
            }
        }

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Collection<int, Fields>
     */
    public function getFields(): Collection
    {
        return $this->fields;
    }

    public function addField(Fields $field): self
    {
        if (!$this->fields->contains($field)) {
            $this->fields->add($field);
            $field->setOwner($this);
        }

        return $this;
    }

    public function removeField(Fields $field): self
    {
        if ($this->fields->removeElement($field)) {
            // set the owning side to null (unless already changed)
            if ($field->getOwner() === $this) {
                $field->setOwner(null);
            }
        }

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): self
    {
        // set the owning side of the relation if necessary
        if ($company->getUser() !== $this) {
            $company->setUser($this);
        }

        $this->company = $company;

        return $this;
    }

    public function getWinegrower(): ?Winegrower
    {
        return $this->winegrower;
    }

    public function setWinegrower(Winegrower $winegrower): self
    {
        // set the owning side of the relation if necessary
        if ($winegrower->getUser() !== $this) {
            $winegrower->setUser($this);
        }

        $this->winegrower = $winegrower;

        return $this;
    }

    /**
     * @return Collection<int, Comments>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setUser($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }

    public function getProfilPicture(): ?string
    {
        return $this->profil_picture;
    }

    public function setProfilPicture(string $profil_picture): self
    {
        $this->profil_picture = $profil_picture;

        return $this;
    }
}
