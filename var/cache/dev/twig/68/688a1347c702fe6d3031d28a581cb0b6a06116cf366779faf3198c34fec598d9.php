<?php

/* MyAppBoutiqueClientBundle:boutique:show.html.twig */
class __TwigTemplate_d1d4993e8eb18f68d939effc48c8e862cccaf0b48c71c52a2c334f5ede2461b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseclient.html.twig", "MyAppBoutiqueClientBundle:boutique:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseclient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fbe535bbba6a2c0cb650e5f2d8c8ab641a08bb00b763bd517d2d6cc42ccfb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbe535bbba6a2c0cb650e5f2d8c8ab641a08bb00b763bd517d2d6cc42ccfb62->enter($__internal_9fbe535bbba6a2c0cb650e5f2d8c8ab641a08bb00b763bd517d2d6cc42ccfb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBoutiqueClientBundle:boutique:show.html.twig"));

        $__internal_811f4811ff61c8bdbf57ceedca71e6a7b6d6a82a66082d5a0d6fb812f65120fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811f4811ff61c8bdbf57ceedca71e6a7b6d6a82a66082d5a0d6fb812f65120fd->enter($__internal_811f4811ff61c8bdbf57ceedca71e6a7b6d6a82a66082d5a0d6fb812f65120fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBoutiqueClientBundle:boutique:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fbe535bbba6a2c0cb650e5f2d8c8ab641a08bb00b763bd517d2d6cc42ccfb62->leave($__internal_9fbe535bbba6a2c0cb650e5f2d8c8ab641a08bb00b763bd517d2d6cc42ccfb62_prof);

        
        $__internal_811f4811ff61c8bdbf57ceedca71e6a7b6d6a82a66082d5a0d6fb812f65120fd->leave($__internal_811f4811ff61c8bdbf57ceedca71e6a7b6d6a82a66082d5a0d6fb812f65120fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_794039788ace12caafcaf489361fe1025dfb56af40a09446f09867ff8c8f2c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794039788ace12caafcaf489361fe1025dfb56af40a09446f09867ff8c8f2c74->enter($__internal_794039788ace12caafcaf489361fe1025dfb56af40a09446f09867ff8c8f2c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9ff0ccb83c98ad8074ba9a937ef672732fcc687120ccb7092320acf87b41dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ff0ccb83c98ad8074ba9a937ef672732fcc687120ccb7092320acf87b41dd5->enter($__internal_e9ff0ccb83c98ad8074ba9a937ef672732fcc687120ccb7092320acf87b41dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-head_agile_info_w3l\">
        <div class=\"container\">
            <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "nomBoutique", array()), "html", null, true);
        echo " <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "categorie", array()), "html", null, true);
        echo " </span></h3>
            <!--/w3_short-->
            <div class=\"services-breadcrumb\">
                <div class=\"agile_inner_breadcrumb\">

                    <ul class=\"w3_short\">
                        <li><a href=\"\">Accueil</a><i>|</i></li>
                        <li>Boutique</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    
    <h1>Boutique</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomboutique</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "nomBoutique", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptionboutique</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "descriptionBoutique", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_edit", array("id" => $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
        </li>
    </ul>
";
        
        $__internal_e9ff0ccb83c98ad8074ba9a937ef672732fcc687120ccb7092320acf87b41dd5->leave($__internal_e9ff0ccb83c98ad8074ba9a937ef672732fcc687120ccb7092320acf87b41dd5_prof);

        
        $__internal_794039788ace12caafcaf489361fe1025dfb56af40a09446f09867ff8c8f2c74->leave($__internal_794039788ace12caafcaf489361fe1025dfb56af40a09446f09867ff8c8f2c74_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBoutiqueClientBundle:boutique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 45,  103 => 42,  93 => 35,  86 => 31,  79 => 27,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseclient.html.twig' %}

{% block body %}
    <div class=\"page-head_agile_info_w3l\">
        <div class=\"container\">
            <h3>{{ boutique.nomBoutique }} <span>{{ boutique.categorie }} </span></h3>
            <!--/w3_short-->
            <div class=\"services-breadcrumb\">
                <div class=\"agile_inner_breadcrumb\">

                    <ul class=\"w3_short\">
                        <li><a href=\"\">Accueil</a><i>|</i></li>
                        <li>Boutique</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    
    <h1>Boutique</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ boutique.id }}</td>
            </tr>
            <tr>
                <th>Nomboutique</th>
                <td>{{ boutique.nomBoutique }}</td>
            </tr>
            <tr>
                <th>Descriptionboutique</th>
                <td>{{ boutique.descriptionBoutique }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('boutiques_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('boutiques_edit', { 'id': boutique.id }) }}\">Edit</a>
        </li>
        <li>
        </li>
    </ul>
{% endblock %}
", "MyAppBoutiqueClientBundle:boutique:show.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\BoutiqueClientBundle/Resources/views/boutique/show.html.twig");
    }
}
