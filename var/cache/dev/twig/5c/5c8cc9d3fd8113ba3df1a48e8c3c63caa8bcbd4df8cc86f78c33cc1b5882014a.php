<?php

/* MyAppBoutiqueClientBundle:boutique:index.html.twig */
class __TwigTemplate_140cdecc6884266d0f5e5f6871bdc6df91c3457d7280e694577f4a37de166d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseclient.html.twig", "MyAppBoutiqueClientBundle:boutique:index.html.twig", 1);
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
        $__internal_600b73e773cae25506f3eed8d4a0105a192e5c14523957d20e4e871c4d422815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600b73e773cae25506f3eed8d4a0105a192e5c14523957d20e4e871c4d422815->enter($__internal_600b73e773cae25506f3eed8d4a0105a192e5c14523957d20e4e871c4d422815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBoutiqueClientBundle:boutique:index.html.twig"));

        $__internal_05d96c1589c7d6dce988ee5d64866660817b8455097a3beb0399290f1a71e0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d96c1589c7d6dce988ee5d64866660817b8455097a3beb0399290f1a71e0af->enter($__internal_05d96c1589c7d6dce988ee5d64866660817b8455097a3beb0399290f1a71e0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppBoutiqueClientBundle:boutique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600b73e773cae25506f3eed8d4a0105a192e5c14523957d20e4e871c4d422815->leave($__internal_600b73e773cae25506f3eed8d4a0105a192e5c14523957d20e4e871c4d422815_prof);

        
        $__internal_05d96c1589c7d6dce988ee5d64866660817b8455097a3beb0399290f1a71e0af->leave($__internal_05d96c1589c7d6dce988ee5d64866660817b8455097a3beb0399290f1a71e0af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde78dc88e805121830ee03df34df49f19d5ee186c74b769adac940145dd4f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde78dc88e805121830ee03df34df49f19d5ee186c74b769adac940145dd4f0e->enter($__internal_cde78dc88e805121830ee03df34df49f19d5ee186c74b769adac940145dd4f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70c81ec4418b58c64b8b662991f5dc089ab018ec9ca75bfcbe9ad9c173b87178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c81ec4418b58c64b8b662991f5dc089ab018ec9ca75bfcbe9ad9c173b87178->enter($__internal_70c81ec4418b58c64b8b662991f5dc089ab018ec9ca75bfcbe9ad9c173b87178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-head_agile_info_w3l\">
        <div class=\"container\">
            <h3>Single <span>Page </span></h3>
            <!--/w3_short-->
            <div class=\"services-breadcrumb\">
                <div class=\"agile_inner_breadcrumb\">

                    <ul class=\"w3_short\">
                        <li><a href=\"\">Home</a><i>|</i></li>
                        <li>Single Page</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>


    <h1>Boutiques list</h1>
    <div class=\"banner-bootom-w3-agileits\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boutiques"]) ? $context["boutiques"] : $this->getContext($context, "boutiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 25
            echo "            <div class=\"col-md-3 product-men single\">
                <div class=\"men-pro-item simpleCart_shelfItem\">
                    <div class=\"men-thumb-item\">
                        <img src=\"images/w2.jpg\" alt=\"\" class=\"pro-image-front\">
                        <img src=\"images/w2.jpg\" alt=\"\" class=\"pro-image-back\">
                        <div class=\"men-cart-pro\">
                            <div class=\"inner-men-cart-pro\">
                                <a href=\"single.html\" class=\"link-product-add-cart\">Quick View</a>
                            </div>
                        </div>
                        <span class=\"product-new-top\">New</span>

                    </div>
                    <div class=\"item-info-product \">
                        <h4><a href=\"single.html\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nomBoutique", array()), "html", null, true);
            echo "</a></h4>
                        <div class=\"info-product-price\">
                            <span class=\"item_price\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "categorie", array()), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">
                            ";
            // line 44
            $context["found"] = 0;
            // line 45
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["boutique"], "abonnees", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["item"], "client", array()), "id", array()))) {
                    // line 47
                    echo "                                    ";
                    $context["found"] = 1;
                    // line 48
                    echo "                                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_client_sabonnerdesabonner", array("id" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
                    echo "\" method=\"GET\">
                                    <fieldset>
                                        <input type=\"submit\" name=\"abonnement\" value=\"Se désabonner\" class=\"button\" />
                                    </fieldset>
                                    </form>
                                ";
                }
                // line 54
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            ";
            if (((isset($context["found"]) ? $context["found"] : $this->getContext($context, "found")) == 0)) {
                // line 56
                echo "                                <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boutiques_client_sabonnerdesabonner", array("id" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
                echo "\" method=\"GET\">
                                <fieldset>
                                    <input type=\"submit\" name=\"abonnement\" value=\"S'abonner\" class=\"button\"/>
                                </fieldset>
                                </form>
                            ";
            }
            // line 62
            echo "                                
                            </div>

                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </div>

                <div class=\"clearfix\"></div>
                <br><br>
                ";
        
        $__internal_70c81ec4418b58c64b8b662991f5dc089ab018ec9ca75bfcbe9ad9c173b87178->leave($__internal_70c81ec4418b58c64b8b662991f5dc089ab018ec9ca75bfcbe9ad9c173b87178_prof);

        
        $__internal_cde78dc88e805121830ee03df34df49f19d5ee186c74b769adac940145dd4f0e->leave($__internal_cde78dc88e805121830ee03df34df49f19d5ee186c74b769adac940145dd4f0e_prof);

    }

    public function getTemplateName()
    {
        return "MyAppBoutiqueClientBundle:boutique:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 69,  144 => 62,  134 => 56,  131 => 55,  125 => 54,  115 => 48,  112 => 47,  109 => 46,  104 => 45,  102 => 44,  96 => 41,  91 => 39,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
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
            <h3>Single <span>Page </span></h3>
            <!--/w3_short-->
            <div class=\"services-breadcrumb\">
                <div class=\"agile_inner_breadcrumb\">

                    <ul class=\"w3_short\">
                        <li><a href=\"\">Home</a><i>|</i></li>
                        <li>Single Page</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>


    <h1>Boutiques list</h1>
    <div class=\"banner-bootom-w3-agileits\">
        {% for boutique in boutiques %}
            <div class=\"col-md-3 product-men single\">
                <div class=\"men-pro-item simpleCart_shelfItem\">
                    <div class=\"men-thumb-item\">
                        <img src=\"images/w2.jpg\" alt=\"\" class=\"pro-image-front\">
                        <img src=\"images/w2.jpg\" alt=\"\" class=\"pro-image-back\">
                        <div class=\"men-cart-pro\">
                            <div class=\"inner-men-cart-pro\">
                                <a href=\"single.html\" class=\"link-product-add-cart\">Quick View</a>
                            </div>
                        </div>
                        <span class=\"product-new-top\">New</span>

                    </div>
                    <div class=\"item-info-product \">
                        <h4><a href=\"single.html\">{{ boutique.nomBoutique }}</a></h4>
                        <div class=\"info-product-price\">
                            <span class=\"item_price\">{{ boutique.categorie }}</span>
                        </div>
                        <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">
                            {% set found = 0 %}
                            {% for item in boutique.abonnees %}
                                {% if app.user.id == item.client.id %}
                                    {% set found = 1 %}
                                    <form action=\"{{ path('boutiques_client_sabonnerdesabonner',{id: boutique.id}) }}\" method=\"GET\">
                                    <fieldset>
                                        <input type=\"submit\" name=\"abonnement\" value=\"Se désabonner\" class=\"button\" />
                                    </fieldset>
                                    </form>
                                {% endif %}
                            {% endfor %}
                            {% if found == 0%}
                                <form action=\"{{ path('boutiques_client_sabonnerdesabonner',{id: boutique.id}) }}\" method=\"GET\">
                                <fieldset>
                                    <input type=\"submit\" name=\"abonnement\" value=\"S'abonner\" class=\"button\"/>
                                </fieldset>
                                </form>
                            {% endif %}
                                
                            </div>

                        </div>
                    </div>
                </div>
                {% endfor %}
                </div>

                <div class=\"clearfix\"></div>
                <br><br>
                {% endblock %}
", "MyAppBoutiqueClientBundle:boutique:index.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\BoutiqueClientBundle/Resources/views/boutique/index.html.twig");
    }
}
