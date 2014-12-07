<?php

namespace Dictionary\DictionaryBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        /*if ($request->getMethod() == "POST") {
//            $username = $re
        }*/
        return $this->render('DictionaryDictionaryBundle:Default:index.html.twig', array('name' => $name));
    }
}
