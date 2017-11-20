<?php

/* MyAppUserBundle:boutiques:new.html.twig */
class __TwigTemplate_ef84e0f8660a31e11343ad5e841640cefe423d4b179869759068805f5be4bb5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:base.html.twig", "MyAppUserBundle:boutiques:new.html.twig", 1);
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
        $__internal_2f6f7dd2a609edea60a36c6fa94c59c79e10959f5369a7d3f74703d96b5324cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6f7dd2a609edea60a36c6fa94c59c79e10959f5369a7d3f74703d96b5324cb->enter($__internal_2f6f7dd2a609edea60a36c6fa94c59c79e10959f5369a7d3f74703d96b5324cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:boutiques:new.html.twig"));

        $__internal_64ffb9acb3769b386e5f46068cf2f23be5e349aabff25e362fe97ea50860a4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ffb9acb3769b386e5f46068cf2f23be5e349aabff25e362fe97ea50860a4e9->enter($__internal_64ffb9acb3769b386e5f46068cf2f23be5e349aabff25e362fe97ea50860a4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:boutiques:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6f7dd2a609edea60a36c6fa94c59c79e10959f5369a7d3f74703d96b5324cb->leave($__internal_2f6f7dd2a609edea60a36c6fa94c59c79e10959f5369a7d3f74703d96b5324cb_prof);

        
        $__internal_64ffb9acb3769b386e5f46068cf2f23be5e349aabff25e362fe97ea50860a4e9->leave($__internal_64ffb9acb3769b386e5f46068cf2f23be5e349aabff25e362fe97ea50860a4e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fc9de2b352b6e67c8c286f826e793556ed48be9c5ee66033fb9696186a162b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc9de2b352b6e67c8c286f826e793556ed48be9c5ee66033fb9696186a162b8->enter($__internal_2fc9de2b352b6e67c8c286f826e793556ed48be9c5ee66033fb9696186a162b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef007dfafe965cf7eab57cd93fd775ef6f4212c34bd6013efea37d8034ae737b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef007dfafe965cf7eab57cd93fd775ef6f4212c34bd6013efea37d8034ae737b->enter($__internal_ef007dfafe965cf7eab57cd93fd775ef6f4212c34bd6013efea37d8034ae737b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Boutique creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ef007dfafe965cf7eab57cd93fd775ef6f4212c34bd6013efea37d8034ae737b->leave($__internal_ef007dfafe965cf7eab57cd93fd775ef6f4212c34bd6013efea37d8034ae737b_prof);

        
        $__internal_2fc9de2b352b6e67c8c286f826e793556ed48be9c5ee66033fb9696186a162b8->leave($__internal_2fc9de2b352b6e67c8c286f826e793556ed48be9c5ee66033fb9696186a162b8_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:boutiques:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Boutique creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('boutiques_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MyAppUserBundle:boutiques:new.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/boutiques/new.html.twig");
    }
}
