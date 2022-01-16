<?php
    namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AjaxController{
        
        /**
         * @Route("/ajoutDirigeant", name = "ajout_dirigeant")
         */
        public function ajoutDirigeant(Request $request, LoggerInterface $logger){
            
            //$jsonRecu = $request->getContent();
            $logger->error("tonga77 :  ");
            die();
        }

    }