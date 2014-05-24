<?php

/* OnSiteLubeLoginBundle:Default:index.html.twig */
class __TwigTemplate_04c6e5db4e1eade1f478ae7e07342f3e997c062fc44dac37794049b781e4af25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'topleveljs' => array($this, 'block_topleveljs'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <style id=\"scoped\">

    .divshadow {
      -moz-box-shadow: 5px 5px 20px 1px #000;
      -webkit-box-shadow: 5px 5px 20px 1px #000;
      box-shadow: 5px 5px 20px 1px #000;
    }

    footer {
      padding-top: 10px;
      text-align: center;
      color: #8c9295;
      background-color: #222222;
    }

  </style>
";
    }

    // line 26
    public function block_topleveljs($context, array $blocks = array())
    {
        // line 27
        echo "  ";
        $this->displayParentBlock("topleveljs", $context, $blocks);
        echo "
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "  <div class=\"navbar navbar-inverse navbar-fixed-top divshadow\" role=\"navigation\">
    <div id=\"nav-container\" class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>


      </div>
      <div class=\"navbar-collapse collapse\">
        <form id=\"frmLogin\" class=\"navbar-form navbar-right\" role=\"form\">
          <div id=\"divUsername\" class=\"form-group has-warning has-feedback\">
            <input id=\"txtUsername\" type=\"text\" placeholder=\"Username\" class=\"form-control\">
            <span id=\"errUsername\" class=\"glyphicon glyphicon-warning-sign form-control-feedback hidden\"></span>
          </div>
          <div id=\"divPassword\" class=\"form-group has-warning has-feedback\">
            <input id=\"txtPassword\" type=\"password\" placeholder=\"Password\" class=\"form-control\">
            <span id=\"errPassword\" class=\"glyphicon glyphicon-warning-sign form-control-feedback hidden\"></span>
          </div>
          <button id=\"btnSubmit\" type=\"button\" data-loading-text=\"Loading...\" class=\"btn btn-success\">Sign in </button>
        </form>
      </div>
    </div>
  </div>

  <br/>

  <div id=\"divLoginError\" class=\"bs-example\">
    <br/> <br/>
    <div class=\"alert alert-danger fade in\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
      <h4>Invalid Login</h4>
      <p>Either the username or password was incorrect, please try again!</p>
    </div>
  </div>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class=\"jumbotron divshadow\">
    <div class=\"container\">
      <h1>Welcome!</h1>
      <p>
        This is our cloud based Onsite Fleet Solution. Your account and vehicle maintenance records can be found
        and managed using the online administration system.
        This application can be used on your computer or tablet.
      </p>
      <p>
        If you have any questions please
        <a href=\"mailto:support@onsitelube.com\" style=\"text-decoration: none;\">contact us</a>.
      </p>

      <p id=\"btnLearnMore\"><a class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\".bs-modal-sm\" role=\"button\">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
      <div class=\"col-md-4\">
        <h2>Value</h2>

        <p>
          Our services reduce costly mechanical repairs and eliminate unnecessary wages associated with down
          time for drivers and service personal during regular business hours. We allow your company to focus
          on its core business.
        </p>

        <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
      </div>
      <div class=\"col-md-4\">
        <h2>Service</h2>

        <p>
          Fleet check, Oil Changes at Work and RV Mobile Oil Changes. No hassles for small, medium and large
          fleets. We service at your location to make things more convenient for you. This will
          reduce costly mechanical repairs associated with down time.
        </p>

        <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
      </div>
      <div class=\"col-md-4\">
        <h2>History</h2>

        <p>
          Established in 1991, On Site Lube has specialized in fleet maintenance programs engineered to match
          our customer’s requirements. We provide service to our clients, on site, at their location, even after
          hours. We exist because we save our clients money and time.
        </p>

        <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
      </div>
    </div>

    <br/><br/>
    <hr/>
  </div> <!-- /container -->

";
    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        // line 136
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script language=\"javascript\">

    \$( document ).ready(function(\$e) {

      \$('#frmLogin').submit(function (\$e) {
        \$e.preventDefault();
      });

      \$('#divLoginError').hide();

      \$('#txtUsername').focus();


      \$(\"#btnSubmit\").click(function() {

        \$('#divLoginError').hide();

        var btn = \$(this);
        \$(\"#btnSubmit\").html('Loading');
        var data = \"username=\" + \$('#txtUsername').val() + \"&password=\" + \$('#txtPassword').val();
        \$.getJSON(\"/login\", data, function(result) {

          if(result[0].id == \"0\")
            loginError();
          else
            window.location = \"/dashboard\";
        });
      });
    });

    function loginError() {
      var userNameTextbox =  \$('#txtUsername');
      var passwordTextbox = \$('#txtPassword');
      var submitButton = \$(\"#btnSubmit\");

      \$('#divLoginError').show();

      submitButton.html('Sign in');
      passwordTextbox.val(\"\");
      userNameTextbox.val(\"\");
      userNameTextbox.focus();
    }

  </script>

";
    }

    // line 185
    public function block_footer($context, array $blocks = array())
    {
        // line 186
        echo "  <footer class=\"navbar navbar-fixed-bottom\">
    <p id=\"footer-block\">
      All Rights Reserved &copy; &middot; 2014 On Site Lube &middot; Toll-Free: (866) 235-5823 &middot;
      <a href=\"mailto:support@onsitelube.com\">contact@onsitelube.com</a>
    </p>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "OnSiteLubeLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 186,  230 => 185,  177 => 136,  174 => 135,  71 => 32,  68 => 31,  61 => 27,  58 => 26,  35 => 6,  32 => 5,);
    }
}
