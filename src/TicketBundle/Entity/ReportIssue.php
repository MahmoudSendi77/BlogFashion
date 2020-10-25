<?php

namespace TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportIssue
 *
 * @ORM\Table(name="report_issue")
 * @ORM\Entity(repositoryClass="TicketBundle\Repository\ReportIssueRepository")
 */
class ReportIssue
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
     * @ORM\Column(name="TypeR", type="string", length=255)
     */
    private $typeR;

    /**
     * @var string
     *
     * @ORM\Column(name="Content", type="string", length=255)
     */
    private $content;


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
     * Set typeR
     *
     * @param string $typeR
     *
     * @return ReportIssue
     */
    public function setTypeR($typeR)
    {
        $this->typeR = $typeR;

        return $this;
    }

    /**
     * Get typeR
     *
     * @return string
     */
    public function getTypeR()
    {
        return $this->typeR;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return ReportIssue
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}

