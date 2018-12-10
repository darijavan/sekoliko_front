<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/user')) {
                // _user_restapi_user_getfonction
                if ('/api/user' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bundle\\UserBundle\\Controller\\RestApi\\UserController::getFonction',  '_route' => '_user_restapi_user_getfonction',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not__user_restapi_user_getfonction;
                    }

                    return $ret;
                }
                not__user_restapi_user_getfonction:

                // api_login_check
                if ('/api/users/login' === $pathinfo) {
                    return array('_route' => 'api_login_check');
                }

            }

            elseif (0 === strpos($pathinfo, '/api/add')) {
                // _admin_restapi_anneescolaire_addasco
                if ('/api/addas' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\AnneeScolaireController::addAsco',  '_route' => '_admin_restapi_anneescolaire_addasco',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not__admin_restapi_anneescolaire_addasco;
                    }

                    return $ret;
                }
                not__admin_restapi_anneescolaire_addasco:

                // _admin_restapi_etudiant_addetd
                if ('/api/addEtd' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\EtudiantController::addEtd',  '_route' => '_admin_restapi_etudiant_addetd',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not__admin_restapi_etudiant_addetd;
                    }

                    return $ret;
                }
                not__admin_restapi_etudiant_addetd:

                // _admin_restapi_inscription_addins
                if ('/api/addins' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\InscriptionController::addIns',  '_route' => '_admin_restapi_inscription_addins',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not__admin_restapi_inscription_addins;
                    }

                    return $ret;
                }
                not__admin_restapi_inscription_addins:

            }

            // _admin_restapi_classe_getfonction
            if ('/api/class' === $pathinfo) {
                $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ClasseController::getFonction',  '_route' => '_admin_restapi_classe_getfonction',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not__admin_restapi_classe_getfonction;
                }

                return $ret;
            }
            not__admin_restapi_classe_getfonction:

            if (0 === strpos($pathinfo, '/api/classe')) {
                if (0 === strpos($pathinfo, '/api/classe/edit')) {
                    // classe_new
                    if ('/api/classe/edit' === $pathinfo) {
                        $ret = array (  'classe' => NULL,  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ClasseController::editClasse',  '_route' => 'classe_new',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_classe_new;
                        }

                        return $ret;
                    }
                    not_classe_new:

                    // classe_modify
                    if (preg_match('#^/api/classe/edit/(?P<classe>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_modify')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ClasseController::editClasse',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_classe_modify;
                        }

                        return $ret;
                    }
                    not_classe_modify:

                }

                // classe_delete
                if (0 === strpos($pathinfo, '/api/classe/delete') && preg_match('#^/api/classe/delete/(?P<classe>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_delete')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ClasseController::deleteClasse',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_classe_delete;
                    }

                    return $ret;
                }
                not_classe_delete:

                if (0 === strpos($pathinfo, '/api/classe/find')) {
                    // recherche_classe
                    if ('/api/classe/find' === $pathinfo) {
                        $ret = array (  'classe' => NULL,  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ClasseController::rechercheclasse',  '_route' => 'recherche_classe',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_recherche_classe;
                        }

                        return $ret;
                    }
                    not_recherche_classe:

                    // recherche_classe_by_id
                    if (preg_match('#^/api/classe/find/(?P<classe>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'recherche_classe_by_id')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ClasseController::rechercheclasse',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_recherche_classe_by_id;
                        }

                        return $ret;
                    }
                    not_recherche_classe_by_id:

                }

            }

            elseif (0 === strpos($pathinfo, '/api/m')) {
                // _admin_restapi_etudiant_modifyetd
                if ('/api/modifyEtd' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\EtudiantController::modifyEtd',  '_route' => '_admin_restapi_etudiant_modifyetd',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not__admin_restapi_etudiant_modifyetd;
                    }

                    return $ret;
                }
                not__admin_restapi_etudiant_modifyetd:

                // _admin_restapi_inscription_modifyins
                if ('/api/modifyins' === $pathinfo) {
                    $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\InscriptionController::modifyIns',  '_route' => '_admin_restapi_inscription_modifyins',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not__admin_restapi_inscription_modifyins;
                    }

                    return $ret;
                }
                not__admin_restapi_inscription_modifyins:

                if (0 === strpos($pathinfo, '/api/matiere')) {
                    if (0 === strpos($pathinfo, '/api/matiere/edit')) {
                        // matiere_new
                        if ('/api/matiere/edit' === $pathinfo) {
                            $ret = array (  'matiere' => NULL,  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\MatiereController::editMatiere',  '_route' => 'matiere_new',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_matiere_new;
                            }

                            return $ret;
                        }
                        not_matiere_new:

                        // matiere_modify
                        if (preg_match('#^/api/matiere/edit/(?P<matiere>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_modify')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\MatiereController::editMatiere',));
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_matiere_modify;
                            }

                            return $ret;
                        }
                        not_matiere_modify:

                    }

                    // matiere_delete
                    if (0 === strpos($pathinfo, '/api/matiere/delete') && preg_match('#^/api/matiere/delete/(?P<matiere>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_delete')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\MatiereController::deleteMatiere',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_matiere_delete;
                        }

                        return $ret;
                    }
                    not_matiere_delete:

                    if (0 === strpos($pathinfo, '/api/matiere/find')) {
                        // recherche_matiere
                        if ('/api/matiere/find' === $pathinfo) {
                            $ret = array (  'matiere' => NULL,  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\MatiereController::rechercheMatiere',  '_route' => 'recherche_matiere',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_recherche_matiere;
                            }

                            return $ret;
                        }
                        not_recherche_matiere:

                        // recherche_matiere_by_id
                        if (preg_match('#^/api/matiere/find/(?P<matiere>\\d+)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'recherche_matiere_by_id')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\MatiereController::rechercheMatiere',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_recherche_matiere_by_id;
                            }

                            return $ret;
                        }
                        not_recherche_matiere_by_id:

                    }

                }

            }

            // _admin_restapi_etudiant_listetd
            if ('/api/listEtd' === $pathinfo) {
                $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\EtudiantController::listEtd',  '_route' => '_admin_restapi_etudiant_listetd',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not__admin_restapi_etudiant_listetd;
                }

                return $ret;
            }
            not__admin_restapi_etudiant_listetd:

            // _admin_restapi_inscription_listins
            if (0 === strpos($pathinfo, '/api/listins/as') && preg_match('#^/api/listins/as/(?P<as>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_restapi_inscription_listins')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\InscriptionController::listIns',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not__admin_restapi_inscription_listins;
                }

                return $ret;
            }
            not__admin_restapi_inscription_listins:

            if (0 === strpos($pathinfo, '/api/prof')) {
                // prof_delete
                if (0 === strpos($pathinfo, '/api/prof/delete') && preg_match('#^/api/prof/delete/(?P<prof>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_delete')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ProfController::deleteSalle',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_prof_delete;
                    }

                    return $ret;
                }
                not_prof_delete:

                if (0 === strpos($pathinfo, '/api/prof/edit')) {
                    // prof_new
                    if ('/api/prof/edit' === $pathinfo) {
                        $ret = array (  'prof' => NULL,  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ProfController::editProf',  '_route' => 'prof_new',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_prof_new;
                        }

                        return $ret;
                    }
                    not_prof_new:

                    // prof_modify
                    if (preg_match('#^/api/prof/edit/(?P<prof>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'prof_modify')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ProfController::editProf',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_prof_modify;
                        }

                        return $ret;
                    }
                    not_prof_modify:

                }

                elseif (0 === strpos($pathinfo, '/api/prof/find')) {
                    // recherche_prof
                    if ('/api/prof/find' === $pathinfo) {
                        $ret = array (  'prof' => NULL,  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ProfController::rechercheSalle',  '_route' => 'recherche_prof',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_recherche_prof;
                        }

                        return $ret;
                    }
                    not_recherche_prof:

                    // recherche_prof_by_id
                    if (preg_match('#^/api/prof/find/(?P<prof>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'recherche_prof_by_id')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\ProfController::rechercheSalle',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_recherche_prof_by_id;
                        }

                        return $ret;
                    }
                    not_recherche_prof_by_id:

                }

            }

            elseif (0 === strpos($pathinfo, '/api/salle')) {
                if (0 === strpos($pathinfo, '/api/salle/edit')) {
                    // _admin_restapi_salle_getoptions
                    if ('/api/salle/edit' === $pathinfo) {
                        $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::getOptions',  '_route' => '_admin_restapi_salle_getoptions',);
                        if (!in_array($requestMethod, array('OPTIONS'))) {
                            $allow = array_merge($allow, array('OPTIONS'));
                            goto not__admin_restapi_salle_getoptions;
                        }

                        return $ret;
                    }
                    not__admin_restapi_salle_getoptions:

                    // _admin_restapi_salle_getoptions_1
                    if (preg_match('#^/api/salle/edit/(?P<salle>(\\d+|null))$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_restapi_salle_getoptions_1')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::getOptions',));
                        if (!in_array($requestMethod, array('OPTIONS'))) {
                            $allow = array_merge($allow, array('OPTIONS'));
                            goto not__admin_restapi_salle_getoptions_1;
                        }

                        return $ret;
                    }
                    not__admin_restapi_salle_getoptions_1:

                    // salle_new
                    if ('/api/salle/edit' === $pathinfo) {
                        $ret = array (  'salle' => NULL,  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::process',  '_route' => 'salle_new',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_salle_new;
                        }

                        return $ret;
                    }
                    not_salle_new:

                    // salle_modify
                    if (preg_match('#^/api/salle/edit/(?P<salle>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_modify')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::process',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_salle_modify;
                        }

                        return $ret;
                    }
                    not_salle_modify:

                }

                elseif (0 === strpos($pathinfo, '/api/salle/find')) {
                    // _admin_restapi_salle_getoptions_2
                    if ('/api/salle/find' === $pathinfo) {
                        $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::getOptions',  '_route' => '_admin_restapi_salle_getoptions_2',);
                        if (!in_array($requestMethod, array('OPTIONS'))) {
                            $allow = array_merge($allow, array('OPTIONS'));
                            goto not__admin_restapi_salle_getoptions_2;
                        }

                        return $ret;
                    }
                    not__admin_restapi_salle_getoptions_2:

                    // _admin_restapi_salle_getoptions_3
                    if (preg_match('#^/api/salle/find/(?P<salle>(\\d+|null))$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => '_admin_restapi_salle_getoptions_3')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::getOptions',));
                        if (!in_array($requestMethod, array('OPTIONS'))) {
                            $allow = array_merge($allow, array('OPTIONS'));
                            goto not__admin_restapi_salle_getoptions_3;
                        }

                        return $ret;
                    }
                    not__admin_restapi_salle_getoptions_3:

                    // recherche_salle
                    if ('/api/salle/find' === $pathinfo) {
                        $ret = array (  'salle' => NULL,  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::rechercheSalle',  '_route' => 'recherche_salle',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_recherche_salle;
                        }

                        return $ret;
                    }
                    not_recherche_salle:

                    // recherche_salle_by_id
                    if (preg_match('#^/api/salle/find/(?P<salle>\\d+)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'recherche_salle_by_id')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::rechercheSalle',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_recherche_salle_by_id;
                        }

                        return $ret;
                    }
                    not_recherche_salle_by_id:

                }

                // salle_delete
                if (0 === strpos($pathinfo, '/api/salle/delete') && preg_match('#^/api/salle/delete/(?P<salle>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_delete')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::deleteSalle',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_salle_delete;
                    }

                    return $ret;
                }
                not_salle_delete:

                // salle_reservation
                if (0 === strpos($pathinfo, '/api/salle/reservation') && preg_match('#^/api/salle/reservation/(?P<salle>\\d+)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_reservation')), array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\RestApi\\SalleController::reservation',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_salle_reservation;
                    }

                    return $ret;
                }
                not_salle_reservation:

            }

        }

        // _admin_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => '_admin_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not__admin_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', '_admin_default_index'));
            }

            return $ret;
        }
        not__admin_default_index:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
