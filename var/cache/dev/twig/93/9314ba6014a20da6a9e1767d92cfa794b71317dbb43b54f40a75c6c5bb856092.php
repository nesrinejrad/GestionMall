<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_91c3b3fa1013c42257ee4f13b3342e06b7c8f6ab23cbf6d45e0b3def622d7c1c extends Twig_Template
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
        $__internal_de2c94232cf6047844b2f47a4a03a8d2875af06206249d3b23d11cf7853b454b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2c94232cf6047844b2f47a4a03a8d2875af06206249d3b23d11cf7853b454b->enter($__internal_de2c94232cf6047844b2f47a4a03a8d2875af06206249d3b23d11cf7853b454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_d328df78e9951bb8c3ecb90edba8132c7e864bfe33e78cd0571146743825b014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d328df78e9951bb8c3ecb90edba8132c7e864bfe33e78cd0571146743825b014->enter($__internal_d328df78e9951bb8c3ecb90edba8132c7e864bfe33e78cd0571146743825b014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "<div class=\"content-wrapper\">

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Utilisateur </h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-3 center\"> 
                                <span class=\"profile-picture\"> 
                                    <img class=\"editable img-responsive\" alt=\" Avatar\" id=\"avatar2\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/img/Flag_of_Tunisia.svg.png"), "html", null, true);
        echo "\"> 
                                </span>
                                <div class=\"space space-4\"></div>
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-sm btn-block btn-success\"> 
                                    <i class=\"ace-icon fa fa-plus-circle bigger-120\"></i> 
                                    <span class=\"bigger-110\">Mise à jour</span> 
                                </a>
                                <div class=\"space space-4\"></div>
                                <br>
                                <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-sm btn-block btn-info\"> 
                                    <i class=\"ace-icon fa fa-plus-circle bigger-120\"></i> 
                                    <span class=\"bigger-110\">Changer mot de passe</span> 
                                </a>
                            </div>
                            <div class=\"col-xs-12 col-sm-9\">
                                <h4 class=\"blue\"> 
                                    <span class=\"middle\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
                                    <span class=\"label label-purple arrowed-in-right\"> 
                                        <i class=\"ace-icon fa fa-circle smaller-80 align-middle\"></i> online </span>
                                </h4>
                                <div class=\"profile-user-info\">
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>
                                        <div class=\"profile-info-value\"> <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span></div>
                                    </div>
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>
                                        <div class=\"profile-info-value\"> 
                                            <i class=\"fa fa-map-marker light-orange bigger-110\"></i> 
                                            <span>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span> 
                                        </div>
                                    </div>
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> derniere connexion</div>
                                        <div class=\"profile-info-value\"> 
                                            <i class=\"fa fa-map-marker light-orange bigger-110\"></i> 
                                            <span>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastlogin", array()), "d-M-Y H:i:s"), "html", null, true);
        echo "</span> 
                                        </div>
                                    </div>
                                </div>
                                <div class=\"hr hr-8 dotted\"></div>
                            </div>
                        </div>
                        ";
        // line 63
        echo "
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>

";
        
        $__internal_de2c94232cf6047844b2f47a4a03a8d2875af06206249d3b23d11cf7853b454b->leave($__internal_de2c94232cf6047844b2f47a4a03a8d2875af06206249d3b23d11cf7853b454b_prof);

        
        $__internal_d328df78e9951bb8c3ecb90edba8132c7e864bfe33e78cd0571146743825b014->leave($__internal_d328df78e9951bb8c3ecb90edba8132c7e864bfe33e78cd0571146743825b014_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 63,  101 => 52,  91 => 45,  85 => 42,  79 => 39,  75 => 38,  66 => 32,  56 => 25,  47 => 19,  41 => 16,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"content-wrapper\">

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Utilisateur </h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-3 center\"> 
                                <span class=\"profile-picture\"> 
                                    <img class=\"editable img-responsive\" alt=\" Avatar\" id=\"avatar2\" src=\"{{ asset('assets/dist/img/Flag_of_Tunisia.svg.png')}}\"> 
                                </span>
                                <div class=\"space space-4\"></div>
                                <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-sm btn-block btn-success\"> 
                                    <i class=\"ace-icon fa fa-plus-circle bigger-120\"></i> 
                                    <span class=\"bigger-110\">Mise à jour</span> 
                                </a>
                                <div class=\"space space-4\"></div>
                                <br>
                                <a href=\"{{ path('fos_user_change_password') }}\" class=\"btn btn-sm btn-block btn-info\"> 
                                    <i class=\"ace-icon fa fa-plus-circle bigger-120\"></i> 
                                    <span class=\"bigger-110\">Changer mot de passe</span> 
                                </a>
                            </div>
                            <div class=\"col-xs-12 col-sm-9\">
                                <h4 class=\"blue\"> 
                                    <span class=\"middle\">{{ user.username }}</span>
                                    <span class=\"label label-purple arrowed-in-right\"> 
                                        <i class=\"ace-icon fa fa-circle smaller-80 align-middle\"></i> online </span>
                                </h4>
                                <div class=\"profile-user-info\">
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> {{ 'profile.show.username'|trans }}</div>
                                        <div class=\"profile-info-value\"> <span>{{ user.username }}</span></div>
                                    </div>
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> {{ 'profile.show.email'|trans }}</div>
                                        <div class=\"profile-info-value\"> 
                                            <i class=\"fa fa-map-marker light-orange bigger-110\"></i> 
                                            <span>{{ user.email }}</span> 
                                        </div>
                                    </div>
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> derniere connexion</div>
                                        <div class=\"profile-info-value\"> 
                                            <i class=\"fa fa-map-marker light-orange bigger-110\"></i> 
                                            <span>{{ user.lastlogin | date('d-M-Y H:i:s')}}</span> 
                                        </div>
                                    </div>
                                </div>
                                <div class=\"hr hr-8 dotted\"></div>
                            </div>
                        </div>
                        {#<div class=\"fos_user_user_show\">
                            <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
                            <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
                        </div>#}

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>

", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
