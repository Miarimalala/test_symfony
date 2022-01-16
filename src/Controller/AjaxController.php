<?php
    namespace App\Controller;

use App\Entity\Dirigeant;
use App\Repository\DirigeantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class AjaxController extends AbstractController{
        
        /**
         * @Route("/ajoutDirigeant", name = "ajout_dirigeant", methods={"POST"})
         */
        public function ajoutDirigeant(DirigeantRepository $dirigeantRepository, SerializerInterface $serializer, LoggerInterface $logger, Request $request, EntityManagerInterface $em){
            
            //*
            $dirigeants = $dirigeantRepository->findAll();
            $json = $serializer->serialize($dirigeants,'json');
            
            $logger->error("==========================77==========================");
            $logger->error($json);
            //$logger->debug("DBG",$json);
            $logger->error("====================================================");
            //*/


            $jsonRecu = $request->getContent();

            $logger->error("=======================78=============================");
            $logger->error($jsonRecu);
            $logger->error("====================================================");
            //$jsonRecu2=" {'nomPrenom':'Rakoto','adresseMail':'rakotoyahoo.fr','sexe':'homme'} ";
            $dirigeant = $serializer->deserialize($jsonRecu, Dirigeant::class,'json');
            //$logger->info($dirigeant->getNomPrenom());

            $logger->error("=========================79===========================");
            $logger->error($dirigeant->getNomPrenom());
            $logger->error("====================================================");

            $em->persist($dirigeant);
            $em->flush();

            //$logger->error("tonga78 :  ");
            //die();
            

            die();
        }

        /**
         * @Route("/listeDirigeants", name = "liste_dirigeants", methods={"GET"})
         */
        public function listeDirigeants(DirigeantRepository $dirigeantRepository, SerializerInterface $serializer, LoggerInterface $logger, Request $request, EntityManagerInterface $em){
            
            //*
            $dirigeants = $dirigeantRepository->findAll();
            return $this->json($dirigeants,200,[]);
            //$json = $serializer->serialize($dirigeants,'json');

            
            //$logger->error("==========================77==========================");
            //$logger->error($json);
            //$logger->debug("DBG",$json);
            //$logger->error("====================================================");
            //*/


            //$jsonRecu = $request->getContent();

            //$logger->error("=======================78=============================");
            //$logger->error($jsonRecu);
            //$logger->error("====================================================");
            //$jsonRecu2=" {'nomPrenom':'Rakoto','adresseMail':'rakotoyahoo.fr','sexe':'homme'} ";
            //$dirigeant = $serializer->deserialize($jsonRecu, Dirigeant::class,'json');
            //$logger->info($dirigeant->getNomPrenom());

            //$logger->error("=========================79===========================");
            //$logger->error($dirigeant->getNomPrenom());
            //$logger->error("====================================================");

            //$em->persist($dirigeant);
            //$em->flush();

            //$logger->error("tonga78 :  ");
            //die();
            

            //die();
        }


    }