<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/services/orders')) {
            // on_site_lube_service_homepage
            if ($pathinfo === '/services/orders') {
                return array (  '_controller' => 'OnSiteLube\\ServiceBundle\\Controller\\ServiceController::indexAction',  '_route' => 'on_site_lube_service_homepage',);
            }

            // on_site_lube_service_create
            if ($pathinfo === '/services/orders/create') {
                return array (  '_controller' => 'OnSiteLube\\ServiceBundle\\Controller\\ServiceController::createAction',  '_route' => 'on_site_lube_service_create',);
            }

            // on_site_lube_service_destroy
            if ($pathinfo === '/services/orders/destroy') {
                return array (  '_controller' => 'OnSiteLube\\ServiceBundle\\Controller\\ServiceController::destroyAction',  '_route' => 'on_site_lube_service_destroy',);
            }

            // on_site_lube_service_update
            if ($pathinfo === '/services/orders/update') {
                return array (  '_controller' => 'OnSiteLube\\ServiceBundle\\Controller\\ServiceController::updateAction',  '_route' => 'on_site_lube_service_update',);
            }

        }

        // on_site_lube_admin_homepage
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'on_site_lube_admin_homepage',);
        }

        // on_site_lube_loginAuditLog
        if ($pathinfo === '/loginAudit') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\LoginAuditController::indexAction',  '_route' => 'on_site_lube_loginAuditLog',);
        }

        // on_site_lube_companyInfo
        if ($pathinfo === '/companyInfo') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyController::indexAction',  '_route' => 'on_site_lube_companyInfo',);
        }

        // on_site_lube_messages
        if ($pathinfo === '/messages') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\MessageController::indexAction',  '_route' => 'on_site_lube_messages',);
        }

        if (0 === strpos($pathinfo, '/customer')) {
            // on_site_lube_customers
            if ($pathinfo === '/customerAdmin') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CustomerController::adminAction',  '_route' => 'on_site_lube_customers',);
            }

            // on_site_lube_customer_details
            if ($pathinfo === '/customerDetail') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CustomerController::detailAction',  '_route' => 'on_site_lube_customer_details',);
            }

            // on_site_lube_customerSearch
            if ($pathinfo === '/customerSearch') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CustomerController::autoCompleteAction',  '_route' => 'on_site_lube_customerSearch',);
            }

        }

        // on_site_lube_retrieveCustomer
        if ($pathinfo === '/retrieveCustomer') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CustomerController::retrieveAction',  '_route' => 'on_site_lube_retrieveCustomer',);
        }

        if (0 === strpos($pathinfo, '/employee')) {
            // on_site_lube_employeeSearch
            if ($pathinfo === '/employeeSearch') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\EmployeeController::autoCompleteAction',  '_route' => 'on_site_lube_employeeSearch',);
            }

            // on_site_lube_employees
            if ($pathinfo === '/employees') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\EmployeeController::indexAction',  '_route' => 'on_site_lube_employees',);
            }

        }

        // on_site_lube_addEmployee
        if ($pathinfo === '/addEmployee') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\EmployeeController::addAction',  '_route' => 'on_site_lube_addEmployee',);
        }

        // on_site_lube_updateEmployee
        if ($pathinfo === '/updateEmployee') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\EmployeeController::updateAction',  '_route' => 'on_site_lube_updateEmployee',);
        }

        // on_site_lube_retrieveEmployee
        if ($pathinfo === '/retrieveEmployee') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\EmployeeController::retrieveAction',  '_route' => 'on_site_lube_retrieveEmployee',);
        }

        // on_site_lube_schedule_for_employee
        if ($pathinfo === '/empSchedule') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\EmployeeSchedulerController::retrieveAction',  '_route' => 'on_site_lube_schedule_for_employee',);
        }

        if (0 === strpos($pathinfo, '/companyLocation')) {
            // on_site_lube_locations
            if ($pathinfo === '/companyLocations') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyLocationController::indexAction',  '_route' => 'on_site_lube_locations',);
            }

            // on_site_lube_companyLocationSearch
            if ($pathinfo === '/companyLocationSearch') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyLocationController::autoCompleteAction',  '_route' => 'on_site_lube_companyLocationSearch',);
            }

        }

        // on_site_lube_addCompanyLocation
        if ($pathinfo === '/addCompanyLocation') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyLocationController::addAction',  '_route' => 'on_site_lube_addCompanyLocation',);
        }

        // on_site_lube_updateCompanyLocation
        if ($pathinfo === '/updateCompanyLocation') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyLocationController::updateAction',  '_route' => 'on_site_lube_updateCompanyLocation',);
        }

        // on_site_lube_retrieveCompanyLocation
        if ($pathinfo === '/retrieveCompanyLocation') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyLocationController::retrieveAction',  '_route' => 'on_site_lube_retrieveCompanyLocation',);
        }

        // on_site_lube_findAllCompanyLocation
        if ($pathinfo === '/findAllCompanyLocation') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyLocationController::findAllAction',  '_route' => 'on_site_lube_findAllCompanyLocation',);
        }

        // on_site_lube_retrieveCompanyVehicle
        if ($pathinfo === '/retrieveCompanyVehicle') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyVehicleController::retrieveAction',  '_route' => 'on_site_lube_retrieveCompanyVehicle',);
        }

        // on_site_lube_companyVehicleSearch
        if ($pathinfo === '/companyVehicleSearch') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyVehicleController::autoCompleteAction',  '_route' => 'on_site_lube_companyVehicleSearch',);
        }

        // on_site_lube_addCompanyVehicle
        if ($pathinfo === '/addCompanyVehicle') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyVehicleController::addAction',  '_route' => 'on_site_lube_addCompanyVehicle',);
        }

        // on_site_lube_updateCompanyVehicle
        if ($pathinfo === '/updateCompanyVehicle') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyVehicleController::updateAction',  '_route' => 'on_site_lube_updateCompanyVehicle',);
        }

        // on_site_lube_vehicles
        if ($pathinfo === '/companyVehicles') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyVehicleController::indexAction',  '_route' => 'on_site_lube_vehicles',);
        }

        if (0 === strpos($pathinfo, '/emp')) {
            // on_site_lube_employee_vehicle
            if ($pathinfo === '/empvehicle') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\CompanyVehicleController::findByLocationAction',  '_route' => 'on_site_lube_employee_vehicle',);
            }

            // on_site_lube_job_service_for_employee
            if ($pathinfo === '/employeeJobs') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\JobServiceController::retrieveAction',  '_route' => 'on_site_lube_job_service_for_employee',);
            }

        }

        // on_site_lube_job_service_billable_time
        if ($pathinfo === '/updateBillableTimeForJobService') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\JobServiceController::updateBillableTimeAction',  '_route' => 'on_site_lube_job_service_billable_time',);
        }

        // on_site_lube_job_service_billable_time_mobile
        if ($pathinfo === '/employeeJobsMobile') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\JobServiceController::retrieveJobServicesByWorkOrderAndUserAccountIdAction',  '_route' => 'on_site_lube_job_service_billable_time_mobile',);
        }

        if (0 === strpos($pathinfo, '/workOrder')) {
            // on_site_lube_work_order_listing
            if ($pathinfo === '/workOrderListing') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\WorkOrderController::indexAction',  '_route' => 'on_site_lube_work_order_listing',);
            }

            // on_site_lube_work_order_for_employee
            if ($pathinfo === '/workOrders') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\WorkOrderController::retrieveAction',  '_route' => 'on_site_lube_work_order_for_employee',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // on_site_lube_login_ua_find
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\UserAccountController::loginAction',  '_route' => 'on_site_lube_login_ua_find',);
            }

            // on_site_lube_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\UserAccountController::logoutAction',  '_route' => 'on_site_lube_logout',);
            }

        }

        // on_site_lube_update_user
        if ($pathinfo === '/updateUser') {
            return array (  '_controller' => 'OnSiteLube\\AdminBundle\\Controller\\UserAccountController::updateAction',  '_route' => 'on_site_lube_update_user',);
        }

        // on_site_lube_login_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'on_site_lube_login_homepage');
            }

            return array (  '_controller' => 'OnSiteLube\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'on_site_lube_login_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
