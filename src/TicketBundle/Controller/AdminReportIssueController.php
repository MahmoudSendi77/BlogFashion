<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TicketBundle\Entity\ReportIssue;
use TicketBundle\Form\ReportIssueType;

class AdminReportIssueController extends Controller
{

    public function showReportIssueAdminAction()
    {

        $rep=$this->getDoctrine()->getManager()->getRepository(ReportIssue::class)->findAll();

        return $this->render('@Ticket/HomeAdmin/readCategoryAdmin.html.twig', array(
            'listIssue'=>$rep,

        ));
    }


}
