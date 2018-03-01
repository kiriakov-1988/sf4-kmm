<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(
     *     targetEntity="App\Entity\Post",
     *     mappedBy="category"
     * )
     */
    private $postes = [];

    //////////////////////////

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

//    /**
//     * @return mixed
//     */
//    public function getPostes()
//    {
//        return $this->postes;
//    }
//
//    /**
//     * @param mixed $postes
//     */
//    public function addPostes($postes): void
//    {
//        $this->postes = $postes;
//    }


}
