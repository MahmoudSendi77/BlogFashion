<?php

namespace AskBundle\Controller;

use AppBundle\Entity\User;
use AskBundle\Entity\Ask;
use FollowBundle\Entity\Follower;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Mobile33Controller extends Controller
{
    public function afficheaskMobileAction()
    {
        $tab = $this->getDoctrine()->getManager()->getRepository(Ask::class)->findByaskedId(1996);
        $encoders = array(new XmlEncoder(), new JsonEncoder());

        $normalizer = new ObjectNormalizer();

        $normalizer->setCircularReferenceLimit(1);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object;
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);

        $formatted=$serializer->normalize($tab);
        return new JsonResponse($formatted);

    }



    public function findAction($id)
    {
        $tasks = $this->getDoctrine()->getManager()
            ->getRepository('AskBundle:Ask')
            ->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($tasks);
        return new JsonResponse($formatted);

    }
    public function allAction($id)
    {
        $tasks=$this->getDoctrine()->getRepository(Ask::class)->findById($id);
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($tasks);
        return new JsonResponse($formatted);
    }
    public function newfolowAction()
    {

        $follower = new Follower();
        $em = $this->getDoctrine()->getManager();


        $now = new \DateTime();
        $now->format('Y-m-d H:i:s');    // MySQL datetime format
        $now->getTimestamp();

        $monfichier5 = fopen('C:\wamp64\www\ChickClickWeb\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier5);
        fclose($monfichier5);
        $monfichier6 = fopen('C:\wamp64\www\ChickClickWeb\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $askedid = fgets($monfichier6);
        fclose($monfichier6);
        $follower->setDateAboonement($now);
        $follower->setFolowedId($askedid);
        $follower->setUserId($userid);


        $em->persist($follower);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($em);
        return new JsonResponse($formatted);
    }
   /* public function deletefolowmobileAction()
    {

        $em = $this->getDoctrine()->getManager()->getRepository('AskBundle:Ask')->supprimer1();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($em);
        return new JsonResponse($formatted);
    }
   */
   public function newMobileaskAction(Request $request)
    {$now = new \DateTime();
        $now->format('Y-m-d H:i:s');    // MySQL datetime format
        $now->getTimestamp();
        $em = $this->getDoctrine()->getManager();
        $ticket = new Ask();
        $ticket->setMessageDetails($request->get('messageDetails'));
        $ticket->setMessageDate($now);
        $ticket->setUserId($request->get('userid'));

        $ticket->setAskedId($request->get('visitedid'));
        $em->persist($ticket);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ticket);
        return new JsonResponse($formatted);
    }
    public function suppppAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository(Ask::class)->find($id);
        $em->remove($formation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($formation);
        return new JsonResponse($formatted);
    }
    public function supfolowAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $m=$em->getRepository('AskBundle:Ask')->supprimerfolowmobile($request->get('userid'),$request->get('visitedid'));

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($m);
        return new JsonResponse($formatted);
    }
    public function newfolowmobileAction(Request $request)
    {

        $follower = new Follower();
        $em = $this->getDoctrine()->getManager();


        $now = new \DateTime();
        $now->format('Y-m-d H:i:s');    // MySQL datetime format
        $now->getTimestamp();


        $follower->setDateAboonement($now);
        $follower->setFolowedId($request->get('visitedid'));
        $follower->setUserId($request->get('userid'));


        $em->persist($follower);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($em);
        return new JsonResponse($formatted);
    }
    public function verifierfolowMobileAction(Request $request)
    {  $em = $this->getDoctrine()->getManager();

        $m=$em->getRepository('AskBundle:Ask')->veriffolowmobile($request->get('userid'),
            $request->get('visitedid'));

        $encoders = array(new XmlEncoder(), new JsonEncoder());

        $normalizer = new ObjectNormalizer();

        $normalizer->setCircularReferenceLimit(1);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object;
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);

        $formatted=$serializer->normalize($m);
        return new JsonResponse($formatted);

    }




    }
