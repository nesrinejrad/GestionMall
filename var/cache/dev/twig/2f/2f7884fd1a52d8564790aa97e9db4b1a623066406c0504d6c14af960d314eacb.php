<?php

/* MyAppUserBundle:Client:Registration/register_content.html.twig */
class __TwigTemplate_846a8929648c4ea3a4e045876182a9d3d4b6b0579a76cd39a91bd49d6af80e15 extends Twig_Template
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
        $__internal_de9846371630daf340ce6129367665cf5ed7bdbc071820b821b68ae3ba553cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9846371630daf340ce6129367665cf5ed7bdbc071820b821b68ae3ba553cae->enter($__internal_de9846371630daf340ce6129367665cf5ed7bdbc071820b821b68ae3ba553cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:Client:Registration/register_content.html.twig"));

        $__internal_98b428693b89caef8dc60fe3c8aec7f5f8be6f75cc14e2aaccd84e0d291a58cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b428693b89caef8dc60fe3c8aec7f5f8be6f75cc14e2aaccd84e0d291a58cd->enter($__internal_98b428693b89caef8dc60fe3c8aec7f5f8be6f75cc14e2aaccd84e0d291a58cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:Client:Registration/register_content.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_inscription"), "attr" => array("class" => "fos_user_registration_register form-horizontal")));
        echo "
        <fieldset>
    <h1>Compte Client</h1>    
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
        
        $__internal_de9846371630daf340ce6129367665cf5ed7bdbc071820b821b68ae3ba553cae->leave($__internal_de9846371630daf340ce6129367665cf5ed7bdbc071820b821b68ae3ba553cae_prof);

        
        $__internal_98b428693b89caef8dc60fe3c8aec7f5f8be6f75cc14e2aaccd84e0d291a58cd->leave($__internal_98b428693b89caef8dc60fe3c8aec7f5f8be6f75cc14e2aaccd84e0d291a58cd_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Client:Registration/register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('client_inscription'), 'attr': {'class': 'fos_user_registration_register form-horizontal'}}) }}
        <fieldset>
    <h1>Compte Client</h1>    
        {{ form_widget(form) }}
        </fieldset>
    <p class=\"signin button\">
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </p>
{{ form_end(form) }}

", "MyAppUserBundle:Client:Registration/register_content.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/Client/Registration/register_content.html.twig");
    }
}
