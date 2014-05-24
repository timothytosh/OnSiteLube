<?php

  namespace OnSiteLube\ServiceBundle\Controller;

  use OnSiteLube\ServiceBundle\Utility;
  use OnSiteLube\AdminBundle\Entity\CustOrderRepository;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use Symfony\Component\HttpFoundation\Response;


  /**
   * Class ServiceController
   * @package OnSiteLube\ServiceBundle\Controller
   */
  class ServiceController extends Controller {

    /**
     * @return Response
     */
    public function indexAction() {
      $custOrders = CustOrderRepository::findRepository($this)->findAll();
      $response = new Response(json_encode($custOrders));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @return Response
     */
    public function createAction() {
      $request = Utility::cleanseKendoUIJSON(file_get_contents('php://input'));
      $custOrders = json_decode($request);
      $custOrder = CustOrderRepository::findRepository($this)->createNewCustOrder($custOrders[0]);
      return new Response(json_encode($custOrder));
    }

    /**
     * @return Response
     */
    public function updateAction() {
      $request = Utility::cleanseKendoUIJSON(file_get_contents('php://input'));
      $custOrders = json_decode($request);
      $custOrder = CustOrderRepository::findRepository($this)->updateCustOrder($custOrders[0]);
      return new Response(json_encode($custOrder));
    }

    /**
     * @return Response
     */
    public function destroyAction() {
      $request = Utility::cleanseKendoUIJSON(file_get_contents('php://input'));
      $custOrders = json_decode($request);
      $custOrder = CustOrderRepository::findRepository($this)->destroyCustomer($custOrders[0]);
      return new Response(json_encode($custOrder));
    }
  }
