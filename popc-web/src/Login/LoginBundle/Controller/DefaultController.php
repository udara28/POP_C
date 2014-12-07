<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if($request->getMethod() == 'POST'){
            $username = $request->get('username');
            $password = $request->get('password');
        
            $em = $this->getDoctrine()->getEntityManager();
            $repositroy = $em->getRepository('LoginLoginBundle:User');
            $user = $repositroy->findOneBy(array('userName' => $username, 'userPword' => $password));
            if ($user) {
                return $this->render('LoginLoginBundle:Default:welcome.html.twig', array('name' => $user->getUserName()));
            }
            return $this->render('LoginLoginBundle:Default:login.html.twig');
        }else{
            return $this->render('LoginLoginBundle:Default:login.html.twig');
                                
        } 
    }
    
    public function signupAction(Request $request){
        if($request->getMethod() == 'POST'){
            $username = $request->get('username');
            $email = $request->get('email');
            $password = $request->get('password');
            
            $user = new User();
            $user->setUserName($username);
            $user->setUserEmail($email);
            $user->setUserPword($password);
            
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('LoginLoginBundle:Default:signup.html.twig');
    }
}
