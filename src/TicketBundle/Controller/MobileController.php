<?php

namespace TicketBundle\Controller;



use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use TicketBundle\Entity\Ticket;
use TicketBundle\Form\TicketType;

class MobileController extends Controller
{
    public function allMobileAction()
    {
        $events = $this->getDoctrine()->getManager()
            ->getRepository(Ticket::class)
            ->findAll();

        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object;
        });


        $normalizers = array($normalizer);

        $serializer = new Serializer($normalizers);
        $formatted = $serializer->normalize($events);
        return new JsonResponse($formatted);

    }




    public function findAction($id)
    {
        $ticket = $this->getDoctrine()->getManager()
            ->getRepository('TicketBundle:Ticket')
            ->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ticket);
        return new JsonResponse($formatted);
    }

    public function findAllAction()
 {
     $tab = $this->getDoctrine()->getManager()->getRepository(Ticket::class)->findAll();
     $encoders = array(new XmlEncoder(), new JsonEncoder());

     $normalizer = new ObjectNormalizer();
     $normalizer->setCircularReferenceLimit(2);
// Add Circular reference handler
     $normalizer->setCircularReferenceHandler(function ($object) {
         return $object;
     });
     $normalizers = array($normalizer);
     $serializer = new Serializer($normalizers, $encoders);
//    $serializer=new Serializer([new ObjectNormalizer()]);
     $formatted=$serializer->normalize($tab);
     return new JsonResponse($formatted);
 }

    public function newMobileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = new Ticket();
        $ticket->setReporter($request->get('reporter'));
        $ticket->setReporterMail($request->get('reporterMail'));
        $ticket->setReclamationAbout($request->get('reclamationAbout'));
        $ticket->setPriority($request->get('priority'));
        $ticket->setReporterType($request->get('reporterType'));
        $ticket->setDescription($request->get('description'));

        $em->persist($ticket);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ticket);
        return new JsonResponse($formatted);
    }
    public function SendMailAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository(User::class)->find(1);
        $form = $this->createFormBuilder()
            ->add('message', TextareaType::class)
            ->add('send', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        $message = $form["message"]->getData();
        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->isMethod('POST'))
                $email = $this->getUser()->getEmail();
            $message = $form["message"]->getData();
            $message = \Swift_Message::newInstance()
                ->setSubject('Your commande is valide')
                ->setFrom('hadhriraya@gmail.com')
                ->setTo($email)
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($message);
            $this->get('mailer')->send($message);
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($form);
            return new JsonResponse($formatted);
        }
    }

    public function deleteMobileAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository(Ticket::class)->find($id);
        $em->remove($ticket);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ticket);
        return new JsonResponse($formatted);

    }

    public function updateMobileAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $ticket=$em->getRepository(Ticket::class)->find($id);
        $form = $this->createForm(TicketType::class, $ticket);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();}
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ticket);
        return new JsonResponse($formatted);
    }

}
