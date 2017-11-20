<?php

/* cartefidelites/cartesboutique.html.twig */
class __TwigTemplate_bdfb9d3963df6f679c9826a75bf186b6646248227710122882865a760fd225f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:base.html.twig", "cartefidelites/cartesboutique.html.twig", 1);
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
        $__internal_4479e41c8acc8c6db24cdc628149816a494602de71c1a556f16e7290b2838f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4479e41c8acc8c6db24cdc628149816a494602de71c1a556f16e7290b2838f25->enter($__internal_4479e41c8acc8c6db24cdc628149816a494602de71c1a556f16e7290b2838f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartefidelites/cartesboutique.html.twig"));

        $__internal_1028f571b969df8303204ff6801a55e7262cfc201d3c97d4f74f90458a6f262e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1028f571b969df8303204ff6801a55e7262cfc201d3c97d4f74f90458a6f262e->enter($__internal_1028f571b969df8303204ff6801a55e7262cfc201d3c97d4f74f90458a6f262e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cartefidelites/cartesboutique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4479e41c8acc8c6db24cdc628149816a494602de71c1a556f16e7290b2838f25->leave($__internal_4479e41c8acc8c6db24cdc628149816a494602de71c1a556f16e7290b2838f25_prof);

        
        $__internal_1028f571b969df8303204ff6801a55e7262cfc201d3c97d4f74f90458a6f262e->leave($__internal_1028f571b969df8303204ff6801a55e7262cfc201d3c97d4f74f90458a6f262e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa2f5d568ccd8a3a649e2cbafa404e178318c6e9cd6ce3fa15948d36ee9d058e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2f5d568ccd8a3a649e2cbafa404e178318c6e9cd6ce3fa15948d36ee9d058e->enter($__internal_aa2f5d568ccd8a3a649e2cbafa404e178318c6e9cd6ce3fa15948d36ee9d058e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd42c75cdd5d5fe52f3ad9fbf1c8922793913f9d92dc471dfd5c638f3518a20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd42c75cdd5d5fe52f3ad9fbf1c8922793913f9d92dc471dfd5c638f3518a20f->enter($__internal_dd42c75cdd5d5fe52f3ad9fbf1c8922793913f9d92dc471dfd5c638f3518a20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Code</th>
                <th>Proprietaire</th>
                <th>Datecreationcarte</th>
                <th>Soldecarte</th>
                <th>Evaluationcarte</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carteFidelites"]) ? $context["carteFidelites"] : $this->getContext($context, "carteFidelites")));
        foreach ($context['_seq'] as $context["_key"] => $context["carteFidelite"]) {
            // line 46
            echo "            <tr>
                <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelites_show", array("id" => $this->getAttribute($context["carteFidelite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carteFidelite"], "code", array()), "html", null, true);
            echo "</a></td>
                <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carteFidelite"], "client", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carteFidelite"], "client", array()), "nom", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["carteFidelite"], "dateCreationCarte", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["carteFidelite"], "soldeCarte", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["carteFidelite"], "evaluationCarte", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelites_show", array("id" => $this->getAttribute($context["carteFidelite"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cartefidelites_edit", array("id" => $this->getAttribute($context["carteFidelite"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carteFidelite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
</div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
";
        
        $__internal_dd42c75cdd5d5fe52f3ad9fbf1c8922793913f9d92dc471dfd5c638f3518a20f->leave($__internal_dd42c75cdd5d5fe52f3ad9fbf1c8922793913f9d92dc471dfd5c638f3518a20f_prof);

        
        $__internal_aa2f5d568ccd8a3a649e2cbafa404e178318c6e9cd6ce3fa15948d36ee9d058e->leave($__internal_aa2f5d568ccd8a3a649e2cbafa404e178318c6e9cd6ce3fa15948d36ee9d058e_prof);

    }

    public function getTemplateName()
    {
        return "cartefidelites/cartesboutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 64,  134 => 58,  128 => 55,  121 => 51,  117 => 50,  113 => 49,  107 => 48,  101 => 47,  98 => 46,  94 => 45,  73 => 27,  49 => 5,  40 => 4,  11 => 1,);
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
                <th>Code</th>
                <th>Proprietaire</th>
                <th>Datecreationcarte</th>
                <th>Soldecarte</th>
                <th>Evaluationcarte</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for carteFidelite in carteFidelites %}
            <tr>
                <td><a href=\"{{ path('cartefidelites_show', { 'id': carteFidelite.id }) }}\">{{ carteFidelite.code }}</a></td>
                <th>{{ carteFidelite.client.prenom }} {{ carteFidelite.client.nom }}</th>
                <td>{{ carteFidelite.dateCreationCarte }}</td>
                <td>{{ carteFidelite.soldeCarte }}</td>
                <td>{{ carteFidelite.evaluationCarte }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('cartefidelites_show', { 'id': carteFidelite.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('cartefidelites_edit', { 'id': carteFidelite.id }) }}\">edit</a>
                        </li>
                    </ul>
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
", "cartefidelites/cartesboutique.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\views\\cartefidelites\\cartesboutique.html.twig");
    }
}
