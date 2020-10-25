<?php

namespace PublicationBundle\Controller;

use PublicationBundle\Entity\Publication;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Mobile22Controller extends Controller
{
    public function affichePubMobileAction()
    {
        $tab = $this->getDoctrine()->getManager()->getRepository(Publication::class)->findAll();
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

    public function findmobileAction($id)
    {
        $tasks = $this->getDoctrine()->getManager()
            ->getRepository('PublicationBundle:Publication')
            ->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($tasks);
        return new JsonResponse($formatted);

    }

    public function newmobileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $task = new Publication();
        $task->setId($request->get('id'));
        $task->setPseudo($request->get('pseudo'));
        $task->setPublicationImage($request->get('publicationImage'));
        $task->setCoreText($request->get('coreText'));

        $em->persist($task);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($task);
        return new JsonResponse($formatted);

    }
    public function suppubAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository(Publication::class)->find($id);
        $em->remove($formation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($formation);
        return new JsonResponse($formatted);
    }
    public function modifpubAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $formation=$em->getRepository(Publication::class)->find($id);

        $formation->setCoreText($request->get('coreText'));
        $formation->setPublicationImage($request->get('publicationImage'));

        $em->persist($formation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($formation);
        return new JsonResponse($formatted);
    }

}
