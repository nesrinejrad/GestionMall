<?php

/* include/menu.html.twig */
class __TwigTemplate_ef5c25c35fa933638e46d0a90b35851f6313be731b87a6a4ef6a15d1e78a5fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6791a356aaa13b202da8b3e68a66cf2bc0ec94c1911760a670522f868a018d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6791a356aaa13b202da8b3e68a66cf2bc0ec94c1911760a670522f868a018d4b->enter($__internal_6791a356aaa13b202da8b3e68a66cf2bc0ec94c1911760a670522f868a018d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/menu.html.twig"));

        $__internal_347e5c2cb5a0e3b3be7efe7e0134d7c6e4fdd7c6d6bedf97960c34a29071df5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347e5c2cb5a0e3b3be7efe7e0134d7c6e4fdd7c6d6bedf97960c34a29071df5d->enter($__internal_347e5c2cb5a0e3b3be7efe7e0134d7c6e4fdd7c6d6bedf97960c34a29071df5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/menu.html.twig"));

        // line 1
        echo "<ul class=\"sidebar-menu\">
            <li class=\"header\">Gestion Boutique</li>
            <!-- Optionally, you can add icons to the links -->
            ";
        // line 6
        echo "            
            
            ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "            <li class=\"treeview\">
              <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Boutiques</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">liste des boutiques</a></li>
                <li><a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_new");
            echo "\">Ajouter une boutique</a></li>
              </ul>
            </li>
            
            <li class=\"treeview\">
              <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("responsable_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Responsables Boutique</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("responsable_index");
            echo "\">liste des responsables</a></li>
                <li><a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("responsable_new");
            echo "\">Ajouter un responsable</a></li>
              </ul>
            </li>
            
            <li class=\"treeview\">
              <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Demandes Boutiques</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_index");
            echo "\">liste des demandes</a></li>
                <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_new");
            echo "\">Ajouter une demande</a></li>
              </ul>
            </li>
                <li class=\"treeview\">
                    <a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherProduit");
            echo "\"><i class=\"fa fa-link\"></i> <span>Produit</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherChaussure");
            echo "\">Chaussure</a></li>
                        <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherAccessoire");
            echo "\">Accecoire</a></li>
                        <li><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherVetement");
            echo "\">Vetement</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Utilisateur</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">Afficher</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Mail</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">Nouveau Mail</a></li>
                        <li><a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_new");
            echo "\">Boite de reception</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichagePub");
            echo "\"><i class=\"fa fa-link\"></i> <span>Publicité</span> <i class=\"fa fa-angle-left pull-right\"></i></a>

                </li>
                <li class=\"treeview\">
                    <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Livraison</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">Afficher</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Statistique</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">Afficher</a></li>

                    </ul>
                </li>

            ";
        }
        // line 75
        echo "            
            ";
        // line 76
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 77
            echo "            <li class=\"treeview\">
              <a><i class=\"fa fa-link\"></i> <span>Ma Boutique</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_showmaboutique");
            echo "\">Afficher ma boutique</a></li>
                <li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_edit_maboutique");
            echo "\">Editer Ma boutique</a></li>
              </ul>
            </li>
            
            <li class=\"\">
                <a href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelites_cartesmaboutique");
            echo "\"><i class=\"fa fa-link\"></i> <span>Cartes Fidelites</span></a>
            </li>
            
            <li class=\"\">
                <a href=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnement_abonnementsmaboutique");
            echo "\"><i class=\"fa fa-link\"></i> <span>Abonnées</span></a>
            </li>
            
            ";
        }
        // line 94
        echo "

            
            <li class=\"treeview\">
              <a href=\"{ { path('invitation') }}\"><i class=\"fa fa-link\"></i> <span>Invitation</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"{ { path('invitation') }}\">liste des dossiers</a></li>
                <li><a href=\"{ { path('invitation_new') }}\">Ajouter un dossier</a></li>
              </ul>
            </li>
    <li class=\"treeview\">
        <a href=\"\"><i class=\"fa fa-link\"></i> <span>Produits</span> <i class=\"fa fa-angle-left pull-right\"></i></a>

        <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherProduit");
        echo "\">afficher Produits</a></li>
            <li><a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutChaussure");
        echo "\">ajouter Chaussure</a></li>
            <li><a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutAccessoire");
        echo "\">ajouter Accecoire</a></li>
            <li><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutVetement");
        echo "\">ajouter Vetement</a></li>

        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherO");
        echo "\"><i class=\"fa fa-link\"></i> <span>Offres</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
        <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherO");
        echo "\">liste Offres</a></li>
            <li><a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterOF");
        echo "\">Ajouter Offres </a></li>
        </ul>
    </li>


    ";
        // line 125
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 126
            echo "            <li class=\"header\">Paramètres</li>
            <li class=\"treeview\">
              <a href=\"";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Categories</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                  <li><a href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
            echo "\">Liste Categories</a></li>
                <li><a href=\"";
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
            echo "\">Ajouter une categorie</a></li>
              </ul>
            </li>
            ";
        }
        // line 135
        echo "          </ul>";
        
        $__internal_6791a356aaa13b202da8b3e68a66cf2bc0ec94c1911760a670522f868a018d4b->leave($__internal_6791a356aaa13b202da8b3e68a66cf2bc0ec94c1911760a670522f868a018d4b_prof);

        
        $__internal_347e5c2cb5a0e3b3be7efe7e0134d7c6e4fdd7c6d6bedf97960c34a29071df5d->leave($__internal_347e5c2cb5a0e3b3be7efe7e0134d7c6e4fdd7c6d6bedf97960c34a29071df5d_prof);

    }

    public function getTemplateName()
    {
        return "include/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 135,  278 => 131,  274 => 130,  269 => 128,  265 => 126,  262 => 125,  254 => 119,  250 => 118,  245 => 116,  237 => 111,  233 => 110,  229 => 109,  225 => 108,  209 => 94,  202 => 90,  195 => 86,  187 => 81,  183 => 80,  178 => 77,  176 => 76,  173 => 75,  164 => 69,  159 => 67,  151 => 62,  146 => 60,  139 => 56,  131 => 51,  127 => 50,  122 => 48,  115 => 44,  110 => 42,  102 => 37,  98 => 36,  94 => 35,  89 => 33,  82 => 29,  78 => 28,  73 => 26,  65 => 21,  61 => 20,  56 => 18,  48 => 13,  44 => 12,  39 => 10,  36 => 9,  34 => 8,  30 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"sidebar-menu\">
            <li class=\"header\">Gestion Boutique</li>
            <!-- Optionally, you can add icons to the links -->
            {#<li class=\"active\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Link</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Another Link</span></a></li>#}
            
            
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"treeview\">
              <a href=\"{{ path('boutiques_index') }}\"><i class=\"fa fa-link\"></i> <span>Boutiques</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"{{ path('boutiques_index') }}\">liste des boutiques</a></li>
                <li><a href=\"{{ path('boutiques_new') }}\">Ajouter une boutique</a></li>
              </ul>
            </li>
            
            <li class=\"treeview\">
              <a href=\"{{ path('responsable_index') }}\"><i class=\"fa fa-link\"></i> <span>Responsables Boutique</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"{{ path('responsable_index') }}\">liste des responsables</a></li>
                <li><a href=\"{{ path('responsable_new') }}\">Ajouter un responsable</a></li>
              </ul>
            </li>
            
            <li class=\"treeview\">
              <a href=\"{{ path('demande_index') }}\"><i class=\"fa fa-link\"></i> <span>Demandes Boutiques</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"{{ path('demande_index') }}\">liste des demandes</a></li>
                <li><a href=\"{{ path('demande_new') }}\">Ajouter une demande</a></li>
              </ul>
            </li>
                <li class=\"treeview\">
                    <a href=\"{{ path('afficherProduit') }}\"><i class=\"fa fa-link\"></i> <span>Produit</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{ path('afficherChaussure') }}\">Chaussure</a></li>
                        <li><a href=\"{{ path('afficherAccessoire') }}\">Accecoire</a></li>
                        <li><a href=\"{{ path('afficherVetement') }}\">Vetement</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"{{ path('boutiques_index') }}\"><i class=\"fa fa-link\"></i> <span>Utilisateur</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{ path('boutiques_index') }}\">Afficher</a></li>
                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"{{ path('boutiques_index') }}\"><i class=\"fa fa-link\"></i> <span>Mail</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{ path('boutiques_index') }}\">Nouveau Mail</a></li>
                        <li><a href=\"{{ path('boutiques_new') }}\">Boite de reception</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"{{ path('affichagePub') }}\"><i class=\"fa fa-link\"></i> <span>Publicité</span> <i class=\"fa fa-angle-left pull-right\"></i></a>

                </li>
                <li class=\"treeview\">
                    <a href=\"{{ path('boutiques_index') }}\"><i class=\"fa fa-link\"></i> <span>Livraison</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{ path('boutiques_index') }}\">Afficher</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"{{ path('boutiques_index') }}\"><i class=\"fa fa-link\"></i> <span>Statistique</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{ path('boutiques_index') }}\">Afficher</a></li>

                    </ul>
                </li>

            {% endif %}
            
            {% if is_granted('ROLE_RESPONSABLE') and not is_granted('ROLE_ADMIN') %}
            <li class=\"treeview\">
              <a><i class=\"fa fa-link\"></i> <span>Ma Boutique</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"{{ path('boutiques_showmaboutique') }}\">Afficher ma boutique</a></li>
                <li><a href=\"{{ path('boutiques_edit_maboutique') }}\">Editer Ma boutique</a></li>
              </ul>
            </li>
            
            <li class=\"\">
                <a href=\"{{ path('cartefidelites_cartesmaboutique') }}\"><i class=\"fa fa-link\"></i> <span>Cartes Fidelites</span></a>
            </li>
            
            <li class=\"\">
                <a href=\"{{ path('abonnement_abonnementsmaboutique') }}\"><i class=\"fa fa-link\"></i> <span>Abonnées</span></a>
            </li>
            
            {% endif %}


            
            <li class=\"treeview\">
              <a href=\"{ { path('invitation') }}\"><i class=\"fa fa-link\"></i> <span>Invitation</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"{ { path('invitation') }}\">liste des dossiers</a></li>
                <li><a href=\"{ { path('invitation_new') }}\">Ajouter un dossier</a></li>
              </ul>
            </li>
    <li class=\"treeview\">
        <a href=\"\"><i class=\"fa fa-link\"></i> <span>Produits</span> <i class=\"fa fa-angle-left pull-right\"></i></a>

        <ul class=\"treeview-menu\">
            <li><a href=\"{{ path('afficherProduit') }}\">afficher Produits</a></li>
            <li><a href=\"{{ path('ajoutChaussure') }}\">ajouter Chaussure</a></li>
            <li><a href=\"{{ path('ajoutAccessoire') }}\">ajouter Accecoire</a></li>
            <li><a href=\"{{ path('ajoutVetement') }}\">ajouter Vetement</a></li>

        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"{{ path('afficherO') }}\"><i class=\"fa fa-link\"></i> <span>Offres</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
        <ul class=\"treeview-menu\">
            <li><a href=\"{{ path('afficherO') }}\">liste Offres</a></li>
            <li><a href=\"{{ path('ajouterOF') }}\">Ajouter Offres </a></li>
        </ul>
    </li>


    {#settings#}
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"header\">Paramètres</li>
            <li class=\"treeview\">
              <a href=\"{{ path('categorie_index') }}\"><i class=\"fa fa-link\"></i> <span>Categories</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                  <li><a href=\"{{ path('categorie_index') }}\">Liste Categories</a></li>
                <li><a href=\"{{ path('categorie_new') }}\">Ajouter une categorie</a></li>
              </ul>
            </li>
            {% endif %}
          </ul>", "include/menu.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\views\\include\\menu.html.twig");
    }
}
