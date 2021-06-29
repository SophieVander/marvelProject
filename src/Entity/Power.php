<?php

namespace App\Entity;

use App\Repository\PowerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PowerRepository::class)
 * @ORM\Table(options={"auto_increment" = 40})
 */
class Power
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", length=11)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $power;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Hero", inversedBy="powers", cascade="remove")
     */
    private $heroes;

    public function __construct()
    {
        $this->heroes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power): void
    {
        $this->power = $power;
    }

    /**
     * @return ArrayCollection
     */
    public function getHeroes(): ArrayCollection
    {
        return $this->heroes;
    }

    /**
     * @param ArrayCollection $heroes
     */
    public function setHeroes(ArrayCollection $heroes): void
    {
        $this->heroes = $heroes;
    }







}
