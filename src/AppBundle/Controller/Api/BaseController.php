<?php

namespace AppBundle\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseController extends Controller
{
    protected function serialize($data)
    {
        return $this->container->get('jms_serializer')->serialize($data, 'json');
    }

    protected function processForm(Request $request, FormInterface $form): void
    {
        $data = json_decode($request->getContent(), true);

        $clearMissing = $request->getMethod() != 'PATCH';
        $form->submit($data, $clearMissing);
    }

    protected function createApiResponse($data, $statusCode = 200)
    {
        $json = $this->serialize($data);
        $response = new Response($json, $statusCode, [
            'Content-Type' => 'application/hal+json'
        ]);

        return $response;
    }
}
