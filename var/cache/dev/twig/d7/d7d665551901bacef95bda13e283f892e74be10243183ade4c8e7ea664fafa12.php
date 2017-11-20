<?php

/* FOSUserBundle::registerlayout.html.twig */
class __TwigTemplate_bf755a55bdd5fd729192084621f8d700a6d34979a783c9d4a062dfcb0040687e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d2fbb52828cce81dc1f489b40694bf8a7effcdae9e2365dbee2dd151e172930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2fbb52828cce81dc1f489b40694bf8a7effcdae9e2365dbee2dd151e172930->enter($__internal_2d2fbb52828cce81dc1f489b40694bf8a7effcdae9e2365dbee2dd151e172930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::registerlayout.html.twig"));

        $__internal_4aa176760c92efa268022a8ad0694c7c6d60c3b1deddbc485233f71bddbc78a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa176760c92efa268022a8ad0694c7c6d60c3b1deddbc485233f71bddbc78a6->enter($__internal_4aa176760c92efa268022a8ad0694c7c6d60c3b1deddbc485233f71bddbc78a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::registerlayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang=\"en\" class=\"no-js ie6 lt8\"> <![endif]-->
<!--[if IE 7 ]>    <html lang=\"en\" class=\"no-js ie7 lt8\"> <![endif]-->
<!--[if IE 8 ]>    <html lang=\"en\" class=\"no-js ie8 lt8\"> <![endif]-->
<!--[if IE 9 ]>    <html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\" />
        <!-- <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">  -->
        <title>ARSINNOV</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/registercss.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">

            <header>
                <h1>Fiche d'inscription</h1>

            </header>
            <section>\t\t\t\t
                <div id=\"container_demo\" >
                    <div id=\"wrapper\">
                        <div id=\"login\" class=\"animate form\">
                            ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "                            <a href=\"#\" onclick=\"switcher(3);\" class=\"to_register\">Client</a>
                            <p class=\"change_link\">
                                <b>Demander une invitation</b>
                                <a href=\"#\" onclick=\"switcher(1);\" class=\"to_register\">Demander code</a>
                            </p>
                        </div>
                        <div id=\"client\" class=\"animate form\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MyAppUserBundle:RegistrationClient:register"));
        echo "
                            <a href=\"#\" onclick=\"switcher(2);\" class=\"to_register\">Responsable</a>
                            <p class=\"change_link\">
                                <b>J'ai déjà un code</b>
                                <a href=\"#\" onclick=\"switcher(2);\" class=\"to_register\">Inscription</a>
                            </p>
                        </div>
                        <div id=\"register\" class=\"animate form\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MyAppUserBundle:Demande:new"));
        echo "
                            <p class=\"change_link\">
                                <b>J'ai déjà un code</b>
                                <a href=\"#\" onclick=\"switcher(2);\" class=\"to_register\">Inscription</a>
                            </p>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
                        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script>
        function switcher(id) {
            if(id == 1){
            \$(\"#register\").css('opacity',1);//responsable
            \$(\"#register\").css('z-index',1000);
            \$(\"#login\").css('opacity',0);//demande
            \$(\"#login\").css('z-index',0);
            \$(\"#client\").css('opacity',0);//client
            \$(\"#client\").css('z-index',0);
        }else if(id == 2){
            \$(\"#register\").css('opacity',0);
            \$(\"#register\").css('z-index',0);
            \$(\"#login\").css('opacity',1);
            \$(\"#login\").css('z-index',1000);
            \$(\"#client\").css('opacity',0);//client
            \$(\"#client\").css('z-index',0);
        }else{
            \$(\"#register\").css('opacity',0);
            \$(\"#register\").css('z-index',0);
            \$(\"#login\").css('opacity',0);
            \$(\"#login\").css('z-index',0);
            \$(\"#client\").css('opacity',1);//client
            \$(\"#client\").css('z-index',1000);
        }
    }
    </script>
    </body>
</html>";
        
        $__internal_2d2fbb52828cce81dc1f489b40694bf8a7effcdae9e2365dbee2dd151e172930->leave($__internal_2d2fbb52828cce81dc1f489b40694bf8a7effcdae9e2365dbee2dd151e172930_prof);

        
        $__internal_4aa176760c92efa268022a8ad0694c7c6d60c3b1deddbc485233f71bddbc78a6->leave($__internal_4aa176760c92efa268022a8ad0694c7c6d60c3b1deddbc485233f71bddbc78a6_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_830fa3326f8de18182785db08bd753bf11adbcd1b0d420f7029cb22479a9996d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830fa3326f8de18182785db08bd753bf11adbcd1b0d420f7029cb22479a9996d->enter($__internal_830fa3326f8de18182785db08bd753bf11adbcd1b0d420f7029cb22479a9996d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d95de3323bd2840b5a998c55ba1f05fd9343d0096f23128a01b5f49180c75cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95de3323bd2840b5a998c55ba1f05fd9343d0096f23128a01b5f49180c75cce->enter($__internal_d95de3323bd2840b5a998c55ba1f05fd9343d0096f23128a01b5f49180c75cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
                            ";
        
        $__internal_d95de3323bd2840b5a998c55ba1f05fd9343d0096f23128a01b5f49180c75cce->leave($__internal_d95de3323bd2840b5a998c55ba1f05fd9343d0096f23128a01b5f49180c75cce_prof);

        
        $__internal_830fa3326f8de18182785db08bd753bf11adbcd1b0d420f7029cb22479a9996d->leave($__internal_830fa3326f8de18182785db08bd753bf11adbcd1b0d420f7029cb22479a9996d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::registerlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 28,  136 => 27,  97 => 57,  92 => 55,  79 => 45,  68 => 37,  59 => 30,  57 => 27,  41 => 14,  26 => 1,);
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
<!--[if lt IE 7 ]> <html lang=\"en\" class=\"no-js ie6 lt8\"> <![endif]-->
<!--[if IE 7 ]>    <html lang=\"en\" class=\"no-js ie7 lt8\"> <![endif]-->
<!--[if IE 8 ]>    <html lang=\"en\" class=\"no-js ie8 lt8\"> <![endif]-->
<!--[if IE 9 ]>    <html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"UTF-8\" />
        <!-- <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">  -->
        <title>ARSINNOV</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"{{ asset('assets/registercss.css') }}\" />
    </head>
    <body>
        <div class=\"container\">

            <header>
                <h1>Fiche d'inscription</h1>

            </header>
            <section>\t\t\t\t
                <div id=\"container_demo\" >
                    <div id=\"wrapper\">
                        <div id=\"login\" class=\"animate form\">
                            {% block body %}

                            {%  endblock body %}
                            <a href=\"#\" onclick=\"switcher(3);\" class=\"to_register\">Client</a>
                            <p class=\"change_link\">
                                <b>Demander une invitation</b>
                                <a href=\"#\" onclick=\"switcher(1);\" class=\"to_register\">Demander code</a>
                            </p>
                        </div>
                        <div id=\"client\" class=\"animate form\">
                            {{ render(controller( 'MyAppUserBundle:RegistrationClient:register')) }}
                            <a href=\"#\" onclick=\"switcher(2);\" class=\"to_register\">Responsable</a>
                            <p class=\"change_link\">
                                <b>J'ai déjà un code</b>
                                <a href=\"#\" onclick=\"switcher(2);\" class=\"to_register\">Inscription</a>
                            </p>
                        </div>
                        <div id=\"register\" class=\"animate form\">
                            {{ render(controller( 'MyAppUserBundle:Demande:new')) }}
                            <p class=\"change_link\">
                                <b>J'ai déjà un code</b>
                                <a href=\"#\" onclick=\"switcher(2);\" class=\"to_register\">Inscription</a>
                            </p>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
                        <script src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script>
        function switcher(id) {
            if(id == 1){
            \$(\"#register\").css('opacity',1);//responsable
            \$(\"#register\").css('z-index',1000);
            \$(\"#login\").css('opacity',0);//demande
            \$(\"#login\").css('z-index',0);
            \$(\"#client\").css('opacity',0);//client
            \$(\"#client\").css('z-index',0);
        }else if(id == 2){
            \$(\"#register\").css('opacity',0);
            \$(\"#register\").css('z-index',0);
            \$(\"#login\").css('opacity',1);
            \$(\"#login\").css('z-index',1000);
            \$(\"#client\").css('opacity',0);//client
            \$(\"#client\").css('z-index',0);
        }else{
            \$(\"#register\").css('opacity',0);
            \$(\"#register\").css('z-index',0);
            \$(\"#login\").css('opacity',0);
            \$(\"#login\").css('z-index',0);
            \$(\"#client\").css('opacity',1);//client
            \$(\"#client\").css('z-index',1000);
        }
    }
    </script>
    </body>
</html>", "FOSUserBundle::registerlayout.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app/Resources/FOSUserBundle/views/registerlayout.html.twig");
    }
}
