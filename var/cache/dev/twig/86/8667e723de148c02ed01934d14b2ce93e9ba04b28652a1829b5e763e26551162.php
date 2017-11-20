<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9a895feb4fe7ff34143db66bc17e4765d49b68749ccd486b2861c7a90a676f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:Layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50ae1fa1fe3a949fa44881e60f94df972cfcda34f428938f4e35bb98d0653ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ae1fa1fe3a949fa44881e60f94df972cfcda34f428938f4e35bb98d0653ce7->enter($__internal_50ae1fa1fe3a949fa44881e60f94df972cfcda34f428938f4e35bb98d0653ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_4c03070ce4a83c926c16d3791a5c5f1337501cbf25d0a983b48b125ef8e95d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c03070ce4a83c926c16d3791a5c5f1337501cbf25d0a983b48b125ef8e95d7a->enter($__internal_4c03070ce4a83c926c16d3791a5c5f1337501cbf25d0a983b48b125ef8e95d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ae1fa1fe3a949fa44881e60f94df972cfcda34f428938f4e35bb98d0653ce7->leave($__internal_50ae1fa1fe3a949fa44881e60f94df972cfcda34f428938f4e35bb98d0653ce7_prof);

        
        $__internal_4c03070ce4a83c926c16d3791a5c5f1337501cbf25d0a983b48b125ef8e95d7a->leave($__internal_4c03070ce4a83c926c16d3791a5c5f1337501cbf25d0a983b48b125ef8e95d7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9271b3bc2a3cb7b9a0992eb39692d35c637fcbc906a383a9a84ccc7fef14cba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9271b3bc2a3cb7b9a0992eb39692d35c637fcbc906a383a9a84ccc7fef14cba9->enter($__internal_9271b3bc2a3cb7b9a0992eb39692d35c637fcbc906a383a9a84ccc7fef14cba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_26d3f8343797bcfbef5055bd17176fe34df179a4413a53fec8a534591a1307ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d3f8343797bcfbef5055bd17176fe34df179a4413a53fec8a534591a1307ca->enter($__internal_26d3f8343797bcfbef5055bd17176fe34df179a4413a53fec8a534591a1307ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_26d3f8343797bcfbef5055bd17176fe34df179a4413a53fec8a534591a1307ca->leave($__internal_26d3f8343797bcfbef5055bd17176fe34df179a4413a53fec8a534591a1307ca_prof);

        
        $__internal_9271b3bc2a3cb7b9a0992eb39692d35c637fcbc906a383a9a84ccc7fef14cba9->leave($__internal_9271b3bc2a3cb7b9a0992eb39692d35c637fcbc906a383a9a84ccc7fef14cba9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MyAppUserBundle:Default:Layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
{% trans_default_domain 'FOSUserBundle' %}


", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
