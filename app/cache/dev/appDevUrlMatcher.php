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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/agenda')) {
            // agenda
            if (rtrim($pathinfo, '/') === '/agenda') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agenda;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'agenda');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::indexAction',  '_route' => 'agenda',);
            }
            not_agenda:

            // agenda_create
            if ($pathinfo === '/agenda/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_agenda_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::createAction',  '_route' => 'agenda_create',);
            }
            not_agenda_create:

            // agenda_new
            if ($pathinfo === '/agenda/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agenda_new;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::newAction',  '_route' => 'agenda_new',);
            }
            not_agenda_new:

            // agenda_show
            if (preg_match('#^/agenda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agenda_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agenda_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::showAction',));
            }
            not_agenda_show:

            // agenda_edit
            if (preg_match('#^/agenda/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agenda_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agenda_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::editAction',));
            }
            not_agenda_edit:

            // agenda_update
            if (preg_match('#^/agenda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_agenda_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agenda_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::updateAction',));
            }
            not_agenda_update:

            // agenda_delete
            if (preg_match('#^/agenda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_agenda_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agenda_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::deleteAction',));
            }
            not_agenda_delete:

        }

        // galter_gestion_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'galter_gestion_default_index')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/formation')) {
            // formation
            if (rtrim($pathinfo, '/') === '/formation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_formation;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formation');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::indexAction',  '_route' => 'formation',);
            }
            not_formation:

            // formation_create
            if ($pathinfo === '/formation/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formation_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::createAction',  '_route' => 'formation_create',);
            }
            not_formation_create:

            // formation_new
            if ($pathinfo === '/formation/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_formation_new;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::newAction',  '_route' => 'formation_new',);
            }
            not_formation_new:

            // formation_show
            if (preg_match('#^/formation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_formation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::showAction',));
            }
            not_formation_show:

            // formation_edit
            if (preg_match('#^/formation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_formation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::editAction',));
            }
            not_formation_edit:

            // formation_update
            if (preg_match('#^/formation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_formation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::updateAction',));
            }
            not_formation_update:

            // formation_delete
            if (preg_match('#^/formation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_formation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::deleteAction',));
            }
            not_formation_delete:

        }

        if (0 === strpos($pathinfo, '/OptionsCompte')) {
            // OptionsCompte
            if (rtrim($pathinfo, '/') === '/OptionsCompte') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_OptionsCompte;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'OptionsCompte');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\OptionscompteController::indexAction',  '_route' => 'OptionsCompte',);
            }
            not_OptionsCompte:

            // options_compte_create
            if ($pathinfo === '/OptionsCompte/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_options_compte_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\OptionscompteController::createAction',  '_route' => 'options_compte_create',);
            }
            not_options_compte_create:

            // options_compte_new
            if ($pathinfo === '/OptionsCompte/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_options_compte_new;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\OptionscompteController::newAction',  '_route' => 'options_compte_new',);
            }
            not_options_compte_new:

            // options_compte_show
            if (preg_match('#^/OptionsCompte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_options_compte_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'options_compte_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\OptionscompteController::showAction',));
            }
            not_options_compte_show:

            // options_compte_edit
            if (preg_match('#^/OptionsCompte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_options_compte_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'options_compte_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\OptionscompteController::editAction',));
            }
            not_options_compte_edit:

            // options_compte_update
            if (preg_match('#^/OptionsCompte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_options_compte_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'options_compte_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\OptionscompteController::updateAction',));
            }
            not_options_compte_update:

            // options_compte_delete
            if (preg_match('#^/OptionsCompte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_options_compte_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'options_compte_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\OptionscompteController::deleteAction',));
            }
            not_options_compte_delete:

        }

        if (0 === strpos($pathinfo, '/projet')) {
            // projet
            if (rtrim($pathinfo, '/') === '/projet') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'projet');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet',);
            }
            not_projet:

            // projet_create
            if ($pathinfo === '/projet/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_projet_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ProjetController::createAction',  '_route' => 'projet_create',);
            }
            not_projet_create:

            // projet_new
            if ($pathinfo === '/projet/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_new;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
            }
            not_projet_new:

            // projet_show
            if (preg_match('#^/projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ProjetController::showAction',));
            }
            not_projet_show:

            // projet_edit
            if (preg_match('#^/projet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_projet_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ProjetController::editAction',));
            }
            not_projet_edit:

            // projet_update
            if (preg_match('#^/projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_projet_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ProjetController::updateAction',));
            }
            not_projet_update:

            // projet_delete
            if (preg_match('#^/projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_projet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ProjetController::deleteAction',));
            }
            not_projet_delete:

        }

        if (0 === strpos($pathinfo, '/rapport')) {
            // rapport
            if (rtrim($pathinfo, '/') === '/rapport') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rapport;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rapport');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RapportController::indexAction',  '_route' => 'rapport',);
            }
            not_rapport:

            // rapport_create
            if ($pathinfo === '/rapport/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rapport_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RapportController::createAction',  '_route' => 'rapport_create',);
            }
            not_rapport_create:

            // rapport_new
            if ($pathinfo === '/rapport/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rapport_new;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RapportController::newAction',  '_route' => 'rapport_new',);
            }
            not_rapport_new:

            // rapport_show
            if (preg_match('#^/rapport/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rapport_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RapportController::showAction',));
            }
            not_rapport_show:

            // rapport_edit
            if (preg_match('#^/rapport/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rapport_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RapportController::editAction',));
            }
            not_rapport_edit:

            // rapport_update
            if (preg_match('#^/rapport/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_rapport_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RapportController::updateAction',));
            }
            not_rapport_update:

            // rapport_delete
            if (preg_match('#^/rapport/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_rapport_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RapportController::deleteAction',));
            }
            not_rapport_delete:

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/enregistrement')) {
            // user_one_registration
            if ($pathinfo === '/enregistrement/etudiant') {
                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\RegistrationUserOneController::registerAction',  '_route' => 'user_one_registration',);
            }

            // user_two_registration
            if ($pathinfo === '/enregistrement/responsable') {
                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\RegistrationUserTwoController::registerAction',  '_route' => 'user_two_registration',);
            }

        }

        if (0 === strpos($pathinfo, '/register/c')) {
            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirmed
                if ($pathinfo === '/register/confirmed') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }

                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ($pathinfo === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}