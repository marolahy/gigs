<?php
/**
 * Created by PhpStorm.
 * User: Cifope
 * Date: 05/04/2018
 * Time: 12:00
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="gigs")
 */

class Gigs
{
    /**
     * The identifier of the gigs.
     *
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * The price of the product.
     *
     * @var float
     * @ORM\Column(type="float")
     */
    protected $price = 0.0;
    /**
     * The name of the product.
     *
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * The description of the product.
     *
     * @var string
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * The description of the product.
     *
     * @var string
     * @ORM\Column(type="boolean")
     */
    protected $featured;


    /**
     * The description of the product.
     *
     * @var integer
     * @ORM\Column(type="integer")
     */
    protected $stock;


    /**
     * The description of the product.
     *
     * @var integer
     * @ORM\Column(type="integer")
     */
    protected $selled;



    protected $icon;


    protected $background;

    /**
     * @return string
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * @param string $featured
     */
    public function setFeatured(string $featured): void
    {
        $this->featured = $featured;
    }


    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="gigs")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * One Gigs has Many Images.
     * @ORM\OneToMany(targetEntity="GigImages", mappedBy="gig")
     */
    protected $images;


    public function __construct() {
        $this->images = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images): void
    {
        $this->images = $images;
    }



}