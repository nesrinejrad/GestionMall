<?php

/* MyAppUserBundle:categorie:index.html.twig */
class __TwigTemplate_4eb7f6d6d59f202a792b8390441ecfc16f86a4bbeb5dcdc2d9c2b3a4a543b754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyAppUserBundle:categorie:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16bdb175cdcf58a36d677169bca72074863f147433c6a1f6250c7883a5b2cc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bdb175cdcf58a36d677169bca72074863f147433c6a1f6250c7883a5b2cc4b->enter($__internal_16bdb175cdcf58a36d677169bca72074863f147433c6a1f6250c7883a5b2cc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:categorie:index.html.twig"));

        $__internal_10d4600b1e38c8c5d75b1aa3af7fcc461678d8c3ddf5e040d0d702d3d432d3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d4600b1e38c8c5d75b1aa3af7fcc461678d8c3ddf5e040d0d702d3d432d3c8->enter($__internal_10d4600b1e38c8c5d75b1aa3af7fcc461678d8c3ddf5e040d0d702d3d432d3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:categorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16bdb175cdcf58a36d677169bca72074863f147433c6a1f6250c7883a5b2cc4b->leave($__internal_16bdb175cdcf58a36d677169bca72074863f147433c6a1f6250c7883a5b2cc4b_prof);

        
        $__internal_10d4600b1e38c8c5d75b1aa3af7fcc461678d8c3ddf5e040d0d702d3d432d3c8->leave($__internal_10d4600b1e38c8c5d75b1aa3af7fcc461678d8c3ddf5e040d0d702d3d432d3c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd6a78570ad41fda4ce78c4a4467a19d0d0b9b48a7b38d7eb9016e20f448527b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6a78570ad41fda4ce78c4a4467a19d0d0b9b48a7b38d7eb9016e20f448527b->enter($__internal_fd6a78570ad41fda4ce78c4a4467a19d0d0b9b48a7b38d7eb9016e20f448527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bc6bf5e5a18df98b13c81369efe86ad95b0518fb295a01b57cde1333a0a9f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc6bf5e5a18df98b13c81369efe86ad95b0518fb295a01b57cde1333a0a9f14->enter($__internal_3bc6bf5e5a18df98b13c81369efe86ad95b0518fb295a01b57cde1333a0a9f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Libele</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libele", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_edit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_new");
        echo "\">Create a new categorie</a>
        </li>
    </ul>
";
        
        $__internal_3bc6bf5e5a18df98b13c81369efe86ad95b0518fb295a01b57cde1333a0a9f14->leave($__internal_3bc6bf5e5a18df98b13c81369efe86ad95b0518fb295a01b57cde1333a0a9f14_prof);

        
        $__internal_fd6a78570ad41fda4ce78c4a4467a19d0d0b9b48a7b38d7eb9016e20f448527b->leave($__internal_fd6a78570ad41fda4ce78c4a4467a19d0d0b9b48a7b38d7eb9016e20f448527b_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Libele</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for categorie in categories %}
            <tr>
                <td><a href=\"{{ path('categorie_show', { 'id': categorie.id }) }}\">{{ categorie.id }}</a></td>
                <td>{{ categorie.libele }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('categorie_show', { 'id': categorie.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('categorie_edit', { 'id': categorie.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('categorie_new') }}\">Create a new categorie</a>
        </li>
    </ul>
{% endblock %}
", "MyAppUserBundle:categorie:index.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/categorie/index.html.twig");
    }
}
