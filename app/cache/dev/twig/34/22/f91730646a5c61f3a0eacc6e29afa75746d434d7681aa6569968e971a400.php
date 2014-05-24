<?php

/* ::base.html.twig */
class __TwigTemplate_3422f91730646a5c61f3a0eacc6e29afa75746d434d7681aa6569968e971a400 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
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


    ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "
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
        echo "      <link href=\"";
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
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/kendo.all.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "      <h1>Current content to override</h1>
    ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "
    ";
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
        return array (  154 => 44,  151 => 43,  145 => 40,  140 => 39,  137 => 38,  132 => 35,  129 => 34,  123 => 22,  118 => 21,  115 => 20,  109 => 17,  105 => 16,  101 => 15,  97 => 14,  92 => 13,  89 => 12,  83 => 9,  75 => 46,  73 => 43,  70 => 42,  68 => 38,  65 => 37,  63 => 34,  51 => 24,  49 => 20,  46 => 19,  44 => 12,  35 => 9,  25 => 1,  325 => 253,  322 => 252,  305 => 238,  300 => 237,  297 => 236,  104 => 45,  95 => 42,  91 => 41,  87 => 40,  84 => 39,  80 => 38,  74 => 35,  48 => 11,  45 => 10,  39 => 10,  34 => 5,  31 => 4,);
    }
}
