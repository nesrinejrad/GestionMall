<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a7a31e901e9c7c96980a40ac5271444c9c6c3530644d972994928ef0c8029f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7a31e901e9c7c96980a40ac5271444c9c6c3530644d972994928ef0c8029f2->enter($__internal_0a7a31e901e9c7c96980a40ac5271444c9c6c3530644d972994928ef0c8029f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_328dab6491025cd496397093372708b85bba32b210eb23c17e8829ebfc0c8de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328dab6491025cd496397093372708b85bba32b210eb23c17e8829ebfc0c8de4->enter($__internal_328dab6491025cd496397093372708b85bba32b210eb23c17e8829ebfc0c8de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a7a31e901e9c7c96980a40ac5271444c9c6c3530644d972994928ef0c8029f2->leave($__internal_0a7a31e901e9c7c96980a40ac5271444c9c6c3530644d972994928ef0c8029f2_prof);

        
        $__internal_328dab6491025cd496397093372708b85bba32b210eb23c17e8829ebfc0c8de4->leave($__internal_328dab6491025cd496397093372708b85bba32b210eb23c17e8829ebfc0c8de4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea415d3409536d7767382b7296a81b0022ef6afc3a7d728019d111a10068e972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea415d3409536d7767382b7296a81b0022ef6afc3a7d728019d111a10068e972->enter($__internal_ea415d3409536d7767382b7296a81b0022ef6afc3a7d728019d111a10068e972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_16630e2cdef64216f4c902ddef91a541de539cc9a87d6ed01024f3b0d7e7b16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16630e2cdef64216f4c902ddef91a541de539cc9a87d6ed01024f3b0d7e7b16d->enter($__internal_16630e2cdef64216f4c902ddef91a541de539cc9a87d6ed01024f3b0d7e7b16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16630e2cdef64216f4c902ddef91a541de539cc9a87d6ed01024f3b0d7e7b16d->leave($__internal_16630e2cdef64216f4c902ddef91a541de539cc9a87d6ed01024f3b0d7e7b16d_prof);

        
        $__internal_ea415d3409536d7767382b7296a81b0022ef6afc3a7d728019d111a10068e972->leave($__internal_ea415d3409536d7767382b7296a81b0022ef6afc3a7d728019d111a10068e972_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5999da9433b9fb65ea1e10f7fb4eaa00e8b6c95fb87f09a3971e0fa9f8ada6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5999da9433b9fb65ea1e10f7fb4eaa00e8b6c95fb87f09a3971e0fa9f8ada6f0->enter($__internal_5999da9433b9fb65ea1e10f7fb4eaa00e8b6c95fb87f09a3971e0fa9f8ada6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_742a86279d4f551100a365fc8d8966436f99802da896156bfd8bf24a3ba23285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742a86279d4f551100a365fc8d8966436f99802da896156bfd8bf24a3ba23285->enter($__internal_742a86279d4f551100a365fc8d8966436f99802da896156bfd8bf24a3ba23285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_742a86279d4f551100a365fc8d8966436f99802da896156bfd8bf24a3ba23285->leave($__internal_742a86279d4f551100a365fc8d8966436f99802da896156bfd8bf24a3ba23285_prof);

        
        $__internal_5999da9433b9fb65ea1e10f7fb4eaa00e8b6c95fb87f09a3971e0fa9f8ada6f0->leave($__internal_5999da9433b9fb65ea1e10f7fb4eaa00e8b6c95fb87f09a3971e0fa9f8ada6f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36894dab50c471e571213312dc0dadc70a64fce692a1a61fa1290d28072f7e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36894dab50c471e571213312dc0dadc70a64fce692a1a61fa1290d28072f7e80->enter($__internal_36894dab50c471e571213312dc0dadc70a64fce692a1a61fa1290d28072f7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9734e12fa33888f5d0774c6ff4ed68b0df1319074768d1606afa33ab2c1ea47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9734e12fa33888f5d0774c6ff4ed68b0df1319074768d1606afa33ab2c1ea47b->enter($__internal_9734e12fa33888f5d0774c6ff4ed68b0df1319074768d1606afa33ab2c1ea47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9734e12fa33888f5d0774c6ff4ed68b0df1319074768d1606afa33ab2c1ea47b->leave($__internal_9734e12fa33888f5d0774c6ff4ed68b0df1319074768d1606afa33ab2c1ea47b_prof);

        
        $__internal_36894dab50c471e571213312dc0dadc70a64fce692a1a61fa1290d28072f7e80->leave($__internal_36894dab50c471e571213312dc0dadc70a64fce692a1a61fa1290d28072f7e80_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
