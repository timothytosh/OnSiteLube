<?php

  namespace OnSiteLube\AdminBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;
  use OnSiteLube\AdminBundle\Entity\EmployeeRepository;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\Request;


  /**
   * Class DefaultController
   * @package OnSiteLube\AdminBundle\Controller
   */
  class EmployeeController extends Controller
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

      return $this->render('OnSiteLubeAdminBundle:Default:employee.html.twig');
    }

    /**
     * @return Response
     */
    public function autoCompleteAction() {
      $employees = EmployeeRepository::findRepository($this)->findAllForAutoComplete();
      $response = new Response(json_encode($employees));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }


    /**
     * @param Request $request
     *
     * @return Response
     */
    public function retrieveAction(Request $request) {

      $userAccountId = $request->query->get('userAccountId');

      $employees = EmployeeRepository::findRepository($this)->findByUserAccountId($userAccountId);
      $response = new Response(json_encode($employees));
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
      $employee = json_decode($input);
      $employee = EmployeeRepository::findRepository($this)->addEmployee($employee[0]);
      $response = new Response(json_encode($employee));
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
      $employee = json_decode($input);
      $employee = EmployeeRepository::findRepository($this)->updateEmployee($employee[0]);
      $response = new Response(json_encode($employee));
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }
  }