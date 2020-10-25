<?php

namespace ProductBundle\Controller;

use ProductBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;


class PdfController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProductBundle:Pdf:index.html.twig', array(
            // ...
        ));
    }

    public function newPdfAction($productid )
    {
        $rep = $this->getDoctrine()->getManager()->getRepository(Product::class)->find($productid);

        $snappy = $this->get("knp_snappy.pdf");
        $html = $this->renderView('@Product/Product/show_detailedproductpdf.html.twig',array( 'Product' => $rep ));

        $filename = "Deal";

        return new PdfResponse(
            $snappy->getOutputFromHtml($html), 200  , array(
                'content-Type' => 'application/pdf',
                'content-Disposition' => 'inline; filename'.$filename.'.pdf'
            )

        );

    }
}
