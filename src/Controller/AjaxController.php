<?php
    namespace App\Controller;

use App\Entity\Dirigeant;
use App\Entity\Societe;
use App\Repository\DirigeantRepository;
use App\Repository\SocieteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class AjaxController extends AbstractController{
        
        /**
         * @Route("/ajoutSociete", name = "ajout_societe", methods={"POST"})
         */
        public function ajoutSociete(SerializerInterface $serializer, Request $request, EntityManagerInterface $em){
            
            $jsonRecu = $request->getContent();
            
            $societe = $serializer->deserialize($jsonRecu, Societe::class,'json');

            $em->persist($societe);

            $em->flush();
            
            return $this->json($societe,201,[]);
        }

        /**
         * @Route("/ajoutDirigeant", name = "ajout_dirigeant", methods={"POST"})
         */
        public function ajoutDirigeant(SerializerInterface $serializer, Request $request, EntityManagerInterface $em){
            
            $jsonRecu = $request->getContent();

            $dirigeant = $serializer->deserialize($jsonRecu, Dirigeant::class,'json');

            $em->persist($dirigeant);

            $em->flush();

            return $this->json($dirigeant,201,[]);

        }

        /**
         * @Route("/listeDirigeants", name = "liste_dirigeants", methods={"GET"})
         */
        public function listeDirigeants(DirigeantRepository $dirigeantRepository){
            
            $dirigeants = $dirigeantRepository->findAll();

            return $this->json($dirigeants,200,[]);
            
        }


        /**
         * @Route("/listeSocietes", name = "liste_societes", methods={"GET"})
         */
        public function listeSocietes(SocieteRepository $societeRepository){
            
            $societes = $societeRepository->findAll();

            return $this->json($societes,200,[]);
            
        }

    }