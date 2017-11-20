<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_384b84c2a8c763b2e5a56f575ff2205ae4a5a97ca45a2ddc1fd8a8a973b3b93e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::registerlayout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::registerlayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0ba97dc32acef6b9f58df153349f8756e18a7a1e16c6449a8e3948abb2fcc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ba97dc32acef6b9f58df153349f8756e18a7a1e16c6449a8e3948abb2fcc7d->enter($__internal_e0ba97dc32acef6b9f58df153349f8756e18a7a1e16c6449a8e3948abb2fcc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_20aa61fd65d30f3f94904cf1b3879842151abd476665e11c95e6cd680cfcce48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20aa61fd65d30f3f94904cf1b3879842151abd476665e11c95e6cd680cfcce48->enter($__internal_20aa61fd65d30f3f94904cf1b3879842151abd476665e11c95e6cd680cfcce48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ba97dc32acef6b9f58df153349f8756e18a7a1e16c6449a8e3948abb2fcc7d->leave($__internal_e0ba97dc32acef6b9f58df153349f8756e18a7a1e16c6449a8e3948abb2fcc7d_prof);

        
        $__internal_20aa61fd65d30f3f94904cf1b3879842151abd476665e11c95e6cd680cfcce48->leave($__internal_20aa61fd65d30f3f94904cf1b3879842151abd476665e11c95e6cd680cfcce48_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4ceb1173c6118c3db53e9f2e5d1cf9cdff596034b612b08b249ea85ab7bf803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ceb1173c6118c3db53e9f2e5d1cf9cdff596034b612b08b249ea85ab7bf803->enter($__internal_f4ceb1173c6118c3db53e9f2e5d1cf9cdff596034b612b08b249ea85ab7bf803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8029a59a6eaf96ea0cbc4b2387de5b072d948213fee94a5fa1542f6cf34a9f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8029a59a6eaf96ea0cbc4b2387de5b072d948213fee94a5fa1542f6cf34a9f78->enter($__internal_8029a59a6eaf96ea0cbc4b2387de5b072d948213fee94a5fa1542f6cf34a9f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8029a59a6eaf96ea0cbc4b2387de5b072d948213fee94a5fa1542f6cf34a9f78->leave($__internal_8029a59a6eaf96ea0cbc4b2387de5b072d948213fee94a5fa1542f6cf34a9f78_prof);

        
        $__internal_f4ceb1173c6118c3db53e9f2e5d1cf9cdff596034b612b08b249ea85ab7bf803->leave($__internal_f4ceb1173c6118c3db53e9f2e5d1cf9cdff596034b612b08b249ea85ab7bf803_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ba1df2557116255e5220a41a47df26427c9f073ddbd720c6613286fba7517c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba1df2557116255e5220a41a47df26427c9f073ddbd720c6613286fba7517c4->enter($__internal_7ba1df2557116255e5220a41a47df26427c9f073ddbd720c6613286fba7517c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e474756d56b4de9478df7b77e49ff8318c234bb8879f3ed11c453969d9fa79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e474756d56b4de9478df7b77e49ff8318c234bb8879f3ed11c453969d9fa79f->enter($__internal_4e474756d56b4de9478df7b77e49ff8318c234bb8879f3ed11c453969d9fa79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 7)->display($context);
        
        $__internal_4e474756d56b4de9478df7b77e49ff8318c234bb8879f3ed11c453969d9fa79f->leave($__internal_4e474756d56b4de9478df7b77e49ff8318c234bb8879f3ed11c453969d9fa79f_prof);

        
        $__internal_7ba1df2557116255e5220a41a47df26427c9f073ddbd720c6613286fba7517c4->leave($__internal_7ba1df2557116255e5220a41a47df26427c9f073ddbd720c6613286fba7517c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  50 => 6,  41 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::registerlayout.html.twig\" %}
{#{% extends '::base.html.twig' %}#}
{#{% form_theme form '::include/Form/fields.html.twig' %}#}

{% block body %}
{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
