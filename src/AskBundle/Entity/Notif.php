<?php

namespace AskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notif
 *
 * @ORM\Table(name="notif")
 * @ORM\Entity(repositoryClass="AskBundle\Repository\NotifRepository")
 */
class Notif
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
     * @var int
     *
     * @ORM\Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="askedid", type="integer")
     */
    private $askedid;
    /**
     * @var string
     *
     * @ORM\Column(name="message_details", type="string", length=255)
     */
    private $messageDetails;
    /**
     * @var string
     *
     * @ORM\Column(name="newmessage_details", type="string", length=255)
     */
    private $newmessageDetails;


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
     * Set userid
     *
     * @param integer $userid
     *
     * @return Notif
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set askedid
     *
     * @param integer $askedid
     *
     * @return Notif
     */
    public function setAskedid($askedid)
    {
        $this->askedid = $askedid;

        return $this;
    }

    /**
     * Get askedid
     *
     * @return int
     */
    public function getAskedid()
    {
        return $this->askedid;
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
     * Set newmessageDetails
     *
     * @param string $newmessageDetails
     *
     * @return Ask
     */
    public function setNewmessageDetails($newmessageDetails)
    {
        $this->newmessageDetails = $newmessageDetails;

        return $this;
    }

    /**
     * Get newmessageDetails
     *
     * @return string
     */
    public function getNewmessageDetails()
    {
        return $this->newmessageDetails;
    }
}

