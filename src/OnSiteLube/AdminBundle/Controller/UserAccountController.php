<?php

  namespace OnSiteLube\AdminBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use OnSiteLube\AdminBundle\Entity\UserAccountRepository;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;

  /**
   * Class UserAccountController
   * @package OnSiteLube\AdminBundle\Controller
   */
  class UserAccountController extends Controller {

    /**
     * @return Response
     */
    public function indexAction() {
      $userAccounts = UserAccountRepository::findRepository($this)->findAll();
      $response = new Response(json_encode($userAccounts));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function loginAction(Request $request) {

      $username = $request->query->get('username');
      $password = $request->query->get('password');

      $userAccount = UserAccountRepository::findRepository($this)->findUserAccount($username, $password);

      // setup acls for user
      if(sizeof($userAccount) > 0) {
        $this->forward('OnSiteLubeAdminBundle:Acl:userACL', array(
            'request'  => $request,
            'userAccountId' => $userAccount[0]["id"],
        ));
      }


      if(!$userAccount) {
        $response = new Response("[{ \"id\":\"0\" }]");
        $response->headers->set('Content-Type', 'application/json');
      } else {
        $session = $request->getSession();
        $session->set('UserAccount', $userAccount);
        $response = new Response(json_encode($userAccount));
        $response->headers->set('Content-Type', 'application/json');
      }

      return $response;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function logoutAction(Request $request) {
      $session = $request->getSession();
      $session->invalidate();
      return $this->render('OnSiteLubeLoginBundle:Default:index.html.twig');
    }


      /**
       * @internal param \Symfony\Component\HttpFoundation\Request $request
       *
       * @return Response
       */
    public function updateAction() {
      $input = file_get_contents('php://input');
      $userAccount = json_decode($input);

      $userAccount = UserAccountRepository::findRepository($this)->updateUserAccount($userAccount[0]);

      $response = new Response(json_encode($userAccount));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }
  }

