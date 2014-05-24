<?php

namespace OnSiteLube\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OnSiteLube\AdminBundle\Entity\JobServiceRepository;

/**
 * Class JobServiceController
 * @package OnSiteLube\AdminBundle\Controller
 */
class JobServiceController extends Controller {

  /**
   * @param Request $request
   * @return Response
  */
  public function retrieveAction(Request $request) {

    $employeeId = $request->query->get('employeeId');

    $jobServices = JobServiceRepository::findRepository($this)->findByEmployeeId($employeeId);
    $response = new Response(json_encode($jobServices));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }

  /**
   * @param Request $request
   * @return Response
   */
  public function retrieveJobServicesByWorkOrderAndUserAccountIdAction(Request $request) {

    $workOrderId = $request->query->get('workOrderId');
    $userAccountId = $request->query->get('userAccountId');
    $jobServices = JobServiceRepository::findRepository($this)->findByWorkOrderId($workOrderId, $userAccountId);
    $response = new Response(json_encode($jobServices));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }

  /**
   * @return Response
   */
  public function updateBillableTimeAction() {

    $input = file_get_contents('php://input');
    $jobService = json_decode($input);
    $billableResult = JobServiceRepository::findRepository($this)->updateBillableTimeForJobService($jobService[0]);
    $response = new Response(json_encode($billableResult));
    $response->headers->set('Content-Type', 'application/json');
    return $response;

  }
}