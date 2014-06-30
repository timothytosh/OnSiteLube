<?php

namespace OnSiteLube\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OnSiteLube\AdminBundle\Entity\CustomerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class DefaultController
 * @package OnSiteLube\AdminBundle\Controller
 */
class CustomerController extends Controller {
  /**
   * @param Request $request
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function detailAction(Request $request) {
    $session = $request->getSession();
    if(!$session->get('UserAccount')) { //if login in session is not set
      return $this->render('OnSiteLubeLoginBundle:Default:index.html.twig');
    }
    return $this->render('OnSiteLubeAdminBundle:Default:customerdashboard.html.twig');
  }

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function retrieveAction(Request $request) {
    $customerId = $request->query->get('customerId');
    $customer = CustomerRepository::findRepository($this)->findCustomerById($customerId);
    $response = new Response(json_encode($customer));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }

  /**
   * @param Request $request
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function adminAction(Request $request) {
    $session = $request->getSession();
    if(!$session->get('UserAccount')) { //if login in session is not set
      return $this->render('OnSiteLubeLoginBundle:Default:index.html.twig');
    }
    return $this->render('OnSiteLubeAdminBundle:Default:customer.html.twig');
  }

  /**
   * @return Response
   */
  public function autoCompleteAction() {
    $customers = CustomerRepository::findRepository($this)->findAllForAutoComplete();
    $response = new Response(json_encode($customers));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }
}