<?php

namespace ProductBundle\Controller;

use ProductBundle\Entity\Productcategory;
use ProductBundle\Form\ProductcategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ProductcategoryController extends Controller
{
    public function showCategoryAction()
    {

        $rep = $this->getDoctrine()->getManager()->getRepository(Productcategory::class)->findAll();


        return $this->render('@Product/Productcategory/show_category.html.twig', array('listProductcategory' => $rep ));
    }
    public function newAction(Request $request)
    {
        $productcategory = new Productcategory();
        $form = $this->createForm(ProductcategoryType::class, $productcategory);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productcategory);
            $em->flush();
            return $this->redirectToRoute('show_category');}
        return $this->render('@Product/Productcategory/new.html.twig', array(

            'form' => $form->createView()
        ));
    }
    public function updatecategoryAction($productcatid,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $productcategory=$em->getRepository(Productcategory::class)->find($productcatid);
        $form = $this->createForm(ProductcategoryType::class, $productcategory);
        $form = $form->handleRequest($request);

        if ($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($productcategory);
            $em->flush();
            return $this->redirectToRoute('show_category');}


        return $this->render('@Product/Productcategory/update_category.html.twig',
            array('form' => $form->createView()));
    }
    public function deleteAction($productcatid)
    {
        $em = $this->getDoctrine()->getManager();
        $productcategory = $em->getRepository(Productcategory::class)->find($productcatid);
        $em->remove($productcategory);
        $em->flush();
        return $this->redirectToRoute("show_category");

    }
}
