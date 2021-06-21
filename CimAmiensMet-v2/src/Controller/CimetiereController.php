<?php

namespace App\Controller;

use App\Entity\Usagers;
use App\Form\UsagerRechercheType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Form;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CimetiereController extends AbstractController
{
    /**
     * @Route("/cimetiere", name="cimetiere")
     */
    public function index(): Response
    {
        return $this->render('cimetiere/index.html.twig', [
            'controller_name' => 'CimetiereController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/cimetiere/nouvel_usager", name="usager_create")
     */
    public function create_usager(Request $request, EntityManagerInterface $manager)
    {
        if($request->request->count() > 0)
        {
        $usager = new Usagers();
        $usager->setUsagerNomFamille($request->request->get('usager_nom_famille'))
                ->setUsagerNCarte($request->request->get('usager_n_carte'))
                ->setUsagerNomUsage($request->request->get('usager_nom_usage'))
                ->setUsagerPrenom1($request->request->get('usager_prenom_1'))
                ->setUsagerPrenom2($request->request->get('usager_prenom_2'))
                ->setUsagerDNaissance($request->request->get('usager_d_naissance'))
                ->setUsagerAdress1($request->request->get('usager_adress_1'))
                ->setUsagerAdress2($request->request->get('usager_adress_2'))
                ->setUsagerCp($request->request->get('usager_cp'))
                ->setUsagerVille($request->request->get('usager_ville'))
                ->setUsagerDateFinValid(new \DateTime())               //($request->request->get('usager_date_fin_valid'))
                ->setUsagerStatusValid($request->request->get('usager_status_valid'))
                ->setUsagerRole($request->request->get('usager_role'))
                ->setUsagerIdCimetiere($request->request->get('usager_id_cimetiere'))
                ->setUsagerDateCrea(new \DateTime());

        $manager->persist($usager);
        $manager->flush();

    }
        return $this->render('cimetiere/create_usager.html.twig');
    }

    /**
    * @Route("/cimetiere/usager-ok", name="valid_usager")
    */
    public function usager_cree()
    {
        return $this->render('cimetiere/validation_usager.html.twig');
    }

    /**
    * @Route("/cimetiere/usager-recherche", name="recherche_usager")
    */
    public function usager_chercher(Request $request)
    {
        $rechercheUsagerForm = $this->createForm(UsagerRechercheType::class);
        return $this->render('cimetiere/recherche-usager.html.twig',
            ['UsagerRechercheType' => $rechercheUsagerForm->createView()],
                            );
            
    }

}
