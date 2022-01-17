<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Asset\PathPackage;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/singlepage", name="index")
     */
    public function singlepage(Request $req)
    {

        //dd($req);

        $pathPackage = new PathPackage('asset/', new StaticVersionStrategy('v1.12'));
        //$pathPackage = new PathPackage('asset/', new EmptyVersionStrategy());
        
        return $this->render("main.html.twig", [
            'jqueryJs' => $pathPackage->getUrl('jquery-3.4.1.slim.min.js'),
            'bootstrapCss' => $pathPackage->getUrl('bootstrap.min.css'),
            'bootstrapbundleJs' => $pathPackage->getUrl('bootstrap.bundle.min.js'),
            'bootstrapJs' => $pathPackage->getUrl('bootstrap.min.js'),
            'popperJs' => $pathPackage->getUrl('popper.min.js'),
            'vueJs' => $pathPackage->getUrl('vue@next'),
            'bootstrapIcons' => $pathPackage->getUrl('bootstrap-icons.css'),
            'customCss' => $pathPackage->getUrl('custom.css'),
            'server' => $req->server->get('HTTP_HOST'),
            'protocol' => $req->server->get('SYMFONY_APPLICATION_DEFAULT_ROUTE_SCHEME') . '://'
        ]);
    }
}

