<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9643c32c7381e7c16e3b0a0b759c61f25c815f684442b219ebb334e2a0e5d6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9643c32c7381e7c16e3b0a0b759c61f25c815f684442b219ebb334e2a0e5d6f8->enter($__internal_9643c32c7381e7c16e3b0a0b759c61f25c815f684442b219ebb334e2a0e5d6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3c7ec75f17706dc912ad959f72e88c48abedcd3ffd5ac3b1acbc8b99c5ae0f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7ec75f17706dc912ad959f72e88c48abedcd3ffd5ac3b1acbc8b99c5ae0f9c->enter($__internal_3c7ec75f17706dc912ad959f72e88c48abedcd3ffd5ac3b1acbc8b99c5ae0f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9643c32c7381e7c16e3b0a0b759c61f25c815f684442b219ebb334e2a0e5d6f8->leave($__internal_9643c32c7381e7c16e3b0a0b759c61f25c815f684442b219ebb334e2a0e5d6f8_prof);

        
        $__internal_3c7ec75f17706dc912ad959f72e88c48abedcd3ffd5ac3b1acbc8b99c5ae0f9c->leave($__internal_3c7ec75f17706dc912ad959f72e88c48abedcd3ffd5ac3b1acbc8b99c5ae0f9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1db53c968d1fdbc07f7065080016f2ae8529d1b148730f9419bd50801072c97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db53c968d1fdbc07f7065080016f2ae8529d1b148730f9419bd50801072c97c->enter($__internal_1db53c968d1fdbc07f7065080016f2ae8529d1b148730f9419bd50801072c97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d851fd60314b544b89301b8ede524c341917a988837a767bc35ffc6d95df690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d851fd60314b544b89301b8ede524c341917a988837a767bc35ffc6d95df690->enter($__internal_0d851fd60314b544b89301b8ede524c341917a988837a767bc35ffc6d95df690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0d851fd60314b544b89301b8ede524c341917a988837a767bc35ffc6d95df690->leave($__internal_0d851fd60314b544b89301b8ede524c341917a988837a767bc35ffc6d95df690_prof);

        
        $__internal_1db53c968d1fdbc07f7065080016f2ae8529d1b148730f9419bd50801072c97c->leave($__internal_1db53c968d1fdbc07f7065080016f2ae8529d1b148730f9419bd50801072c97c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f5297ba6a9d32cfcdf39f6faf618ef597e8644bc688b40222df4221acfbde50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5297ba6a9d32cfcdf39f6faf618ef597e8644bc688b40222df4221acfbde50->enter($__internal_3f5297ba6a9d32cfcdf39f6faf618ef597e8644bc688b40222df4221acfbde50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91b933401231bf0eae428ecaf86255724daf6277485c3de083a417b10a52e7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b933401231bf0eae428ecaf86255724daf6277485c3de083a417b10a52e7af->enter($__internal_91b933401231bf0eae428ecaf86255724daf6277485c3de083a417b10a52e7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_91b933401231bf0eae428ecaf86255724daf6277485c3de083a417b10a52e7af->leave($__internal_91b933401231bf0eae428ecaf86255724daf6277485c3de083a417b10a52e7af_prof);

        
        $__internal_3f5297ba6a9d32cfcdf39f6faf618ef597e8644bc688b40222df4221acfbde50->leave($__internal_3f5297ba6a9d32cfcdf39f6faf618ef597e8644bc688b40222df4221acfbde50_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_065dac0c62563ac1061588a19bfe2d883278297b43fed76cfd0a5106f8d63ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065dac0c62563ac1061588a19bfe2d883278297b43fed76cfd0a5106f8d63ed0->enter($__internal_065dac0c62563ac1061588a19bfe2d883278297b43fed76cfd0a5106f8d63ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9acfe19bc2db7a17208d658972305bbc24b401165ab0f3aec1e1418229e5a91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acfe19bc2db7a17208d658972305bbc24b401165ab0f3aec1e1418229e5a91e->enter($__internal_9acfe19bc2db7a17208d658972305bbc24b401165ab0f3aec1e1418229e5a91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9acfe19bc2db7a17208d658972305bbc24b401165ab0f3aec1e1418229e5a91e->leave($__internal_9acfe19bc2db7a17208d658972305bbc24b401165ab0f3aec1e1418229e5a91e_prof);

        
        $__internal_065dac0c62563ac1061588a19bfe2d883278297b43fed76cfd0a5106f8d63ed0->leave($__internal_065dac0c62563ac1061588a19bfe2d883278297b43fed76cfd0a5106f8d63ed0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
