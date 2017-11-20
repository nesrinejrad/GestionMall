<?php

/* baseclient.html.twig */
class __TwigTemplate_0e947ff771ae0b8b8528f629b5cc27a2ad26ef285ffe40b06753aa85939a0a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c868686463029f5be79fe9ceaf6f6f433b160a0ab94f8e267e11c9a4a82394cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c868686463029f5be79fe9ceaf6f6f433b160a0ab94f8e267e11c9a4a82394cf->enter($__internal_c868686463029f5be79fe9ceaf6f6f433b160a0ab94f8e267e11c9a4a82394cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseclient.html.twig"));

        $__internal_441720c8ed9340f8c72eb6312c6b49bb6882ffd14753c61cef26dcf46ec582d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441720c8ed9340f8c72eb6312c6b49bb6882ffd14753c61cef26dcf46ec582d9->enter($__internal_441720c8ed9340f8c72eb6312c6b49bb6882ffd14753c61cef26dcf46ec582d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseclient.html.twig"));

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
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
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
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
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
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 36
            echo "
                    <li> <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " </a></li> </a></li>
                    <li> <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Logout </a></li>
                ";
        } else {
            // line 40
            echo "                    <li> <a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> Sign In </a></li>

                ";
        }
        // line 43
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
                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"about.html\">Cartes Fidilités</a></li>
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
        // line 157
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 161
        echo "                            <a href=\"";
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

        <!-- Indicators -->

        <div style=\"background-color: white\">
            
            ";
        // line 214
        $this->displayBlock('body', $context, $blocks);
        // line 217
        echo "
          ";
        // line 219
        echo "        </div>

        <!-- The Modal -->

    <!-- //banner -->

<!-- //schedule-bottom -->
<!-- banner-bootom-w3-agileits -->


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
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t4.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t1.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t3.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/t2.jpg"), "html", null, true);
        echo "\" alt=\" \" class=\"img-responsive\" /></a></li>
                        <li><a href=\"single.html\"><img src=\"";
        // line 303
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
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- //js -->
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script src=\"";
        // line 399
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
        // line 413
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
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countup.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type=\"text/javascript\" src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 446
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
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_c868686463029f5be79fe9ceaf6f6f433b160a0ab94f8e267e11c9a4a82394cf->leave($__internal_c868686463029f5be79fe9ceaf6f6f433b160a0ab94f8e267e11c9a4a82394cf_prof);

        
        $__internal_441720c8ed9340f8c72eb6312c6b49bb6882ffd14753c61cef26dcf46ec582d9->leave($__internal_441720c8ed9340f8c72eb6312c6b49bb6882ffd14753c61cef26dcf46ec582d9_prof);

    }

    // line 157
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9f74b3ffa84798a50f316fd84d450df5021df2d88dedfb4a095c5164822fb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f74b3ffa84798a50f316fd84d450df5021df2d88dedfb4a095c5164822fb97->enter($__internal_b9f74b3ffa84798a50f316fd84d450df5021df2d88dedfb4a095c5164822fb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4e33075c67f8555d0a071324011b6a3ce0e1618a3d5b439264841cac3d648e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e33075c67f8555d0a071324011b6a3ce0e1618a3d5b439264841cac3d648e8f->enter($__internal_4e33075c67f8555d0a071324011b6a3ce0e1618a3d5b439264841cac3d648e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 158
        echo "

                            ";
        
        $__internal_4e33075c67f8555d0a071324011b6a3ce0e1618a3d5b439264841cac3d648e8f->leave($__internal_4e33075c67f8555d0a071324011b6a3ce0e1618a3d5b439264841cac3d648e8f_prof);

        
        $__internal_b9f74b3ffa84798a50f316fd84d450df5021df2d88dedfb4a095c5164822fb97->leave($__internal_b9f74b3ffa84798a50f316fd84d450df5021df2d88dedfb4a095c5164822fb97_prof);

    }

    // line 214
    public function block_body($context, array $blocks = array())
    {
        $__internal_90518c986a31359c6200158ab4a1e2a1456623de587c0ddb444e6ec429a64bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90518c986a31359c6200158ab4a1e2a1456623de587c0ddb444e6ec429a64bcb->enter($__internal_90518c986a31359c6200158ab4a1e2a1456623de587c0ddb444e6ec429a64bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a2dcde01b7138565d76664c12edf644f5175413df9c869f152890ac1cfdfb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2dcde01b7138565d76664c12edf644f5175413df9c869f152890ac1cfdfb35->enter($__internal_3a2dcde01b7138565d76664c12edf644f5175413df9c869f152890ac1cfdfb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 215
        echo "    
            ";
        
        $__internal_3a2dcde01b7138565d76664c12edf644f5175413df9c869f152890ac1cfdfb35->leave($__internal_3a2dcde01b7138565d76664c12edf644f5175413df9c869f152890ac1cfdfb35_prof);

        
        $__internal_90518c986a31359c6200158ab4a1e2a1456623de587c0ddb444e6ec429a64bcb->leave($__internal_90518c986a31359c6200158ab4a1e2a1456623de587c0ddb444e6ec429a64bcb_prof);

    }

    public function getTemplateName()
    {
        return "baseclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 215,  625 => 214,  613 => 158,  604 => 157,  590 => 475,  558 => 446,  554 => 445,  545 => 439,  541 => 438,  513 => 413,  496 => 399,  490 => 396,  485 => 394,  391 => 303,  387 => 302,  383 => 301,  379 => 300,  375 => 299,  371 => 298,  367 => 297,  363 => 296,  359 => 295,  281 => 219,  278 => 217,  276 => 214,  219 => 161,  217 => 157,  101 => 43,  96 => 40,  91 => 38,  83 => 37,  80 => 36,  78 => 35,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  38 => 10,  27 => 1,);
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
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>
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
                            <li class=\" menu__item\"><a class=\"menu__link\" href=\"about.html\">Cartes Fidilités</a></li>
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

        <!-- Indicators -->

        <div style=\"background-color: white\">
            
            {% block body %}
    
            {% endblock body %}

          {#a remplir #}
        </div>

        <!-- The Modal -->

    <!-- //banner -->

<!-- //schedule-bottom -->
<!-- banner-bootom-w3-agileits -->


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
", "baseclient.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app\\Resources\\views\\baseclient.html.twig");
    }
}
