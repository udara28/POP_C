<?php

namespace Dictionary\DictionaryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DictionaryDictionaryBundle:Default:index.html.twig', array('name' => $name));
    }
}
