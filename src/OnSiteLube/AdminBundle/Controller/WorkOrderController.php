<?php

namespace OnSiteLube\AdminBundle\Controller;

use OnSiteLube\AdminBundle\Entity\JobServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OnSiteLube\AdminBundle\Entity\WorkOrderRepository;

/**
 * Class WorkOrderController
 * @package OnSiteLube\AdminBundle\Controller
 */
class WorkOrderController extends Controller {


  /**
   * @param Request $request
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function indexAction(Request $request) {
    $workOrderId = $request->query->get('workOrderId');
    $workOrder = WorkOrderRepository::findRepository($this)->findWorkOrderByWorkOrderId($workOrderId);

    $userAccountId = $request->query->get('userAccountId');
    $jobServices = JobServiceRepository::findRepository($this)->findByWorkOrderId($workOrderId, $userAccountId);

    $session = $request->getSession();
    if(!$session->get('UserAccount')) { //if login in session is not set
      return $this->render('OnSiteLubeLoginBundle:Default:index.html.twig');
    }
    return $this->render('OnSiteLubeAdminBundle:Default:workorder.html.twig', array('workOrder' => $workOrder[0], 'jobServices' => $jobServices));
  }


  /**
   * @param Request $request
   * @return Response
   */
  public function retrieveAction(Request $request) {

    $employeeId = $request->query->get('employeeId');

    $workOrders = WorkOrderRepository::findRepository($this)->findAllWorkOrderByEmployeeIdCurrentDay($employeeId);
    $response = new Response(json_encode($workOrders));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }
} 