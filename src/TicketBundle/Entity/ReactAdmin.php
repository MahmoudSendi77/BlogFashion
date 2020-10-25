<?php

namespace TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReactAdmin
 *
 * @ORM\Table(name="react_admin")
 * @ORM\Entity(repositoryClass="TicketBundle\Repository\ReactAdminRepository")
 */
class ReactAdmin
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
     * @ORM\Column(name="Reaction", type="string", length=255)
     */
    private $reaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SubmittedAt", type="datetime")
     */
    private $submittedAt;


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
     * Set reaction
     *
     * @param string $reaction
     *
     * @return ReactAdmin
     */
    public function setReaction($reaction)
    {
        $this->reaction = $reaction;

        return $this;
    }

    /**
     * Get reaction
     *
     * @return string
     */
    public function getReaction()
    {
        return $this->reaction;
    }
////////////////

    //////////////////

    /**
     * @return Datetime
     */
    public function getSubmittedAt()
    {
        return $this->submittedAt;
    }

    /**
     * @param Datetime $submittedAt
     * @return submittedAt
     */
    public function setSubmittedAt($submittedAt)
    {
        $this->submittedAt = new \DateTime('now');
        return $this;
    }


}

