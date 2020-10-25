<?php

namespace AskBundle\Controller;

use AskBundle\Entity\Ask;
use AskBundle\Entity\Block;
use AskBundle\Entity\Notif;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Ask controller.
 *
 * @Route("AskBundle/homeask/")
 */
class AskController extends Controller
{
    /**
     * Lists all ask entities.
     *
     * @Route("/", name="AskBundle_homeask_index")
     * @Method("GET")
     */
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $current_user=$this->container->get('security.token_storage')->getToken()->getUser();
        $idu=$current_user->getId();
        $monfichier4 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        ftruncate($monfichier4,0);
        fputs($monfichier4, $idu);

        $userid = fgets($monfichier4);
        fclose($monfichier4);
        $monfichier1 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        ftruncate($monfichier1,0);
        fputs($monfichier1, $id);
        $ligne = fgets($monfichier1);



        fclose($monfichier1);

        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();


        $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);
        $nbr1 = $m = $em->getRepository('AskBundle:Ask')->countab1();

        return $this->render('@Ask/ask/index.html.twig', array(
            'asks' => $asks,
            'verif'=>$nbr,
            'verifblok'=>$nbr1,
        ));
    }


    public function searchAction()
    {
        $em = $this->getDoctrine()->getManager();

        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);
        $monfichier1 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $l = fgets($monfichier1);
        fclose($monfichier1);
        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();
        if(isset($_POST['envoi1'])){ // si formulaire soumis
            $search=$_POST['pseudo1'];





        $users = $em->getRepository('AppBundle:User')->findByusername($search);
        $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);
            $nbr1 = $em->getRepository('AskBundle:Ask')->countab1();



            return $this->render('@Ask/ask/index.html.twig', array(
            'asks' => $asks,
            'verif'=>$nbr,
            'verifblok'=>$nbr1,
            'users'=>$users,
        ));}
        $em = $this->getDoctrine()->getManager();

        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);
        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();
        $monfichier11 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $l = fgets($monfichier11);
        fclose($monfichier11);




            $nbr1 = $m = $em->getRepository('AskBundle:Ask')->countab1();
            $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);


            return $this->render('@Ask/ask/index.html.twig', array(
                'asks' => $asks,
                'verif'=>$nbr,
                'verifblok'=>$nbr1,

            ));
    }


    /**
     * Lists all ask entities.
     *
     * @Route("/index1", name="AskBundle_homeask_index1")
     * @Method("GET")
     */
    public function index1Action()
    {
        $em = $this->getDoctrine()->getManager();

        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);
        $nbr=$em->getRepository('AskBundle:Ask')->countab();


        $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);
        $monfichier11 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $l = fgets($monfichier11);
        fclose($monfichier11);


        $nbr1 = $em->getRepository('AskBundle:Ask')->countab1();
        $notifs = $em->getRepository('AskBundle:Notif')->findAll();


        return $this->render('@Ask/ask/boitemsg.html.twig', array(
            'notifs'=>$notifs,
            'asks' => $asks,
            'verif'=>$nbr,
            'verifblok'=>$nbr1,
        ));
    }




    /**
     * Creates a new ask entity.
     *
     * @Route("/new", name="AskBundle_homeask_new")
     * @Method({"GET", "POST"})
     */
    public function newAction()
    {
        if(isset($_POST['envoi'])){ // si formulaire soumis
        $msg3=$_POST['message'];
            $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\document.txt', 'r+');
            ftruncate($monfichier,0);
            fputs($monfichier, $msg3);
            $ligne = fgets($monfichier);



            fclose($monfichier);

        $ask = new Ask();

            $em = $this->getDoctrine()->getManager();

            $monfichier2 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
            $userid = fgets($monfichier2);
            fclose($monfichier2);
            $monfichier3 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
            $visitedid = fgets($monfichier3);
            fclose($monfichier3);
        $now = new \DateTime();
        $now->format('Y-m-d H:i:s');    // MySQL datetime format
         $now->getTimestamp();


        $ask->setAskedId($visitedid);
            $ask->setUserId($userid);
            $ask->setMessageDate($now);
            $ask->setMessageDetails($msg3);


            $em->persist($ask);
            $em->flush();
            $nm="0";
            return $this->render('@Ask/ask/show.html.twig', array(
                'ask'=>$ask,
                'nm'=>$nm,
                'msg'=>$msg3,
            ));}

            else
            {$nm="0";

        return $this->render('@Ask/ask/new.html.twig', array(

            'nm'=>$nm,


          /*  'ask' => $ask,
            'form' => $form->createView(),*/
        ));
    }}

    public function new7Action()
    {
       if(isset($_POST['modify'])) { // si formulaire soumis

           $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\document.txt', 'r+');
           $msgf = fgets($monfichier);



           $msg1 = $_POST['message'];
           $nm = "1";

           $em = $this->getDoctrine()->getManager();
           /*            $mee=$em->getRepository('AskBundle:Ask')->recherche("",$msg1);*/
           fclose($monfichier);


           return $this->render('@Ask/ask/new.html.twig', array(
               'nm' => $nm,
               'msg' => $msg1,
           ));
       }


        else{
            echo("malheureusement");
      $nm="0";

           return $this->render('@Ask/ask/new.html.twig', array(

                'nm'=>$nm,



            ));
        }}




    /**
     * Finds and displays a ask entity.
     *
     * @Route("/{id}", name="AskBundle_homeask_show")
     * @Method("GET")
     */
    public function showAction(Ask $ask)
    {
        $deleteForm = $this->createDeleteForm($ask);

        return $this->render('@Ask/ask/show.html.twig', array(
            'ask' => $ask,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function show2Action(Ask $ask)
    {
        $deleteForm = $this->createDeleteForm($ask);

        return $this->render('@Ask/ask/show1.html.twig', array(
            'ask' => $ask,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ask entity.
     *
     * @Route("/{id}/edit", name="AskBundle_homeask_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ask $ask)
    { $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\document.txt', 'r+');
        $ligne = fgets($monfichier);
        fclose($monfichier);
        $monfichier1 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier1);
        fclose($monfichier1);
        $monfichier12 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $asked = fgets($monfichier12);
        fclose($monfichier12);

        if(isset($_POST['envoi'])) { // si formulaire soumis
            $msg3 = $_POST['message'];
            $em = $this->getDoctrine()->getManager();
            $nbr = $m = $em->getRepository('AskBundle:Ask')->recherche($ligne, $msg3);
            $monfichier11 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
            $l = fgets($monfichier11);
            fclose($monfichier11);




            $m=$em->getRepository('AskBundle:Ask')->countab();
            $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);
            $ask1 = $em->getRepository('AskBundle:Ask')->findOneBymessageDetails($msg3);
            $nbr1 = $em->getRepository('AskBundle:Ask')->countab1();


            $em1 = $this->getDoctrine()->getManager();



            $notif= new Notif();

            $notif->setUserid($userid);
            $notif->setAskedid($asked);
            $notif->setMessageDetails($ligne);
            $notif->setNewmessageDetails($msg3);
            $em1->persist($notif);
            $em1->flush();
            $notifs = $em1->getRepository('AskBundle:Notif')->findAll();





            return $this->render('@Ask/ask/boitemsg.html.twig', array(

                'notifs'=>$notifs,
                'notif'=>$msg3,
                'ask' => $ask1,
                'verif'=>$m,
                'asks'=>$asks,
                'verifblok'=>$nbr1,
                /*'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),*/
            ));
        }

        return $this->render('@Ask/ask/edit.html.twig', array(
            'ask' => $ask,
            /*'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),*/
        ));
    }

    /**
     * Deletes a ask entity.
     *
     * @Route("/delete", name="AskBundle_homeask_delete")
     * @Method("DELETE")
     */
    public function deleteAction()
    {
        $em = $this->getDoctrine()->getManager();

        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);
        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();
        /*if(isset($_POST['envoi1'])){ // si formulaire soumis
            $search=$_POST['pseudo1'];*/
        $monfichier11 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $l = fgets($monfichier11);
        fclose($monfichier11);





            $users = $em->getRepository('AppBundle:User')->findByusername("farah");
            $nbr1 = $m = $em->getRepository('AskBundle:Ask')->countab1();
            $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);


            return $this->render('@Ask/ask/search.html.twig', array(
                'asks' => $asks,
                'verif'=>$nbr,
                'verifblok'=>$nbr1,
                'users'=>$users,
            ));
       /*     ));}
        $em = $this->getDoctrine()->getManager();

        $monfichier = fopen('C:\wamp64\www\ChickClickWeb\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);
        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();




        $nbr1 = $m = $em->getRepository('AskBundle:Ask')->countab1($userid);
        $asks = $em->getRepository('AskBundle:Ask')->findByaskedId(1996);


        return $this->render('@Ask/ask/index.html.twig', array(
            'asks' => $asks,
            'verif'=>$nbr,
            'verifblok'=>$nbr1,

        ));*/
    }
    public function deleteEventAction($id)
    {
        $e = new Ask();
        $rep=$this->getDoctrine()->getRepository('AskBundle:Ask')->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($rep);
        $em->flush();
        $nbr=$m=$em->getRepository('AskBundle:Ask')->countab();
        $asks = $em->getRepository('AskBundle:Ask')->findAll();
        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);
        $monfichier11 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $l = fgets($monfichier11);
        fclose($monfichier11);
        $nbr1 = $em->getRepository('AskBundle:Ask')->countab1();
        $notifs = $em->getRepository('AskBundle:Notif')->findAll();


        return $this->render('@Ask/ask/boitemsg.html.twig', array(
            'notifs'=>$notifs,
            'asks'=>$asks,
            'verifblok'=>$nbr1,

            'verif'=>$nbr,
        ));
    }
    public function faireaskAction($msg1)
    {
        return $this->render('@Ask/ask/makeask.html.twig');

    }
    /**
     * Creates a new block entity.
     *
     * @Route("/newblock", name="AskBundle_homeask_block")
     * @Method({"GET", "POST"})
     */
    public function blockAction()
    {$em = $this->getDoctrine()->getManager();
        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);




        $block = new Block();




        $now = new \DateTime();
        $now->format('Y-m-d H:i:s');    // MySQL datetime format
        $now->getTimestamp();

        $block->setUserId($userid);
        $block->setDateblok($now);



        $em->persist($block);
        $em->flush();
        $nbr = $em->getRepository('AskBundle:Ask')->countab();
        $monfichier11 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $l = fgets($monfichier11);
        fclose($monfichier11);


        $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);
        $nbr1 = $em->getRepository('AskBundle:Ask')->countab1();
        $notifs = $em->getRepository('AskBundle:Notif')->findAll();


        return $this->render('@Ask/ask/boitemsg.html.twig', array(
            'notifs'=>$notifs,
            'asks' => $asks,
            'verif' => $nbr,
            'verifblok' => $nbr1,
        ));




    }

    /**
     * Creates a new block entity.
     *
     * @Route("/newdeblock", name="AskBundle_homeask_deblock")
     * @Method({"GET", "POST"})
     */
    public function deblockAction()
    {$em = $this->getDoctrine()->getManager();
        $monfichier = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier);
        fclose($monfichier);





        $nbr = $em->getRepository('AskBundle:Ask')->countab();
        $monfichier111 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\visitedid.txt', 'r+');
        $l = fgets($monfichier111);
        fclose($monfichier111);


        $asks = $em->getRepository('AskBundle:Ask')->findByaskedId($userid);
        $ra = $em->getRepository('AskBundle:Ask')->supprimer3($userid);
        $nbr1 = $em->getRepository('AskBundle:Ask')->countab1();
        $notifs = $em->getRepository('AskBundle:Notif')->findAll();




        return $this->render('@Ask/ask/boitemsg.html.twig', array(
            'notifs'=>$notifs,
            'asks' => $asks,
            'verif' => $nbr,
            'verifblok' => $nbr1,
        ));




    }


    public function searrchAction()
    {
        $em1 = $this->getDoctrine()->getManager();
        $users = $em1->getRepository('AppBundle:User')->findAll();
        $monfichier2 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier2);
        fclose($monfichier2);

        return $this->render('@Ask/ask/search.html.twig', array(
            'userasl'=>$userid,

            'users'=>$users,
        ));
    }
    public function searrchyyAction()
    {
        $em1 = $this->getDoctrine()->getManager();
        $monfichier2 = fopen('C:\wamp64\www\Chick_Click\src\AskBundle\Resources\views\ask\userid.txt', 'r+');
        $userid = fgets($monfichier2);
        fclose($monfichier2);
        $notifs = $em1->getRepository('AskBundle:Notif')->findByaskedid($userid);

        return $this->render('@Ask/ask/notif.html.twig', array(

            'notifs'=>$notifs,
        ));
    }
















    /**
     * Creates a form to delete a ask entity.
     *
     * @param Ask $ask The ask entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ask $ask)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('AskBundle_homeask_delete', array('id' => $ask->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
