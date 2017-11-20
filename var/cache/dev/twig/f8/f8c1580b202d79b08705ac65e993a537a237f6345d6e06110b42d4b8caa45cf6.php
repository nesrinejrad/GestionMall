<?php

/* MyAppUserBundle:boutiques:index.html.twig */
class __TwigTemplate_7a746f55d6ee0f924fc1cbf4e62cc7d61f3d7b62eef2856b36f3c372222576c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:base.html.twig", "MyAppUserBundle:boutiques:index.html.twig", 1);
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
        $__internal_a840cf37d843cb715674c6b2cf95ceed1dbff3ba8a7b4e0edc38bf207c86f73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a840cf37d843cb715674c6b2cf95ceed1dbff3ba8a7b4e0edc38bf207c86f73f->enter($__internal_a840cf37d843cb715674c6b2cf95ceed1dbff3ba8a7b4e0edc38bf207c86f73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:boutiques:index.html.twig"));

        $__internal_d4120f35ce5b48a55f18ab54354839248b0d56fd3a846ddc52055ebb6f32f4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4120f35ce5b48a55f18ab54354839248b0d56fd3a846ddc52055ebb6f32f4d7->enter($__internal_d4120f35ce5b48a55f18ab54354839248b0d56fd3a846ddc52055ebb6f32f4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:boutiques:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a840cf37d843cb715674c6b2cf95ceed1dbff3ba8a7b4e0edc38bf207c86f73f->leave($__internal_a840cf37d843cb715674c6b2cf95ceed1dbff3ba8a7b4e0edc38bf207c86f73f_prof);

        
        $__internal_d4120f35ce5b48a55f18ab54354839248b0d56fd3a846ddc52055ebb6f32f4d7->leave($__internal_d4120f35ce5b48a55f18ab54354839248b0d56fd3a846ddc52055ebb6f32f4d7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4f26496cd7b4e0dcdbe61bf08feebcafc109584fdce011e96f9d72e33eda590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f26496cd7b4e0dcdbe61bf08feebcafc109584fdce011e96f9d72e33eda590->enter($__internal_a4f26496cd7b4e0dcdbe61bf08feebcafc109584fdce011e96f9d72e33eda590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85b4d63855e29ef1255d773de2e365a695299b29e7ab10f3636532c572a946d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b4d63855e29ef1255d773de2e365a695299b29e7ab10f3636532c572a946d1->enter($__internal_85b4d63855e29ef1255d773de2e365a695299b29e7ab10f3636532c572a946d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <th>Id</th>
                                <th>Nomboutique</th>
                                <th>Categorie</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boutiques"]) ? $context["boutiques"] : $this->getContext($context, "boutiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 46
            echo "                                <tr>
                                    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_show", array("id" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nomBoutique", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "categorie", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "descriptionBoutique", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-xs btn-primary\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_show", array("id" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a class=\"btn btn-xs btn-success\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_edit", array("id" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
";
        
        $__internal_85b4d63855e29ef1255d773de2e365a695299b29e7ab10f3636532c572a946d1->leave($__internal_85b4d63855e29ef1255d773de2e365a695299b29e7ab10f3636532c572a946d1_prof);

        
        $__internal_a4f26496cd7b4e0dcdbe61bf08feebcafc109584fdce011e96f9d72e33eda590->leave($__internal_a4f26496cd7b4e0dcdbe61bf08feebcafc109584fdce011e96f9d72e33eda590_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:boutiques:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  126 => 55,  120 => 52,  115 => 50,  111 => 49,  107 => 48,  101 => 47,  98 => 46,  94 => 45,  73 => 27,  49 => 5,  40 => 4,  11 => 1,);
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
                                <th>Id</th>
                                <th>Nomboutique</th>
                                <th>Categorie</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for boutique in boutiques %}
                                <tr>
                                    <td><a href=\"{{ path('boutiques_show', { 'id': boutique.id }) }}\">{{ boutique.id }}</a></td>
                                    <td>{{ boutique.nomBoutique }}</td>
                                    <td>{{ boutique.categorie }}</td>
                                    <td>{{ boutique.descriptionBoutique }}</td>
                                    <td>
                                        <a class=\"btn btn-xs btn-primary\" href=\"{{ path('boutiques_show', { 'id': boutique.id }) }}\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a class=\"btn btn-xs btn-success\" href=\"{{ path('boutiques_edit', { 'id': boutique.id }) }}\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </a>
                                    </td>
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
", "MyAppUserBundle:boutiques:index.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/boutiques/index.html.twig");
    }
}
