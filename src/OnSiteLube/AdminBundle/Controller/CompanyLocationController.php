<?php

  namespace OnSiteLube\AdminBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use OnSiteLube\AdminBundle\Entity\CompanyLocationRepository;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;


  /**
   * Class DefaultController
   * @package OnSiteLube\AdminBundle\Controller
   */
  class CompanyLocationController extends Controller
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

      return $this->render('OnSiteLubeAdminBundle:Default:location.html.twig');
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function retrieveAction(Request $request) {

      $companyLocation = $request->query->get('locationId');

      $location = CompanyLocationRepository::findRepository($this)->findById($companyLocation);
      $response = new Response(json_encode($location));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function addAction(Request $request) {
      $input = file_get_contents('php://input');
      $companyLocation = json_decode($input);
      $companyLocation = CompanyLocationRepository::findRepository($this)->addCompanyLocation($companyLocation[0]);
      $response = new Response(json_encode($companyLocation));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function updateAction(Request $request) {
      $input = file_get_contents('php://input');
      $companyLocation = json_decode($input);
      $companyLocation = CompanyLocationRepository::findRepository($this)->updateCompanyLocation($companyLocation[0]);
      $response = new Response(json_encode($companyLocation));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @return Response
     */
    public function findAllAction() {
      $locations = CompanyLocationRepository::findRepository($this)->findAll();
      $response = new Response(json_encode($locations));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @return Response
     */
    public function autoCompleteAction() {
      $locations = CompanyLocationRepository::findRepository($this)->findAllForAutoComplete();
      $response = new Response(json_encode($locations));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

  }
