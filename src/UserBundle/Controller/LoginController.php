<?php

namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');
        $errors = $authenticationUtils->getLastAuthenticationError();

        $lastUserName = ($authenticationUtils) ? $authenticationUtils->getLastUsername() : null;
        return $this->render('UserBundle:Login:login.html.twig', array(

            'username' => $lastUserName,
            'errors' => $errors
        ));
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(){}

}
