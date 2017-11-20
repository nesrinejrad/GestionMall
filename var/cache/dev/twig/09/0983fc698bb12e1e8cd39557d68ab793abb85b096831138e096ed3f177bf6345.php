<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_3df68f4929b22a0873ca38dad9cd7e5e9c0fe916cddc69d4f52300959b4b77af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_486e478fb99a6f04d8801f9bb8d0952699e84ae23157aff99e48bbca96896122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486e478fb99a6f04d8801f9bb8d0952699e84ae23157aff99e48bbca96896122->enter($__internal_486e478fb99a6f04d8801f9bb8d0952699e84ae23157aff99e48bbca96896122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_fe3b1cab29c8c81fdf643af14b80ab6ef9f7a0c4627fa6a4cb505356f455863a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3b1cab29c8c81fdf643af14b80ab6ef9f7a0c4627fa6a4cb505356f455863a->enter($__internal_fe3b1cab29c8c81fdf643af14b80ab6ef9f7a0c4627fa6a4cb505356f455863a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register form-horizontal")));
        echo "
        <fieldset>
    <h1>Compte Responsable</h1>    
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </fieldset>
    <p class=\"signin button\">
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </p>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_486e478fb99a6f04d8801f9bb8d0952699e84ae23157aff99e48bbca96896122->leave($__internal_486e478fb99a6f04d8801f9bb8d0952699e84ae23157aff99e48bbca96896122_prof);

        
        $__internal_fe3b1cab29c8c81fdf643af14b80ab6ef9f7a0c4627fa6a4cb505356f455863a->leave($__internal_fe3b1cab29c8c81fdf643af14b80ab6ef9f7a0c4627fa6a4cb505356f455863a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  43 => 10,  37 => 7,  31 => 4,  28 => 3,  25 => 1,);
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
{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register form-horizontal'}}) }}
        <fieldset>
    <h1>Compte Responsable</h1>    
        {{ form_widget(form) }}
        </fieldset>
    <p class=\"signin button\">
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </p>
{{ form_end(form) }}

", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
