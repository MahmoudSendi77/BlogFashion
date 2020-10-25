<?php

namespace TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="TicketBundle\Repository\TicketRepository")
 */
class Ticket
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
     * @ORM\Column(name="Reporter", type="string", length=255)
     */
    private $reporter;

    /**
     * @var string
     *
     * @ORM\Column(name="ReporterMail", type="string", length=255)
     * @Assert\NotBlank(message= " Enter a valid Email Adress")
     */
    private $reporterMail;

    /**
     * @var string
     *
     * @ORM\Column(name="ReclamationAbout", type="string", length=255)
     */
    private $reclamationAbout;

    /**
     * @var string
     *
     * @ORM\Column(name="Priority", type="string", length=255)
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="ReporterType", type="string", length=255)
     */
    private $reporterType;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var \Datetime
     *
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $dateTicket;

//    /**
//     * @var string
//     *
//     * @ORM\Column(name="image", type="blob", nullable=false)
//     */
//    private $image;
//
//    private $rawPhoto;
//
//    public function displayPhoto()
//    {
//        if(null === $this->rawPhoto) {
//            $this->rawPhoto = "data:image/png;base64," . base64_encode(stream_get_contents($this->getImage()));
//        }
//
//        return $this->rawPhoto;
//    }



    /**
     * @ORM\ManyToOne(targetEntity="TicketBundle\Entity\ReportIssue")
     * @ORM\JoinColumn(name="ReportIssue_id",referencedColumnName="id")
     */
    private $reportissue;

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
     * Set reporter
     *
     * @param string $reporter
     *
     * @return Ticket
     */
    public function setReporter($reporter)
    {
        $this->reporter = $reporter;

        return $this;
    }

    /**
     * Get reporter
     *
     * @return string
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * Set reporterMail
     *
     * @param string $reporterMail
     *
     * @return Ticket
     */
    public function setReporterMail($reporterMail)
    {
        $this->reporterMail = $reporterMail;

        return $this;
    }

    /**
     * Get reporterMail
     *
     * @return string
     */
    public function getReporterMail()
    {
        return $this->reporterMail;
    }

    /**
     * Set reclamationAbout
     *
     * @param string $reclamationAbout
     *
     * @return Ticket
     */
    public function setReclamationAbout($reclamationAbout)
    {
        $this->reclamationAbout = $reclamationAbout;

        return $this;
    }

    /**
     * Get reclamationAbout
     *
     * @return string
     */
    public function getReclamationAbout()
    {
        return $this->reclamationAbout;
    }

    /**
     * Set priority
     *
     * @param string $priority
     *
     * @return Ticket
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set reporterType
     *
     * @param string $reporterType
     *
     * @return Ticket
     */
    public function setReporterType($reporterType)
    {
        $this->reporterType = $reporterType;

        return $this;
    }

    /**
     * Get reporterType
     *
     * @return string
     */
    public function getReporterType()
    {
        return $this->reporterType;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ticket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return Datetime
     */
    public function getDateTicket()
    {
        return $this->dateTicket;
    }

    /**
     * @param Datetime $dateTicket
     * @return Ticket
     */
    public function setDateTicket($dateTicket)
    {
        $this->dateTicket = $dateTicket;

    }
//
//    /**
//     * @return string
//     */
//    public function getImage()
//    {
//        return $this->image;
//    }

//    /**
//     * @param string $image
//     */
//    public function setImage($image)
//    {
//        $this->image = $image;
//    }

//    /**
//     * @return string
//     */
//    public function getTypeR()
//    {
//        return $this->typeR;
//    }

    //   /**
    //    * @param string $typeR
    //    */
    //   public function setTypeR($typeR)
    //   {
    //      $this->typeR = $typeR;
    //  }

    /**
     * @return mixed
     */
    public function getReportissue()
    {
        return $this->reportissue;
    }

    /**
     * @param mixed $reportissue
     */
    public function setReportissue($reportissue)
    {
        $this->reportissue = $reportissue;
    }



}

