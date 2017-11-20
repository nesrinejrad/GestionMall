<?php

/* MyAppUserBundle:demande:index.html.twig */
class __TwigTemplate_02fa2ef1b46efc28bac01f9d417079a19b34bce916ad439998e69cb963ae174d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:base.html.twig", "MyAppUserBundle:demande:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9685e16f329a066649f9b1339cf1d99086cc248d3309e6c234ddc7365b4db937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9685e16f329a066649f9b1339cf1d99086cc248d3309e6c234ddc7365b4db937->enter($__internal_9685e16f329a066649f9b1339cf1d99086cc248d3309e6c234ddc7365b4db937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:demande:index.html.twig"));

        $__internal_622af46c89b8b15d5c54481463b2566f4983e8fb56e2e9c7996d093ce499d5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622af46c89b8b15d5c54481463b2566f4983e8fb56e2e9c7996d093ce499d5d8->enter($__internal_622af46c89b8b15d5c54481463b2566f4983e8fb56e2e9c7996d093ce499d5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:demande:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9685e16f329a066649f9b1339cf1d99086cc248d3309e6c234ddc7365b4db937->leave($__internal_9685e16f329a066649f9b1339cf1d99086cc248d3309e6c234ddc7365b4db937_prof);

        
        $__internal_622af46c89b8b15d5c54481463b2566f4983e8fb56e2e9c7996d093ce499d5d8->leave($__internal_622af46c89b8b15d5c54481463b2566f4983e8fb56e2e9c7996d093ce499d5d8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_340a4c28c8aa4493d9eaeb1a1470950ee36de125c43588557619b967fb65c0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340a4c28c8aa4493d9eaeb1a1470950ee36de125c43588557619b967fb65c0ec->enter($__internal_340a4c28c8aa4493d9eaeb1a1470950ee36de125c43588557619b967fb65c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f5bf7c84ed6291297786e99c59d5d484c12a413e2a7b8844b810f7f826d8b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5bf7c84ed6291297786e99c59d5d484c12a413e2a7b8844b810f7f826d8b4a->enter($__internal_7f5bf7c84ed6291297786e99c59d5d484c12a413e2a7b8844b810f7f826d8b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <!-- Your Page Content Here -->
            <div class=\"box box-primary\">
                <div class=\"box-header ui-sortable-handle\" style=\"cursor: move;\">
                    <i class=\"ion ion-clipboard\"></i>

                    <h3 class=\"box-title\">Demande</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "annulee"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 31
            echo "                        <div class=\"alert alert-danger alert-dismissible\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <h4><i class=\"icon fa fa-ban\"></i> Annulation d'une demande de demande!</h4>
                            ";
            // line 34
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "acceptee"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 38
            echo "                        <div class=\"alert alert-success alert-dismissible\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <h4><i class=\"icon fa fa-check\"></i> Acceptation d'une demande de demande!</h4>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    <table class=\"table table-bordered table-hover\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Progression</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 59
            echo "                                <tr>
                                    <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 66
            if (($this->getAttribute($context["entity"], "etat", array()) == 0)) {
                // line 67
                echo "                                            <span class=\"pull-left badge bg-blue\">Nouvelle demande</span>
                                        ";
            }
            // line 69
            echo "                                        ";
            if (($this->getAttribute($context["entity"], "etat", array()) == 1)) {
                // line 70
                echo "                                            <span class=\"pull-left badge bg-green\">Demande confirmée</span>
                                        ";
            }
            // line 72
            echo "                                        ";
            if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                // line 73
                echo "                                            <span class=\"pull-left badge bg-red\">Demande annumée</span>
                                        ";
            }
            // line 75
            echo "                                    </td>
                                    <td>
                                        <div class=\"progress progress-xs\">
                                            ";
            // line 78
            if (($this->getAttribute($context["entity"], "etat", array()) == 0)) {
                // line 79
                echo "                                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 50%\" </div>
                                            ";
            }
            // line 81
            echo "                                            ";
            if (($this->getAttribute($context["entity"], "etat", array()) == 2)) {
                // line 82
                echo "                                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 100%\" </div>
                                            ";
            }
            // line 84
            echo "                                            ";
            if (($this->getAttribute($context["entity"], "etat", array()) == 1)) {
                // line 85
                echo "                                                <div class=\"progress-bar progress-bar-success\" style=\"width: 100%\" </div>
                                            ";
            }
            // line 87
            echo "                                        </div>
                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary btn-sm pull-right\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"box-footer clearfix no-border\">

                    <a class=\"btn btn-default pull-right\" href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_new");
        echo "\">
                        Ajouter une demande
                    </a>
                </div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
";
        
        $__internal_7f5bf7c84ed6291297786e99c59d5d484c12a413e2a7b8844b810f7f826d8b4a->leave($__internal_7f5bf7c84ed6291297786e99c59d5d484c12a413e2a7b8844b810f7f826d8b4a_prof);

        
        $__internal_340a4c28c8aa4493d9eaeb1a1470950ee36de125c43588557619b967fb65c0ec->leave($__internal_340a4c28c8aa4493d9eaeb1a1470950ee36de125c43588557619b967fb65c0ec_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:demande:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 99,  219 => 94,  209 => 90,  204 => 87,  200 => 85,  197 => 84,  193 => 82,  190 => 81,  186 => 79,  184 => 78,  179 => 75,  175 => 73,  172 => 72,  168 => 70,  165 => 69,  161 => 67,  159 => 66,  154 => 64,  150 => 63,  146 => 62,  142 => 61,  136 => 60,  133 => 59,  129 => 58,  113 => 44,  104 => 41,  99 => 38,  94 => 37,  85 => 34,  80 => 31,  76 => 30,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MyAppUserBundle:Default:base.html.twig' %}


{% block body -%}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <!-- Your Page Content Here -->
            <div class=\"box box-primary\">
                <div class=\"box-header ui-sortable-handle\" style=\"cursor: move;\">
                    <i class=\"ion ion-clipboard\"></i>

                    <h3 class=\"box-title\">Demande</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    {% for flash_message in app.session.flashBag.get('annulee') %}
                        <div class=\"alert alert-danger alert-dismissible\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <h4><i class=\"icon fa fa-ban\"></i> Annulation d'une demande de demande!</h4>
                            {{ flash_message }}
                        </div>
                    {% endfor %}
                    {% for flash_message in app.session.flashBag.get('acceptee') %}
                        <div class=\"alert alert-success alert-dismissible\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <h4><i class=\"icon fa fa-check\"></i> Acceptation d'une demande de demande!</h4>
                            {{ flash_message }}
                        </div>
                    {% endfor %}
                    <table class=\"table table-bordered table-hover\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Progression</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for entity in entities %}
                                <tr>
                                    <td><a href=\"{{ path('demande_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                                    <td>{{ entity.nom }}</td>
                                    <td>{{ entity.prenom }}</td>
                                    <td>{{ entity.email }}</td>
                                    <td>{{ entity.telephone }}</td>
                                    <td>
                                        {% if entity.etat == 0 %}
                                            <span class=\"pull-left badge bg-blue\">Nouvelle demande</span>
                                        {% endif %}
                                        {% if entity.etat == 1 %}
                                            <span class=\"pull-left badge bg-green\">Demande confirmée</span>
                                        {% endif %}
                                        {% if entity.etat == 2 %}
                                            <span class=\"pull-left badge bg-red\">Demande annumée</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <div class=\"progress progress-xs\">
                                            {% if entity.etat == 0 %}
                                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 50%\" </div>
                                            {% endif %}
                                            {% if entity.etat == 2 %}
                                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 100%\" </div>
                                            {% endif %}
                                            {% if entity.etat == 1 %}
                                                <div class=\"progress-bar progress-bar-success\" style=\"width: 100%\" </div>
                                            {% endif %}
                                        </div>
                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary btn-sm pull-right\" href=\"{{ path('demande_show', { 'id': entity.id }) }}\">Afficher</a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"box-footer clearfix no-border\">

                    <a class=\"btn btn-default pull-right\" href=\"{{ path('demande_new') }}\">
                        Ajouter une demande
                    </a>
                </div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
{% endblock %}
", "MyAppUserBundle:demande:index.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/demande/index.html.twig");
    }
}
