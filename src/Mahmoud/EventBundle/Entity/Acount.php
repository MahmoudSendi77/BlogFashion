<?php

namespace Mahmoud\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acount
 *
 * @ORM\Table(name="acount")
 * @ORM\Entity(repositoryClass="Mahmoud\EventBundle\Repository\AcountRepository")
 */
class Acount
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
     * @ORM\Column(name="photo_profile", type="string", length=255, nullable=true)
     */
    private $photoProfile;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;


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
     * Set photoProfile
     *
     * @param string $photoProfile
     *
     * @return Acount
     */
    public function setPhotoProfile($photoProfile)
    {
        $this->photoProfile = $photoProfile;

        return $this;
    }

    /**
     * Get photoProfile
     *
     * @return string
     */
    public function getPhotoProfile()
    {
        return $this->photoProfile;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Acount
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Acount
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Acount
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
}

