<?php

namespace FollowBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Follower
 *
 * @ORM\Table(name="follower")
 * @ORM\Entity(repositoryClass="FollowBundle\Repository\FollowerRepository")
 */
class Follower
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_aboonement", type="date")
     */
    private $dateAboonement;

    /**
     * @var int
     *
     * @ORM\Column(name="folowed_id", type="integer")
     */
    private $folowedId;
    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

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
     * Set dateAboonement
     *
     * @param \DateTime $dateAboonement
     *
     * @return Follower
     */
    public function setDateAboonement($dateAboonement)
    {
        $this->dateAboonement = $dateAboonement;

        return $this;
    }

    /**
     * Get dateAboonement
     *
     * @return \DateTime
     */
    public function getDateAboonement()
    {
        return $this->dateAboonement;
    }

    /**
     * Set folowedId
     *
     * @param integer $folowedId
     *
     * @return Follower
     */
    public function setFolowedId($folowedId)
    {
        $this->folowedId = $folowedId;

        return $this;
    }

    /**
     * Get folowedId
     *
     * @return int
     */
    public function getFolowedId()
    {
        return $this->folowedId;
    }
    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Follower
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
}

