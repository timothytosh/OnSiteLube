<?php

/* ::admin.html.twig */
class __TwigTemplate_fe7a10815b561bf288b4f99fafb7006f63654454f6a5d6e0c792ba1524a69b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topleveljs' => array($this, 'block_topleveljs'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 user-scalable=no\">
  <meta name=\"description\" content=\"On Site Lube Web Application\">
  <meta name=\"author\" content=\"Timothy W. Tosh\">
  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />

  ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
  ";
        // line 20
        $this->displayBlock('topleveljs', $context, $blocks);
        // line 24
        echo "
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
  <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
  <![endif]-->
</head>
<body>

<!-- top navigation for admin module -->
<div class=\"navbar navbar-inverse navbar-fixed-top divshadow\" role=\"navigation\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/dashboard\"><i class=\"fa fa-home fa-fw\"></i></a>
    </div>
    <div class=\"navbar-collapse collapse\">
      <ul class=\"nav navbar-nav navbar-right\">


        <li class=\"dropdown\">

          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-gears fa-fw\"></i> Modules<b class=\"caret\"></b></a>

          <ul class=\"dropdown-menu\">


            <li><a href=\"/dashboard\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a></li>

            <!--
            <li><a href=\"/users\"><i class=\"fa fa-user fa-fw\"></i> User Management</a></li>
            <li><a href=\"#\"><i class=\"fa fa-barcode fa-fw\"></i> Inventory</a></li>
            <li><a href=\"#\"><i class=\"fa fa-money fa-fw\"></i> Accounting</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Forecasting</a></li>
            <li><a href=\"#\"><i class=\"fa fa-calendar fa-fw\"></i> Scheduling</a></li>
            <li><a href=\"#\"><i class=\"fa fa-laptop fa-fw\"></i> Sales Process</a></li>
            <li><a href=\"#\"><i class=\"fa fa-users fa-fw\"></i> Human Resources</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\"><i class=\"fa fa-clock-o fa-fw\"></i> Time Entry</a></li>
            -->



          </ul>
        </li>


        <li><a href=\"#\"><i class=\"fa fa-file-o fa-fw\"></i>Reporting</a></li>
        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i>Settings</a></li>
        <li><a href=\"#\"><i class=\"fa fa-question-circle fa-fw\"></i>Help</a></li>
        <li><a href=\"/logout\"><i class=\"fa fa-lock fa-fw\"></i>Logout</a></li>
      </ul>
    </div>
  </div>
</div>

";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "
<section id=\"footer\">
  <footer class=\"navbar hidden-xs\">
    <p id=\"footer-block\" class=\"text-center\">
      Version 0.1.3 &middot; All Rights Reserved &middot; &copy; 2014 On Site Lube &middot; Toll-Free: (866) 235-5823 &middot;
      <a href=\"mailto:support@onsitelube.com\">Support</a> &middot; <a href=\"#\">Privacy</a>
    </p>
  </footer>
</section>
</div>

</body>
</html>

";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "On Site Lube";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/kendo.common-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/kendo.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/kendo.dataviz.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
    }

    // line 20
    public function block_topleveljs($context, array $blocks = array())
    {
        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/kendo.all.min.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        // line 88
        echo "  <h1>Current content to override</h1>
";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 94,  202 => 93,  197 => 92,  194 => 91,  189 => 88,  186 => 87,  180 => 22,  175 => 21,  172 => 20,  166 => 17,  162 => 16,  158 => 15,  154 => 14,  149 => 13,  146 => 12,  140 => 9,  122 => 96,  120 => 91,  117 => 90,  115 => 87,  50 => 24,  48 => 20,  45 => 19,  43 => 12,  38 => 10,  34 => 9,  24 => 1,);
    }
}
