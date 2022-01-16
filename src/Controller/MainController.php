<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\PathPackage;
//use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;

class MainController extends AbstractController
{
    /**
     * @Route("/singlepage", name="index")
     */
    public function singlepage()
    {
        $pathPackage = new PathPackage('asset/', new StaticVersionStrategy('v1.9'));
        //$pathPackage = new PathPackage('asset/', new EmptyVersionStrategy());
        
        return $this->render("main.html.twig", [
            'jqueryJs' => $pathPackage->getUrl('jquery-3.4.1.slim.min.js'),
            'bootstrapCss' => $pathPackage->getUrl('bootstrap.min.css'),
            'bootstrapbundleJs' => $pathPackage->getUrl('bootstrap.bundle.min.js'),
            'bootstrapJs' => $pathPackage->getUrl('bootstrap.min.js'),
            'popperJs' => $pathPackage->getUrl('popper.min.js'),
            'vueJs' => $pathPackage->getUrl('vue@next'),
            'bootstrapIcons' => $pathPackage->getUrl('bootstrap-icons.css'),
            //'vueJs' => $pathPackage->getUrl('vue.min.js'),
            'customCss' => $pathPackage->getUrl('custom.css')
        ]);
    }
}

/*
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../src/vue@next" type="text/javascript" charset="utf-8"></script>
*/

/* @Route("/{name?world}", name="index") */
/*
    public function singlepage($name)
    {
        //return new Response("Singlepage.");
        $pathPackage = new PathPackage('/asset/', new EmptyVersionStrategy());
        
        return $this->render("main.html.twig", [
            'bootstrapCss' => $pathPackage->getUrl('/bootstrap.min.css')
        ]);
    }
*/