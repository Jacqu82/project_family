<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Child;
use AppBundle\Entity\Family;
use AppBundle\Form\FamilyType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class FamilyController extends BaseController
{
    /**
     * @Route("/families", name="api_families_create")
     * @Method("POST")
     */
    public function newAction(Request $request)
    {
        $family = new Family();
        $form = $this->createForm(FamilyType::class, $family);
        $this->processForm($request, $form);

        $em = $this->getDoctrine()->getManager();
        $em->persist($family);
        $em->flush();

        return $this->createApiResponse($family, 201);
    }

    /**
     * @Route("/families/{id}")
     * @Method("PUT")
     */
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Family $family */
        $family = $em->getRepository(Family::class)->find($id);
        $this->throwNotFoundException($family);

        $form = $this->createForm(FamilyType::class, $family);
        $this->processForm($request, $form);

        $em->flush();

        return $this->createApiResponse($family);
    }

    /**
     * @Route("/families", name="api_families_list")
     * @Method("GET")
     */
    public function listAction()
    {
        /** @var Family[] $families */
        $families = $this->getDoctrine()->getRepository(Family::class)->findAll();

        return $this->createApiResponse($families);
    }

    /**
     * @Route("/families/{id}")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Family $family */
        $family = $em->getRepository(Family::class)->find($id);

        $this->throwNotFoundException($family);

        $em->remove($family);
        $em->flush();

        return new Response(null, 204);
    }

    /**
     * @Route("/families/{id}", name="api_families_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        /** @var Family $family */
        $family = $this->getDoctrine()->getRepository(Family::class)->find($id);
        $this->throwNotFoundException($family);

        return $this->createApiResponse($family);
    }

    /**
     * @Route("/families/{id}/children", name="api_families_children_list")
     * @Method("GET")
     */
    public function childrenListAction(Family $family)
    {
        $children = $this->getDoctrine()->getRepository(Child::class)->findBy(['family' => $family]);

        return $this->createApiResponse($children);
    }

    /**
     * @param Family $family
     */
    private function throwNotFoundException($family)
    {
        if (!$family) {
            throw new NotFoundHttpException('Family not found!');
        }
    }
}
