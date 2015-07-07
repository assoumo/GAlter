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

            // agendaetudiant
            if ($pathinfo === '/agenda/agendaetudiant') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agendaetudiant;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::agendaAction',  '_route' => 'agendaetudiant',);
            }
            not_agendaetudiant:

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
            if (preg_match('#^/agenda/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agenda_new')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AgendaController::newAction',));
            }

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

        if (0 === strpos($pathinfo, '/export')) {
            // formulaire
            if ($pathinfo === '/export/formexport') {
                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ExportController::formulaireAction',  '_route' => 'formulaire',);
            }

            // rapportpromot
            if ($pathinfo === '/export/rapportpromot') {
                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ExportController::rapportpromotAction',  '_route' => 'rapportpromot',);
            }

            if (0 === strpos($pathinfo, '/export/toutrap')) {
                // exporter_tout
                if (0 === strpos($pathinfo, '/export/toutrapport') && preg_match('#^/export/toutrapport/(?P<rapports>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_exporter_tout;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'exporter_tout')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ExportController::exportertousAction',));
                }
                not_exporter_tout:

                // exportertout
                if (preg_match('#^/export/toutrap/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_exportertout;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'exportertout')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\ExportController::exportertoutAction',));
                }
                not_exportertout:

            }

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

            // rapportpourtuteur
            if (0 === strpos($pathinfo, '/rapport/voir') && preg_match('#^/rapport/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rapportpourtuteur;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportpourtuteur')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RapportController::indextuteurAction',));
            }
            not_rapportpourtuteur:

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

        // galter_gestion_test_testannee
        if ($pathinfo === '/testannee') {
            return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\TestController::testanneeAction',  '_route' => 'galter_gestion_test_testannee',);
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

            if (0 === strpos($pathinfo, '/enregistrement/tuteur')) {
                // user_two_registration
                if ($pathinfo === '/enregistrement/tuteur') {
                    return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\RegistrationUserTwoController::registerAction',  '_route' => 'user_two_registration',);
                }

                // user_four_registration
                if ($pathinfo === '/enregistrement/tuteur_entreprise') {
                    return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\RegistrationUserFourController::registerAction',  '_route' => 'user_four_registration',);
                }

            }

            // user_three_registration
            if ($pathinfo === '/enregistrement/responsable') {
                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\RegistrationUserThreeController::registerAction',  '_route' => 'user_three_registration',);
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

        if (0 === strpos($pathinfo, '/optional_routing_prefix')) {
            // fos_message_inbox
            if (rtrim($pathinfo, '/') === '/optional_routing_prefix') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_message_inbox');
                }

                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
            }

            // fos_message_sent
            if ($pathinfo === '/optional_routing_prefix/sent') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
            }

            // fos_message_deleted
            if ($pathinfo === '/optional_routing_prefix/deleted') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
            }

            // fos_message_search
            if ($pathinfo === '/optional_routing_prefix/search') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
            }

            // fos_message_thread_new
            if ($pathinfo === '/optional_routing_prefix/new') {
                return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
            }

            // fos_message_thread_delete
            if (preg_match('#^/optional_routing_prefix/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fos_message_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
            }
            not_fos_message_thread_delete:

            // fos_message_thread_undelete
            if (preg_match('#^/optional_routing_prefix/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_message_thread_undelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
            }
            not_fos_message_thread_undelete:

            // fos_message_thread_view
            if (preg_match('#^/optional_routing_prefix/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'GAlter\\UserBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'GAlter\\UserBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'GAlter\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'GAlter\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/formation')) {
            // formation
            if (rtrim($pathinfo, '/') === '/formation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formation');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::indexAction',  '_route' => 'formation',);
            }

            // formation_show
            if (preg_match('#^/formation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::showAction',));
            }

            // formation_new
            if ($pathinfo === '/formation/new') {
                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::newAction',  '_route' => 'formation_new',);
            }

            // formation_create
            if ($pathinfo === '/formation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formation_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::createAction',  '_route' => 'formation_create',);
            }
            not_formation_create:

            // formation_edit
            if (preg_match('#^/formation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::editAction',));
            }

            // formation_update
            if (preg_match('#^/formation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_formation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::updateAction',));
            }
            not_formation_update:

            // formation_delete
            if (preg_match('#^/formation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_formation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\FormationController::deleteAction',));
            }
            not_formation_delete:

        }

        if (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant
            if (rtrim($pathinfo, '/') === '/etudiant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etudiant');
                }

                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::indexAction',  '_route' => 'etudiant',);
            }

            if (0 === strpos($pathinfo, '/etudiant/mes')) {
                // mes_etudiant
                if ($pathinfo === '/etudiant/mesetudiants') {
                    return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::mesetudiantsAction',  '_route' => 'mes_etudiant',);
                }

                // mes_apprentis
                if ($pathinfo === '/etudiant/mesapprentis') {
                    return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::mesapprentisAction',  '_route' => 'mes_apprentis',);
                }

            }

            // etudiant_show
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_show')), array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::showAction',));
            }

            // etudiant_new
            if ($pathinfo === '/etudiant/new') {
                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::newAction',  '_route' => 'etudiant_new',);
            }

            // etudiant_create
            if ($pathinfo === '/etudiant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etudiant_create;
                }

                return array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::createAction',  '_route' => 'etudiant_create',);
            }
            not_etudiant_create:

            // etudiant_edit
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_edit')), array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::editAction',));
            }

            // etudiant_update
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_etudiant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_update')), array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::updateAction',));
            }
            not_etudiant_update:

            // etudiant_delete
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_etudiant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_delete')), array (  '_controller' => 'GAlter\\UserBundle\\Controller\\etudiantController::deleteAction',));
            }
            not_etudiant_delete:

        }

        if (0 === strpos($pathinfo, '/remarquetuteurrapport')) {
            // remarquetuteurrapport
            if (rtrim($pathinfo, '/') === '/remarquetuteurrapport') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'remarquetuteurrapport');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RemarqueTuteurRapportController::indexAction',  '_route' => 'remarquetuteurrapport',);
            }

            // remarquetuteurrapport_show
            if (preg_match('#^/remarquetuteurrapport/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remarquetuteurrapport_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RemarqueTuteurRapportController::showAction',));
            }

            // remarquetuteurrapport_new
            if (preg_match('#^/remarquetuteurrapport/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remarquetuteurrapport_new')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RemarqueTuteurRapportController::newAction',));
            }

            // remarquetuteurrapport_create
            if ($pathinfo === '/remarquetuteurrapport/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_remarquetuteurrapport_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RemarqueTuteurRapportController::createAction',  '_route' => 'remarquetuteurrapport_create',);
            }
            not_remarquetuteurrapport_create:

            // remarquetuteurrapport_edit
            if (preg_match('#^/remarquetuteurrapport/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remarquetuteurrapport_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RemarqueTuteurRapportController::editAction',));
            }

            // remarquetuteurrapport_update
            if (preg_match('#^/remarquetuteurrapport/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_remarquetuteurrapport_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remarquetuteurrapport_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RemarqueTuteurRapportController::updateAction',));
            }
            not_remarquetuteurrapport_update:

            // remarquetuteurrapport_delete
            if (preg_match('#^/remarquetuteurrapport/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_remarquetuteurrapport_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remarquetuteurrapport_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\RemarqueTuteurRapportController::deleteAction',));
            }
            not_remarquetuteurrapport_delete:

        }

        if (0 === strpos($pathinfo, '/anneeformationetudiant')) {
            // anneeformationetudiant
            if (rtrim($pathinfo, '/') === '/anneeformationetudiant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'anneeformationetudiant');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AnneeFormationEtudiantController::indexAction',  '_route' => 'anneeformationetudiant',);
            }

            // anneeformationetudiant_show
            if (preg_match('#^/anneeformationetudiant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anneeformationetudiant_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AnneeFormationEtudiantController::showAction',));
            }

            // anneeformationetudiant_new
            if ($pathinfo === '/anneeformationetudiant/new') {
                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AnneeFormationEtudiantController::newAction',  '_route' => 'anneeformationetudiant_new',);
            }

            // anneeformationetudiant_create
            if ($pathinfo === '/anneeformationetudiant/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_anneeformationetudiant_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AnneeFormationEtudiantController::createAction',  '_route' => 'anneeformationetudiant_create',);
            }
            not_anneeformationetudiant_create:

            // anneeformationetudiant_edit
            if (preg_match('#^/anneeformationetudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anneeformationetudiant_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AnneeFormationEtudiantController::editAction',));
            }

            // anneeformationetudiant_update
            if (preg_match('#^/anneeformationetudiant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_anneeformationetudiant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anneeformationetudiant_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AnneeFormationEtudiantController::updateAction',));
            }
            not_anneeformationetudiant_update:

            // anneeformationetudiant_delete
            if (preg_match('#^/anneeformationetudiant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_anneeformationetudiant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'anneeformationetudiant_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\AnneeFormationEtudiantController::deleteAction',));
            }
            not_anneeformationetudiant_delete:

        }

        if (0 === strpos($pathinfo, '/document')) {
            // document
            if (rtrim($pathinfo, '/') === '/document') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'document');
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::indexAction',  '_route' => 'document',);
            }

            // document_show
            if (preg_match('#^/document/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_show')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::showAction',));
            }

            // document_new
            if ($pathinfo === '/document/new') {
                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::newAction',  '_route' => 'document_new',);
            }

            // document_create
            if ($pathinfo === '/document/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_document_create;
                }

                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::createAction',  '_route' => 'document_create',);
            }
            not_document_create:

            // document_edit
            if (preg_match('#^/document/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_edit')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::editAction',));
            }

            // document_update
            if (preg_match('#^/document/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_document_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_update')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::updateAction',));
            }
            not_document_update:

            // document_delete
            if (preg_match('#^/document/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_document_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_delete')), array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::deleteAction',));
            }
            not_document_delete:

            // document_upload
            if ($pathinfo === '/document/etudiantuplaod') {
                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::etudiantAction',  '_route' => 'document_upload',);
            }

            // passageannee_test
            if ($pathinfo === '/document/passageannee') {
                return array (  '_controller' => 'GAlter\\GestionBundle\\Controller\\DocumentController::passageAction',  '_route' => 'passageannee_test',);
            }

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
