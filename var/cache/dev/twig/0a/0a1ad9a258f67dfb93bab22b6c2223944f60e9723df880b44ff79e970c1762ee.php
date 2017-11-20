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
        $__internal_7163cc7c63ae86bd199880c89830e03e21d10f36a776741de6e5342d47c18842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7163cc7c63ae86bd199880c89830e03e21d10f36a776741de6e5342d47c18842->enter($__internal_7163cc7c63ae86bd199880c89830e03e21d10f36a776741de6e5342d47c18842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/menu.html.twig"));

        $__internal_8e33c135e3244d285611c19c4f55bf2a2ce0afca44cf80ea0ac39c7af8cba600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e33c135e3244d285611c19c4f55bf2a2ce0afca44cf80ea0ac39c7af8cba600->enter($__internal_8e33c135e3244d285611c19c4f55bf2a2ce0afca44cf80ea0ac39c7af8cba600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "include/menu.html.twig"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Produit</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">Chaussure</a></li>
                        <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_new");
            echo "\">Accecoire</a></li>
                        <li><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_new");
            echo "\">Vetement</a></li>
                        <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_new");
            echo "\">Afficher tous</a></li>
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Publicité</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">Ajouter</a></li>
                        <li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_new");
            echo "\">Modifier</a></li>
                        <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_new");
            echo "\">Supprimer</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Livraison</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">Afficher</a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Statistique</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
            echo "\">Afficher</a></li>

                    </ul>
                </li>

            ";
        }
        // line 80
        echo "            
            ";
        // line 81
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 82
            echo "            <li class=\"treeview\">
              <a><i class=\"fa fa-link\"></i> <span>Ma Boutique</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_showmaboutique");
            echo "\">Afficher ma boutique</a></li>
                <li><a href=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_edit_maboutique");
            echo "\">Editer Ma boutique</a></li>
              </ul>
            </li>
            
            <li class=\"\">
                <a href=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelites_cartesmaboutique");
            echo "\"><i class=\"fa fa-link\"></i> <span>Cartes Fidelites</span></a>
            </li>
            
            <li class=\"\">
                <a href=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnement_abonnementsmaboutique");
            echo "\"><i class=\"fa fa-link\"></i> <span>Abonnées</span></a>
            </li>
            
            ";
        }
        // line 99
        echo "

            
            <li class=\"treeview\">
              <a href=\"{ { path('invitation') }}\"><i class=\"fa fa-link\"></i> <span>Invitation</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"{ { path('invitation') }}\">liste des dossiers</a></li>
                <li><a href=\"{ { path('invitation_new') }}\">Ajouter un dossier</a></li>
              </ul>
            </li>
            
            ";
        // line 111
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 112
            echo "            <li class=\"header\">Paramètres</li>
            <li class=\"treeview\">
              <a href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
            echo "\"><i class=\"fa fa-link\"></i> <span>Categories</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                  <li><a href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_index");
            echo "\">Liste Categories</a></li>
                <li><a href=\"";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
            echo "\">Ajouter une categorie</a></li>
              </ul>
            </li>
            ";
        }
        // line 121
        echo "          </ul>";
        
        $__internal_7163cc7c63ae86bd199880c89830e03e21d10f36a776741de6e5342d47c18842->leave($__internal_7163cc7c63ae86bd199880c89830e03e21d10f36a776741de6e5342d47c18842_prof);

        
        $__internal_8e33c135e3244d285611c19c4f55bf2a2ce0afca44cf80ea0ac39c7af8cba600->leave($__internal_8e33c135e3244d285611c19c4f55bf2a2ce0afca44cf80ea0ac39c7af8cba600_prof);

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
        return array (  262 => 121,  255 => 117,  251 => 116,  246 => 114,  242 => 112,  239 => 111,  226 => 99,  219 => 95,  212 => 91,  204 => 86,  200 => 85,  195 => 82,  193 => 81,  190 => 80,  181 => 74,  176 => 72,  168 => 67,  163 => 65,  155 => 60,  151 => 59,  147 => 58,  142 => 56,  134 => 51,  130 => 50,  125 => 48,  118 => 44,  113 => 42,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  89 => 33,  82 => 29,  78 => 28,  73 => 26,  65 => 21,  61 => 20,  56 => 18,  48 => 13,  44 => 12,  39 => 10,  36 => 9,  34 => 8,  30 => 6,  25 => 1,);
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
                    <a href=\"{{ path('boutiques_index') }}\"><i class=\"fa fa-link\"></i> <span>Produit</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{ path('boutiques_index') }}\">Chaussure</a></li>
                        <li><a href=\"{{ path('boutiques_new') }}\">Accecoire</a></li>
                        <li><a href=\"{{ path('boutiques_new') }}\">Vetement</a></li>
                        <li><a href=\"{{ path('boutiques_new') }}\">Afficher tous</a></li>
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
                    <a href=\"{{ path('boutiques_index') }}\"><i class=\"fa fa-link\"></i> <span>Publicité</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"{{ path('boutiques_index') }}\">Ajouter</a></li>
                        <li><a href=\"{{ path('boutiques_new') }}\">Modifier</a></li>
                        <li><a href=\"{{ path('boutiques_new') }}\">Supprimer</a></li>

                    </ul>
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
