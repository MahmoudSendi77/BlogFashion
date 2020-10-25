<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TicketBundle:Default:index.html.twig');
    }
    public function SendMailAction(Request $request)
    {
        $form = $this->createFormBuilder()->add('message', TextareaType::class)
            ->add('send', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
/////////////////////////////////////////////////////////////////////////
        $message = $form["message"]->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->isMethod('POST')) {
                //$email = $this->getReporterMail();

                $message = $form["message"]->getData();
                $message = \Swift_Message::newInstance()
                    ->setSubject('Reply to the user')
                    ->setFrom('aya.bouzazi@esprit.tn')
                    ->setTo('ayabouzazi021@gmail.com')
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody($message);
                $this->get('mailer')->send($message);
/////////////////////////////////////////////////////
            }
        }
        return $this->render('@Ticket/Default/index.html.twig', array('mail' => $form->createView()));
    }
}
