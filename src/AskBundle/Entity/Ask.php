<?php

namespace AskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ask
 *
 * @ORM\Table(name="ask")
 * @ORM\Entity(repositoryClass="AskBundle\Repository\AskRepository")
 */
class Ask
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
     * @ORM\Column(name="message_details", type="string", length=255)
     */
    private $messageDetails;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="message_date", type="date")
     */
    private $messageDate;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="asked_id", type="integer")
     */
    private $askedId;


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
     * Set messageDetails
     *
     * @param string $messageDetails
     *
     * @return Ask
     */
    public function setMessageDetails($messageDetails)
    {
        $this->messageDetails = $messageDetails;

        return $this;
    }

    /**
     * Get messageDetails
     *
     * @return string
     */
    public function getMessageDetails()
    {
        return $this->messageDetails;
    }

    /**
     * Set messageDate
     *
     * @param \DateTime $messageDate
     *
     * @return Ask
     */
    public function setMessageDate($messageDate)
    {
        $this->messageDate = $messageDate;

        return $this;
    }

    /**
     * Get messageDate
     *
     * @return \DateTime
     */
    public function getMessageDate()
    {
        return $this->messageDate;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Ask
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
     * Set askedId
     *
     * @param integer $askedId
     *
     * @return Ask
     */
    public function setAskedId($askedId)
    {
        $this->askedId = $askedId;

        return $this;
    }

    /**
     * Get askedId
     *
     * @return int
     */
    public function getAskedId()
    {
        return $this->askedId;
    }

}

