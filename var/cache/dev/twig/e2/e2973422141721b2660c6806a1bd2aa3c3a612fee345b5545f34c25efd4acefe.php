<?php

/* abonnement/abonnementsboutique.html.twig */
class __TwigTemplate_12bf4d6da9b3b43298f60d8d1b7edf2469034965e287d82b5cfd65ef89846c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:base.html.twig", "abonnement/abonnementsboutique.html.twig", 1);
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
        $__internal_3714854432814a5387d40d43b592c21cb1dbdbfd3744ab2c9c913f910a7e26ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3714854432814a5387d40d43b592c21cb1dbdbfd3744ab2c9c913f910a7e26ac->enter($__internal_3714854432814a5387d40d43b592c21cb1dbdbfd3744ab2c9c913f910a7e26ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "abonnement/abonnementsboutique.html.twig"));

        $__internal_0dc44e23e63acece3ce24614b321a7c5fabd463859af79d6f57649ae61c53d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc44e23e63acece3ce24614b321a7c5fabd463859af79d6f57649ae61c53d0f->enter($__internal_0dc44e23e63acece3ce24614b321a7c5fabd463859af79d6f57649ae61c53d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "abonnement/abonnementsboutique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3714854432814a5387d40d43b592c21cb1dbdbfd3744ab2c9c913f910a7e26ac->leave($__internal_3714854432814a5387d40d43b592c21cb1dbdbfd3744ab2c9c913f910a7e26ac_prof);

        
        $__internal_0dc44e23e63acece3ce24614b321a7c5fabd463859af79d6f57649ae61c53d0f->leave($__internal_0dc44e23e63acece3ce24614b321a7c5fabd463859af79d6f57649ae61c53d0f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_538353004434398450ac68136fd971f56f8d5448c35ca68ad3e01445b688e330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538353004434398450ac68136fd971f56f8d5448c35ca68ad3e01445b688e330->enter($__internal_538353004434398450ac68136fd971f56f8d5448c35ca68ad3e01445b688e330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b36bcbc722bb878fd1e581b217c02dc1d08f58b0a688cfe0d8471953995b7894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36bcbc722bb878fd1e581b217c02dc1d08f58b0a688cfe0d8471953995b7894->enter($__internal_b36bcbc722bb878fd1e581b217c02dc1d08f58b0a688cfe0d8471953995b7894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                    <h3 class=\"box-title\">Boutiques</h3>
                    <a class=\"btn btn-default pull-right\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_new");
        echo "\">
                        Ajouter une boutique
                    </a>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Abonnée</th>
                <th>Date d'abonnement</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) ? $context["abonnements"] : $this->getContext($context, "abonnements")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abonnement"], "client", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abonnement"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "dateAbonnement", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
</div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
";
        
        $__internal_b36bcbc722bb878fd1e581b217c02dc1d08f58b0a688cfe0d8471953995b7894->leave($__internal_b36bcbc722bb878fd1e581b217c02dc1d08f58b0a688cfe0d8471953995b7894_prof);

        
        $__internal_538353004434398450ac68136fd971f56f8d5448c35ca68ad3e01445b688e330->leave($__internal_538353004434398450ac68136fd971f56f8d5448c35ca68ad3e01445b688e330_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/abonnementsboutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  103 => 44,  97 => 43,  94 => 42,  90 => 41,  73 => 27,  49 => 5,  40 => 4,  11 => 1,);
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

                    <h3 class=\"box-title\">Boutiques</h3>
                    <a class=\"btn btn-default pull-right\" href=\"{{ path('boutiques_new') }}\">
                        Ajouter une boutique
                    </a>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Abonnée</th>
                <th>Date d'abonnement</th>
            </tr>
        </thead>
        <tbody>
        {% for abonnement in abonnements %}
            <tr>
                <td>{{ abonnement.client.prenom }} {{ abonnement.client.nom }}</td>
                <td>{{ abonnement.dateAbonnement }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
{% endblock %}
", "abonnement/abonnementsboutique.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\views\\abonnement\\abonnementsboutique.html.twig");
    }
}
