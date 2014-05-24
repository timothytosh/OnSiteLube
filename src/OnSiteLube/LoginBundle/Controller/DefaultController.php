<?php

namespace OnSiteLube\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package OnSiteLube\LoginBundle\Controller
 */
class DefaultController extends Controller {

  /**
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function indexAction() {
    return $this->render('OnSiteLubeLoginBundle:Default:index.html.twig');
  }
}
