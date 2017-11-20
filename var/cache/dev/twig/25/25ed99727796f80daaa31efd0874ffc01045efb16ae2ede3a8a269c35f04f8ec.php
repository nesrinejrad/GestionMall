<?php

/* abonnement/abonnementsboutique_sanstyle.html.twig */
class __TwigTemplate_3678edaaac34267d3e431a3c981edb137491cf985624be8de56fe8f84fc83712 extends Twig_Template
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
        $__internal_a480fa3baa052aff7a318de971a68ce86d42ac6850ff85a8ff9d3944e959af39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a480fa3baa052aff7a318de971a68ce86d42ac6850ff85a8ff9d3944e959af39->enter($__internal_a480fa3baa052aff7a318de971a68ce86d42ac6850ff85a8ff9d3944e959af39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "abonnement/abonnementsboutique_sanstyle.html.twig"));

        $__internal_efca67a03d72a1d790b9fb8def4bd7708b0c46e40ba68213a9780f1c52f44392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efca67a03d72a1d790b9fb8def4bd7708b0c46e40ba68213a9780f1c52f44392->enter($__internal_efca67a03d72a1d790b9fb8def4bd7708b0c46e40ba68213a9780f1c52f44392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "abonnement/abonnementsboutique_sanstyle.html.twig"));

        // line 1
        echo "<table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Abonnée</th>
                <th>Date d'abonnement</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) ? $context["abonnements"] : $this->getContext($context, "abonnements")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 10
            echo "            <tr>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abonnement"], "client", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abonnement"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonnement"], "dateAbonnement", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </tbody>
    </table>
";
        
        $__internal_a480fa3baa052aff7a318de971a68ce86d42ac6850ff85a8ff9d3944e959af39->leave($__internal_a480fa3baa052aff7a318de971a68ce86d42ac6850ff85a8ff9d3944e959af39_prof);

        
        $__internal_efca67a03d72a1d790b9fb8def4bd7708b0c46e40ba68213a9780f1c52f44392->leave($__internal_efca67a03d72a1d790b9fb8def4bd7708b0c46e40ba68213a9780f1c52f44392_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/abonnementsboutique_sanstyle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  48 => 12,  42 => 11,  39 => 10,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Abonnée</th>
                <th>Date d'abonnement</th>
            </tr>
        </thead>
        <tbody>
        {% for abonnement in abonnements %}
            <tr>
                <td>{{ abonnement.client.prenom }} {{ abonnement.client.nom }}</td>
                <td>{{ abonnement.dateAbonnement }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
", "abonnement/abonnementsboutique_sanstyle.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\views\\abonnement\\abonnementsboutique_sanstyle.html.twig");
    }
}
