<?php

/* MyAppUserBundle:Default:Layout.html.twig */
class __TwigTemplate_b77a528e42f626c74d68642167b98a1ecf162cf9b822245802272bc485a96106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c257aeb8277dfc53d531f8f943406f6abd4341be726fc8a6af8aa92bd19924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c257aeb8277dfc53d531f8f943406f6abd4341be726fc8a6af8aa92bd19924->enter($__internal_62c257aeb8277dfc53d531f8f943406f6abd4341be726fc8a6af8aa92bd19924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:Default:Layout.html.twig"));

        $__internal_bd6c3a4487103778845ef657109d8bbee198486350f343741191985c15ceb9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6c3a4487103778845ef657109d8bbee198486350f343741191985c15ceb9eb->enter($__internal_bd6c3a4487103778845ef657109d8bbee198486350f343741191985c15ceb9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppUserBundle:Default:Layout.html.twig"));

        // line 1
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!--/tags -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//tags -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/easy-responsive-tabs.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'/>
    <!-- //for bootstrap working -->
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800\" rel=\"stylesheet\">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->

<div class=\"header\" id=\"home\">
    <div class=\"container\">
        <div>
            <ul>
                ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 35
            echo "
                <li> <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " </a></li> </a></li>
                <li> <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Logout </a></li>
                ";
        } else {
            // line 39
            echo "                    <li> <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> Sign In </a></li>

                ";
        }
        // line 42
        echo "                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Call : 01234567898</li>
                <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> <a href=\"mailto:info@example.com\">info@example.com</a></li>
            </ul>




        </div>


        <div>

        </div>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class=\"header-bot\">
    <div class=\"header-bot_inner_wthreeinfo_header_mid\">
        <div class=\"col-md-4 header-middle\">
            <form action=\"#\" method=\"post\">
                <input type=\"search\" name=\"search\" placeholder=\"Search here...\" required=\"\">
                <input type=\"submit\" value=\" \">
                <div class=\"clearfix\"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class=\"col-md-4 logo_agile\">
            <h1><a href=\"index.html\"><span>T</span>unisia Mall <i class=\"fa fa-shopping-bag top_logo_agile_bag\" aria-hidden=\"true\"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class=\"col-md-4 agileits-social top_content\">
            <ul class=\"social-nav model-3d-0 footer-social w3_agile_social\">
                <li class=\"share\">Share On : </li>
                <li><a href=\"#\" class=\"facebook\">
                        <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"twitter\">
                        <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"instagram\">
                        <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"pinterest\">
                        <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
            </ul>



        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class=\"ban-top\">
    <div class=\"container\">
        <div class=\"top_nav_left\">
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse menu--shylock\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav menu__list\">
                            <li class=\"active menu__item menu__item--current\"><a class=\"menu__link\" href=\"index.html\">Home <span class=\"sr-only\">(current)</span></a></li>
                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"about.html\">About</a></li>
                            <li class=\" menu__item\"> <a class=\"menu__link\" href=\"about.html\">Boutiques</a></li>

                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"about.html\">paremétres compte</a></li>


                            <li class=\" menu__item\"><li class=\" menu__item\"><a class=\"menu__link\" href=\"contact.html\">Contact</a></li>


        <li>
                        <div class=\"\">
                            <div class=\"wthreecartaits wthreecartaits2 cart cart box_1\">
                                <form action=\"#\" method=\"post\" class=\"last\">
                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\">
                                    <input type=\"hidden\" name=\"display\" value=\"1\">
                                    <button class=\"w3view-cart\" type=\"submit\" name=\"submit\" value=\"\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i></button>
                                </form>

                            </div>
                        </div>
        </li>
                        </ul>
                    </div>


        <div class=\"clearfix\"></div>
    </div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body modal-body-sub_agile\">
                <div class=\"col-md-8 modal_body_left modal_body_left1\">
                    <h3 class=\"agileinfo_sign\">Sign In <span>Now</span></h3>
                    ";
        // line 156
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 160
        echo "                    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutForm");
        echo "\"> Sing Up</a>







                    </div>



                    <ul class=\"social-nav model-3d-0 footer-social w3_agile_social top_agile_third\">
                        <li><a href=\"#\" class=\"facebook\">
                                <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                                <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                        <li><a href=\"#\" class=\"twitter\">
                                <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                                <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                        <li><a href=\"#\" class=\"instagram\">
                                <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                                <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                        <li><a href=\"#\" class=\"pinterest\">
                                <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                                <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
                    </ul>
                    <div class=\"clearfix\"></div>


                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>








<!-- //Modal2 -->

<!-- banner -->
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"4\" class=\"\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
        <div class=\"item item2\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
        <div class=\"item item3\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
        <div class=\"item item4\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
        <div class=\"item item5\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
    </div>
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
    <!-- The Modal -->
</div>
<!-- //banner -->
<div class=\"banner_bottom_agile_info\">
    <div class=\"container\">
        <div class=\"banner_bottom_agile_info_inner_w3ls\">
            <div class=\"col-md-6 wthree_banner_bottom_grid_three_left1 grid\">
                <figure class=\"effect-roxy\">
                    <img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bottom1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>
                </figure>
            </div>
            <div class=\"col-md-6 wthree_banner_bottom_grid_three_left1 grid\">
                <figure class=\"effect-roxy\">
                    <img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bottom2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" />
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>
                </figure>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
<!-- schedule-bottom -->


    <div class=\"clearfix\"> </div>
</div>
<!-- //schedule-bottom -->
<!-- banner-bootom-w3-agileits -->








<!-- //new_arrivals -->
<!-- /we-offer -->
<div class=\"sale-w3ls\">
    <div class=\"container\">
        <h6>We Offer Flat <span>40%</span> Discount</h6>

        <a class=\"hvr-outline-out button2\" href=\"single.html\">Shop Now </a>
    </div>
</div>
<!-- //we-offer -->
<!--/grids-->
<div class=\"coupons\">
    <div class=\"coupons-grids text-center\">
        <div class=\"w3layouts_mail_grid\">
            <div class=\"col-md-3 w3layouts_mail_grid_left\">
                <div class=\"w3layouts_mail_grid_left1 hvr-radial-out\">
                    <i class=\"fa fa-truck\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"w3layouts_mail_grid_left2\">
                    <h3>FREE SHIPPING</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class=\"col-md-3 w3layouts_mail_grid_left\">
                <div class=\"w3layouts_mail_grid_left1 hvr-radial-out\">
                    <i class=\"fa fa-headphones\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"w3layouts_mail_grid_left2\">
                    <h3>24/7 SUPPORT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class=\"col-md-3 w3layouts_mail_grid_left\">
                <div class=\"w3layouts_mail_grid_left1 hvr-radial-out\">
                    <i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"w3layouts_mail_grid_left2\">
                    <h3>MONEY BACK GUARANTEE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class=\"col-md-3 w3layouts_mail_grid_left\">
                <div class=\"w3layouts_mail_grid_left1 hvr-radial-out\">
                    <i class=\"fa fa-gift\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"w3layouts_mail_grid_left2\">
                    <h3>FREE GIFT COUPONS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class=\"clearfix\"> </div>
        </div>

    </div>
</div>
<!--grids-->
<!-- footer -->
<div class=\"footer\">
    <div class=\"footer_agile_inner_info_w3l\">
        <div class=\"col-md-3 footer-left\">
            <h2><a href=\"index.html\"><span>E</span>lite Shoppy </a></h2>
            <p>Lorem ipsum quia dolor
                sit amet, consectetur, adipisci velit, sed quia non
                numquam eius modi tempora.</p>
            <ul class=\"social-nav model-3d-0 footer-social w3_agile_social two\">
                <li><a href=\"#\" class=\"facebook\">
                        <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"twitter\">
                        <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"instagram\">
                        <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"pinterest\">
                        <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
            </ul>
        </div>
        <div class=\"col-md-9 footer-right\">
            <div class=\"sign-grds\">
                <div class=\"col-md-4 sign-gd\">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"mens.html\">Men's Wear</a></li>
                        <li><a href=\"womens.html\">Women's wear</a></li>
                        <li><a href=\"about.html\">About</a></li>
                        <li><a href=\"typography.html\">Short Codes</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>

                <div class=\"col-md-5 sign-gd-two\">
                    <h4>Store <span>Information</span></h4>
                    <div class=\"w3-address\">
                        <div class=\"w3-address-grid\">
                            <div class=\"w3-address-left\">
                                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"w3-address-right\">
                                <h6>Phone Number</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                        <div class=\"w3-address-grid\">
                            <div class=\"w3-address-left\">
                                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"w3-address-right\">
                                <h6>Email Address</h6>
                                <p>Email :<a href=\"mailto:example@email.com\"> mail@example.com</a></p>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                        <div class=\"w3-address-grid\">
                            <div class=\"w3-address-left\">
                                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"w3-address-right\">
                                <h6>Location</h6>
                                <p>Broome St, NY 10002,California, USA.

                                </p>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 sign-gd flickr-post\">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href=\"single.html\"><img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t4.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t4.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                    </ul>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"agile_newsletter_footer\">
            <div class=\"col-sm-6 newsleft\">
                <h3>SIGN UP FOR NEWSLETTER !</h3>
            </div>
            <div class=\"col-sm-6 newsright\">
                <form action=\"#\" method=\"post\">
                    <input type=\"email\" placeholder=\"Enter your email...\" name=\"email\" required=\"\">
                    <input type=\"submit\" value=\"Submit\">
                </form>
            </div>

            <div class=\"clearfix\"></div>
        </div>
        <p class=\"copy-right\">&copy 2017 Elite shoppy. All rights reserved | Design by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
    </div>
</div>
<!-- //footer -->

<!-- login -->
<div class=\"modal fade\" id=\"myModal4\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content modal-info\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>
            <div class=\"modal-body modal-spa\">
                <div class=\"login-grids\">
                    <div class=\"login\">
                        <div class=\"login-bottom\">
                            <h3>Sign up for free</h3>
                            <form>
                                <div class=\"sign-up\">
                                    <h4>Email :</h4>
                                    <input type=\"text\" value=\"Type here\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Type here';}\" required=\"\">
                                </div>
                                <div class=\"sign-up\">
                                    <h4>Password :</h4>
                                    <input type=\"password\" value=\"Password\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\" required=\"\">

                                </div>
                                <div class=\"sign-up\">
                                    <h4>Re-type Password :</h4>
                                    <input type=\"password\" value=\"Password\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\" required=\"\">

                                </div>
                                <div class=\"sign-up\">
                                    <input type=\"submit\" value=\"REGISTER NOW\" >
                                </div>

                            </form>
                        </div>
                        <div class=\"login-right\">
                            <h3>Sign in with your account</h3>
                            <form>
                                <div class=\"sign-in\">
                                    <h4>Email :</h4>
                                    <input type=\"text\" value=\"Type here\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Type here';}\" required=\"\">
                                </div>
                                <div class=\"sign-in\">
                                    <h4>Password :</h4>
                                    <input type=\"password\" value=\"Password\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\" required=\"\">
                                    <a href=\"#\">Forgot password?</a>
                                </div>
                                <div class=\"single-bottom\">
                                    <input type=\"checkbox\"  id=\"brand\" value=\"\">
                                    <label for=\"brand\"><span></span>Remember Me.</label>
                                </div>
                                <div class=\"sign-in\">
                                    <input type=\"submit\" value=\"SIGNIN\" >
                                </div>
                            </form>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <p>By logging in you agree to our <a href=\"#\">Terms and Conditions</a> and <a href=\"#\">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<a href=\"#home\" class=\"scroll\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>

<!-- js -->
<script type=\"text/javascript\" src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- //js -->
<script src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/minicart.min.js"), "html", null, true);
        echo "\"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

<!-- //cart-js -->
<!-- script for responsive tabs -->
<script src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easy-responsive-tabs.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function () {
        \$('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var \$tab = \$(this);
                var \$info = \$('#tabInfo');
                var \$name = \$('span', \$info);
                \$name.text(\$tab.text());
                \$info.show();
            }
        });
        \$('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
<script src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countup.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type=\"text/javascript\" src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$(\".scroll\").click(function(event){
            event.preventDefault();
            \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type=\"text/javascript\">
    \$(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        \$().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type=\"text/javascript\" src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_62c257aeb8277dfc53d531f8f943406f6abd4341be726fc8a6af8aa92bd19924->leave($__internal_62c257aeb8277dfc53d531f8f943406f6abd4341be726fc8a6af8aa92bd19924_prof);

        
        $__internal_bd6c3a4487103778845ef657109d8bbee198486350f343741191985c15ceb9eb->leave($__internal_bd6c3a4487103778845ef657109d8bbee198486350f343741191985c15ceb9eb_prof);

    }

    // line 156
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1d1156a4098c7a5e66121c5c13d7fd73cbe532fed2a0560e55a321372a58c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d1156a4098c7a5e66121c5c13d7fd73cbe532fed2a0560e55a321372a58c05->enter($__internal_c1d1156a4098c7a5e66121c5c13d7fd73cbe532fed2a0560e55a321372a58c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9ccd244f64057578e9544fb4ddc25a0e5decbeb8ec76363f7c30573a6acd67c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccd244f64057578e9544fb4ddc25a0e5decbeb8ec76363f7c30573a6acd67c0->enter($__internal_9ccd244f64057578e9544fb4ddc25a0e5decbeb8ec76363f7c30573a6acd67c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 157
        echo "

                    ";
        
        $__internal_9ccd244f64057578e9544fb4ddc25a0e5decbeb8ec76363f7c30573a6acd67c0->leave($__internal_9ccd244f64057578e9544fb4ddc25a0e5decbeb8ec76363f7c30573a6acd67c0_prof);

        
        $__internal_c1d1156a4098c7a5e66121c5c13d7fd73cbe532fed2a0560e55a321372a58c05->leave($__internal_c1d1156a4098c7a5e66121c5c13d7fd73cbe532fed2a0560e55a321372a58c05_prof);

    }

    public function getTemplateName()
    {
        return "MyAppUserBundle:Default:Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 157,  757 => 156,  743 => 628,  711 => 599,  707 => 598,  698 => 592,  694 => 591,  666 => 566,  649 => 552,  643 => 549,  638 => 547,  544 => 456,  540 => 455,  536 => 454,  532 => 453,  528 => 452,  524 => 451,  520 => 450,  516 => 449,  512 => 448,  350 => 289,  338 => 280,  214 => 160,  212 => 156,  96 => 42,  91 => 39,  86 => 37,  78 => 36,  75 => 35,  73 => 34,  58 => 22,  54 => 21,  50 => 20,  46 => 19,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!--/tags -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//tags -->
    <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/easy-responsive-tabs.css') }}\" rel='stylesheet' type='text/css'/>
    <!-- //for bootstrap working -->
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800\" rel=\"stylesheet\">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->

<div class=\"header\" id=\"home\">
    <div class=\"container\">
        <div>
            <ul>
                {% if app.user %}

                <li> <a href=\"{{ path('fos_user_profile_show') }}\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> {{ app.user.nom }} {{ app.user.prenom }} </a></li> </a></li>
                <li> <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Logout </a></li>
                {% else %}
                    <li> <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> Sign In </a></li>

                {% endif %}
                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> Call : 01234567898</li>
                <li><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> <a href=\"mailto:info@example.com\">info@example.com</a></li>
            </ul>




        </div>


        <div>

        </div>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class=\"header-bot\">
    <div class=\"header-bot_inner_wthreeinfo_header_mid\">
        <div class=\"col-md-4 header-middle\">
            <form action=\"#\" method=\"post\">
                <input type=\"search\" name=\"search\" placeholder=\"Search here...\" required=\"\">
                <input type=\"submit\" value=\" \">
                <div class=\"clearfix\"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class=\"col-md-4 logo_agile\">
            <h1><a href=\"index.html\"><span>T</span>unisia Mall <i class=\"fa fa-shopping-bag top_logo_agile_bag\" aria-hidden=\"true\"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class=\"col-md-4 agileits-social top_content\">
            <ul class=\"social-nav model-3d-0 footer-social w3_agile_social\">
                <li class=\"share\">Share On : </li>
                <li><a href=\"#\" class=\"facebook\">
                        <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"twitter\">
                        <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"instagram\">
                        <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"pinterest\">
                        <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
            </ul>



        </div>
        <div class=\"clearfix\"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class=\"ban-top\">
    <div class=\"container\">
        <div class=\"top_nav_left\">
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse menu--shylock\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav menu__list\">
                            <li class=\"active menu__item menu__item--current\"><a class=\"menu__link\" href=\"index.html\">Home <span class=\"sr-only\">(current)</span></a></li>
                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"about.html\">About</a></li>
                            <li class=\" menu__item\"> <a class=\"menu__link\" href=\"about.html\">Boutiques</a></li>

                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"about.html\">paremétres compte</a></li>


                            <li class=\" menu__item\"><li class=\" menu__item\"><a class=\"menu__link\" href=\"contact.html\">Contact</a></li>


        <li>
                        <div class=\"\">
                            <div class=\"wthreecartaits wthreecartaits2 cart cart box_1\">
                                <form action=\"#\" method=\"post\" class=\"last\">
                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\">
                                    <input type=\"hidden\" name=\"display\" value=\"1\">
                                    <button class=\"w3view-cart\" type=\"submit\" name=\"submit\" value=\"\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i></button>
                                </form>

                            </div>
                        </div>
        </li>
                        </ul>
                    </div>


        <div class=\"clearfix\"></div>
    </div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body modal-body-sub_agile\">
                <div class=\"col-md-8 modal_body_left modal_body_left1\">
                    <h3 class=\"agileinfo_sign\">Sign In <span>Now</span></h3>
                    {% block fos_user_content %}


                    {% endblock %}
                    <a href=\"{{ path('ajoutForm') }}\"> Sing Up</a>







                    </div>



                    <ul class=\"social-nav model-3d-0 footer-social w3_agile_social top_agile_third\">
                        <li><a href=\"#\" class=\"facebook\">
                                <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                                <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                        <li><a href=\"#\" class=\"twitter\">
                                <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                                <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                        <li><a href=\"#\" class=\"instagram\">
                                <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                                <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                        <li><a href=\"#\" class=\"pinterest\">
                                <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                                <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
                    </ul>
                    <div class=\"clearfix\"></div>


                </div>

                <div class=\"clearfix\"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>








<!-- //Modal2 -->

<!-- banner -->
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"4\" class=\"\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
        <div class=\"item item2\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
        <div class=\"item item3\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
        <div class=\"item item4\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
        <div class=\"item item5\">
            <div class=\"container\">
                <div class=\"carousel-caption\">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class=\"hvr-outline-out button2\" href=\"mens.html\">Shop Now </a>
                </div>
            </div>
        </div>
    </div>
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
    <!-- The Modal -->
</div>
<!-- //banner -->
<div class=\"banner_bottom_agile_info\">
    <div class=\"container\">
        <div class=\"banner_bottom_agile_info_inner_w3ls\">
            <div class=\"col-md-6 wthree_banner_bottom_grid_three_left1 grid\">
                <figure class=\"effect-roxy\">
                    <img src=\"{{ asset('images/bottom1.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>
                </figure>
            </div>
            <div class=\"col-md-6 wthree_banner_bottom_grid_three_left1 grid\">
                <figure class=\"effect-roxy\">
                    <img src=\"{{ asset('images/bottom2.jpg') }}\" alt=\" \" class=\"img-responsive\" />
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>
                </figure>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
<!-- schedule-bottom -->


    <div class=\"clearfix\"> </div>
</div>
<!-- //schedule-bottom -->
<!-- banner-bootom-w3-agileits -->








<!-- //new_arrivals -->
<!-- /we-offer -->
<div class=\"sale-w3ls\">
    <div class=\"container\">
        <h6>We Offer Flat <span>40%</span> Discount</h6>

        <a class=\"hvr-outline-out button2\" href=\"single.html\">Shop Now </a>
    </div>
</div>
<!-- //we-offer -->
<!--/grids-->
<div class=\"coupons\">
    <div class=\"coupons-grids text-center\">
        <div class=\"w3layouts_mail_grid\">
            <div class=\"col-md-3 w3layouts_mail_grid_left\">
                <div class=\"w3layouts_mail_grid_left1 hvr-radial-out\">
                    <i class=\"fa fa-truck\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"w3layouts_mail_grid_left2\">
                    <h3>FREE SHIPPING</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class=\"col-md-3 w3layouts_mail_grid_left\">
                <div class=\"w3layouts_mail_grid_left1 hvr-radial-out\">
                    <i class=\"fa fa-headphones\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"w3layouts_mail_grid_left2\">
                    <h3>24/7 SUPPORT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class=\"col-md-3 w3layouts_mail_grid_left\">
                <div class=\"w3layouts_mail_grid_left1 hvr-radial-out\">
                    <i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"w3layouts_mail_grid_left2\">
                    <h3>MONEY BACK GUARANTEE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class=\"col-md-3 w3layouts_mail_grid_left\">
                <div class=\"w3layouts_mail_grid_left1 hvr-radial-out\">
                    <i class=\"fa fa-gift\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"w3layouts_mail_grid_left2\">
                    <h3>FREE GIFT COUPONS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class=\"clearfix\"> </div>
        </div>

    </div>
</div>
<!--grids-->
<!-- footer -->
<div class=\"footer\">
    <div class=\"footer_agile_inner_info_w3l\">
        <div class=\"col-md-3 footer-left\">
            <h2><a href=\"index.html\"><span>E</span>lite Shoppy </a></h2>
            <p>Lorem ipsum quia dolor
                sit amet, consectetur, adipisci velit, sed quia non
                numquam eius modi tempora.</p>
            <ul class=\"social-nav model-3d-0 footer-social w3_agile_social two\">
                <li><a href=\"#\" class=\"facebook\">
                        <div class=\"front\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"twitter\">
                        <div class=\"front\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"instagram\">
                        <div class=\"front\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></div></a></li>
                <li><a href=\"#\" class=\"pinterest\">
                        <div class=\"front\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div>
                        <div class=\"back\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></div></a></li>
            </ul>
        </div>
        <div class=\"col-md-9 footer-right\">
            <div class=\"sign-grds\">
                <div class=\"col-md-4 sign-gd\">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"mens.html\">Men's Wear</a></li>
                        <li><a href=\"womens.html\">Women's wear</a></li>
                        <li><a href=\"about.html\">About</a></li>
                        <li><a href=\"typography.html\">Short Codes</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>

                <div class=\"col-md-5 sign-gd-two\">
                    <h4>Store <span>Information</span></h4>
                    <div class=\"w3-address\">
                        <div class=\"w3-address-grid\">
                            <div class=\"w3-address-left\">
                                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"w3-address-right\">
                                <h6>Phone Number</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                        <div class=\"w3-address-grid\">
                            <div class=\"w3-address-left\">
                                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"w3-address-right\">
                                <h6>Email Address</h6>
                                <p>Email :<a href=\"mailto:example@email.com\"> mail@example.com</a></p>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                        <div class=\"w3-address-grid\">
                            <div class=\"w3-address-left\">
                                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"w3-address-right\">
                                <h6>Location</h6>
                                <p>Broome St, NY 10002,California, USA.

                                </p>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 sign-gd flickr-post\">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t1.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t2.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t3.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t4.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t1.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t2.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t3.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t2.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"{{ asset('images/t4.jpg') }}\" alt=\" \" class=\"img-responsive\" /></a></li>
                    </ul>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"agile_newsletter_footer\">
            <div class=\"col-sm-6 newsleft\">
                <h3>SIGN UP FOR NEWSLETTER !</h3>
            </div>
            <div class=\"col-sm-6 newsright\">
                <form action=\"#\" method=\"post\">
                    <input type=\"email\" placeholder=\"Enter your email...\" name=\"email\" required=\"\">
                    <input type=\"submit\" value=\"Submit\">
                </form>
            </div>

            <div class=\"clearfix\"></div>
        </div>
        <p class=\"copy-right\">&copy 2017 Elite shoppy. All rights reserved | Design by <a href=\"http://w3layouts.com/\">W3layouts</a></p>
    </div>
</div>
<!-- //footer -->

<!-- login -->
<div class=\"modal fade\" id=\"myModal4\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content modal-info\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>
            <div class=\"modal-body modal-spa\">
                <div class=\"login-grids\">
                    <div class=\"login\">
                        <div class=\"login-bottom\">
                            <h3>Sign up for free</h3>
                            <form>
                                <div class=\"sign-up\">
                                    <h4>Email :</h4>
                                    <input type=\"text\" value=\"Type here\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Type here';}\" required=\"\">
                                </div>
                                <div class=\"sign-up\">
                                    <h4>Password :</h4>
                                    <input type=\"password\" value=\"Password\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\" required=\"\">

                                </div>
                                <div class=\"sign-up\">
                                    <h4>Re-type Password :</h4>
                                    <input type=\"password\" value=\"Password\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\" required=\"\">

                                </div>
                                <div class=\"sign-up\">
                                    <input type=\"submit\" value=\"REGISTER NOW\" >
                                </div>

                            </form>
                        </div>
                        <div class=\"login-right\">
                            <h3>Sign in with your account</h3>
                            <form>
                                <div class=\"sign-in\">
                                    <h4>Email :</h4>
                                    <input type=\"text\" value=\"Type here\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Type here';}\" required=\"\">
                                </div>
                                <div class=\"sign-in\">
                                    <h4>Password :</h4>
                                    <input type=\"password\" value=\"Password\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\" required=\"\">
                                    <a href=\"#\">Forgot password?</a>
                                </div>
                                <div class=\"single-bottom\">
                                    <input type=\"checkbox\"  id=\"brand\" value=\"\">
                                    <label for=\"brand\"><span></span>Remember Me.</label>
                                </div>
                                <div class=\"sign-in\">
                                    <input type=\"submit\" value=\"SIGNIN\" >
                                </div>
                            </form>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <p>By logging in you agree to our <a href=\"#\">Terms and Conditions</a> and <a href=\"#\">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<a href=\"#home\" class=\"scroll\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>

<!-- js -->
<script type=\"text/javascript\" src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
<!-- //js -->
<script src=\"{{ asset('js/modernizr.custom.js') }}\"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script src=\"{{ asset('js/minicart.min.js') }}\"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

<!-- //cart-js -->
<!-- script for responsive tabs -->
<script src=\"{{ asset('js/easy-responsive-tabs.js') }}\"></script>
<script>
    \$(document).ready(function () {
        \$('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var \$tab = \$(this);
                var \$info = \$('#tabInfo');
                var \$name = \$('span', \$info);
                \$name.text(\$tab.text());
                \$info.show();
            }
        });
        \$('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
<script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.countup.js') }}\"></script>
<script>
    \$('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type=\"text/javascript\" src=\"{{ asset('js/move-top.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.easing.min.js') }}\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$(\".scroll\").click(function(event){
            event.preventDefault();
            \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type=\"text/javascript\">
    \$(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        \$().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>
</body>
</html>
", "MyAppUserBundle:Default:Layout.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\src\\MyApp\\UserBundle/Resources/views/Default/Layout.html.twig");
    }
}
