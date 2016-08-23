<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
        }

        if (0 === strpos($pathinfo, '/events')) {
            // events_list
            if ($pathinfo === '/events/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::listAction',  '_route' => 'events_list',);
            }

            // events_add
            if ($pathinfo === '/events/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\EventsController::createAction',  '_route' => 'events_add',);
            }

            // events_details
            if (0 === strpos($pathinfo, '/events/details') && preg_match('#^/events/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_details')), array (  '_controller' => 'AppBundle\\Controller\\EventsController::detailsAction',));
            }

            if (0 === strpos($pathinfo, '/events/pending')) {
                // events__pending_details
                if (0 === strpos($pathinfo, '/events/pending/details') && preg_match('#^/events/pending/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events__pending_details')), array (  '_controller' => 'AppBundle\\Controller\\EventsController::pendingDetailsAction',));
                }

                // events_pending
                if ($pathinfo === '/events/pending') {
                    return array (  '_controller' => 'AppBundle\\Controller\\EventsController::pendingListAction',  '_route' => 'events_pending',);
                }

            }

            // events_approve
            if (0 === strpos($pathinfo, '/events/approve') && preg_match('#^/events/approve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_approve')), array (  '_controller' => 'AppBundle\\Controller\\EventsController::approveAction',));
            }

            if (0 === strpos($pathinfo, '/events/re')) {
                // events_reject
                if (0 === strpos($pathinfo, '/events/reject') && preg_match('#^/events/reject/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_reject')), array (  '_controller' => 'AppBundle\\Controller\\EventsController::rejectAction',));
                }

                // events_register
                if (0 === strpos($pathinfo, '/events/register') && preg_match('#^/events/register/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_register')), array (  '_controller' => 'AppBundle\\Controller\\EventsController::eventRegisterAction',));
                }

            }

            // events_unregister
            if (0 === strpos($pathinfo, '/events/unregister') && preg_match('#^/events/unregister/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'events_unregister')), array (  '_controller' => 'AppBundle\\Controller\\EventsController::unregisterAction',));
            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::securityCheckAction',  '_route' => 'login_check',);
            }

        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/venue')) {
            // venue_list
            if ($pathinfo === '/venue/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\VenueController::listAction',  '_route' => 'venue_list',);
            }

            // venue_add
            if ($pathinfo === '/venue/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\VenueController::createAction',  '_route' => 'venue_add',);
            }

            if (0 === strpos($pathinfo, '/venue/de')) {
                // venue_delete
                if (0 === strpos($pathinfo, '/venue/delete') && preg_match('#^/venue/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'venue_delete')), array (  '_controller' => 'AppBundle\\Controller\\VenueController::deleteAction',));
                }

                // venue_details
                if (0 === strpos($pathinfo, '/venue/details') && preg_match('#^/venue/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'venue_details')), array (  '_controller' => 'AppBundle\\Controller\\VenueController::detailAction',));
                }

            }

            // venue_edit
            if (0 === strpos($pathinfo, '/venue/edit') && preg_match('#^/venue/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venue_edit')), array (  '_controller' => 'AppBundle\\Controller\\VenueController::editAction',));
            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
