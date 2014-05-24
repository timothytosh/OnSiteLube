<?php

namespace OnSiteLube\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Class DefaultController
 * @package OnSiteLube\AdminBundle\Controller
 */
class DefaultController extends Controller
{

  /**
   * @param Request $request
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function indexAction(Request $request) {

    $session = $request->getSession();

    if(!$session->get('UserAccount')) { //if login in session is not set
      return $this->render('OnSiteLubeLoginBundle:Default:index.html.twig');
    }
    return $this->render('OnSiteLubeAdminBundle:Default:index.html.twig');
  }

  /**
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function userAction()
  {
    return $this->render('OnSiteLubeAdminBundle:Default:user.html.twig');
  }
}
