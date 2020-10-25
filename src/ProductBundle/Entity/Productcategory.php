<?php

namespace ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;


/**
 * Productcategory
 *
 * @ORM\Table(name="productcategory")
 * @ORM\Entity(repositoryClass="ProductBundle\Repository\ProductcategoryRepository")
 */
class Productcategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="productcatid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $productcatid;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="catname", type="string", length=100)
     */
    private $catname;

    /**
     * @return int
     */
    public function getProductcatid()
    {
        return $this->productcatid;
    }

    /**
     * @param int $productcatid
     */
    public function setProductcatid($productcatid)
    {
        $this->productcatid = $productcatid;
    }

    /**
     * @return string
     */
    public function getCatname()
    {
        return $this->catname;
    }

    /**
     * @param string $catname
     * @return Productcategory
     */
    public function setCatname($catname)
    {
        $this->catname = $catname;
        return $this ;
    }

    public function __toString()
    {
        return $this->catname ;
    }


}

