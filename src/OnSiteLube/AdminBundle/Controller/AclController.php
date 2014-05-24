<?php

  namespace OnSiteLube\AdminBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use OnSiteLube\AdminBundle\Entity\AclRepository;
  use Symfony\Component\HttpFoundation\Response;

  /**
   * Class AclController
   * @package OnSiteLube\AdminBundle\Controller
   */
  class AclController extends Controller {


    /**
     *
     * @return Response
     */
    public function indexAction() {
      $acls = AclRepository::findRepository($this)->findAll();
      $response = new Response(json_encode($acls));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }


    /**
     * @param $request
     * @param $userAccountId
     *
     * @return Response
     */
    public function userACLAction($request, $userAccountId) {

      $acls = AclRepository::findRepository($this)->findByIdUserAcls($userAccountId);

      if(!$acls) {
        return new Response('No Acls found');
      } else {
        $session = $request->getSession();
        $session->set('UserAcls', $acls);
        $response = new Response(json_encode($acls));
        $response->headers->set('Content-Type', 'application/json');
      }

      return $response;
    }


  }