<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5c64798516c1e831dcf0fa8083fe812f4716ff09bddb42a777d9869d656888dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Profile/show.html.twig", 2);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76f059a065841384f2814804fde54b1e78412bd1877b9efc7735dc4f2153f1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f059a065841384f2814804fde54b1e78412bd1877b9efc7735dc4f2153f1bd->enter($__internal_76f059a065841384f2814804fde54b1e78412bd1877b9efc7735dc4f2153f1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_ecd8ece2448cffd19d2e4a00c8c79c6a892096c939ddc4199041d0e052d68100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd8ece2448cffd19d2e4a00c8c79c6a892096c939ddc4199041d0e052d68100->enter($__internal_ecd8ece2448cffd19d2e4a00c8c79c6a892096c939ddc4199041d0e052d68100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f059a065841384f2814804fde54b1e78412bd1877b9efc7735dc4f2153f1bd->leave($__internal_76f059a065841384f2814804fde54b1e78412bd1877b9efc7735dc4f2153f1bd_prof);

        
        $__internal_ecd8ece2448cffd19d2e4a00c8c79c6a892096c939ddc4199041d0e052d68100->leave($__internal_ecd8ece2448cffd19d2e4a00c8c79c6a892096c939ddc4199041d0e052d68100_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_d050ab125acf284eb49b3bb690100e254d877100e7a4d3b097151e53a54839ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d050ab125acf284eb49b3bb690100e254d877100e7a4d3b097151e53a54839ed->enter($__internal_d050ab125acf284eb49b3bb690100e254d877100e7a4d3b097151e53a54839ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_c57e049da4a1a200a24ce6b2da2c9e0b382071b1299689966e9d84955c2173df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57e049da4a1a200a24ce6b2da2c9e0b382071b1299689966e9d84955c2173df->enter($__internal_c57e049da4a1a200a24ce6b2da2c9e0b382071b1299689966e9d84955c2173df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/profile1.css"), "html", null, true);
        echo "\">
";
        
        $__internal_c57e049da4a1a200a24ce6b2da2c9e0b382071b1299689966e9d84955c2173df->leave($__internal_c57e049da4a1a200a24ce6b2da2c9e0b382071b1299689966e9d84955c2173df_prof);

        
        $__internal_d050ab125acf284eb49b3bb690100e254d877100e7a4d3b097151e53a54839ed->leave($__internal_d050ab125acf284eb49b3bb690100e254d877100e7a4d3b097151e53a54839ed_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f02dd392d8a9d21e84d6331ff4a7167d4243e9e2281e177cebda3aa5d5f5f2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02dd392d8a9d21e84d6331ff4a7167d4243e9e2281e177cebda3aa5d5f5f2ca->enter($__internal_f02dd392d8a9d21e84d6331ff4a7167d4243e9e2281e177cebda3aa5d5f5f2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cfa599b2d997111fbfbb1c849531b07d83a09178ec387ef4ae924e89ce9cc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfa599b2d997111fbfbb1c849531b07d83a09178ec387ef4ae924e89ce9cc70->enter($__internal_1cfa599b2d997111fbfbb1c849531b07d83a09178ec387ef4ae924e89ce9cc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1cfa599b2d997111fbfbb1c849531b07d83a09178ec387ef4ae924e89ce9cc70->leave($__internal_1cfa599b2d997111fbfbb1c849531b07d83a09178ec387ef4ae924e89ce9cc70_prof);

        
        $__internal_f02dd392d8a9d21e84d6331ff4a7167d4243e9e2281e177cebda3aa5d5f5f2ca->leave($__internal_f02dd392d8a9d21e84d6331ff4a7167d4243e9e2281e177cebda3aa5d5f5f2ca_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f65c288332aa7755613b380c3424c0f7fdea7fce5f9dd92bf0bd1cdf4663c7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65c288332aa7755613b380c3424c0f7fdea7fce5f9dd92bf0bd1cdf4663c7a3->enter($__internal_f65c288332aa7755613b380c3424c0f7fdea7fce5f9dd92bf0bd1cdf4663c7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_286297ccf345d1a553dfd7201ac0d6c5f84e870af64406194ca138849f31fda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286297ccf345d1a553dfd7201ac0d6c5f84e870af64406194ca138849f31fda3->enter($__internal_286297ccf345d1a553dfd7201ac0d6c5f84e870af64406194ca138849f31fda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 10)->display($context);
        
        $__internal_286297ccf345d1a553dfd7201ac0d6c5f84e870af64406194ca138849f31fda3->leave($__internal_286297ccf345d1a553dfd7201ac0d6c5f84e870af64406194ca138849f31fda3_prof);

        
        $__internal_f65c288332aa7755613b380c3424c0f7fdea7fce5f9dd92bf0bd1cdf4663c7a3->leave($__internal_f65c288332aa7755613b380c3424c0f7fdea7fce5f9dd92bf0bd1cdf4663c7a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 10,  73 => 9,  64 => 8,  51 => 5,  42 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"FOSUserBundle::layout.html.twig\" %}#}
{% extends '::base.html.twig' %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/dist/css/profile1.css')}}\">
{% endblock css %}

{% block body %}
{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
