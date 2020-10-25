<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table(name="publication")
 * @ORM\Entity(repositoryClass="PublicationBundle\Repository\PublicationRepository")
 */
class Publication
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="Publication_image", type="string", length=255)
     */
    private $publicationImage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Publication_Date", type="date")
     */
    private $publicationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Core_text", type="string", length=255)
     */
    private $coreText;


    /**
     * Get id
     *
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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Publication
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set publicationImage
     *
     * @param string $publicationImage
     *
     * @return Publication
     */
    public function setPublicationImage($publicationImage)
    {
        $this->publicationImage = $publicationImage;

        return $this;
    }

    /**
     * Get publicationImage
     *
     * @return string
     */
    public function getPublicationImage()
    {
        return $this->publicationImage;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Publication
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set coreText
     *
     * @param string $coreText
     *
     * @return Publication
     */
    public function setCoreText($coreText)
    {
        $this->coreText = $coreText;

        return $this;
    }

    /**
     * Get coreText
     *
     * @return string
     */
    public function getCoreText()
    {
        return $this->coreText;
    }
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}

