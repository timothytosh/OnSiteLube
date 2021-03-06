<?php

  namespace OnSiteLube\AdminBundle\Controller;

  use OnSiteLube\ServiceBundle\Utility;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use OnSiteLube\AdminBundle\Entity\CustomerVehicleRepository;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;


  /**
   * Class DefaultController
   * @package OnSiteLube\AdminBundle\Controller
   */
  class CustomerVehicleController extends Controller
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

      return $this->render('OnSiteLubeAdminBundle:Default:customervehicles.html.twig');
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function retrieveAction(Request $request) {

      $companyVehicleId = $request->query->get('vehicleId');

      $vehicle = CompanyVehicleRepository::findRepository($this)->findById($companyVehicleId);
      $response = new Response(json_encode($vehicle));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    public function createAction(Request $request) {
      $input = file_get_contents('php://input');
      $companyVehicle = json_decode($input);
      $companyVehicle = CompanyVehicleRepository::findRepository($this)->addCompanyVehicle($companyVehicle[0]);
      $response = new Response(json_encode($companyVehicle));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    public function updateAction(Request $request) {
      $input = file_get_contents('php://input');
      $customerVehicle = json_decode(Utility::cleanseKendoUIJSON($input));
      $customerVehicle = CustomerVehicleRepository::findRepository($this)->updateCustomerVehicle($customerVehicle[0]);
      $response = new Response(json_encode($customerVehicle));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @return Response
     */
    public function autoCompleteAction() {
      $vehicles = CompanyVehicleRepository::findRepository($this)->findAllForAutoComplete();
      $response = new Response(json_encode($vehicles));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function findByLocationAction(Request $request) {

      $locId = $request->query->get('locationId');

      $companyVehicles = CompanyVehicleRepository::findRepository($this)->findAllByLocationId($locId);
      $response = new Response(json_encode($companyVehicles));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @return Response
     */
    public function findAllAction() {
      $locations = CustomerVehicleRepository::findRepository($this)->findAll();
      $response = new Response(json_encode($locations));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }
  }
