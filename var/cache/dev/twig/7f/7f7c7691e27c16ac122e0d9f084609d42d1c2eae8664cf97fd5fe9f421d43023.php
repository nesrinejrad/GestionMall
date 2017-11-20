<?php

/* MyAppUserBundle:Client:Registration/register.html.twig */
class __TwigTemplate_34a4fb1e28048814877b0402e6f59647ce720601770483436c854923cd53a931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f04b9c92366d660cd0ee598874a96af7fbc6f67c7467e826979860a73cea635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f04b9c92366d660cd0ee598874a96af7fbc6f67c7467e826979860a73cea635->enter($__internal_3f04b9c92366d660cd0ee598874a96af7fbc6f67c7467e826979860a73cea635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:Client:Registration/register.html.twig"));

        $__internal_1a34630f15e409a5d656922eef15d831857c8cc77db626feb9660bcf12a6e8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a34630f15e409a5d656922eef15d831857c8cc77db626feb9660bcf12a6e8f2->enter($__internal_1a34630f15e409a5d656922eef15d831857c8cc77db626feb9660bcf12a6e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:Client:Registration/register.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3f04b9c92366d660cd0ee598874a96af7fbc6f67c7467e826979860a73cea635->leave($__internal_3f04b9c92366d660cd0ee598874a96af7fbc6f67c7467e826979860a73cea635_prof);

        
        $__internal_1a34630f15e409a5d656922eef15d831857c8cc77db626feb9660bcf12a6e8f2->leave($__internal_1a34630f15e409a5d656922eef15d831857c8cc77db626feb9660bcf12a6e8f2_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7c65e47748108a1afad06bbf6d5d59ae3ceee89662053c0138a633e6f07f48fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c65e47748108a1afad06bbf6d5d59ae3ceee89662053c0138a633e6f07f48fb->enter($__internal_7c65e47748108a1afad06bbf6d5d59ae3ceee89662053c0138a633e6f07f48fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c9f48858f8f353638448cc652d20dba6738470d8ec8aa7cc37f99aaf775cc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9f48858f8f353638448cc652d20dba6738470d8ec8aa7cc37f99aaf775cc05->enter($__internal_8c9f48858f8f353638448cc652d20dba6738470d8ec8aa7cc37f99aaf775cc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8c9f48858f8f353638448cc652d20dba6738470d8ec8aa7cc37f99aaf775cc05->leave($__internal_8c9f48858f8f353638448cc652d20dba6738470d8ec8aa7cc37f99aaf775cc05_prof);

        
        $__internal_7c65e47748108a1afad06bbf6d5d59ae3ceee89662053c0138a633e6f07f48fb->leave($__internal_7c65e47748108a1afad06bbf6d5d59ae3ceee89662053c0138a633e6f07f48fb_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca0ea7e0998ef37b3b54589a45adf69b3f6847e0226d41e9ee6b6cdfa1e085b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0ea7e0998ef37b3b54589a45adf69b3f6847e0226d41e9ee6b6cdfa1e085b5->enter($__internal_ca0ea7e0998ef37b3b54589a45adf69b3f6847e0226d41e9ee6b6cdfa1e085b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_32415ad64edb58ff4043d991cbf8df1e1b0423169845dd364b254cb0a21146c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32415ad64edb58ff4043d991cbf8df1e1b0423169845dd364b254cb0a21146c3->enter($__internal_32415ad64edb58ff4043d991cbf8df1e1b0423169845dd364b254cb0a21146c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("MyAppUserBundle:Client:Registration/register_content.html.twig", "MyAppUserBundle:Client:Registration/register.html.twig", 3)->display($context);
        
        $__internal_32415ad64edb58ff4043d991cbf8df1e1b0423169845dd364b254cb0a21146c3->leave($__internal_32415ad64edb58ff4043d991cbf8df1e1b0423169845dd364b254cb0a21146c3_prof);

        
        $__internal_ca0ea7e0998ef37b3b54589a45adf69b3f6847e0226d41e9ee6b6cdfa1e085b5->leave($__internal_ca0ea7e0998ef37b3b54589a45adf69b3f6847e0226d41e9ee6b6cdfa1e085b5_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Client:Registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 3,  45 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
{% block fos_user_content %}
{% include \"MyAppUserBundle:Client:Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}
", "MyAppUserBundle:Client:Registration/register.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/Client/Registration/register.html.twig");
    }
}
