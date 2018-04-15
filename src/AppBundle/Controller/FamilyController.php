<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Child;
use AppBundle\Entity\Family;
use AppBundle\Form\FamilyType;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/family")
 *
 * Class FamilyController
 * @package AppBundle\Controller
 */
class FamilyController extends Controller
{

    private $paginator;

    public function __construct(PaginatorInterface $paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * @Route("/new", name="family_new")
     *
     * @param Request $request
     * @return Response
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm(FamilyType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
//            dump($form->getData()); die;
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();
            }
        }

        return $this->render('family/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/show/{slug}", name="family_show")
     *
     * @param Family $family
     * @return Response
     */
    public function showAction(Family $family)
    {
        $em = $this->getDoctrine()->getManager();
        $family = $em->getRepository(Family::class)->find($family->getId());

        return $this->render('family/show.html.twig', [
            'family' => $family
        ]);
    }

    /**
     * @Route("/list/{page}", name="family_list", defaults={"page": 1})
     *
     * @return Response
     */
    public function listAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $families = $em->getRepository(Family::class)->findAll();

        return $this->render('family/list.html.twig', [
            'pagination' => $this->paginator->paginate($families, $page, 8)
        ]);
    }

    /**
     * @Route("/edit/{slug}", name="family_edit")
     *
     * @param Request $request
     * @param Family $family
     * @return Response
     */
    public function editAction(Request $request, Family $family)
    {
        $form = $this->createForm(FamilyType::class, $family);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();

                return $this->redirectToRoute('family_show', ['slug' => $family->getSlug()]);
            }
        }

        return $this->render('family/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/stats", name="family_stats")
     *
     * @return Response
     */
    public function statsPageAction()
    {
        $family = new Family();
        $em = $this->getDoctrine()->getManager();
        $familyId = $em->getRepository(Family::class)->findOneBy(['id' => $family->getId()]);

        $ageAvg = $em->getRepository(Family::class)->findAverageParentsAge();
        $childrenAvg = $em->getRepository(Child::class)->findAvgChildInFamily($familyId);
        $biggestFamily = $em->getRepository(Child::class)->findBiggestFamily();
        $mostOccurrencesChildNames = $em->getRepository(Child::class)->findMostOccurrencesChildName();

        return $this->render('family/stats.html.twig', [
            'ageAvg' => $ageAvg,
            'childrenAvg' => $childrenAvg,
            'biggestFamilies' => $biggestFamily,
            'mostOccurrencesChildNames' => $mostOccurrencesChildNames
        ]);
    }
}
