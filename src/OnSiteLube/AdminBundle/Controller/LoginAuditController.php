<?php

namespace OnSiteLube\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OnSiteLube\AdminBundle\Entity\LoginAuditRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class LoginAuditController
 * @package OnSiteLube\AdminBundle\Controller
 */
class LoginAuditController extends Controller {


  /**
   * @param Request $request
   *
   * @return Response
   */
  public function indexAction(Request $request) {
    $id = $request->query->get('userAccountId');
    $loginAudit = LoginAuditRepository::findRepository($this)->createAuditLogEntry($id);
    $response = new Response(json_encode($loginAudit));
    $response->headers->set('Content-Type', 'application/json');
    return $response;
  }
} 