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

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/Graphe')) {
            // my_app_graphe_homepage
            if ('/Graphe' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_app_graphe_homepage');
                }

                return array (  '_controller' => 'MyApp\\GrapheBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_graphe_homepage',);
            }

            // _grapheChartLine
            if ('/Graphe/chartLine' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\GrapheBundle\\Controller\\GrapheController::chartLineAction',  '_route' => '_grapheChartLine',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Achat')) {
            // my_app_achats_homepage
            if ('/Achat' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_app_achats_homepage');
                }

                return array (  '_controller' => 'MyApp\\AchatsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_achats_homepage',);
            }

            if (0 === strpos($pathinfo, '/Achat/a')) {
                // addAchats
                if ('/Achat/ajoutAchat' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\AchatsBundle\\Controller\\AchatsController::ajoutAction',  '_route' => 'addAchats',);
                }

                // ajouterAchatP
                if (0 === strpos($pathinfo, '/Achat/ajouterAchatP') && preg_match('#^/Achat/ajouterAchatP/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterAchatP')), array (  '_controller' => 'MyApp\\AchatsBundle\\Controller\\AchatsController::ajoutPAction',));
                }

                // affAchats
                if ('/Achat/affichageAchat' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\AchatsBundle\\Controller\\AchatsController::affichageAction',  '_route' => 'affAchats',);
                }

            }

            // searchAchats
            if ('/Achat/rechercheAchat' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\AchatsBundle\\Controller\\AchatsController::rechercheAction',  '_route' => 'searchAchats',);
            }

            // updateAchats
            if (0 === strpos($pathinfo, '/Achat/modifAchat') && preg_match('#^/Achat/modifAchat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateAchats')), array (  '_controller' => 'MyApp\\AchatsBundle\\Controller\\AchatsController::modifierAction',));
            }

            // suppAchats
            if (0 === strpos($pathinfo, '/Achat/supprimer') && preg_match('#^/Achat/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppAchats')), array (  '_controller' => 'MyApp\\AchatsBundle\\Controller\\AchatsController::deleteAction',));
            }

        }

        // my_app_livraisons_homepage
        if ('/Livraison' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_app_livraisons_homepage');
            }

            return array (  '_controller' => 'MyApp\\LivraisonsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_livraisons_homepage',);
        }

        if (0 === strpos($pathinfo, '/Livraison/Livraison')) {
            // affLivraisons
            if ('/Livraison/Livraison/affichageLivraison' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\LivraisonsBundle\\Controller\\LivraisonsController::affichageAction',  '_route' => 'affLivraisons',);
            }

            // addLivraisons
            if ('/Livraison/Livraison/ajoutLivraison' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\LivraisonsBundle\\Controller\\LivraisonsController::ajoutAction',  '_route' => 'addLivraisons',);
            }

            // updateLivraisons
            if (0 === strpos($pathinfo, '/Livraison/Livraison/modifierLivraison') && preg_match('#^/Livraison/Livraison/modifierLivraison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateLivraisons')), array (  '_controller' => 'MyApp\\LivraisonsBundle\\Controller\\LivraisonsController::modifierAction',));
            }

            // suppLivraisons
            if (0 === strpos($pathinfo, '/Livraison/Livraison/supprimerLivraison') && preg_match('#^/Livraison/Livraison/supprimerLivraison/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppLivraisons')), array (  '_controller' => 'MyApp\\LivraisonsBundle\\Controller\\LivraisonsController::deleteAction',));
            }

            // searchLivraisons
            if ('/Livraison/Livraison/rechercheLivraison' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\LivraisonsBundle\\Controller\\LivraisonsController::rechercheAction',  '_route' => 'searchLivraisons',);
            }

        }

        elseif (0 === strpos($pathinfo, '/carte')) {
            // my_app_my_map_homepage
            if ('/carte' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\MyMapBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_my_map_homepage',);
            }

            // my_app_my_map_client
            if ('/carteclient' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\MyMapBundle\\Controller\\DefaultController::carteclientAction',  '_route' => 'my_app_my_map_client',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Offres')) {
            // my_app_offres_homepage
            if ('/Offres' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_app_offres_homepage');
                }

                return array (  '_controller' => 'MyApp\\OffresBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_offres_homepage',);
            }

            // ajouterOF
            if ('/Offres/ajouterOF' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\OffresBundle\\Controller\\OffresController::ajouterOFAction',  '_route' => 'ajouterOF',);
            }

            if (0 === strpos($pathinfo, '/Offres/afficherO')) {
                // afficherO
                if ('/Offres/afficherO' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\OffresBundle\\Controller\\OffresController::afficherOAction',  '_route' => 'afficherO',);
                }

                // afficherOC
                if ('/Offres/afficherOC' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\OffresBundle\\Controller\\OffresController::afficherOCAction',  '_route' => 'afficherOC',);
                }

            }

            // suppO
            if (0 === strpos($pathinfo, '/Offres/suppO') && preg_match('#^/Offres/suppO/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppO')), array (  '_controller' => 'MyApp\\OffresBundle\\Controller\\OffresController::suppOAction',));
            }

            // modifierO
            if (0 === strpos($pathinfo, '/Offres/modifierO') && preg_match('#^/Offres/modifierO/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierO')), array (  '_controller' => 'MyApp\\OffresBundle\\Controller\\OffresController::modifierOAction',));
            }

            // my_app_reclamations_homepage
            if ('/Offres' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_app_reclamations_homepage');
                }

                return array (  '_controller' => 'MyApp\\ReclamationsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_reclamations_homepage',);
            }

            // ajouterRec
            if ('/Offres/ajouterRec' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\ReclamationsBundle\\Controller\\ReclamationsController::ajouterRecAction',  '_route' => 'ajouterRec',);
            }

            if (0 === strpos($pathinfo, '/Offres/afficherRec')) {
                // afficherRec
                if ('/Offres/afficherRec' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\ReclamationsBundle\\Controller\\ReclamationsController::afficherRecAction',  '_route' => 'afficherRec',);
                }

                // afficherRec1
                if (0 === strpos($pathinfo, '/Offres/afficherRec1') && preg_match('#^/Offres/afficherRec1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherRec1')), array (  '_controller' => 'MyApp\\ReclamationsBundle\\Controller\\ReclamationsController::afficherRec1Action',));
                }

                // afficherRecN
                if ('/Offres/afficherRecN' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\ReclamationsBundle\\Controller\\ReclamationsController::afficherRecNAction',  '_route' => 'afficherRecN',);
                }

            }

            elseif (0 === strpos($pathinfo, '/Offres/suppRec')) {
                // suppRec
                if (preg_match('#^/Offres/suppRec/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppRec')), array (  '_controller' => 'MyApp\\ReclamationsBundle\\Controller\\ReclamationsController::suppRecAction',));
                }

                // suppRecT
                if ('/Offres/suppRecT' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\ReclamationsBundle\\Controller\\ReclamationsController::suppRecTAction',  '_route' => 'suppRecT',);
                }

                // suppRecV
                if ('/Offres/suppRecV' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\ReclamationsBundle\\Controller\\ReclamationsController::suppRecVAction',  '_route' => 'suppRecV',);
                }

            }

            // AffichagePO
            if (0 === strpos($pathinfo, '/Offres/AffichagePO') && preg_match('#^/Offres/AffichagePO/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AffichagePO')), array (  '_controller' => 'MyApp\\OffresBundle\\Controller\\OffresController::afficherPOAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/produits')) {
                // my_app_produits_homepage
                if ('/produits' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'my_app_produits_homepage');
                    }

                    return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_produits_homepage',);
                }

                if (0 === strpos($pathinfo, '/produits/afficher')) {
                    // afficherChaussure
                    if ('/produits/afficher' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ChaussuresController::afficherAction',  '_route' => 'afficherChaussure',);
                    }

                    // afficherChaussureHomme
                    if ('/produits/afficherH' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ChaussuresController::afficherHommeAction',  '_route' => 'afficherChaussureHomme',);
                    }

                    // afficherChaussureFemme
                    if ('/produits/afficherF' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ChaussuresController::afficherFemmeAction',  '_route' => 'afficherChaussureFemme',);
                    }

                    if (0 === strpos($pathinfo, '/produits/afficherV')) {
                        // afficherVetementHomme
                        if ('/produits/afficherVH' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\VetementsController::afficherHommeAction',  '_route' => 'afficherVetementHomme',);
                        }

                        // afficherVetementFemme
                        if ('/produits/afficherVF' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\VetementsController::afficherFemmeAction',  '_route' => 'afficherVetementFemme',);
                        }

                        // afficherVetement
                        if ('/produits/afficherV' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\VetementsController::afficherAction',  '_route' => 'afficherVetement',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/produits/afficherA')) {
                        // afficherAccessoire
                        if ('/produits/afficherA' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\AccessoiresController::afficherAction',  '_route' => 'afficherAccessoire',);
                        }

                        // afficherAccessoireFemme
                        if ('/produits/afficherAF' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\AccessoiresController::afficherFemmeAction',  '_route' => 'afficherAccessoireFemme',);
                        }

                        // afficherAccessoireHomme
                        if ('/produits/afficherAH' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\AccessoiresController::afficherHommeAction',  '_route' => 'afficherAccessoireHomme',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/produits/afficherP')) {
                        // afficherProduit
                        if ('/produits/afficherP' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ProduitsController::affichageAction',  '_route' => 'afficherProduit',);
                        }

                        // afficherProduitHomme
                        if ('/produits/afficherPH' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ProduitsController::afficherHommeAction',  '_route' => 'afficherProduitHomme',);
                        }

                        // afficherProduitFemme
                        if ('/produits/afficherPF' === $pathinfo) {
                            return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ProduitsController::afficherFemmeAction',  '_route' => 'afficherProduitFemme',);
                        }

                    }

                    // afficherBoutiques
                    if ('/produits/afficherB' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'afficherBoutiques',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/produits/ajout')) {
                    // ajoutProduit
                    if ('/produits/ajoutP' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ProduitsController::ajoutProduitsAction',  '_route' => 'ajoutProduit',);
                    }

                    // ajoutVetement
                    if ('/produits/ajoutV' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\VetementsController::ajoutFormAction',  '_route' => 'ajoutVetement',);
                    }

                    // ajoutAccessoire
                    if ('/produits/ajoutA' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\AccessoiresController::ajoutFormAction',  '_route' => 'ajoutAccessoire',);
                    }

                    // ajoutChaussure
                    if ('/produits/ajoutC' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ChaussuresController::ajoutFormAction',  '_route' => 'ajoutChaussure',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/produits/modifier')) {
                    // modifierVet
                    if (0 === strpos($pathinfo, '/produits/modifierV') && preg_match('#^/produits/modifierV/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierVet')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\VetementsController::modifierAction',));
                    }

                    // modifierProd
                    if (preg_match('#^/produits/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierProd')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ProduitsController::modifierAction',));
                    }

                    // modifierAccess
                    if (0 === strpos($pathinfo, '/produits/modifierA') && preg_match('#^/produits/modifierA/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierAccess')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\AccessoiresController::modifierAction',));
                    }

                    // modifierChaussure
                    if (0 === strpos($pathinfo, '/produits/modifierC') && preg_match('#^/produits/modifierC/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierChaussure')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ChaussuresController::modifierAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/produits/supprimer')) {
                    // supprimerVet
                    if (0 === strpos($pathinfo, '/produits/supprimerV') && preg_match('#^/produits/supprimerV/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerVet')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\VetementsController::supprimerAction',));
                    }

                    // supprimerProd
                    if (preg_match('#^/produits/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerProd')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ProduitsController::supprimerAction',));
                    }

                    if (0 === strpos($pathinfo, '/produits/supprimerA')) {
                        // supprimerAccess
                        if (preg_match('#^/produits/supprimerA/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerAccess')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\AccessoiresController::supprimerAction',));
                        }

                        // supprimerChaussures
                        if (0 === strpos($pathinfo, '/produits/supprimerA=C') && preg_match('#^/produits/supprimerA\\=C/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerChaussures')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ChaussuresController::supprimerAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/produits/AffichAC')) {
                    // AffichageProduitClient
                    if ('/produits/AffichAC' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\AccessoiresController::indexACAction',  '_route' => 'AffichageProduitClient',);
                    }

                    // AffichageProduitClientB
                    if (0 === strpos($pathinfo, '/produits/AffichACB') && preg_match('#^/produits/AffichACB/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'AffichageProduitClientB')), array (  '_controller' => 'MyApp\\ProduitsBundle\\Controller\\ProduitsController::afficherBAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/publicites')) {
                // my_app_publicites_homepage
                if ('/publicites' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'my_app_publicites_homepage');
                    }

                    return array (  '_controller' => 'MyApp\\PublicitesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_app_publicites_homepage',);
                }

                // Ajoutpub
                if ('/publicites/AjoutPub' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\PublicitesBundle\\Controller\\PublicitesController::ajoutFormAction',  '_route' => 'Ajoutpub',);
                }

                // affichagePub
                if ('/publicites/affichage' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\PublicitesBundle\\Controller\\PublicitesController::affichageAction',  '_route' => 'affichagePub',);
                }

                // afficherPubCa
                if ('/publicites/afficherPubC' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\PublicitesBundle\\Controller\\PublicitesController::affichageCAction',  '_route' => 'afficherPubCa',);
                }

                // modifierPub
                if (0 === strpos($pathinfo, '/publicites/modifier') && preg_match('#^/publicites/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierPub')), array (  '_controller' => 'MyApp\\PublicitesBundle\\Controller\\PublicitesController::modifierAction',));
                }

                // supprimerPub
                if (0 === strpos($pathinfo, '/publicites/supprimer') && preg_match('#^/publicites/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerPub')), array (  '_controller' => 'MyApp\\PublicitesBundle\\Controller\\PublicitesController::supprimerAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/boutiques')) {
            // boutiques_client_index
            if ('/boutiques' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_boutiques_client_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'boutiques_client_index');
                }

                return array (  '_controller' => 'MyApp\\BoutiqueClientBundle\\Controller\\BoutiquesController::indexAction',  '_route' => 'boutiques_client_index',);
            }
            not_boutiques_client_index:

            // boutiques_client_show
            if (preg_match('#^/boutiques/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_boutiques_client_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiques_client_show')), array (  '_controller' => 'MyApp\\BoutiqueClientBundle\\Controller\\BoutiquesController::showAction',));
            }
            not_boutiques_client_show:

            // boutiques_client_new
            if ('/boutiques/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_boutiques_client_new;
                }

                return array (  '_controller' => 'MyApp\\BoutiqueClientBundle\\Controller\\BoutiquesController::newAction',  '_route' => 'boutiques_client_new',);
            }
            not_boutiques_client_new:

            // boutiques_client_edit
            if (preg_match('#^/boutiques/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_boutiques_client_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiques_client_edit')), array (  '_controller' => 'MyApp\\BoutiqueClientBundle\\Controller\\BoutiquesController::editAction',));
            }
            not_boutiques_client_edit:

            // boutiques_client_delete
            if (preg_match('#^/boutiques/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_boutiques_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiques_client_delete')), array (  '_controller' => 'MyApp\\BoutiqueClientBundle\\Controller\\BoutiquesController::deleteAction',));
            }
            not_boutiques_client_delete:

            // boutiques_client_sabonner
            if (preg_match('#^/boutiques/(?P<id>[^/]++)/sabonnerboutique$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiques_client_sabonner')), array (  '_controller' => 'MyApp\\BoutiqueClientBundle\\Controller\\BoutiquesController::sabonnerBoutiqueAction',));
            }

            // boutiques_client_sabonnerdesabonner
            if (preg_match('#^/boutiques/(?P<id>[^/]++)/sabonnerdesabonner$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiques_client_sabonnerdesabonner')), array (  '_controller' => 'MyApp\\BoutiqueClientBundle\\Controller\\BoutiquesController::sabonnerdesabonnerAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/monespace')) {
            // sign_up
            if ('/monespace/sinscrie' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::registerAction',  '_route' => 'sign_up',);
            }

            // responsable_sendmail
            if ('/monespace/sendmail' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::sendmailAction',  '_route' => 'responsable_sendmail',);
            }

            if (0 === strpos($pathinfo, '/monespace/a')) {
                if (0 === strpos($pathinfo, '/monespace/acceuil')) {
                    // admin
                    if ('/monespace/acceuil' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin',);
                    }

                    // acceuilClient
                    if ('/monespace/acceuilClient' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::connecterAction',  '_route' => 'acceuilClient',);
                    }

                    // admin1
                    if ('/monespace/acceuil' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin1',);
                    }

                    // Client
                    if ('/monespace/acceuil' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'Client',);
                    }

                    // responsable
                    if ('/monespace/acceuil' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'responsable',);
                    }

                    // homePageC
                    if ('/monespace/acceuil' === $pathinfo) {
                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::homePageCAction',  '_route' => 'homePageC',);
                    }

                }

                // ajoutForm
                if ('/monespace/ajoutForm' === $pathinfo) {
                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'ajoutForm',);
                }

                if (0 === strpos($pathinfo, '/monespace/abonnement')) {
                    // abonnement_index
                    if ('/monespace/abonnement' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_abonnement_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'abonnement_index');
                        }

                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\abonnementController::indexAction',  '_route' => 'abonnement_index',);
                    }
                    not_abonnement_index:

                    // abonnement_show
                    if (preg_match('#^/monespace/abonnement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_abonnement_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnement_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\abonnementController::showAction',));
                    }
                    not_abonnement_show:

                    // abonnement_new
                    if ('/monespace/abonnement/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_abonnement_new;
                        }

                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\abonnementController::newAction',  '_route' => 'abonnement_new',);
                    }
                    not_abonnement_new:

                    // abonnement_edit
                    if (preg_match('#^/monespace/abonnement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_abonnement_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnement_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\abonnementController::editAction',));
                    }
                    not_abonnement_edit:

                    // abonnement_delete
                    if (preg_match('#^/monespace/abonnement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_abonnement_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnement_delete')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\abonnementController::deleteAction',));
                    }
                    not_abonnement_delete:

                    // abonnement_abonnementsmaboutique
                    if ('/monespace/abonnement/abonnementsmaboutique' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_abonnement_abonnementsmaboutique;
                        }

                        return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\abonnementController::abonneesMaBoutiqueAction',  '_route' => 'abonnement_abonnementsmaboutique',);
                    }
                    not_abonnement_abonnementsmaboutique:

                    // abonnement_abonnementsmaboutique_sans_style
                    if (preg_match('#^/monespace/abonnement/(?P<id>[^/]++)/abonnementsmaboutiquesansstyle$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_abonnement_abonnementsmaboutique_sans_style;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnement_abonnementsmaboutique_sans_style')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\abonnementController::abonnementsMaBoutiqueSansStyleAction',));
                    }
                    not_abonnement_abonnementsmaboutique_sans_style:

                }

            }

            // ajout
            if ('/monespace/essai' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DefaultController::essaieAction',  '_route' => 'ajout',);
            }

            if (0 === strpos($pathinfo, '/monespace/demande')) {
                // demande_index
                if ('/monespace/demande' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_demande_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'demande_index');
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DemandeController::indexAction',  '_route' => 'demande_index',);
                }
                not_demande_index:

                // demande_show
                if (preg_match('#^/monespace/demande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_demande_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DemandeController::showAction',));
                }
                not_demande_show:

                // demande_new
                if ('/monespace/demande/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_demande_new;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DemandeController::newAction',  '_route' => 'demande_new',);
                }
                not_demande_new:

                // demande_edit
                if (preg_match('#^/monespace/demande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_demande_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DemandeController::editAction',));
                }
                not_demande_edit:

                // demande_delete
                if (preg_match('#^/monespace/demande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_demande_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_delete')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DemandeController::deleteAction',));
                }
                not_demande_delete:

                // demande_annuler
                if (preg_match('#^/monespace/demande/(?P<id>[^/]++)/annuler$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_annuler')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DemandeController::annulerAction',));
                }

                // demande_accepter
                if (preg_match('#^/monespace/demande/(?P<id>[^/]++)/accepter$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_accepter')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\DemandeController::accepterAction',));
                }

            }

            // client_inscription
            if ('/monespace/inscription/client' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationClientController::registerAction',  '_route' => 'client_inscription',);
            }

            if (0 === strpos($pathinfo, '/monespace/invitation')) {
                // invitation_index
                if ('/monespace/invitation' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_invitation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'invitation_index');
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\InvitationController::indexAction',  '_route' => 'invitation_index',);
                }
                not_invitation_index:

                // invitation_show
                if (preg_match('#^/monespace/invitation/(?P<code>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_invitation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invitation_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\InvitationController::showAction',));
                }
                not_invitation_show:

                // invitation_new
                if ('/monespace/invitation/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_invitation_new;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\InvitationController::newAction',  '_route' => 'invitation_new',);
                }
                not_invitation_new:

                // invitation_edit
                if (preg_match('#^/monespace/invitation/(?P<code>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_invitation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invitation_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\InvitationController::editAction',));
                }
                not_invitation_edit:

                // invitation_delete
                if (preg_match('#^/monespace/invitation/(?P<code>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_invitation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invitation_delete')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\InvitationController::deleteAction',));
                }
                not_invitation_delete:

            }

            elseif (0 === strpos($pathinfo, '/monespace/boutiques')) {
                // boutiques_index
                if ('/monespace/boutiques' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_boutiques_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'boutiques_index');
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BoutiquesController::indexAction',  '_route' => 'boutiques_index',);
                }
                not_boutiques_index:

                // boutiques_show
                if (preg_match('#^/monespace/boutiques/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_boutiques_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiques_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BoutiquesController::showAction',));
                }
                not_boutiques_show:

                // boutiques_new
                if ('/monespace/boutiques/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_boutiques_new;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BoutiquesController::newAction',  '_route' => 'boutiques_new',);
                }
                not_boutiques_new:

                // boutiques_edit
                if (preg_match('#^/monespace/boutiques/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_boutiques_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiques_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BoutiquesController::editAction',));
                }
                not_boutiques_edit:

                // boutiques_delete
                if (preg_match('#^/monespace/boutiques/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_boutiques_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiques_delete')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BoutiquesController::deleteAction',));
                }
                not_boutiques_delete:

                // boutiques_showmaboutique
                if ('/monespace/boutiques/showmaboutique' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_boutiques_showmaboutique;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BoutiquesController::showMaBoutiqueAction',  '_route' => 'boutiques_showmaboutique',);
                }
                not_boutiques_showmaboutique:

                // boutiques_edit_maboutique
                if ('/monespace/boutiques/maboutique/editer' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_boutiques_edit_maboutique;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\BoutiquesController::editMaBoutiqueAction',  '_route' => 'boutiques_edit_maboutique',);
                }
                not_boutiques_edit_maboutique:

            }

            elseif (0 === strpos($pathinfo, '/monespace/categorie')) {
                // categorie_index
                if ('/monespace/categorie' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_categorie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorie_index');
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie_index',);
                }
                not_categorie_index:

                // categorie_show
                if (preg_match('#^/monespace/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_categorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\CategorieController::showAction',));
                }
                not_categorie_show:

                // categorie_new
                if ('/monespace/categorie/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_categorie_new;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                }
                not_categorie_new:

                // categorie_edit
                if (preg_match('#^/monespace/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_categorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\CategorieController::editAction',));
                }
                not_categorie_edit:

                // categorie_delete
                if (preg_match('#^/monespace/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_categorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\CategorieController::deleteAction',));
                }
                not_categorie_delete:

            }

            elseif (0 === strpos($pathinfo, '/monespace/cartefidelites')) {
                // cartefidelites_index
                if ('/monespace/cartefidelites' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_cartefidelites_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cartefidelites_index');
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\carteFidelitesController::indexAction',  '_route' => 'cartefidelites_index',);
                }
                not_cartefidelites_index:

                // cartefidelites_show
                if (preg_match('#^/monespace/cartefidelites/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_cartefidelites_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cartefidelites_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\carteFidelitesController::showAction',));
                }
                not_cartefidelites_show:

                // cartefidelites_new
                if ('/monespace/cartefidelites/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_cartefidelites_new;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\carteFidelitesController::newAction',  '_route' => 'cartefidelites_new',);
                }
                not_cartefidelites_new:

                // cartefidelites_edit
                if (preg_match('#^/monespace/cartefidelites/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_cartefidelites_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cartefidelites_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\carteFidelitesController::editAction',));
                }
                not_cartefidelites_edit:

                // cartefidelites_delete
                if (preg_match('#^/monespace/cartefidelites/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_cartefidelites_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cartefidelites_delete')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\carteFidelitesController::deleteAction',));
                }
                not_cartefidelites_delete:

                // cartefidelites_cartesmaboutique
                if ('/monespace/cartefidelites/cartesmaboutique' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_cartefidelites_cartesmaboutique;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\carteFidelitesController::cartesMaBoutiqueAction',  '_route' => 'cartefidelites_cartesmaboutique',);
                }
                not_cartefidelites_cartesmaboutique:

                // cartefidelites_cartesmaboutique_sans_style
                if (preg_match('#^/monespace/cartefidelites/(?P<id>[^/]++)/cartesmaboutiquesansstyle$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_cartefidelites_cartesmaboutique_sans_style;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cartefidelites_cartesmaboutique_sans_style')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\carteFidelitesController::cartesMaBoutiqueSansStyleAction',));
                }
                not_cartefidelites_cartesmaboutique_sans_style:

            }

            elseif (0 === strpos($pathinfo, '/monespace/user')) {
                // user_index
                if ('/monespace/user' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_index');
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                }
                not_user_index:

                // user_show
                if (preg_match('#^/monespace/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UserController::showAction',));
                }
                not_user_show:

                // user_new
                if ('/monespace/user/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_edit
                if (preg_match('#^/monespace/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UserController::editAction',));
                }
                not_user_edit:

                // user_delete
                if (preg_match('#^/monespace/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            elseif (0 === strpos($pathinfo, '/monespace/responsable')) {
                // responsable_index
                if ('/monespace/responsable' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_responsable_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'responsable_index');
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResponsableController::indexAction',  '_route' => 'responsable_index',);
                }
                not_responsable_index:

                // responsable_show
                if (preg_match('#^/monespace/responsable/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_responsable_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_show')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResponsableController::showAction',));
                }
                not_responsable_show:

                // responsable_new
                if ('/monespace/responsable/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_responsable_new;
                    }

                    return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResponsableController::newAction',  '_route' => 'responsable_new',);
                }
                not_responsable_new:

                // responsable_edit
                if (preg_match('#^/monespace/responsable/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_responsable_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_edit')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResponsableController::editAction',));
                }
                not_responsable_edit:

                // responsable_delete
                if (preg_match('#^/monespace/responsable/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_responsable_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_delete')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\ResponsableController::deleteAction',));
                }
                not_responsable_delete:

            }

            // index_monespace
            if ('/monespace/monespace' === $pathinfo) {
                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\monespaceController::indexAction',  '_route' => 'index_monespace',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_confirm;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::confirmAction',));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ('/register/acceuil' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        // general
        if ('/acceuil' === $pathinfo) {
            return array (  '_controller' => 'MyApp\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'general',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
