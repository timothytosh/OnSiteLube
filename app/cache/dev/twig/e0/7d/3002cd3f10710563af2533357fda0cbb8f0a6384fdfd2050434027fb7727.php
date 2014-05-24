<?php

/* OnSiteLubeAdminBundle:Default:user.html.twig */
class __TwigTemplate_e07d3002cd3f10710563af2533357fda0cbb8f0a6384fdfd2050434027fb7727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<!-- account profile section -->
<div id=\"admin-form\" class=\"col-lg-12 main\">


<h1 class=\"page-header\">User Management</h1>
<ul id=\"menu\">
  <li>Administration Module</li>

</ul>

  <div class=\"modal-body\">
    <section class=\"well\">
      <h2 class=\"ra-well-title\">fullname - title</h2>

      <div class=\"form-horizontal form-widgets col-sm-6\">
        <div class=\"form-group\">
          <label class=\"control-label col-sm-4\" for=\"firstname\">First Name</label>

          <div class=\"col-sm-8 col-md-6\">
            <input id=\"firstname\" value=\"\"/>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"control-label col-sm-4\" for=\"lastname\">Last Name</label>

          <div class=\"col-sm-8 col-md-6\">
            <input id=\"lastname\" value=\"\"/>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"control-label col-sm-4\" for=\"gender\">Gender</label>

          <div class=\"col-sm-8 col-md-6\">
            <select id=\"gender\">
              <option selected>Male</option>
              <option>Female</option>
            </select>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"control-label col-sm-4\" for=\"email\">Email</label>

          <div class=\"col-sm-8 col-md-6\">
            <input id=\"email\" value=\"\"/>
          </div>
        </div>

      <div class=\"form-group\">
        <label class=\"control-label col-sm-4\" for=\"username\">Username</label>

        <div class=\"col-sm-8 col-md-6\">
          <input id=\"username\" value=\"\"/>
        </div>
      </div>


    <div class=\"form-group\">
      <label class=\"control-label col-sm-4\" for=\"password\">Password</label>

      <div class=\"col-sm-8 col-md-6\">
        <input id=\"password\" value=\"\"/>
      </div>
    </div>


      <div class=\"form-group\">
        <label class=\"control-label col-sm-4\" for=\"phone\">Phone</label>

        <div class=\"col-sm-8 col-md-6\">
          <input id=\"phone\" value=\"\"/>
        </div>
      </div>

        <div class=\"form-group\">
          <label class=\"control-label col-sm-4\" for=\"fax\">Fax</label>

          <div class=\"col-sm-8 col-md-6\">
            <input id=\"fax\" value=\"\"/>
          </div>
        </div>

      </div>

      <div class=\"clearfix\"></div>

      <div class=\"form-horizontal form-widgets col-sm-12\">
        <div class=\"form-group\">
          <label class=\"control-label col-sm-2\" for=\"bio\">Short bio</label>

          <div class=\"col-sm-10\">
            <textarea id=\"bio\"></textarea>
          </div>
        </div>
      </div>

      <div class=\"buttons-wrap\">
        <button class=\"k-button k-state-default\" data-dismiss=\"modal\">Cancel</button>
        <button class=\"k-button k-state-default\">Update</button>
      </div>
    </section>
  </div>



";
    }

    public function getTemplateName()
    {
        return "OnSiteLubeAdminBundle:Default:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  43 => 10,  37 => 6,  32 => 5,  29 => 4,);
    }
}
