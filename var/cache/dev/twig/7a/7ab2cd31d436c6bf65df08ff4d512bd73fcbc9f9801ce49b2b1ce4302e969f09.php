<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9b295c160a1bc898bacdbd95c7b29a7c5bb7747a17a0115bdc62e4e021daa5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b295c160a1bc898bacdbd95c7b29a7c5bb7747a17a0115bdc62e4e021daa5ed->enter($__internal_9b295c160a1bc898bacdbd95c7b29a7c5bb7747a17a0115bdc62e4e021daa5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7e41da42e4f8f9de25537b804c50353c080cfe6970cf50861dc55eae7b1c6404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e41da42e4f8f9de25537b804c50353c080cfe6970cf50861dc55eae7b1c6404->enter($__internal_7e41da42e4f8f9de25537b804c50353c080cfe6970cf50861dc55eae7b1c6404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b295c160a1bc898bacdbd95c7b29a7c5bb7747a17a0115bdc62e4e021daa5ed->leave($__internal_9b295c160a1bc898bacdbd95c7b29a7c5bb7747a17a0115bdc62e4e021daa5ed_prof);

        
        $__internal_7e41da42e4f8f9de25537b804c50353c080cfe6970cf50861dc55eae7b1c6404->leave($__internal_7e41da42e4f8f9de25537b804c50353c080cfe6970cf50861dc55eae7b1c6404_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77f749a3e156bee1471f58a5b5f97a17d4b44f4ec3b099e7781e46a8f1b9787a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f749a3e156bee1471f58a5b5f97a17d4b44f4ec3b099e7781e46a8f1b9787a->enter($__internal_77f749a3e156bee1471f58a5b5f97a17d4b44f4ec3b099e7781e46a8f1b9787a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_53afa93b14bb3404e39f5592a5852e2dbd09e877dff7a45e9c7dada1fab2caca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53afa93b14bb3404e39f5592a5852e2dbd09e877dff7a45e9c7dada1fab2caca->enter($__internal_53afa93b14bb3404e39f5592a5852e2dbd09e877dff7a45e9c7dada1fab2caca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_53afa93b14bb3404e39f5592a5852e2dbd09e877dff7a45e9c7dada1fab2caca->leave($__internal_53afa93b14bb3404e39f5592a5852e2dbd09e877dff7a45e9c7dada1fab2caca_prof);

        
        $__internal_77f749a3e156bee1471f58a5b5f97a17d4b44f4ec3b099e7781e46a8f1b9787a->leave($__internal_77f749a3e156bee1471f58a5b5f97a17d4b44f4ec3b099e7781e46a8f1b9787a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_565f83dbfcc481cf1bc434256fe943ce7fb96e2a3dce55ed53b42ba44ea62ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565f83dbfcc481cf1bc434256fe943ce7fb96e2a3dce55ed53b42ba44ea62ec8->enter($__internal_565f83dbfcc481cf1bc434256fe943ce7fb96e2a3dce55ed53b42ba44ea62ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0acb07e27f85652c4eb4b908c4be3121b3ab28cc8d098d8af5963ea355eb37b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acb07e27f85652c4eb4b908c4be3121b3ab28cc8d098d8af5963ea355eb37b4->enter($__internal_0acb07e27f85652c4eb4b908c4be3121b3ab28cc8d098d8af5963ea355eb37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0acb07e27f85652c4eb4b908c4be3121b3ab28cc8d098d8af5963ea355eb37b4->leave($__internal_0acb07e27f85652c4eb4b908c4be3121b3ab28cc8d098d8af5963ea355eb37b4_prof);

        
        $__internal_565f83dbfcc481cf1bc434256fe943ce7fb96e2a3dce55ed53b42ba44ea62ec8->leave($__internal_565f83dbfcc481cf1bc434256fe943ce7fb96e2a3dce55ed53b42ba44ea62ec8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1819aaadf34545b14375beca09f6f22f622e46ee73222440155bea6f987f5148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1819aaadf34545b14375beca09f6f22f622e46ee73222440155bea6f987f5148->enter($__internal_1819aaadf34545b14375beca09f6f22f622e46ee73222440155bea6f987f5148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_22f4a78dd8cd3206475427dbf0dce958c0f7e90dcebba8c29ee79e69493dac14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f4a78dd8cd3206475427dbf0dce958c0f7e90dcebba8c29ee79e69493dac14->enter($__internal_22f4a78dd8cd3206475427dbf0dce958c0f7e90dcebba8c29ee79e69493dac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_22f4a78dd8cd3206475427dbf0dce958c0f7e90dcebba8c29ee79e69493dac14->leave($__internal_22f4a78dd8cd3206475427dbf0dce958c0f7e90dcebba8c29ee79e69493dac14_prof);

        
        $__internal_1819aaadf34545b14375beca09f6f22f622e46ee73222440155bea6f987f5148->leave($__internal_1819aaadf34545b14375beca09f6f22f622e46ee73222440155bea6f987f5148_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
