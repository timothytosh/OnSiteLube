<?php

namespace OnSiteLube\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OnSiteLube\AdminBundle\Entity\EmployeeScheduleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class EmployeeSchedulerController
 * @package OnSiteLube\AdminBundle\Controller
 */
class EmployeeSchedulerController extends Controller {

  /**
   * @param Request $request
   * @return Response
   */
  public function retrieveAction(Request $request) {

    $userAccountID = $request->query->get('userAccountId');

    // get the service item(s) for the employee based on the user account
    $calendarEvents = EmployeeScheduleRepository::findRepository($this)->findCalendarEventsForEmployeeCurrentDay($userAccountID);
    $response = new Response(json_encode($calendarEvents));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }

} 