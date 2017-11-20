<?php

/* Emails/codedemande.html.twig */
class __TwigTemplate_4b35346c246094ebd118fcfb11b65d6379b534cfc83f8131cae1e70a8ebf1313 extends Twig_Template
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
        $__internal_9845136c4216dc17082c05dc0776664e84c02ce89f68d0b34b946f2d54762f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9845136c4216dc17082c05dc0776664e84c02ce89f68d0b34b946f2d54762f9d->enter($__internal_9845136c4216dc17082c05dc0776664e84c02ce89f68d0b34b946f2d54762f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/codedemande.html.twig"));

        $__internal_684c362b652deded661adc03858d1e1caf8e0fac5525c670aadbb8e7aa073a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684c362b652deded661adc03858d1e1caf8e0fac5525c670aadbb8e7aa073a28->enter($__internal_684c362b652deded661adc03858d1e1caf8e0fac5525c670aadbb8e7aa073a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/codedemande.html.twig"));

        // line 1
        echo "code ";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "html", null, true);
        echo "
";
        
        $__internal_9845136c4216dc17082c05dc0776664e84c02ce89f68d0b34b946f2d54762f9d->leave($__internal_9845136c4216dc17082c05dc0776664e84c02ce89f68d0b34b946f2d54762f9d_prof);

        
        $__internal_684c362b652deded661adc03858d1e1caf8e0fac5525c670aadbb8e7aa073a28->leave($__internal_684c362b652deded661adc03858d1e1caf8e0fac5525c670aadbb8e7aa073a28_prof);

    }

    public function getTemplateName()
    {
        return "Emails/codedemande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("code {{code}}
", "Emails/codedemande.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\views\\Emails\\codedemande.html.twig");
    }
}
