<?php

namespace ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="product_ibfk_1", columns={"productcatid"})})
 * @ORM\Entity(repositoryClass="ProductBundle\Repository\ProductRepository")
 */


class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="productid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $productid;

    /**
     * @var string
     *
     * @Assert\NotBlank(message = "You must write a Name")
     *
     * @ORM\Column(name="productname", type="string", length=250)
     */
    private $productname;

    /**
     * @var string
     *
     * @Assert\NotBlank(message = "You must write a description")
     *
     * @ORM\Column(name="productdescription", type="string", length=500)
     *
     */
    private $productdescription;

    /**
     * @var string
     *
     * @Assert\NotBlank(message=" mention the stock status  ")
     *
     * @ORM\Column(name="stock", type="string", length=100)
     */
    private $stock;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0)
     * @Assert\NotBlank(message = "You must give your price")
     */
    private $price;
    /**
     * @var id
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */

    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="productphoto", type="blob", length=65535)
     */
    private $productphoto;

    private $rawPhoto;

    public function displayPhoto()
    {
        if(null === $this->rawPhoto) {
            $this->rawPhoto = "data:image/png;base64," . base64_encode(stream_get_contents($this->getProductphoto()));
        }

        return $this->rawPhoto;
    }


    /**
     * @var \Productcategory
     *
     * @ORM\ManyToOne(targetEntity="Productcategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productcatid", referencedColumnName="productcatid")
     * })
     */



    private $productcatid;

    /**
     * @return int
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * @param int $productid
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;
    }

    /**
     * @return string
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * @param string $productname
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;
    }

    /**
     * @return string
     */
    public function getProductdescription()
    {
        return $this->productdescription;
    }

    /**
     * @param string $productdescription
     */
    public function setProductdescription($productdescription)
    {
        $this->productdescription = $productdescription;
    }

    /**
     * @return string
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param string $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getProductphoto()
    {
        return $this->productphoto;
    }

    /**
     * @param string $productphoto
     */
    public function setProductphoto($productphoto)
    {
        $this->productphoto = $productphoto;
    }

    /**
     * Get productcatid
     *
     * @return \ProductBundle\Entity\Productcategory
     */
    public function getProductcatid()
    {
        return $this->productcatid;
    }

    /**
     * set productcatid
     *
     * @param \ProductBundle\Entity\Productcategory $productcatid
     * @return Product
     */
    public function setProductcatid(\ProductBundle\Entity\Productcategory $productcatid = null )
    {
        $this->productcatid = $productcatid;
        return $this;
    }




}

