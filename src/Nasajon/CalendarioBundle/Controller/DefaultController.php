<?php

namespace Nasajon\CalendarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NasajonCalendarioBundle:Default:index.html.twig');
    }
    public function helloAction(Request $request)
    {

	//var_dump($this->get('security.context'));
	var_dump($this->getUser());
	var_dump($this->get('security.context')->isGranted('IS_AUTHENTICATED_ANONYMOUSLY'));
        return $this->render('NasajonCalendarioBundle:Default:index.html.twig');
    }

}
