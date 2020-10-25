<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use TicketBundle\Entity\ReportIssue;
use TicketBundle\Entity\Ticket;
use TicketBundle\Form\TicketType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;



class TicketController extends Controller
{
    public function showTicketAction()
    {

        $rep=$this->getDoctrine()->getManager()->getRepository(Ticket::class)->findAll();

        return $this->render('@Ticket/HomeTickets/reade.html.twig', array(
            'listTicket'=>$rep,

        ));
    }
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository(Ticket::class)->find($id);
        $em->remove($ticket);
        $em->flush();
        return$this->redirectToRoute("show_ticket");

    }


    public function deleteAdminAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository(Ticket::class)->find($id);
        $em->remove($ticket);
        $em->flush();
        return$this->redirectToRoute("showA_ticket");

    }

    public function updateAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $ticket=$em->getRepository(Ticket::class)->find($id);
        $form = $this->createForm(TicketType::class, $ticket);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            return $this->redirectToRoute('show_ticket');}
        return $this->render('@Ticket/HomeTickets/Update.html.twig',
            array('form' => $form->createView()));
    }

//    public function updateAction($id, Request $request)
//    {
//        $image1=null;
//        $em = $this->getDoctrine()->getManager();
//        $e = $em->getRepository(Ticket::class)->find($id);
//
//        $image=$e->displayPhoto();
//        $image1=$e->getImage();
//
//        //2.preparation de notre formulaire
//        $e->setImage(null);
//        $form = $this->createForm(TicketType::class, $e);
//
//        $form = $form->handleRequest($request);
//        //SAUVGARDE DES DONNEES
//
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            if($e->getImage()==null){
//                $e->setImage($image1);
//                $em->persist($e);
//                $em->flush();
//                return $this->redirectToRoute('show_ticket');
//
//            }
//
//            $e->setImage(file_get_contents($e->getImage()->getPathname()));
//            $em->persist($e);
//            $em->flush();
//            return $this->redirectToRoute('show_ticket');
//
//
//        }
//        //3.envoi du formulaire à l'utilisateur
//        return $this->render('@Ticket/HomeTickets/Update.html.twig', array('form' => $form->createView(),'img'=>$image));
//
//
//    }


 public function createAction(Request $request)
    {   $ticket = new Ticket();

        $form = $this->createForm(TicketType::class, $ticket);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $temps=$ticket->setDateTicket (new \DateTime('now')) ;
            $em = $this->getDoctrine()->getManager();
           // $ticket->setImage(file_get_contents($ticket->getImage()->getPathname()));
            $em->persist($ticket);
            $em->flush();
            return $this->redirectToRoute('show_ticket');}
        return $this->render('@Ticket/HomeTickets/create.html.twig',
            array('quote'=>'Please enter your Ticket here',
                'form' => $form->createView()));


    }

    public function showTicketAdminAction()
    {

        $rep=$this->getDoctrine()->getManager()->getRepository(Ticket::class)->findAll();

        return $this->render('@Ticket/HomeAdmin/readAdmin.html.twig', array(
            'listTicket'=>$rep,

        ));
    }


  //  public function createAction(Request $request)
  //  {   $ticket = new Ticket();

  //      $form = $this->createForm(TicketType::class, $ticket);
    //      $form = $form->handleRequest($request);

    //       if ($form->isValid()) {

    //      $typeR= $ticket->getTypeR();
    //      $em = $this->getDoctrine()->getManager();
    //      $array_report =$em->getRepository(ReportIssue::class)->findByTypeR($typeR);
    //      if ($array_report != null){
    //          $one_report_objet=$array_report[0];
    //          $ticket->setReportissue($one_report_objet);
    //          $em->persist($ticket);
    //          $em->flush();
    //          return $this->redirectToRoute('show_ticket');}
    //  }else
    //  {
    //      return new Response('This type of report is not attributed to a report category');
    //  }

    //  return $this->render('@Ticket/HomeTickets/create.html.twig',
    //      array('quote'=>'Please enter your Ticket here',
    //          'form' => $form->createView()));
    // }

}
