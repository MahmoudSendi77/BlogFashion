<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TicketBundle\Entity\ReportIssue;
use TicketBundle\Form\ReportIssueType;
use Symfony\Component\HttpFoundation\Request;

class ReportIssueController extends Controller
{
    public function showReportIssueAction()
    {

        $rep=$this->getDoctrine()->getManager()->getRepository(ReportIssue::class)->findAll();

        return $this->render('@Ticket/HomeReportIssue/readeC.html.twig', array(
            'listIssue'=>$rep,

        ));
    }
    public function deleteCAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reportissue = $em->getRepository(ReportIssue::class)->find($id);
        $em->remove($reportissue);
        $em->flush();
        return$this->redirectToRoute("show_reportissue");

    }
    public function updateCAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reportissue=$em->getRepository(ReportIssue::class)->find($id);
        $form = $this->createForm(ReportIssueType::class, $reportissue);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($reportissue);
            $em->flush();
            return $this->redirectToRoute('show_reportissue');}
        return $this->render('@Ticket/HomeReportIssue/UpdateC.html.twig',
            array('form' => $form->createView()));
    }
    public function createCAction(Request $request)
    {   $reportissue = new ReportIssue();
        $form = $this->createForm(ReportIssueType::class, $reportissue);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reportissue);
            $em->flush();
            return $this->redirectToRoute('show_reportissue');}
        return $this->render('@Ticket/HomeReportIssue/createC.html.twig',
            array('quote'=>'Please enter your Ticket here',
                'form' => $form->createView()));


    }

    public function showReportIssueAdminAction()
    {

        $rep=$this->getDoctrine()->getManager()->getRepository(ReportIssue::class)->findAll();

        return $this->render('@Ticket/HomeAdmin/readCategoryAdmin.html.twig', array(
            'listIssue'=>$rep,

        ));
    }

    public function deleteCAdminAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reportissue = $em->getRepository(ReportIssue::class)->find($id);
        $em->remove($reportissue);
        $em->flush();
        return$this->redirectToRoute("showA_reportissue");

    }
    public function updateCAdminAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reportissue=$em->getRepository(ReportIssue::class)->find($id);
        $form = $this->createForm(ReportIssueType::class, $reportissue);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($reportissue);
            $em->flush();
            return $this->redirectToRoute('showA_reportissue');}
        return $this->render('@Ticket/HomeAdmin/UpdateCategoryAdmin.html.twig',
            array('form' => $form->createView()));
    }


    public function createCAdminAction(Request $request)
    {   $reportissue = new ReportIssue();
        $form = $this->createForm(ReportIssueType::class, $reportissue);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reportissue);
            $em->flush();
            return $this->redirectToRoute('showA_reportissue');}
        return $this->render('@Ticket/HomeAdmin/createCategoryAdmin.html.twig',
            array('quote'=>'Please enter your Ticket here',
                'form' => $form->createView()));


    }



}
