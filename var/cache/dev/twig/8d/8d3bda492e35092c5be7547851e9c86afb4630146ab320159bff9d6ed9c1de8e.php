<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_141d5ab7603909e6e31bee4dceb0fe6f5d32669f557c38e8d9ba228dd4c75812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141d5ab7603909e6e31bee4dceb0fe6f5d32669f557c38e8d9ba228dd4c75812->enter($__internal_141d5ab7603909e6e31bee4dceb0fe6f5d32669f557c38e8d9ba228dd4c75812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a65d08813488fa09dbaceb188c3783efb6bec42e11e64a7725276087b1c1bdad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65d08813488fa09dbaceb188c3783efb6bec42e11e64a7725276087b1c1bdad->enter($__internal_a65d08813488fa09dbaceb188c3783efb6bec42e11e64a7725276087b1c1bdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141d5ab7603909e6e31bee4dceb0fe6f5d32669f557c38e8d9ba228dd4c75812->leave($__internal_141d5ab7603909e6e31bee4dceb0fe6f5d32669f557c38e8d9ba228dd4c75812_prof);

        
        $__internal_a65d08813488fa09dbaceb188c3783efb6bec42e11e64a7725276087b1c1bdad->leave($__internal_a65d08813488fa09dbaceb188c3783efb6bec42e11e64a7725276087b1c1bdad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_210c3ad32f7b90a5ee5b5e9684fc46255c7f8deb86b3428a53a700db600de66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210c3ad32f7b90a5ee5b5e9684fc46255c7f8deb86b3428a53a700db600de66f->enter($__internal_210c3ad32f7b90a5ee5b5e9684fc46255c7f8deb86b3428a53a700db600de66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_17690f3a285be969d6baf0cdbf909aa70e0cd139e1f63795f8e0e4c62ac6d6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17690f3a285be969d6baf0cdbf909aa70e0cd139e1f63795f8e0e4c62ac6d6c7->enter($__internal_17690f3a285be969d6baf0cdbf909aa70e0cd139e1f63795f8e0e4c62ac6d6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_17690f3a285be969d6baf0cdbf909aa70e0cd139e1f63795f8e0e4c62ac6d6c7->leave($__internal_17690f3a285be969d6baf0cdbf909aa70e0cd139e1f63795f8e0e4c62ac6d6c7_prof);

        
        $__internal_210c3ad32f7b90a5ee5b5e9684fc46255c7f8deb86b3428a53a700db600de66f->leave($__internal_210c3ad32f7b90a5ee5b5e9684fc46255c7f8deb86b3428a53a700db600de66f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ddb2d4d91ad064ef2ff1785900b8ebcfa5d9e28d1a5240d82326e5d04a92471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ddb2d4d91ad064ef2ff1785900b8ebcfa5d9e28d1a5240d82326e5d04a92471->enter($__internal_7ddb2d4d91ad064ef2ff1785900b8ebcfa5d9e28d1a5240d82326e5d04a92471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a160dce6dbd40c98ef1a93981ccafa04b6a07257a45303b772dcbd260fb12168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a160dce6dbd40c98ef1a93981ccafa04b6a07257a45303b772dcbd260fb12168->enter($__internal_a160dce6dbd40c98ef1a93981ccafa04b6a07257a45303b772dcbd260fb12168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a160dce6dbd40c98ef1a93981ccafa04b6a07257a45303b772dcbd260fb12168->leave($__internal_a160dce6dbd40c98ef1a93981ccafa04b6a07257a45303b772dcbd260fb12168_prof);

        
        $__internal_7ddb2d4d91ad064ef2ff1785900b8ebcfa5d9e28d1a5240d82326e5d04a92471->leave($__internal_7ddb2d4d91ad064ef2ff1785900b8ebcfa5d9e28d1a5240d82326e5d04a92471_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_43178a3a4618ddfa57e15875d5c5ef1c6828042fc43700ff6f41d22749319f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43178a3a4618ddfa57e15875d5c5ef1c6828042fc43700ff6f41d22749319f02->enter($__internal_43178a3a4618ddfa57e15875d5c5ef1c6828042fc43700ff6f41d22749319f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75b28b90fa56ca5db74fc308d4436c769d7b87e5c4fee89dc07a9177a57c9d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b28b90fa56ca5db74fc308d4436c769d7b87e5c4fee89dc07a9177a57c9d45->enter($__internal_75b28b90fa56ca5db74fc308d4436c769d7b87e5c4fee89dc07a9177a57c9d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_75b28b90fa56ca5db74fc308d4436c769d7b87e5c4fee89dc07a9177a57c9d45->leave($__internal_75b28b90fa56ca5db74fc308d4436c769d7b87e5c4fee89dc07a9177a57c9d45_prof);

        
        $__internal_43178a3a4618ddfa57e15875d5c5ef1c6828042fc43700ff6f41d22749319f02->leave($__internal_43178a3a4618ddfa57e15875d5c5ef1c6828042fc43700ff6f41d22749319f02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
