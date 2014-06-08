<?php

namespace OnSiteLube\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OnSiteLube\AdminBundle\Entity\ServiceScheduleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class CompanyController
 * @package OnSiteLube\AdminBundle\Controller
 */
class ServiceScheduleController extends Controller {

  public function addAction(Request $request) {
    $input = file_get_contents('php://input');
    $serviceSchedule = json_decode($input);
    $serviceSchedule = ServiceScheduleRepository::findRepository($this)->addServiceSchedule($serviceSchedule[0]);
    $response = new Response(json_encode($serviceSchedule));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }
} 