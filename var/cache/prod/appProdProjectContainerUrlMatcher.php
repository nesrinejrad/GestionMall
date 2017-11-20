<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/boutiques')) {
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

        if (0 === strpos($pathinfo, '/profile')) {
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

        elseif (0 === strpos($pathinfo, '/register')) {
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
