<?php

/* MyAppUserBundle:demande:new.html.twig */
class __TwigTemplate_96e4875192febf5ad8671ce6000a7ea87403ffe4307ee5f0b8c3058daced2b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d18917d87ef408f38d9b2ef18f4f390d3cf5564d1c089cc17f86372a749ef1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18917d87ef408f38d9b2ef18f4f390d3cf5564d1c089cc17f86372a749ef1c2->enter($__internal_d18917d87ef408f38d9b2ef18f4f390d3cf5564d1c089cc17f86372a749ef1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:demande:new.html.twig"));

        $__internal_35a66c80db843a8764f4b4e4223389b650fd581c26654a212bb8850123ff176f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a66c80db843a8764f4b4e4223389b650fd581c26654a212bb8850123ff176f->enter($__internal_35a66c80db843a8764f4b4e4223389b650fd581c26654a212bb8850123ff176f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:demande:new.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d18917d87ef408f38d9b2ef18f4f390d3cf5564d1c089cc17f86372a749ef1c2->leave($__internal_d18917d87ef408f38d9b2ef18f4f390d3cf5564d1c089cc17f86372a749ef1c2_prof);

        
        $__internal_35a66c80db843a8764f4b4e4223389b650fd581c26654a212bb8850123ff176f->leave($__internal_35a66c80db843a8764f4b4e4223389b650fd581c26654a212bb8850123ff176f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c77ee3acde33e282e79559accfaef6d58cb90a63b1c0c6154f066b480b13eee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77ee3acde33e282e79559accfaef6d58cb90a63b1c0c6154f066b480b13eee3->enter($__internal_c77ee3acde33e282e79559accfaef6d58cb90a63b1c0c6154f066b480b13eee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b78e2fb7c421b19240a0f540783f8e8beacf1eb26a7af5d88f7c6d5d71eb162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b78e2fb7c421b19240a0f540783f8e8beacf1eb26a7af5d88f7c6d5d71eb162->enter($__internal_6b78e2fb7c421b19240a0f540783f8e8beacf1eb26a7af5d88f7c6d5d71eb162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_new")));
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("label" => "Nom"));
        echo "
        
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("label" => "Prenom"));
        echo "
        
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("label" => "Email"));
        echo "
        
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("label" => "Telephone"));
        echo "
    <p class=\"signin button\">
        
        <input type=\"submit\" value=\"Demander un code d'inscription\" />
    </p>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6b78e2fb7c421b19240a0f540783f8e8beacf1eb26a7af5d88f7c6d5d71eb162->leave($__internal_6b78e2fb7c421b19240a0f540783f8e8beacf1eb26a7af5d88f7c6d5d71eb162_prof);

        
        $__internal_c77ee3acde33e282e79559accfaef6d58cb90a63b1c0c6154f066b480b13eee3->leave($__internal_c77ee3acde33e282e79559accfaef6d58cb90a63b1c0c6154f066b480b13eee3_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:demande:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  83 => 15,  79 => 14,  74 => 12,  70 => 11,  65 => 9,  61 => 8,  56 => 6,  52 => 5,  47 => 4,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block body -%}
    {#{{ form(form) }}#}
    {{ form_start(form, {'method': 'post', 'action': path('demande_new')} ) }}
        {{ form_label(form.nom) }}
        {{ form_widget(form.nom,{'label':'Nom'}) }}
        
        {{ form_label(form.prenom) }}
        {{ form_widget(form.prenom,{'label':'Prenom'}) }}
        
        {{ form_label(form.email) }}
        {{ form_widget(form.email,{'label':'Email'}) }}
        
        {{ form_label(form.telephone) }}
        {{ form_widget(form.telephone,{'label':'Telephone'}) }}
    <p class=\"signin button\">
        
        <input type=\"submit\" value=\"Demander un code d'inscription\" />
    </p>
{{ form_end(form) }}
{% endblock %}
", "MyAppUserBundle:demande:new.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/demande/new.html.twig");
    }
}
