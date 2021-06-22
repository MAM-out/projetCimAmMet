<?php

namespace App\Controller;

use App\Entity\Usagers;
use App\Entity\UsagerRecherche;
use Symfony\Component\Form\Form;
use App\Form\UsagerRechercheType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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
    * @Route("/cimetiere/verif-table-usagers", name="verif_usager")
    */
    public function usager_lire()
    {
        // récupérer tous les usagers de la table usagers de la BD
        // et les mettre dans le tableau $usagers // ,['usagers'=> $usagers]

    $usagers= $this->getDoctrine()->getRepository(Usagers::class)->findAll();

    return $this->render('/cimetiere/lire_table_usagers.html.twig',
                        ['usagers'=> $usagers]);

    }


    /**
    * @Route("/cimetiere/usager-recherche", name="recherche_usager")
    */
    public function usager_chercher(Request $request)
    {
        $usagerRecherche = new UsagerRecherche();
        $form = $this->createForm(UsagerRechercheType::class, $usagerRecherche);
        $form->handleRequest($request);
        //tableau vide initial
        $usagers= [];

        if($form->isSubmitted() && $form->isValid()) 
        {
            // reccuperation du nom ou autre champ tapé dans le formulaire
            $usager_nom_famille = $usagerRecherche->getUsagerNomFamille();
            if ($usager_nom_famille!="")
            
            // si un bon nom , affichage de tous les usagers ayant ce nom
            $usagers= $this->getDoctrine()->getRepository(Usagers::class)->findBy(['usager_nom_famille' => $usager_nom_famille]);

            else
            // sinom affiche tout / a changer aprés
            $usagers= $this->getDoctrine()->getRepository(Usagers::class)->findAll();
        }   

            return $this->render('cimetiere/recherche-usager.html.twig',
            ['form' =>$form->createView(), 'usagers' => $usagers]);
      
     
            
    }

}
