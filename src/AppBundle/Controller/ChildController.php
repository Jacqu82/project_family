<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Child;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/child")
 *
 * Class ChildController
 * @package AppBundle\Controller
 */
class ChildController extends Controller
{
    /**
     * @Route("/show/{id}", name="child_show")
     *
     * @param Child $child
     * @return Response
     */
    public function showAction(Child $child)
    {
        return $this->render('child/show.html.twig', [
            'child' => $child
        ]);
    }

    /**
     * @Route("/delete/{id}", name="child_remove")
     * @Method("DELETE")
     *
     * @param Child $child
     * @return Response
     */
    public function deleteAction(Child $child)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($child);
        $em->flush();

        return new Response(null, 204);
    }
}