<?php
/**
 * User: timothytosh
 * Date: 3/13/14
 * Time: 12:58 AM
 */

namespace OnSiteLube\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MessageController
 * @package OnSiteLube\AdminBundle\Controller
 */
class MessageController extends Controller {

  /**
   * @param Request $request
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function indexAction(Request $request) {

  $session = $request->getSession();

  if(!$session->get('UserAccount')) { //if login in session is not set
    return $this->render('OnSiteLubeLoginBundle:Default:index.html.twig');
  }
  return $this->render('OnSiteLubeAdminBundle:Default:messages.html.twig');
  }

} 