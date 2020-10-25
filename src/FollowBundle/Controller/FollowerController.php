<?php

namespace FollowBundle\Controller;

use FollowBundle\Entity\Follower;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Follower controller.
 *
 * @Route("follower")
 */
class FollowerController extends Controller
{
    /**
     * Lists all follower entities.
     *
     * @Route("/", name="follower_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $followers = $em->getRepository('FollowBundle:Follower')->findAll();
        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();
        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);
        $nbr1 = $em->getRepository('AskBundle:Ask')->countab1($userid);

        return $this->render('follower/index.html.twig', array(
            'followers' => $followers,
            'verif'=>$nbr,
            'veridblok'=>$nbr1,
        ));
    }

    /**
     * Creates a new follower entity.
     *
     * @Route("/new", name="follower_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $follower = new Follower();
        $em = $this->getDoctrine()->getManager();


        $now = new \DateTime();
        $now->format('Y-m-d H:i:s');    // MySQL datetime format
        $now->getTimestamp();

        $monfichier5 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier5);
        fclose($monfichier5);
        $monfichier6 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $askedid = fgets($monfichier6);
        fclose($monfichier6);
        $follower->setDateAboonement($now);
        $follower->setFolowedId($askedid);
        $follower->setUserId($userid);


        $em->persist($follower);
        $em->flush();
        $em = $this->getDoctrine()->getManager();

        $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);
        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();

        $nbr1 = $em->getRepository('AskBundle:Ask')->countab1($userid);

        return $this->render('@Ask/ask/index.html.twig', array(
            'asks' => $asks,
            'dateabonment'=>$now,
            'verif'=>$nbr,
            'verifblok'=>$nbr1,

        ));

    }




    /**
     * Finds and displays a follower entity.
     *
     * @Route("/{id}", name="follower_show")
     * @Method("GET")
     */
    public function showAction(Follower $follower)
    {
        $deleteForm = $this->createDeleteForm($follower);

        return $this->render('follower/show_ask.html.twig', array(
            'follower' => $follower,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing follower entity.
     *
     * @Route("/{id}/edit", name="follower_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Follower $follower)
    {
        $deleteForm = $this->createDeleteForm($follower);
        $editForm = $this->createForm('FollowBundle\Form\FollowerType', $follower);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('follower_edit', array('id' => $follower->getId()));
        }

        return $this->render('follower/edit.html.twig', array(
            'follower' => $follower,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a follower entity.
     *
     * @Route("/{id}", name="follower_delete")
     * @Method("DELETE")
     */
    public function deleteAction()
    {

        $em = $this->getDoctrine()->getManager();

        $m=$em->getRepository('AskBundle:Ask')->supprimer1();



        $em1 = $this->getDoctrine()->getManager();

        $asks = $em->getRepository('AskBundle:Ask')->findByaskedId(1996);
        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();
        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);
        $nbr1 = $em->getRepository('AskBundle:Ask')->countab1($userid);

        return $this->render('@Ask/ask/index.html.twig', array(
            'asks' => $asks,
            'm'=>$m,
            'verif'=>$nbr,
            'verifblok'=>$nbr1,
        ));







    }

    /**
     * Creates a form to delete a follower entity.
     *
     * @param Follower $follower The follower entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Follower $follower)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('follower_delete', array('id' => $follower->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
