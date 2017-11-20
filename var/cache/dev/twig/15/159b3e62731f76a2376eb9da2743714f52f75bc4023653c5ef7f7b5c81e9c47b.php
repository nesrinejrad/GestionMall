<?php

/* MyAppUserBundle:boutiques:show.html.twig */
class __TwigTemplate_bb03bb9eaeff45fe93f2bc4a3a72a2279f870fdea5f87d885f535d5fe7a5ced7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyAppUserBundle:Default:base.html.twig", "MyAppUserBundle:boutiques:show.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUserBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9866ea85156960c75058dc5c7e4458590a5e6550c59dbc1e3354f70011ecb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9866ea85156960c75058dc5c7e4458590a5e6550c59dbc1e3354f70011ecb66->enter($__internal_f9866ea85156960c75058dc5c7e4458590a5e6550c59dbc1e3354f70011ecb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:boutiques:show.html.twig"));

        $__internal_405977b0a68c112fa01a86789eb8540342b24c57983965c3db0c5d7d0da38e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405977b0a68c112fa01a86789eb8540342b24c57983965c3db0c5d7d0da38e09->enter($__internal_405977b0a68c112fa01a86789eb8540342b24c57983965c3db0c5d7d0da38e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:boutiques:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9866ea85156960c75058dc5c7e4458590a5e6550c59dbc1e3354f70011ecb66->leave($__internal_f9866ea85156960c75058dc5c7e4458590a5e6550c59dbc1e3354f70011ecb66_prof);

        
        $__internal_405977b0a68c112fa01a86789eb8540342b24c57983965c3db0c5d7d0da38e09->leave($__internal_405977b0a68c112fa01a86789eb8540342b24c57983965c3db0c5d7d0da38e09_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_899d03c664cb3d4b742f8cad0fea1bbc304bf7b622a4665e22bd00691892d5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899d03c664cb3d4b742f8cad0fea1bbc304bf7b622a4665e22bd00691892d5da->enter($__internal_899d03c664cb3d4b742f8cad0fea1bbc304bf7b622a4665e22bd00691892d5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f58c91edf1d040869ae1ad2ac9081c5419b596092f84c86ee0fd74c2b565ed7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58c91edf1d040869ae1ad2ac9081c5419b596092f84c86ee0fd74c2b565ed7d->enter($__internal_f58c91edf1d040869ae1ad2ac9081c5419b596092f84c86ee0fd74c2b565ed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    <style>
        body
        {
            font-family: 'Open Sans', sans-serif;
        }

        .fb-profile img.fb-image-lg{
            z-index: 0;
            width: 100%; 
            height: 350px;
            margin-bottom: 10px;
        }

        .fb-image-profile
        {
            margin: -84px 10px 0px 50px;
            z-index: 9;
            width: 11%;
        }

        @media (max-width:768px)
        {

            .fb-profile-text>h1{
                font-weight: 700;
                font-size:16px;
            }

            .fb-image-profile
            {
                margin: -45px 10px 0px 25px;
                z-index: 9;
                width: 20%; 
            }
        }

        /* responsable */
        body {
            background: #F1F3FA;
        }

        /* Profile container */
        .profile {
            margin: 20px 0;
        }

        /* Profile sidebar */
        .profile-sidebar {
            padding: 20px 0 10px 0;
            background: #fff;
        }

        .profile-userpic img {
            float: none;
            margin: 0 auto;
            width: 50%;
            height: 50%;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
        }

        .profile-usertitle {
            text-align: center;
            margin-top: 20px;
        }

        .profile-usertitle-name {
            color: #5a7391;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .profile-usertitle-job {
            text-transform: uppercase;
            color: #5b9bd1;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .profile-userbuttons {
            text-align: center;
            margin-top: 10px;
        }

        .profile-userbuttons .btn {
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 600;
            padding: 6px 15px;
            margin-right: 5px;
        }

        .profile-userbuttons .btn:last-child {
            margin-right: 0px;
        }

        .profile-usermenu {
            margin-top: 30px;
        }

        .profile-usermenu ul li {
            border-bottom: 1px solid #f0f4f7;
        }

        .profile-usermenu ul li:last-child {
            border-bottom: none;
        }

        .profile-usermenu ul li a {
            color: #93a3b5;
            font-size: 14px;
            font-weight: 400;
        }

        .profile-usermenu ul li a i {
            margin-right: 8px;
            font-size: 14px;
        }

        .profile-usermenu ul li a:hover {
            background-color: #fafcfd;
            color: #5b9bd1;
        }

        .profile-usermenu ul li.active {
            border-bottom: none;
        }

        .profile-usermenu ul li.active a {
            color: #5b9bd1;
            background-color: #f6f9fb;
            border-left: 2px solid #5b9bd1;
            margin-left: -2px;
        }

        /* Profile Content */
        .profile-content {
            background: #fff;
            min-height: 460px;
        }

        /*tab*/
        @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
        /* written by riliwan balogun http://www.facebook.com/riliwan.rabo*/
        .board{
            background: #fff;
            /*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
        }
        .board .nav-tabs {
            position: relative;
            /* border-bottom: 0; */
            /* width: 80%; */
            margin-bottom: 0;
            box-sizing: border-box;

        }

        .board > div.board-inner{
            background: #fafafa url(http://subtlepatterns.com/patterns/geometry2.png);
            background-size: 30%;
        }

        p.narrow{
            width: 60%;
            margin: 10px auto;
        }

        .liner{
            height: 2px;
            background: #ddd;
            position: absolute;
            width: 100%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
            color: #555555;
            cursor: default;
            /* background-color: #ffffff; */
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tabs{
            width: 70px;
            height: 70px;
            line-height: 70px;
            display: inline-block;
            border-radius: 100px;
            background: white;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 25px;
        }

        span.round-tabs.one{
            color: rgb(34, 194, 34);border: 2px solid rgb(34, 194, 34);
        }

        li.active span.round-tabs.one{
            background: #fff !important;
            border: 2px solid #ddd;
            color: rgb(34, 194, 34);
        }

        span.round-tabs.two{
            color: #febe29;border: 2px solid #febe29;
        }

        li.active span.round-tabs.two{
            background: #fff !important;
            border: 2px solid #ddd;
            color: #febe29;
        }

        span.round-tabs.three{
            color: #3e5e9a;border: 2px solid #3e5e9a;
        }

        li.active span.round-tabs.three{
            background: #fff !important;
            border: 2px solid #ddd;
            color: #3e5e9a;
        }

        span.round-tabs.four{
            color: #f1685e;border: 2px solid #f1685e;
        }

        li.active span.round-tabs.four{
            background: #fff !important;
            border: 2px solid #ddd;
            color: #f1685e;
        }

        span.round-tabs.five{
            color: #999;border: 2px solid #999;
        }

        li.active span.round-tabs.five{
            background: #fff !important;
            border: 2px solid #ddd;
            color: #999;
        }

        .nav-tabs > li.active > a span.round-tabs{
            background: #fafafa;
        }
        .nav-tabs > li {
            width: 20%;
        }
        /*li.active:before {
            content: \" \";
            position: absolute;
            left: 45%;
            opacity:0;
            margin: 0 auto;
            bottom: -2px;
            border: 10px solid transparent;
            border-bottom-color: #fff;
            z-index: 1;
            transition:0.2s ease-in-out;
        }*/
        li:after {
            content: \" \";
            position: absolute;
            left: 45%;
            opacity:0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: #ddd;
            transition:0.1s ease-in-out;

        }
        #myTab li.active:after {
            content: \" \";
            position: absolute;
            left: 45%;
            opacity:1;
            margin: 0 auto;
            bottom: 0px;
            border: 10px solid transparent;
            border-bottom-color: #ddd;

        }
        .nav-tabs > li a{
            width: 70px;
            height: 70px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
        }

        .nav-tabs > li a:hover{
            background: transparent;
        }

        .tab-content{
        }
        .tab-pane{
            position: relative;
            padding-top: 50px;
        }
        .tab-content .head{
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 25px;
            text-transform: uppercase;
            padding-bottom: 10px;
        }
        .btn-outline-rounded{
            padding: 10px 40px;
            margin: 20px 0;
            border: 2px solid transparent;
            border-radius: 25px;
        }

        .btn.green{
            background-color:#5cb85c;
            /*border: 2px solid #5cb85c;*/
            color: #ffffff;
        }



        @media( max-width : 585px ){

            .board {
                width: 90%;
                height:auto !important;
            }
            span.round-tabs {
                font-size:16px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }
            .tab-content .head{
                font-size:20px;
            }
            .nav-tabs > li a {
                width: 50px;
                height: 50px;
                line-height:50px;
            }

            #myTab li.active:after {
                content: \" \";
                position: absolute;
                left: 35%;
            }

            .btn-outline-rounded {
                padding:12px 20px;
            }
        }
    </style>
";
        
        $__internal_f58c91edf1d040869ae1ad2ac9081c5419b596092f84c86ee0fd74c2b565ed7d->leave($__internal_f58c91edf1d040869ae1ad2ac9081c5419b596092f84c86ee0fd74c2b565ed7d_prof);

        
        $__internal_899d03c664cb3d4b742f8cad0fea1bbc304bf7b622a4665e22bd00691892d5da->leave($__internal_899d03c664cb3d4b742f8cad0fea1bbc304bf7b622a4665e22bd00691892d5da_prof);

    }

    // line 372
    public function block_body($context, array $blocks = array())
    {
        $__internal_939315adf69adce497eca077cd3e1b11d2592a69e32f7f4986d1d1136929d553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939315adf69adce497eca077cd3e1b11d2592a69e32f7f4986d1d1136929d553->enter($__internal_939315adf69adce497eca077cd3e1b11d2592a69e32f7f4986d1d1136929d553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d88269b4602338a98a40522ff9353a1f989be3ff4f63324b1018ae76542f5415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88269b4602338a98a40522ff9353a1f989be3ff4f63324b1018ae76542f5415->enter($__internal_d88269b4602338a98a40522ff9353a1f989be3ff4f63324b1018ae76542f5415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 373
        echo "<div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class=\"content\">

            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
            <div class=\"\">
                <div class=\"fb-profile\">
                    <img align=\"left\" class=\"fb-image-lg\" src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/couvertureboutique.jpg"), "html", null, true);
        echo "\" alt=\"Profile image example\"/>
                    <img align=\"left\" class=\"fb-image-profile thumbnail\" src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photoprofil.png"), "html", null, true);
        echo "\" alt=\"Profile image example\"/>
                    <div class=\"fb-profile-text\">
                        <span style=\"font-size: 25px\">";
        // line 385
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "nomBoutique", array()), "html", null, true);
        echo "</span> <sup>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "categorie", array()), "html", null, true);
        echo "</sup>
                    </div>
                </div>
            </div> <!-- /container -->

            <div class=\"\">
                <div class=\"row profile\">
                    <div class=\"col-md-3\">
                        <div class=\"profile-sidebar\">
                            <!-- SIDEBAR USERPIC -->
                            <div class=\"profile-userpic\">
                                <img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/photoprofil.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class=\"profile-usertitle\">
                                <div class=\"profile-usertitle-name\">
                                    ";
        // line 402
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "responsable", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "responsable", array()), "nom", array()), "html", null, true);
        echo "
                                </div>
                                <div class=\"profile-usertitle-job\">
                                    RESPONSABLE
                                </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <div class=\"profile-userbuttons\">
                                <a type=\"button\" href=\"tel:";
        // line 411
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "responsable", array()), "tel", array()), "html", null, true);
        echo "\" class=\"btn btn-success btn-sm\">APPELER <i class=\"fa fa-phone\"></i></a>
                                <button type=\"button\" class=\"btn btn-danger btn-sm\">Message <i class=\"fa fa-envelope\"></i></button>
                            </div>
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class=\"profile-usermenu\">
                                <ul class=\"nav\">
                                    <li class=\"\">
                                        <a href=\"#\">
                                            <i class=\"glyphicon glyphicon-home\"></i>
                                            ";
        // line 421
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "responsable", array()), "tel", array()), "html", null, true);
        echo " </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"#\">
                                            <i class=\"glyphicon glyphicon-map-marker\"></i>
                                            ";
        // line 426
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "responsable", array()), "adresse", array()), "html", null, true);
        echo " </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"#\" target=\"_blank\">
                                            <i class=\"glyphicon glyphicon-envelope\"></i>
                                            ";
        // line 431
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "responsable", array()), "email", array()), "html", null, true);
        echo " </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"profile-content\">
                            <!-- tab -->
                            <section style=\"background:#efefe9;\">
                                <div class=\"\">
                                    <div class=\"\">
                                        <div class=\"board\">
                                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                            <div class=\"board-inner\">
                                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                                    <div class=\"liner\"></div>
                                                    <li class=\"active\">
                                                        <a href=\"#home\" data-toggle=\"tab\" title=\"Accueil\">
                                                            <span class=\"round-tabs one\">
                                                                <i class=\"glyphicon glyphicon-home\"></i>
                                                            </span> 
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href=\"#produits\" data-toggle=\"tab\" title=\"Produits\">
                                                            <span class=\"round-tabs two\">
                                                                <i class=\"glyphicon glyphicon-tags\"></i>
                                                            </span> 
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#abonnes\" data-toggle=\"tab\" title=\"Abonnées\">
                                                            <span class=\"round-tabs three\">
                                                                <i class=\"glyphicon glyphicon-user\"></i>
                                                            </span> 
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href=\"#offres\" data-toggle=\"tab\" title=\"Offres\">
                                                            <span class=\"round-tabs four\">
                                                                <i class=\"glyphicon glyphicon-gift\"></i>
                                                            </span> 
                                                        </a>
                                                    </li>

                                                </ul></div>

                                            <div class=\"tab-content\">
                                                <div class=\"tab-pane fade in active\" id=\"home\">

                                                    <h3 class=\"head text-center\">";
        // line 485
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "nomBoutique", array()), "html", null, true);
        echo "<sup>™</sup> <span style=\"color:#f48260;\">♥</span></h3>
                                                    <p class=\"narrow text-center\">
                                                        ";
        // line 487
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "descriptionBoutique", array()), "html", null, true);
        echo ".
                                                    </p>

                                                    <p class=\"text-center\">
                                                        <a href=\"";
        // line 491
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\" class=\"btn btn-success btn-outline-rounded green\"> Voir Version Client <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                                                    </p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"produits\">
                                                    <h3 class=\"head text-center\">Produits</h3>
                                                    <div class=\"narrow\">
                                                        <table class=\"table table-bordered table-hover\">
                                                        <thead>
                                                            <tr>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>a1</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                            </tr>
                                                            <tr>
                                                                <td>a2</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                            </tr>
                                                            <tr>
                                                                <td>a3</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>

                                                    <p class=\"text-center\">
                                                        <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> Ajouter un produit <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                                                    </p>

                                                </div>
                                                <div class=\"tab-pane fade\" id=\"abonnes\">
                                                    <h3 class=\"head text-center\">Abonnées</h3>
                                                    ";
        // line 536
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MyAppUserBundle:abonnement:abonnementsMaBoutiqueSansStyle", array("id" => $this->getAttribute((isset($context["boutique"]) ? $context["boutique"] : $this->getContext($context, "boutique")), "id", array()))));
        echo "
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"offres\">
                                                    <h3 class=\"head text-center\">Offres ! <span style=\"color:#f48260;\">♥</span></h3>
                                                    <p class=\"narrow text-center\">
                                                        tableau des offres
                                                    </p>

                                                    <p class=\"text-center\">
                                                        <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> Ajouter une offre <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                                                    </p>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- fin tab -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- fin profil responsable -->



            <!-- fintableau -->
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


";
        
        $__internal_d88269b4602338a98a40522ff9353a1f989be3ff4f63324b1018ae76542f5415->leave($__internal_d88269b4602338a98a40522ff9353a1f989be3ff4f63324b1018ae76542f5415_prof);

        
        $__internal_939315adf69adce497eca077cd3e1b11d2592a69e32f7f4986d1d1136929d553->leave($__internal_939315adf69adce497eca077cd3e1b11d2592a69e32f7f4986d1d1136929d553_prof);

    }

    // line 576
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_eb3c50cb210a7edc050b34cb1ab81551d6fe7b7c6ace37ed7bfb70097fa37530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3c50cb210a7edc050b34cb1ab81551d6fe7b7c6ace37ed7bfb70097fa37530->enter($__internal_eb3c50cb210a7edc050b34cb1ab81551d6fe7b7c6ace37ed7bfb70097fa37530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4ac7bc2a3641c10c424302fed2b84074f2bf6f47307832b4808cbed61629641c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac7bc2a3641c10c424302fed2b84074f2bf6f47307832b4808cbed61629641c->enter($__internal_4ac7bc2a3641c10c424302fed2b84074f2bf6f47307832b4808cbed61629641c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 577
        echo "    <script>
        \$(function () {
            \$('a[title]').tooltip();
        });

    </script>
";
        
        $__internal_4ac7bc2a3641c10c424302fed2b84074f2bf6f47307832b4808cbed61629641c->leave($__internal_4ac7bc2a3641c10c424302fed2b84074f2bf6f47307832b4808cbed61629641c_prof);

        
        $__internal_eb3c50cb210a7edc050b34cb1ab81551d6fe7b7c6ace37ed7bfb70097fa37530->leave($__internal_eb3c50cb210a7edc050b34cb1ab81551d6fe7b7c6ace37ed7bfb70097fa37530_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:boutiques:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 577,  690 => 576,  641 => 536,  593 => 491,  586 => 487,  581 => 485,  524 => 431,  516 => 426,  508 => 421,  495 => 411,  481 => 402,  472 => 396,  456 => 385,  451 => 383,  447 => 382,  436 => 373,  427 => 372,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MyAppUserBundle:Default:base.html.twig' %}

{% block css %}
    <style>
        body
        {
            font-family: 'Open Sans', sans-serif;
        }

        .fb-profile img.fb-image-lg{
            z-index: 0;
            width: 100%; 
            height: 350px;
            margin-bottom: 10px;
        }

        .fb-image-profile
        {
            margin: -84px 10px 0px 50px;
            z-index: 9;
            width: 11%;
        }

        @media (max-width:768px)
        {

            .fb-profile-text>h1{
                font-weight: 700;
                font-size:16px;
            }

            .fb-image-profile
            {
                margin: -45px 10px 0px 25px;
                z-index: 9;
                width: 20%; 
            }
        }

        /* responsable */
        body {
            background: #F1F3FA;
        }

        /* Profile container */
        .profile {
            margin: 20px 0;
        }

        /* Profile sidebar */
        .profile-sidebar {
            padding: 20px 0 10px 0;
            background: #fff;
        }

        .profile-userpic img {
            float: none;
            margin: 0 auto;
            width: 50%;
            height: 50%;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
        }

        .profile-usertitle {
            text-align: center;
            margin-top: 20px;
        }

        .profile-usertitle-name {
            color: #5a7391;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .profile-usertitle-job {
            text-transform: uppercase;
            color: #5b9bd1;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .profile-userbuttons {
            text-align: center;
            margin-top: 10px;
        }

        .profile-userbuttons .btn {
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 600;
            padding: 6px 15px;
            margin-right: 5px;
        }

        .profile-userbuttons .btn:last-child {
            margin-right: 0px;
        }

        .profile-usermenu {
            margin-top: 30px;
        }

        .profile-usermenu ul li {
            border-bottom: 1px solid #f0f4f7;
        }

        .profile-usermenu ul li:last-child {
            border-bottom: none;
        }

        .profile-usermenu ul li a {
            color: #93a3b5;
            font-size: 14px;
            font-weight: 400;
        }

        .profile-usermenu ul li a i {
            margin-right: 8px;
            font-size: 14px;
        }

        .profile-usermenu ul li a:hover {
            background-color: #fafcfd;
            color: #5b9bd1;
        }

        .profile-usermenu ul li.active {
            border-bottom: none;
        }

        .profile-usermenu ul li.active a {
            color: #5b9bd1;
            background-color: #f6f9fb;
            border-left: 2px solid #5b9bd1;
            margin-left: -2px;
        }

        /* Profile Content */
        .profile-content {
            background: #fff;
            min-height: 460px;
        }

        /*tab*/
        @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
        /* written by riliwan balogun http://www.facebook.com/riliwan.rabo*/
        .board{
            background: #fff;
            /*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
        }
        .board .nav-tabs {
            position: relative;
            /* border-bottom: 0; */
            /* width: 80%; */
            margin-bottom: 0;
            box-sizing: border-box;

        }

        .board > div.board-inner{
            background: #fafafa url(http://subtlepatterns.com/patterns/geometry2.png);
            background-size: 30%;
        }

        p.narrow{
            width: 60%;
            margin: 10px auto;
        }

        .liner{
            height: 2px;
            background: #ddd;
            position: absolute;
            width: 100%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
            color: #555555;
            cursor: default;
            /* background-color: #ffffff; */
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tabs{
            width: 70px;
            height: 70px;
            line-height: 70px;
            display: inline-block;
            border-radius: 100px;
            background: white;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 25px;
        }

        span.round-tabs.one{
            color: rgb(34, 194, 34);border: 2px solid rgb(34, 194, 34);
        }

        li.active span.round-tabs.one{
            background: #fff !important;
            border: 2px solid #ddd;
            color: rgb(34, 194, 34);
        }

        span.round-tabs.two{
            color: #febe29;border: 2px solid #febe29;
        }

        li.active span.round-tabs.two{
            background: #fff !important;
            border: 2px solid #ddd;
            color: #febe29;
        }

        span.round-tabs.three{
            color: #3e5e9a;border: 2px solid #3e5e9a;
        }

        li.active span.round-tabs.three{
            background: #fff !important;
            border: 2px solid #ddd;
            color: #3e5e9a;
        }

        span.round-tabs.four{
            color: #f1685e;border: 2px solid #f1685e;
        }

        li.active span.round-tabs.four{
            background: #fff !important;
            border: 2px solid #ddd;
            color: #f1685e;
        }

        span.round-tabs.five{
            color: #999;border: 2px solid #999;
        }

        li.active span.round-tabs.five{
            background: #fff !important;
            border: 2px solid #ddd;
            color: #999;
        }

        .nav-tabs > li.active > a span.round-tabs{
            background: #fafafa;
        }
        .nav-tabs > li {
            width: 20%;
        }
        /*li.active:before {
            content: \" \";
            position: absolute;
            left: 45%;
            opacity:0;
            margin: 0 auto;
            bottom: -2px;
            border: 10px solid transparent;
            border-bottom-color: #fff;
            z-index: 1;
            transition:0.2s ease-in-out;
        }*/
        li:after {
            content: \" \";
            position: absolute;
            left: 45%;
            opacity:0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: #ddd;
            transition:0.1s ease-in-out;

        }
        #myTab li.active:after {
            content: \" \";
            position: absolute;
            left: 45%;
            opacity:1;
            margin: 0 auto;
            bottom: 0px;
            border: 10px solid transparent;
            border-bottom-color: #ddd;

        }
        .nav-tabs > li a{
            width: 70px;
            height: 70px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
        }

        .nav-tabs > li a:hover{
            background: transparent;
        }

        .tab-content{
        }
        .tab-pane{
            position: relative;
            padding-top: 50px;
        }
        .tab-content .head{
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 25px;
            text-transform: uppercase;
            padding-bottom: 10px;
        }
        .btn-outline-rounded{
            padding: 10px 40px;
            margin: 20px 0;
            border: 2px solid transparent;
            border-radius: 25px;
        }

        .btn.green{
            background-color:#5cb85c;
            /*border: 2px solid #5cb85c;*/
            color: #ffffff;
        }



        @media( max-width : 585px ){

            .board {
                width: 90%;
                height:auto !important;
            }
            span.round-tabs {
                font-size:16px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }
            .tab-content .head{
                font-size:20px;
            }
            .nav-tabs > li a {
                width: 50px;
                height: 50px;
                line-height:50px;
            }

            #myTab li.active:after {
                content: \" \";
                position: absolute;
                left: 35%;
            }

            .btn-outline-rounded {
                padding:12px 20px;
            }
        }
    </style>
{% endblock css %}

{% block body -%}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class=\"content\">

            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
            <div class=\"\">
                <div class=\"fb-profile\">
                    <img align=\"left\" class=\"fb-image-lg\" src=\"{{ asset('assets/images/couvertureboutique.jpg') }}\" alt=\"Profile image example\"/>
                    <img align=\"left\" class=\"fb-image-profile thumbnail\" src=\"{{ asset('assets/images/photoprofil.png') }}\" alt=\"Profile image example\"/>
                    <div class=\"fb-profile-text\">
                        <span style=\"font-size: 25px\">{{ boutique.nomBoutique }}</span> <sup>{{ boutique.categorie }}</sup>
                    </div>
                </div>
            </div> <!-- /container -->

            <div class=\"\">
                <div class=\"row profile\">
                    <div class=\"col-md-3\">
                        <div class=\"profile-sidebar\">
                            <!-- SIDEBAR USERPIC -->
                            <div class=\"profile-userpic\">
                                <img src=\"{{ asset('assets/images/photoprofil.png') }}\" class=\"img-responsive\" alt=\"\">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class=\"profile-usertitle\">
                                <div class=\"profile-usertitle-name\">
                                    {{ boutique.responsable.prenom }} {{ boutique.responsable.nom }}
                                </div>
                                <div class=\"profile-usertitle-job\">
                                    RESPONSABLE
                                </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <div class=\"profile-userbuttons\">
                                <a type=\"button\" href=\"tel:{{ boutique.responsable.tel }}\" class=\"btn btn-success btn-sm\">APPELER <i class=\"fa fa-phone\"></i></a>
                                <button type=\"button\" class=\"btn btn-danger btn-sm\">Message <i class=\"fa fa-envelope\"></i></button>
                            </div>
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class=\"profile-usermenu\">
                                <ul class=\"nav\">
                                    <li class=\"\">
                                        <a href=\"#\">
                                            <i class=\"glyphicon glyphicon-home\"></i>
                                            {{ boutique.responsable.tel }} </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"#\">
                                            <i class=\"glyphicon glyphicon-map-marker\"></i>
                                            {{ boutique.responsable.adresse }} </a>
                                    </li>
                                    <li class=\"\">
                                        <a href=\"#\" target=\"_blank\">
                                            <i class=\"glyphicon glyphicon-envelope\"></i>
                                            {{ boutique.responsable.email }} </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <div class=\"profile-content\">
                            <!-- tab -->
                            <section style=\"background:#efefe9;\">
                                <div class=\"\">
                                    <div class=\"\">
                                        <div class=\"board\">
                                            <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                                            <div class=\"board-inner\">
                                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                                    <div class=\"liner\"></div>
                                                    <li class=\"active\">
                                                        <a href=\"#home\" data-toggle=\"tab\" title=\"Accueil\">
                                                            <span class=\"round-tabs one\">
                                                                <i class=\"glyphicon glyphicon-home\"></i>
                                                            </span> 
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href=\"#produits\" data-toggle=\"tab\" title=\"Produits\">
                                                            <span class=\"round-tabs two\">
                                                                <i class=\"glyphicon glyphicon-tags\"></i>
                                                            </span> 
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"#abonnes\" data-toggle=\"tab\" title=\"Abonnées\">
                                                            <span class=\"round-tabs three\">
                                                                <i class=\"glyphicon glyphicon-user\"></i>
                                                            </span> 
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href=\"#offres\" data-toggle=\"tab\" title=\"Offres\">
                                                            <span class=\"round-tabs four\">
                                                                <i class=\"glyphicon glyphicon-gift\"></i>
                                                            </span> 
                                                        </a>
                                                    </li>

                                                </ul></div>

                                            <div class=\"tab-content\">
                                                <div class=\"tab-pane fade in active\" id=\"home\">

                                                    <h3 class=\"head text-center\">{{ boutique.nomBoutique }}<sup>™</sup> <span style=\"color:#f48260;\">♥</span></h3>
                                                    <p class=\"narrow text-center\">
                                                        {{ boutique.descriptionBoutique }}.
                                                    </p>

                                                    <p class=\"text-center\">
                                                        <a href=\"{{ path('admin') }}\" class=\"btn btn-success btn-outline-rounded green\"> Voir Version Client <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                                                    </p>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"produits\">
                                                    <h3 class=\"head text-center\">Produits</h3>
                                                    <div class=\"narrow\">
                                                        <table class=\"table table-bordered table-hover\">
                                                        <thead>
                                                            <tr>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>a1</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                            </tr>
                                                            <tr>
                                                                <td>a2</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                            </tr>
                                                            <tr>
                                                                <td>a3</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                                <td>a</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>

                                                    <p class=\"text-center\">
                                                        <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> Ajouter un produit <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                                                    </p>

                                                </div>
                                                <div class=\"tab-pane fade\" id=\"abonnes\">
                                                    <h3 class=\"head text-center\">Abonnées</h3>
                                                    {{ render(controller( 'MyAppUserBundle:abonnement:abonnementsMaBoutiqueSansStyle',{id : boutique.id})) }}
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"offres\">
                                                    <h3 class=\"head text-center\">Offres ! <span style=\"color:#f48260;\">♥</span></h3>
                                                    <p class=\"narrow text-center\">
                                                        tableau des offres
                                                    </p>

                                                    <p class=\"text-center\">
                                                        <a href=\"\" class=\"btn btn-success btn-outline-rounded green\"> Ajouter une offre <span style=\"margin-left:10px;\" class=\"glyphicon glyphicon-send\"></span></a>
                                                    </p>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- fin tab -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- fin profil responsable -->



            <!-- fintableau -->
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


{% endblock %}

{% block javascript %}
    <script>
        \$(function () {
            \$('a[title]').tooltip();
        });

    </script>
{% endblock javascript %}", "MyAppUserBundle:boutiques:show.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/boutiques/show.html.twig");
    }
}
