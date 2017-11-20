<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01effbbb90e09d4b17bf53b25da4affc45de5b7f835d3707ed0f1d71941206dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01effbbb90e09d4b17bf53b25da4affc45de5b7f835d3707ed0f1d71941206dd->enter($__internal_01effbbb90e09d4b17bf53b25da4affc45de5b7f835d3707ed0f1d71941206dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cbac670f236edb46bb3f54543f888407f033ef1a4040675c811fbb6322fe33b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbac670f236edb46bb3f54543f888407f033ef1a4040675c811fbb6322fe33b3->enter($__internal_cbac670f236edb46bb3f54543f888407f033ef1a4040675c811fbb6322fe33b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>TunisiaMall</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\" rel='stylesheet' type='text/css' />
<link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    
    ";
        // line 32
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">

      <!-- Main Header -->
      <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\"><b>TM</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\"><b>Tunisia</b>Mall</span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
              <li class=\"dropdown messages-menu\">
                <!-- Menu toggle button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"label label-success\">4</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class=\"menu\">
                      <li><!-- start message -->
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <!-- User Image -->
                            <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul><!-- /.menu -->
                  </li>
                  <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class=\"dropdown notifications-menu\">
                <!-- Menu toggle button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class=\"menu\">
                      <li><!-- start notification -->
                        <a href=\"#\">
                          <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class=\"dropdown tasks-menu\">
                <!-- Menu Toggle Button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-flag-o\"></i>
                  <span class=\"label label-danger\">9</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class=\"menu\">
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class=\"pull-right\">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class=\"progress xs\">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class=\"footer\">
                    <a href=\"#\">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class=\"dropdown user user-menu\">
                <!-- Menu Toggle Button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <!-- The user image in the navbar-->
                  <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class=\"hidden-xs\">";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- The user image in the menu -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    <p>
                      ";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "
                      <small>";
        // line 184
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastlogin", array()), "d-M-Y H:i:s"), "html", null, true);
        echo "</small>
                    </p>
                  </li>
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

          <!-- Sidebar user panel (optional) -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
              <p>";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>
              <!-- Status -->
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          ";
        // line 235
        $this->loadTemplate("include/menu.html.twig", "::base.html.twig", 235)->display($context);
        // line 236
        echo "          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      
      
          ";
        // line 243
        $this->displayBlock('body', $context, $blocks);
        // line 246
        echo "
      <!-- Main Footer -->
      <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
          <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
          <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
          <!-- Home tab content -->
          <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
            <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
            <ul class=\"control-sidebar-menu\">
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
            <ul class=\"control-sidebar-menu\">
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Custom Template Design
                    <span class=\"label label-danger pull-right\">70%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
            <form method=\"post\">
              <h3 class=\"control-sidebar-heading\">General Settings</h3>
              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Report panel usage
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class=\"control-sidebar-bg\"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/dist/js/app.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/formvalidation/jquery.validate.js"), "html", null, true);
        echo "\"></script>
    <script>
    \$(function () {
        \$(\".select2\").select2();
        \$('table').DataTable( {
        \"language\": {
            \"url\": \"http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json\"
        }
    } );
    });
    </script>
    ";
        // line 339
        $this->displayBlock('javascript', $context, $blocks);
        // line 341
        echo "  </body>
</html>";
        
        $__internal_01effbbb90e09d4b17bf53b25da4affc45de5b7f835d3707ed0f1d71941206dd->leave($__internal_01effbbb90e09d4b17bf53b25da4affc45de5b7f835d3707ed0f1d71941206dd_prof);

        
        $__internal_cbac670f236edb46bb3f54543f888407f033ef1a4040675c811fbb6322fe33b3->leave($__internal_cbac670f236edb46bb3f54543f888407f033ef1a4040675c811fbb6322fe33b3_prof);

    }

    // line 32
    public function block_css($context, array $blocks = array())
    {
        $__internal_6279ce63e1600b7438acd668e3b845267f1ccd9e07dd73266860d764f9f34516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6279ce63e1600b7438acd668e3b845267f1ccd9e07dd73266860d764f9f34516->enter($__internal_6279ce63e1600b7438acd668e3b845267f1ccd9e07dd73266860d764f9f34516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_feb4ecfcbe5bf85fd1696edeb6e6ae6329ea312ef6b32cacbafb2c3faabec1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb4ecfcbe5bf85fd1696edeb6e6ae6329ea312ef6b32cacbafb2c3faabec1a7->enter($__internal_feb4ecfcbe5bf85fd1696edeb6e6ae6329ea312ef6b32cacbafb2c3faabec1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 33
        echo "        
        ";
        
        $__internal_feb4ecfcbe5bf85fd1696edeb6e6ae6329ea312ef6b32cacbafb2c3faabec1a7->leave($__internal_feb4ecfcbe5bf85fd1696edeb6e6ae6329ea312ef6b32cacbafb2c3faabec1a7_prof);

        
        $__internal_6279ce63e1600b7438acd668e3b845267f1ccd9e07dd73266860d764f9f34516->leave($__internal_6279ce63e1600b7438acd668e3b845267f1ccd9e07dd73266860d764f9f34516_prof);

    }

    // line 243
    public function block_body($context, array $blocks = array())
    {
        $__internal_05a91f88c22756c2dcb830dfcb4b7f35c23387fe9f5a29c1fe67f9392e68ce99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a91f88c22756c2dcb830dfcb4b7f35c23387fe9f5a29c1fe67f9392e68ce99->enter($__internal_05a91f88c22756c2dcb830dfcb4b7f35c23387fe9f5a29c1fe67f9392e68ce99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_511fa225c75286394c8e10d0f9254c45fd0328e29d82a4356c7f2cf928263702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511fa225c75286394c8e10d0f9254c45fd0328e29d82a4356c7f2cf928263702->enter($__internal_511fa225c75286394c8e10d0f9254c45fd0328e29d82a4356c7f2cf928263702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 244
        echo "              
              ";
        
        $__internal_511fa225c75286394c8e10d0f9254c45fd0328e29d82a4356c7f2cf928263702->leave($__internal_511fa225c75286394c8e10d0f9254c45fd0328e29d82a4356c7f2cf928263702_prof);

        
        $__internal_05a91f88c22756c2dcb830dfcb4b7f35c23387fe9f5a29c1fe67f9392e68ce99->leave($__internal_05a91f88c22756c2dcb830dfcb4b7f35c23387fe9f5a29c1fe67f9392e68ce99_prof);

    }

    // line 339
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a3dcf9ea9611b04acd8d6d0379eb3cde13e80d0c410b134264d268cd128f8016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dcf9ea9611b04acd8d6d0379eb3cde13e80d0c410b134264d268cd128f8016->enter($__internal_a3dcf9ea9611b04acd8d6d0379eb3cde13e80d0c410b134264d268cd128f8016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_7be27de667360aeae882ffca25882b7284d79fe7d5a021a3f726354921f60bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be27de667360aeae882ffca25882b7284d79fe7d5a021a3f726354921f60bc7->enter($__internal_7be27de667360aeae882ffca25882b7284d79fe7d5a021a3f726354921f60bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 340
        echo "        ";
        
        $__internal_7be27de667360aeae882ffca25882b7284d79fe7d5a021a3f726354921f60bc7->leave($__internal_7be27de667360aeae882ffca25882b7284d79fe7d5a021a3f726354921f60bc7_prof);

        
        $__internal_a3dcf9ea9611b04acd8d6d0379eb3cde13e80d0c410b134264d268cd128f8016->leave($__internal_a3dcf9ea9611b04acd8d6d0379eb3cde13e80d0c410b134264d268cd128f8016_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 340,  505 => 339,  494 => 244,  485 => 243,  474 => 33,  465 => 32,  454 => 341,  452 => 339,  438 => 328,  434 => 327,  430 => 326,  426 => 325,  422 => 324,  418 => 323,  414 => 322,  336 => 246,  334 => 243,  325 => 236,  323 => 235,  300 => 217,  294 => 214,  269 => 192,  263 => 189,  255 => 184,  249 => 183,  244 => 181,  236 => 176,  231 => 174,  149 => 95,  87 => 35,  85 => 32,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  51 => 16,  46 => 14,  42 => 13,  28 => 1,);
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
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>TunisiaMall</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"shortcut icon\" href=\"{{asset('favicon.ico') }}\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"{{asset('favicon.ico') }}\" type=\"image/x-icon\">
    
<link href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\" rel='stylesheet' type='text/css' />
<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\" rel='stylesheet' type='text/css' />
<link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel='stylesheet' type='text/css' />
<link href=\"{{ asset('assets/dist/css/AdminLTE.min.css') }}\" rel='stylesheet' type='text/css' />
<link href=\"{{ asset('assets/dist/css/skins/skin-blue.min.css') }}\" rel='stylesheet' type='text/css' />
<link href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\" rel='stylesheet' type='text/css' />
<link href=\"{{ asset('assets/plugins/select2/select2.min.css') }}\" rel='stylesheet' type='text/css' />
<link href=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}\" rel='stylesheet' type='text/css' />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    
    {% block css %}
        
        {% endblock css %}
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">

      <!-- Main Header -->
      <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\"><b>TM</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\"><b>Tunisia</b>Mall</span>
        </a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
              <li class=\"dropdown messages-menu\">
                <!-- Menu toggle button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"label label-success\">4</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class=\"menu\">
                      <li><!-- start message -->
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <!-- User Image -->
                            <img src=\"{{asset('assets/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul><!-- /.menu -->
                  </li>
                  <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class=\"dropdown notifications-menu\">
                <!-- Menu toggle button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class=\"menu\">
                      <li><!-- start notification -->
                        <a href=\"#\">
                          <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class=\"dropdown tasks-menu\">
                <!-- Menu Toggle Button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-flag-o\"></i>
                  <span class=\"label label-danger\">9</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class=\"menu\">
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class=\"pull-right\">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class=\"progress xs\">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class=\"footer\">
                    <a href=\"#\">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class=\"dropdown user user-menu\">
                <!-- Menu Toggle Button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <!-- The user image in the navbar-->
                  <img src=\"{{ asset('assets/dist/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class=\"hidden-xs\">{{ app.user.username }}</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- The user image in the menu -->
                  <li class=\"user-header\">
                    <img src=\"{{ asset('assets/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
                    <p>
                      {{ app.user.prenom }} {{ app.user.nom }}
                      <small>{{ app.user.lastlogin | date('d-M-Y H:i:s')}}</small>
                    </p>
                  </li>
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"{{ path('fos_user_profile_show') }}\" class=\"btn btn-default btn-flat\">Profile</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

          <!-- Sidebar user panel (optional) -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"{{ asset('assets/dist/img/user2-160x160.jpg')}}\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
              <p>{{ app.user.prenom }} {{ app.user.nom }}</p>
              <!-- Status -->
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          {% include 'include/menu.html.twig'%}
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      
      
          {% block body %}
              
              {% endblock %}

      <!-- Main Footer -->
      <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
          <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
          <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
          <!-- Home tab content -->
          <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
            <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
            <ul class=\"control-sidebar-menu\">
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
            <ul class=\"control-sidebar-menu\">
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Custom Template Design
                    <span class=\"label label-danger pull-right\">70%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
            <form method=\"post\">
              <h3 class=\"control-sidebar-heading\">General Settings</h3>
              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Report panel usage
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class=\"control-sidebar-bg\"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/dist/js/app.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/select2/select2.full.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/plugins/formvalidation/jquery.validate.js') }}\"></script>
    <script>
    \$(function () {
        \$(\".select2\").select2();
        \$('table').DataTable( {
        \"language\": {
            \"url\": \"http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json\"
        }
    } );
    });
    </script>
    {% block javascript %}
        {% endblock %}
  </body>
</html>", "::base.html.twig", "C:\\wamp64\\www\\TunisiaMallSam\\app/Resources\\views/base.html.twig");
    }
}
