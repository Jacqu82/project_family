<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Family;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

abstract class BaseController extends Controller
{
    /**
     * @param Family $data
     */
    protected function serialize($data): array
    {
        return [
            'familyName' => $data->getFamilyName(),
            'motherName' => $data->getMotherName(),
            'motherDateOfBirth' => $data->getMotherDateOfBirth(),
            'fatherName' => $data->getFatherName(),
            'fatherDateOfBirth' => $data->getFatherDateOfBirth()
        ];
    }

    protected function processForm(Request $request, FormInterface $form): void
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
