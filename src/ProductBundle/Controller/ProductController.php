<?php

namespace ProductBundle\Controller;

use AppBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use ProductBundle\Entity\Product;

use ProductBundle\Form\ProductType;
use ProductBundle\ProductBundle;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ProductController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Product/Product/index.html.twig', array(
            // ...
        ));
    }
    public function showProductAction()
    {

        $rep = $this->getDoctrine()->getManager()->getRepository(Product::class)->findAll();


        return $this->render('@Product/Product/show_product.html.twig', array(
            'listProduct' => $rep,

        ));
    }
    public function searchProductAction( Request $request)
    {
        $product = new Product();
        $form = $this -> createForm() ;
    }
    public function adminManagerAction()
    {

        $rep=$this->getDoctrine()->getManager()->getRepository(Product::class)->findAll();


        return $this->render('@Product/Product/admin_page.html.twig', array(
            'listProduct'=>$rep,

        ));
    }
    public function showdetailedProductadminAction($productid)
    {

        $rep = $this->getDoctrine()->getManager()->getRepository(Product::class)->find($productid);


        return $this->render('@Product/Product/show_detailedproductadmin.html.twig', array( 'Product' => $rep ));
    }

    public function myProductAction()
    {
        $id=$this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $rep=$this->getDoctrine()->getManager()->getRepository(Product::class)->findProductByUser($id);


        return $this->render('@Product/Product/my_Product.html.twig', array(
            'listProduct'=>$rep,

        ));
    }
    public function productByOwnerAction()
    {

        $id=1;//id de current user
        // $product=$this->getDoctrine()->getManager()->getRepository(Product::class)->findProductByOwner($id);//list of event by user

        return $this->render('@Product/Product/show_my_product.html.twig', array(
            //      'product'=>$ev,

        ));
    }

    public function showdetailedProductAction($productid)
    {

        $rep = $this->getDoctrine()->getManager()->getRepository(Product::class)->find($productid);


        return $this->render('@Product/Product/show_detailedproduct.html.twig', array( 'Product' => $rep ));
    }

    public function showdetailedProductpdfAction($productid)
    {

        $rep = $this->getDoctrine()->getManager()->getRepository(Product::class)->find($productid);


        return $this->render('@Product/Product/show_detailedproductpdf.html.twig', array( 'Product' => $rep ));
    }

    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $product->setProductphoto(file_get_contents($product->getProductphoto()->getPathname()));
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('show_product');}
        return $this->render('@Product/Product/new.html.twig', array(
            'quote' => 'Add your Deal"s details',
            'form' => $form->createView()
        ));
    }

    public function updateAction($productid,Request $request)
    {
        $image1 = null;
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($productid);
        $image = $product->displayPhoto();
        $image1 = $product->getProductphoto();
        $product->setProductphoto(null);

        $form = $this->createForm(ProductType::class, $product);
        $form = $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($product->getProductphoto() == null) {
                $product->setProdcustphoto($image1);
                $em->persist($product);
                $em->flush();
                return $this->redirectToRoute('show_product');
            }
            //$em = $this->getDoctrine()->getManager();
            $product->setProductphoto(file_get_contents($product->getProductphoto()->getPathname()));
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('show_product');
        }


        return $this->render('@Product/Product/update.html.twig',
            array('form' => $form->createView(),'img'=>$image));
    }
    public function deleteAction($productid)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($productid);
        $em->remove($product);
        $em->flush();

        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('admin_space');
        }
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')){
            return $this->redirectToRoute('my_product');
        }
        return$this->redirectToRoute("show_product");

    }
    public function deleteAdminAction($productid)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($productid);
        $em->remove($product);
        $em->flush();

        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('admin_space');
        }
        if($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')){
            return $this->redirectToRoute('my_product');
        }
        return$this->redirectToRoute("show_product");

    }
/****************************************Search*********************************************************/
/*
    public function searchEventAction(Request $request)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizer, $encoders);

        $em = $this->getDoctrine()->getManager();

        if($request->isXmlHttpRequest()) {
            // To retrieve $_GET parameters do this $request->query->get('parameter');

            $search = $request->request->get('search');

            echo('aaaaaaaaaaaa');
            echo($search);
            //  $beneficiaire = $request->request->get('beneficiaire');

            $parcelles = $em->getRepository(Event::class)->findByeventCountry($search);

            $jsonContent = $serializer->serialize($parcelles, 'json');

            //  return new Response($jsonContent);

            return $this->render('@MahmoudEvent/HomeEvent/dd_event.html.twig', array(
                'i'=>$jsonContent

            ));
        }

        $rep=$this->getDoctrine()->getManager()->getRepository(Event::class)->findByeventTitle($request->get('searchname'));
        return $this->render('@MahmoudEvent/HomeEvent/show_event.html.twig', array(
            'listEvent'=>$rep

        ));


    }


    public function searchDBAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');

        $entities =  $em->getRepository(Event::class)->findEntitiesByString($requestString);

        if(!$entities) {
            $result['entities']['error'] = "No results matche with your search ";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));

    }*/
    /**************************************************Mobile CRUD ************************************/

    public function mobileProductAddAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $product = new Product ();
        $idu=$request->get('id');
        //$product->setProductcatid($request->get('productcatid'));
        $product->setProductname(($request->get('productname')));
        $product->setProductdescription($request->get('productdescription'));
        $product->setStock($request->get('stock'));
        $product->setPrice($request->get('price'));
        $eve=$request->get('productphoto');
        $user=$this->getDoctrine()->getManager()->getRepository(User::class)->find($idu);
        $product->setId($user);


        $eee=file_get_contents($eve);
        $product->setProductphoto($eee);

        $em->persist($product);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize(["productid"=>$product->getProductid()]);
        return new JsonResponse($formatted);
    }
    public function mobileProductModifyAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $product = new Product();
        $productid=$request->get('productid');
        $product = $this->getDoctrine()->getManager()->getRepository(Product::class)->find($productid);
        $product->setProductname(($request->get('productname')));
        $product->setProductdescription($request->get('productdescription'));
        $product->setStock($request->get('stock'));
        $product->setPrice($request->get('price'));
        $eve=$request->get('productphoto');

        if($eve!="00"){
            $eee=file_get_contents($eve);
            $product->setProductphoto($eee);
        }


        $em->persist($product);
        $em->flush();
        $re=$request->get('id');
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($re);
        return new JsonResponse($formatted);
    }
    public function mobileProductDeleteAction($productid)
    {
        $p = new Product();
        $product=$this->getDoctrine()->getRepository('ProductBundle:Product')->find($productid);
        //$category=$this->getDoctrine()->getRepository('ProductBundle:Productcategory')->findByProductid($productid);
        $em = $this->getDoctrine()->getManager();
        /*if($category!=NULL){  $em->remove($category);
                                $em->flush();
                                                        }*/

        $em->remove($product);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize("ok");
        return new JsonResponse($formatted);
    }
    public function mobilegetAllProductAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $res =$em->getRepository(Product::class)->findAll();
        foreach ( $res  as $e ){
            $e->setProductphoto($e->displayPhoto());
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($res);
        return new JsonResponse($formatted);
    }

    /************************************Mobile*******Detailed/byuser/lastadded*************************************************/
    public function mobilegetOneProductAction($productid)
    {




        $product = $this->getDoctrine()->getManager()
            ->getRepository('ProductBundle:Product')
            ->find($productid);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($product);
        return new JsonResponse($formatted);
    }
    public function mobilegetProductByUserAction(Request $request,$productid)
    {

        $em = $this->getDoctrine()->getManager();

        $res =$em->getRepository(Product::class)->findEventByUser($productid);

        foreach ( $res  as $e ){
          ;
            $e->setEventPicture($e->displayPhoto());
           ;
        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($res);
        return new JsonResponse($formatted);
    }


    /* public function mobileEventlastAddedAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $res =$em->getRepository(Event::class)->topFive();
        foreach ( $res  as $e ){
            $e->setEventPicture($e->displayPhoto());
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($res);
        return new JsonResponse($formatted);
    }*/

    /**********************************Mobile Search ************************************************/
/*
    public function searchProductMAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('search');

        $entities =  $em->getRepository(Product::class)->findEntitiesByString($requestString);
        $result=array();
        $i=0;

        if(!$entities or $entities==null) {
            $res=["message"=>"false","id"=>0,"title"=>0,"adresse"=>0,"img"=>0];
            $result[0]=$res;
            return new Response(json_encode($result));
        } elseif($entities[0]->getEventTitle()!=null){
            foreach ($entities as $entity){
                try{
                    $res=["message"=>"true","id"=>$entity->getId(),"title"=>$entity->getEventTitle(),"adresse"=>$entity->getEventAdress(),"img"=>$entity->displayPhoto()];
                    $result[$i]=$res;
                    $i=$i+1;
                }catch (\mysqli_sql_exception $e){
                    $res=["message"=>"false","id"=>0,"title"=>0,"adresse"=>0,"img"=>0];
                    $result[0]=$res;
                    return new Response(json_encode($result));
                }
            }
            return new Response(json_encode($result));
        }



    }*/
}
