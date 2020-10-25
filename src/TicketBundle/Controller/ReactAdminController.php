<?php

namespace TicketBundle\Controller;

use TicketBundle\Entity\ReactAdmin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reactadmin controller.
 *
 */
class ReactAdminController extends Controller
{
    /**
     * Lists all reactAdmin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reactAdmins = $em->getRepository('TicketBundle:ReactAdmin')->findAll();

        return $this->render('@Ticket/reactadmin/index.html.twig', array(
            'reactAdmins' => $reactAdmins,
        ));
    }

    /**
     * Creates a new reactAdmin entity.
     *
     */
    public function newAction(Request $request)
    {
        $reactAdmin = new Reactadmin();
        $form = $this->createForm('TicketBundle\Form\ReactAdminType', $reactAdmin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reactAdmin);
            $em->flush();

            return $this->redirectToRoute('reactadmin_show', array('id' => $reactAdmin->getId()));
        }

        return $this->render('@Ticket/reactadmin/new.html.twig', array(
            'reactAdmin' => $reactAdmin,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reactAdmin entity.
     *
     */
    public function showAction(ReactAdmin $reactAdmin)
    {
        $deleteForm = $this->createDeleteForm($reactAdmin);

        return $this->render('@Ticket/reactadmin/show.html.twig', array(
            'reactAdmin' => $reactAdmin,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reactAdmin entity.
     *
     */
    public function editAction(Request $request, ReactAdmin $reactAdmin)
    {
        $deleteForm = $this->createDeleteForm($reactAdmin);
        $editForm = $this->createForm('TicketBundle\Form\ReactAdminType', $reactAdmin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reactadmin_edit', array('id' => $reactAdmin->getId()));
        }

        return $this->render('@Ticket/reactadmin/edit.html.twig', array(
            'reactAdmin' => $reactAdmin,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reactAdmin entity.
     *
     */
    public function deleteAction(Request $request, ReactAdmin $reactAdmin)
    {
        $form = $this->createDeleteForm($reactAdmin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reactAdmin);
            $em->flush();
        }

        return $this->redirectToRoute('reactadmin_index');
    }

    /**
     * Creates a form to delete a reactAdmin entity.
     *
     * @param ReactAdmin $reactAdmin The reactAdmin entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ReactAdmin $reactAdmin)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reactadmin_delete', array('id' => $reactAdmin->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
