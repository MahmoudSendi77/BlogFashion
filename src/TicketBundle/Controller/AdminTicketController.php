<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TicketBundle\Entity\Ticket;

class AdminTicketController extends Controller
{

    public function showTicketAdminAction()
    {

        $rep=$this->getDoctrine()->getManager()->getRepository(Ticket::class)->findAll();

        return $this->render('@Ticket/HomeAdmin/readeAdmin.html.twig', array(
            'listTicket'=>$rep,

        ));
    }

    public function deleteAdminAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository(Ticket::class)->find($id);
        $em->remove($ticket);
        $em->flush();
        return$this->redirectToRoute("showA_ticket");

    }

}
