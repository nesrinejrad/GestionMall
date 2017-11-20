<?php

/* MyAppUserBundle:demande:show.html.twig */
class __TwigTemplate_a9f38c51ae3e3a6a3751e7a846d6ad36542bd475c83de9639e7eaad14aae7cde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:base.html.twig", "MyAppUserBundle:demande:show.html.twig", 1);
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
        $__internal_babcb4449ee74d1c59c09be2a54129c1ed778d24c4b6df43fdc7db88cd82de97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babcb4449ee74d1c59c09be2a54129c1ed778d24c4b6df43fdc7db88cd82de97->enter($__internal_babcb4449ee74d1c59c09be2a54129c1ed778d24c4b6df43fdc7db88cd82de97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:demande:show.html.twig"));

        $__internal_6960e0f5b00f371543faa288e573cd145009c22a2d7feadf0fc07c774f897b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6960e0f5b00f371543faa288e573cd145009c22a2d7feadf0fc07c774f897b44->enter($__internal_6960e0f5b00f371543faa288e573cd145009c22a2d7feadf0fc07c774f897b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:demande:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_babcb4449ee74d1c59c09be2a54129c1ed778d24c4b6df43fdc7db88cd82de97->leave($__internal_babcb4449ee74d1c59c09be2a54129c1ed778d24c4b6df43fdc7db88cd82de97_prof);

        
        $__internal_6960e0f5b00f371543faa288e573cd145009c22a2d7feadf0fc07c774f897b44->leave($__internal_6960e0f5b00f371543faa288e573cd145009c22a2d7feadf0fc07c774f897b44_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9898db1d65edf9115d61c701c137655b0a46f710eeb797c7a6a02ca25747be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9898db1d65edf9115d61c701c137655b0a46f710eeb797c7a6a02ca25747be3->enter($__internal_d9898db1d65edf9115d61c701c137655b0a46f710eeb797c7a6a02ca25747be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_346a3505c65a84a549a8ac0a9fb35e33bae5864056c7151288008e916b72717a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346a3505c65a84a549a8ac0a9fb35e33bae5864056c7151288008e916b72717a->enter($__internal_346a3505c65a84a549a8ac0a9fb35e33bae5864056c7151288008e916b72717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <table class=\"table table-hover\">
                <tr>
                    <td>Code :</td><td> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>
                        Nom :</td><td> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Prenom :</td><td> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Email :</td><td> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Telephone :</td><td> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telephone", array()), "html", null, true);
        echo "</td>
                </tr>
            </table>
            </div>
                <div class=\"box-footer clearfix no-border\">
                     
            <a class=\"btn btn-default pull-right\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_index");
        echo "\">
                Retourner à la liste
            </a> 
            <a class=\"btn btn-success pull-right\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_accepter", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Autoriser l'inscription
            </a> 
            <a class=\"btn btn-danger pull-right\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_annuler", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Annuler
            </a> 
            </div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
";
        
        $__internal_346a3505c65a84a549a8ac0a9fb35e33bae5864056c7151288008e916b72717a->leave($__internal_346a3505c65a84a549a8ac0a9fb35e33bae5864056c7151288008e916b72717a_prof);

        
        $__internal_d9898db1d65edf9115d61c701c137655b0a46f710eeb797c7a6a02ca25747be3->leave($__internal_d9898db1d65edf9115d61c701c137655b0a46f710eeb797c7a6a02ca25747be3_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:demande:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  118 => 54,  112 => 51,  103 => 45,  97 => 42,  91 => 39,  85 => 36,  78 => 32,  49 => 5,  40 => 4,  11 => 1,);
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
            <table class=\"table table-hover\">
                <tr>
                    <td>Code :</td><td> {{ entity.id }}</td>
                </tr>
                <tr>
                    <td>
                        Nom :</td><td> {{ entity.nom }}</td>
                </tr>
                <tr>
                    <td>Prenom :</td><td> {{ entity.prenom }}</td>
                </tr>
                <tr>
                    <td>Email :</td><td> {{ entity.email }}</td>
                </tr>
                <tr>
                    <td>Telephone :</td><td> {{ entity.telephone }}</td>
                </tr>
            </table>
            </div>
                <div class=\"box-footer clearfix no-border\">
                     
            <a class=\"btn btn-default pull-right\" href=\"{{ path('demande_index') }}\">
                Retourner à la liste
            </a> 
            <a class=\"btn btn-success pull-right\" href=\"{{ path('demande_accepter', { 'id': entity.id }) }}\">
                Autoriser l'inscription
            </a> 
            <a class=\"btn btn-danger pull-right\" href=\"{{ path('demande_annuler', { 'id': entity.id }) }}\">
                Annuler
            </a> 
            </div>
            </div>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
{% endblock %}
", "MyAppUserBundle:demande:show.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/demande/show.html.twig");
    }
}
