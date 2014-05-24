<?php
/**
 * User: timothytosh
 * Date: 3/9/14
 * Time: 3:10 PM
 */

namespace OnSiteLube\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OnSiteLube\AdminBundle\Entity\CompanyVehicleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class CompanyController
 * @package OnSiteLube\AdminBundle\Controller
 */
class CompanyController extends Controller {


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

    return $this->render('OnSiteLubeAdminBundle:Default:company.html.twig');
  }

} 