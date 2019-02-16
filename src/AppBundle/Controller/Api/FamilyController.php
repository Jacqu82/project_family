<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Family;
use AppBundle\Form\FamilyType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class FamilyController extends Controller
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

        return new JsonResponse($this->serialize($family), 201);
    }

    /**
     * @Route("/families", name="api_families_list")
     * @Method("GET")
     */
    public function listAction()
    {
        $families = $this->getDoctrine()->getRepository(Family::class)->findAll();

        $data = [];
        foreach ($families as $family) {
            $data['family'][] = $this->serialize($family);
        }

        return new JsonResponse($data, 200, []);
    }

    /**
     * @Route("/families/{id}", name="api_families_show")
     * @Method("GET")
     */
    public function showAction(Family $family)
    {
        if (!$family) {
            throw new NotFoundHttpException('Family not found!');
        }

        $data = $this->serialize($family);

        return new JsonResponse($data, 200);
    }

    /**
     * @param Family $data
     */
    private function serialize($data): array
    {
        return [
            'familyName' => $data->getFamilyName(),
            'motherName' => $data->getMotherName(),
            'motherDateOfBirth' => $data->getMotherDateOfBirth(),
            'fatherName' => $data->getFatherName(),
            'fatherDateOfBirth' => $data->getFatherDateOfBirth()
        ];
    }

    private function processForm(Request $request, FormInterface $form)
    {
        $data = json_decode($request->getContent(), true);
//        if ($data === null) {
//            $apiProblem = new ApiProblem(400, ApiProblem::TYPE_INVALID_REQUEST_BODY_FORMAT);
//
//            throw new ApiProblemException($apiProblem);
//        }

        $clearMissing = $request->getMethod() != 'PATCH';
        $form->submit($data, $clearMissing);
    }
}
