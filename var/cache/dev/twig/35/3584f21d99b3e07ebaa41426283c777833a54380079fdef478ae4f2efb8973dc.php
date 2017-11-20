<?php

/* MyAppUserBundle:Responsable:index.html.twig */
class __TwigTemplate_4d636ac0d04e9a83c181bc07008454f4ee5179b0af4db4a974aa0b191541293d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:base.html.twig", "MyAppUserBundle:Responsable:index.html.twig", 1);
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
        $__internal_98e6a35d98659a1b60da01638a706163c3c7b8f741c4e83c6c682ebaaf1a2ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e6a35d98659a1b60da01638a706163c3c7b8f741c4e83c6c682ebaaf1a2ec5->enter($__internal_98e6a35d98659a1b60da01638a706163c3c7b8f741c4e83c6c682ebaaf1a2ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:Responsable:index.html.twig"));

        $__internal_8f9bbaa8ad9a7b611d644d05dab0afe2028bc85522723d20d923972898e59801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9bbaa8ad9a7b611d644d05dab0afe2028bc85522723d20d923972898e59801->enter($__internal_8f9bbaa8ad9a7b611d644d05dab0afe2028bc85522723d20d923972898e59801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:Responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e6a35d98659a1b60da01638a706163c3c7b8f741c4e83c6c682ebaaf1a2ec5->leave($__internal_98e6a35d98659a1b60da01638a706163c3c7b8f741c4e83c6c682ebaaf1a2ec5_prof);

        
        $__internal_8f9bbaa8ad9a7b611d644d05dab0afe2028bc85522723d20d923972898e59801->leave($__internal_8f9bbaa8ad9a7b611d644d05dab0afe2028bc85522723d20d923972898e59801_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_798fef5a27bb327889131473a807fda0cdca076f3c3e38668e79c89decf4a579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798fef5a27bb327889131473a807fda0cdca076f3c3e38668e79c89decf4a579->enter($__internal_798fef5a27bb327889131473a807fda0cdca076f3c3e38668e79c89decf4a579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97556ee4b7faf0e13ac01167d9666518520bae96bbacba8f8cc11316d3d35ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97556ee4b7faf0e13ac01167d9666518520bae96bbacba8f8cc11316d3d35ade->enter($__internal_97556ee4b7faf0e13ac01167d9666518520bae96bbacba8f8cc11316d3d35ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <table class=\"table table-bordered table-hover\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>username</th>
                                <th>boutique</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "                                <tr>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            if ( !(null === $this->getAttribute($context["entity"], "boutique", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "boutique", array()), "nomboutique", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary btn-sm pull-right\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Afficher</a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"box-footer clearfix no-border\">

                    <a class=\"btn btn-default pull-right\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("responsable_new");
        echo "\">
                        Ajouter un responsable
                    </a>
                </div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
";
        
        $__internal_97556ee4b7faf0e13ac01167d9666518520bae96bbacba8f8cc11316d3d35ade->leave($__internal_97556ee4b7faf0e13ac01167d9666518520bae96bbacba8f8cc11316d3d35ade_prof);

        
        $__internal_798fef5a27bb327889131473a807fda0cdca076f3c3e38668e79c89decf4a579->leave($__internal_798fef5a27bb327889131473a807fda0cdca076f3c3e38668e79c89decf4a579_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Responsable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 59,  130 => 54,  120 => 50,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  95 => 44,  92 => 43,  88 => 42,  49 => 5,  40 => 4,  11 => 1,);
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
                    <table class=\"table table-bordered table-hover\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>username</th>
                                <th>boutique</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for entity in entities %}
                                <tr>
                                    <td>{{ entity.nom }}</td>
                                    <td>{{ entity.prenom }}</td>
                                    <td>{{ entity.email }}</td>
                                    <td>{{ entity.username }}</td>
                                    <td>{% if entity.boutique is not null %} {{ entity.boutique.nomboutique }} {% endif %}</td>
                                    <td>
                                        <a class=\"btn btn-primary btn-sm pull-right\" href=\"{{ path('user_show', { 'id': entity.id }) }}\">Afficher</a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"box-footer clearfix no-border\">

                    <a class=\"btn btn-default pull-right\" href=\"{{ path('responsable_new') }}\">
                        Ajouter un responsable
                    </a>
                </div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
{% endblock %}
", "MyAppUserBundle:Responsable:index.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/Responsable/index.html.twig");
    }
}
