<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
class Menu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?int $level = null;

    #[ORM\ManyToMany(targetEntity: self::class, inversedBy: 'subMenu')]
    private Collection $subMenus;

    #[ORM\ManyToMany(targetEntity: self::class, mappedBy: 'subMenus')]
    private Collection $subMenu;

    #[ORM\Column(length: 255)]
    private ?string $publie = null;

    #[ORM\ManyToOne]
    private ?Post $Post = null;

    #[ORM\ManyToOne]
    private ?Page $page = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien = null;

    public function __construct()
    {
        $this->subMenus = new ArrayCollection();
        $this->subMenu = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): self
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getSubMenus(): Collection
    {
        return $this->subMenus;
    }

    public function addSubMenu(self $subMenu): self
    {
        if (!$this->subMenus->contains($subMenu)) {
            $this->subMenus[] = $subMenu;
        }

        return $this;
    }

    public function removeSubMenu(self $subMenu): self
    {
        $this->subMenus->removeElement($subMenu);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getSubMenu(): Collection
    {
        return $this->subMenu;
    }

    public function getPublie(): ?string
    {
        return $this->publie;
    }

    public function setPublie(string $publie): self
    {
        $this->publie = $publie;

        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->Post;
    }

    public function setPost(?Post $Post): self
    {
        $this->Post = $Post;

        return $this;
    }

    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }
}
