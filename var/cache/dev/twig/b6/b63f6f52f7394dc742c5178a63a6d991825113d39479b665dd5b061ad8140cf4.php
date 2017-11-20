<?php

/* MyAppUserBundle:monespace:index.html.twig */
class __TwigTemplate_80738d37b0507085d05099cb5255a7e5290187803b4f8412a7a9fa09d54e0750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseclient.html.twig", "MyAppUserBundle:monespace:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseclient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be29f162c38caf69dbbe4f48a5e020cc70cb7886a5874821073941e9c7dcf80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be29f162c38caf69dbbe4f48a5e020cc70cb7886a5874821073941e9c7dcf80f->enter($__internal_be29f162c38caf69dbbe4f48a5e020cc70cb7886a5874821073941e9c7dcf80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:monespace:index.html.twig"));

        $__internal_2b256ae2fcac60eb7493066f05126d70480e9706c4cb7e594bfa4df3f6eff0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b256ae2fcac60eb7493066f05126d70480e9706c4cb7e594bfa4df3f6eff0dc->enter($__internal_2b256ae2fcac60eb7493066f05126d70480e9706c4cb7e594bfa4df3f6eff0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:monespace:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be29f162c38caf69dbbe4f48a5e020cc70cb7886a5874821073941e9c7dcf80f->leave($__internal_be29f162c38caf69dbbe4f48a5e020cc70cb7886a5874821073941e9c7dcf80f_prof);

        
        $__internal_2b256ae2fcac60eb7493066f05126d70480e9706c4cb7e594bfa4df3f6eff0dc->leave($__internal_2b256ae2fcac60eb7493066f05126d70480e9706c4cb7e594bfa4df3f6eff0dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d1ccae45f09e9a9139700073d41856f34e45f700e50a697cfc7413e3d897452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1ccae45f09e9a9139700073d41856f34e45f700e50a697cfc7413e3d897452->enter($__internal_8d1ccae45f09e9a9139700073d41856f34e45f700e50a697cfc7413e3d897452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f079ac02524d450061d880180ddc3c68408108df8211178de4ba9eaff8f567c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f079ac02524d450061d880180ddc3c68408108df8211178de4ba9eaff8f567c1->enter($__internal_f079ac02524d450061d880180ddc3c68408108df8211178de4ba9eaff8f567c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        
        $__internal_f079ac02524d450061d880180ddc3c68408108df8211178de4ba9eaff8f567c1->leave($__internal_f079ac02524d450061d880180ddc3c68408108df8211178de4ba9eaff8f567c1_prof);

        
        $__internal_8d1ccae45f09e9a9139700073d41856f34e45f700e50a697cfc7413e3d897452->leave($__internal_8d1ccae45f09e9a9139700073d41856f34e45f700e50a697cfc7413e3d897452_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:monespace:index.html.twig";
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
        return new Twig_Source("{% extends \"::baseclient.html.twig\" %}

{% block body %}
    
    {% endblock body %}
", "MyAppUserBundle:monespace:index.html.twig", "D:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/monespace/index.html.twig");
    }
}
