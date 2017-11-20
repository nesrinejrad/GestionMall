<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_19a8a40f5535a3971b85b15395a14da982964d4e4d8be5675f4c96b188960304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d54ba2828bc1d8c4d4be93f09e857dfe2d9323f0d111eefd74dd16050b86966f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54ba2828bc1d8c4d4be93f09e857dfe2d9323f0d111eefd74dd16050b86966f->enter($__internal_d54ba2828bc1d8c4d4be93f09e857dfe2d9323f0d111eefd74dd16050b86966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_5cf53e8a3c2a25bfa3e59aa18392cdf955c051b730d96451e406181f265f5887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf53e8a3c2a25bfa3e59aa18392cdf955c051b730d96451e406181f265f5887->enter($__internal_5cf53e8a3c2a25bfa3e59aa18392cdf955c051b730d96451e406181f265f5887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d54ba2828bc1d8c4d4be93f09e857dfe2d9323f0d111eefd74dd16050b86966f->leave($__internal_d54ba2828bc1d8c4d4be93f09e857dfe2d9323f0d111eefd74dd16050b86966f_prof);

        
        $__internal_5cf53e8a3c2a25bfa3e59aa18392cdf955c051b730d96451e406181f265f5887->leave($__internal_5cf53e8a3c2a25bfa3e59aa18392cdf955c051b730d96451e406181f265f5887_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_074cd93241fab4240a6e424540e31ac0866b17720578aafd072e081caf5e0ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074cd93241fab4240a6e424540e31ac0866b17720578aafd072e081caf5e0ed4->enter($__internal_074cd93241fab4240a6e424540e31ac0866b17720578aafd072e081caf5e0ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4ecdc4bd714e694412a1bea7b4f2dffef6b659eea25c0a446a05da2e734b7b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecdc4bd714e694412a1bea7b4f2dffef6b659eea25c0a446a05da2e734b7b52->enter($__internal_4ecdc4bd714e694412a1bea7b4f2dffef6b659eea25c0a446a05da2e734b7b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4ecdc4bd714e694412a1bea7b4f2dffef6b659eea25c0a446a05da2e734b7b52->leave($__internal_4ecdc4bd714e694412a1bea7b4f2dffef6b659eea25c0a446a05da2e734b7b52_prof);

        
        $__internal_074cd93241fab4240a6e424540e31ac0866b17720578aafd072e081caf5e0ed4->leave($__internal_074cd93241fab4240a6e424540e31ac0866b17720578aafd072e081caf5e0ed4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6615bac8408a4491994cd49710e426c401b3500d60f70679144c7450fad2bd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6615bac8408a4491994cd49710e426c401b3500d60f70679144c7450fad2bd13->enter($__internal_6615bac8408a4491994cd49710e426c401b3500d60f70679144c7450fad2bd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d0317403d5068811d2bfea842b0e7dba3eaea090ba2ff3ed4966a8565cca1c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0317403d5068811d2bfea842b0e7dba3eaea090ba2ff3ed4966a8565cca1c93->enter($__internal_d0317403d5068811d2bfea842b0e7dba3eaea090ba2ff3ed4966a8565cca1c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0317403d5068811d2bfea842b0e7dba3eaea090ba2ff3ed4966a8565cca1c93->leave($__internal_d0317403d5068811d2bfea842b0e7dba3eaea090ba2ff3ed4966a8565cca1c93_prof);

        
        $__internal_6615bac8408a4491994cd49710e426c401b3500d60f70679144c7450fad2bd13->leave($__internal_6615bac8408a4491994cd49710e426c401b3500d60f70679144c7450fad2bd13_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8a0f0296b4a633280a2741fd9568785950a172b362ec292bc53a8e272333573c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0f0296b4a633280a2741fd9568785950a172b362ec292bc53a8e272333573c->enter($__internal_8a0f0296b4a633280a2741fd9568785950a172b362ec292bc53a8e272333573c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_72c8ec3e231b378c49dd2d4d02bf6e5dca8ffd8802f16d9c9b3ffc69fb6e529a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c8ec3e231b378c49dd2d4d02bf6e5dca8ffd8802f16d9c9b3ffc69fb6e529a->enter($__internal_72c8ec3e231b378c49dd2d4d02bf6e5dca8ffd8802f16d9c9b3ffc69fb6e529a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_72c8ec3e231b378c49dd2d4d02bf6e5dca8ffd8802f16d9c9b3ffc69fb6e529a->leave($__internal_72c8ec3e231b378c49dd2d4d02bf6e5dca8ffd8802f16d9c9b3ffc69fb6e529a_prof);

        
        $__internal_8a0f0296b4a633280a2741fd9568785950a172b362ec292bc53a8e272333573c->leave($__internal_8a0f0296b4a633280a2741fd9568785950a172b362ec292bc53a8e272333573c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  72 => 9,  63 => 7,  51 => 4,  42 => 2,  32 => 12,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
