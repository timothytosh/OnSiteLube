<?php

/* OnSiteLubeServiceBundle:Default:index.html.twig */
class __TwigTemplate_3660e021fe587dd3604878741c8050afec5e60cce0285239b4f0d84a164cbb1a extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["json"]) ? $context["json"] : $this->getContext($context, "json")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "OnSiteLubeServiceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
