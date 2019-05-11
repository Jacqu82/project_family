<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Child;
use AppBundle\Entity\Family;
use AppBundle\Form\DownloadType;
use AppBundle\Form\FamilyType;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


/**
 * @Route("/family")
 *
 * Class FamilyController
 * @package AppBundle\Controller
 */
class FamilyController extends Controller
{

    private $paginator;
    private $pdf;

    public function __construct(PaginatorInterface $paginator, Pdf $pdf)
    {
        $this->paginator = $paginator;
        $this->pdf = $pdf;
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
                $em = $this->getDoctrine()->getManager();
                $em->persist($form->getData());
                $em->flush();

                return $this->redirectToRoute('family_show', ['slug' => $form->getData()->getSlug()]);
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
        return $this->render('family/show.html.twig', [
            'family' => $family
        ]);
    }

    /**
     * @Route("/list/{page}", name="family_list", defaults={"page": 1})
     *
     * @param $page
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

    private function printStats($isForm = false)
    {
        $family = new Family();
        $em = $this->getDoctrine()->getManager();
        $childRepository = $em->getRepository(Child::class);
        $familyRepository = $em->getRepository(Family::class);
        $familyId = $familyRepository->findOneBy(['id' => $family->getId()]);
        $form = $this->createForm(DownloadType::class);

        $arr = [
            'ageAvg' => $familyRepository->findAverageParentsAge(),
            'childrenAvg' => $childRepository->findAvgChildInFamily($familyId),
            'biggestFamilies' => $childRepository->findBiggestFamily(),
            'mostOccurrencesChildNames' => $childRepository->findMostOccurrencesChildName(),
            'oldestFathers' => $familyRepository->findOldestFathers(),
            'oldestMothers' => $familyRepository->findOldestMothers(),
            'youngestChildren' => $childRepository->findYoungestChildren(),
        ];

        if ($isForm) {
            $arr['form'] = $form->createView();
        }

        return $arr;
    }

    /**
     * @Route("/stats", name="family_stats")
     *
     * @param $request
     * @return Response
     */
    public function statsPageAction(Request $request)
    {
        $form = $this->createForm(DownloadType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $snappy = $this->pdf;
            $html = $this->renderView('family/stats.html.twig', $this->printStats(false));
            //$html = '<h1>Hello World</h1>';
            $filename = sprintf('family-stats-%s.pdf', date('Y-m-d'));

            return new Response(
                $snappy->getOutputFromHtml($html),
                200,
                [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => sprintf('attachment; filename="%s"', $filename)
                ]
            );
        }

        return $this->render('family/stats.html.twig', $this->printStats(true));
    }

    public function pdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $filename = 'myFirstSnappyPDF';

        // use absolute path !
        $pageUrl = $this->generateUrl('family_stats', array(), UrlGeneratorInterface::ABSOLUTE_URL);

        return new Response(
            $snappy->getOutput($pageUrl),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="'.$filename.'.pdf"'
            )
        );
    }
}
