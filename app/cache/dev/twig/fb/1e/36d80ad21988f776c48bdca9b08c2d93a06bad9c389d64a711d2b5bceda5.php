<?php

/* OnSiteLubeAdminBundle:Default:index.html.twig */
class __TwigTemplate_fb1e36d80ad21988f776c48bdca9b08c2d93a06bad9c389d64a711d2b5bceda5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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


    <h1 class=\"page-header\">Account Dashboard</h1>
    <ul id=\"menu\">
      <li>Administration Module</li>
      <li id=\"liChangePassword\" class=\"hidden-xs\"><a href=\"#\">Change Password</a></li>
      <li class=\"hidden-xs\"><a href=\"#schedule\">Schedule</a></li>
      <li class=\"hidden-xs\"><a href=\"#faq\">FAQ</a></li>
      <li id=\"liAlerts\" class=\"hidden-xs\"><a href=\"#\"><span class=\"badge pull-right\">4</span>Alerts&nbsp;&nbsp;</a></li>
    </ul>


    <div class=\"row clearfix\">
      <div class=\"col-lg-4\">
        <section id=\"profile\" class=\"well\">
          <h2 class=\"ra-well-title\">User Profile</h2>
          <button id=\"btnEdit\" class=\"btn btn-toolbar btn-xs pull-right hidden-xs\" data-toggle=\"modal\" data-target=\"#myModal\">
            <i class=\"fa fa-pencil fa-fw\"></i> Edit
          </button>
          <div class=\"row\">
            <div class=\"col-lg-5 img-responsive\">
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "UserAccount"), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "genderId") == twig_constant("OnSiteLube\\AdminBundle\\Entity\\Gender::MALE"))) {
                // line 36
                echo "              <img class=\"divshadow img-thumbnail hidden-xs\" style=\"width: 98px; height: 98px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/maleuser.jpg"), "html", null, true);
                echo "\" class=\"ra-avatar img-responsive\"/>
            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 38
            echo "              <img class=\"divshadow img-thumbnail hidden-xs\" style=\"width: 98px; height: 98px;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/femaleuser.png"), "html", null, true);
            echo "\" class=\"ra-avatar img-responsive\"/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>

            ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "UserAccount"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "            <div class=\"col-lg-7 col-sm-2\">
              <span class=\"ra-first-name\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo "</span>
              <span class=\"ra-last-name\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo "</span>
              <div class=\"ra-position\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

          </div>
        </section>
      </div>


      <div class=\"col-lg-8\">
        <div id=\"tabstrip\" class=\"ra-section hidden-xs\">
          <ul>
            <li class=\"k-state-active\"><span class=\"hidden-xs\"> Revenue</span></li>
            <li><span class=\"hidden-xs\">Sales / day</span></li>
            <li><span class=\"hidden-xs\">Sales / region</span></li>
            <li><span class=\"hidden-xs\">Market share</span></li>
          </ul>
          <div>
            <div id=\"revenue\"></div>
          </div>
          <div>
            <div id=\"sales-per-day\"></div>
          </div>
          <div>
            <div id=\"sales-per-region\"></div>
          </div>
          <div>
            <div id=\"market-alice-mutton\" class=\"market-donut\"></div>
            <div id=\"market-gravad-lax\" class=\"market-donut\"></div>
            <div id=\"market-inlagd-sill\" class=\"market-donut\"></div>
            <div id=\"market-spegesild\" class=\"market-donut\"></div>
          </div>
        </div>
      </div>


    </div>


  ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "UserAccount"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 87
            echo "
    <input type=\"hidden\" id=\"txtUserId\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
            echo "\" />


    <div class=\"modal fade bs-modal-lg\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\" id=\"myModalLabel\">Account Profile Setup</h4>
          </div>
          <div class=\"modal-body\">


            <section class=\"well\">
              <h2 class=\"ra-well-title\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title"), "html", null, true);
            echo "</h2>

              <div class=\"form-horizontal form-widgets col-sm-6\">
                <div class=\"form-group\">
                  <label class=\"control-label col-sm-4\" for=\"firstname\">First Name</label>

                  <div class=\"col-sm-8 col-md-6\">
                    <input id=\"txtFirstName\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo "\"/>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"control-label col-sm-4\" for=\"lastname\">Last Name</label>

                  <div class=\"col-sm-8 col-md-6\">
                    <input id=\"txtLastName\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo "\"/>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"control-label col-sm-4\" for=\"username\">Username</label>

                  <div class=\"col-sm-8 col-md-6\">
                    <input id=\"txtUsername\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "\"/>
                  </div>
                </div>


                <div class=\"form-group\">
                  <label class=\"control-label col-sm-4\" for=\"username\">Password</label>

                  <div class=\"col-sm-8 col-md-6\">
                    <input id=\"txtPassword\" type=\"password\" class=\"form-control\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
            echo "\"/>
                  </div>
                </div>

              </div>

              <div class=\"form-horizontal form-widgets col-sm-6\">
                <div class=\"form-group\">
                  <label class=\"control-label col-sm-4\" for=\"email\">Email</label>

                  <div class=\"col-sm-8 col-md-6\">
                    <input id=\"txtEmail\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "\"/>
                  </div>
                </div>



                <div class=\"form-group\">
                  <label class=\"control-label col-sm-4\" for=\"gender\">Gender</label>

                  <div class=\"col-sm-8 col-md-6\">
                    <select id=\"selGender\">
                      ";
            // line 156
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "genderId") == twig_constant("OnSiteLube\\AdminBundle\\Entity\\Gender::MALE"))) {
                // line 157
                echo "                      <option selected>Male</option>
                      <option>Female</option>
                        ";
            } else {
                // line 160
                echo "                          <option>Male</option>
                          <option selected>Female</option>
                      ";
            }
            // line 163
            echo "                    </select>
                  </div>
                </div>


                <div class=\"form-group\">
                  <label class=\"control-label col-sm-4\" for=\"phone\">Phone</label>

                  <div class=\"col-sm-8 col-md-6\">
                    <input id=\"txtPhone\" maxlength=\"12\"  value=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone"), "html", null, true);
            echo "\"/>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"control-label col-sm-4\" for=\"fax\">Fax</label>

                  <div class=\"col-sm-8 col-md-6\">
                    <input id=\"txtFax\" maxlength=\"12\" value=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fax"), "html", null, true);
            echo "\"/>
                  </div>
                </div>

              </div>

              <div class=\"clearfix\"></div>



              <div class=\"buttons-wrap\">
                <button id=\"btnCancel\" class=\"k-button k-state-default\" data-dismiss=\"modal\">Cancel</button>
                <button id=\"btnUpdateUser\" class=\"k-button k-state-default\">Update</button>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "

  ";
        // line 202
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "UserAcls"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["acl"]) {
            // line 203
            echo "    ";
            if (($this->getAttribute((isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl")), "resourceId") == twig_constant("OnSiteLube\\AdminBundle\\Entity\\Resource::SCHEDULE"))) {
                // line 204
                echo "      <div id=\"schedule\" class=\"ra-section hidden-xs\"></div>
    ";
            }
            // line 206
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "
    <section id=\"faq\" class=\"well hidden-xs\">
      <h2 class=\"ra-well-title\"><abbr title=\"Frequently Asked Questions\">FAQ</abbr></h2>
      <ul id=\"panelbar\" class=\"ra-well-overlay\" style=\"border-style: dotted;\">
        <li>
          How do I navigate my Account Dashboard
          <div>
            <p>
              The dashboard has a submenu of items that are pertinent to your daily activities. The data on the page can be customized
              on a per user or group basis. This is currently just raw test data to show the abilities of the dashboard.
            </p>
          </div>
        </li>
        <li>
          Who should use the dashboard?
          <div>
            <p>
              Anybody in the company that needs alerts, schedules and current information regarding their day.
            </p>
          </div>
        </li>
        <li>
          Why are there not many features yet?
          <div>
            <p>
              More features will come as development continues!
            </p>
          </div>
        </li>
      </ul>
    </section>

";
    }

    // line 243
    public function block_javascripts($context, array $blocks = array())
    {
        // line 244
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script language=\"javascript\">

      \$( document ).ready(function(\$e) {

        \$(\"#liAlerts\").click(function() {
          alert('Feature coming soon...');
        });

        \$(\"#liChangePassword\").click(function() {
          \$('#btnEdit').click();
        });

        \$(\"#btnUpdateUser\").click(function() {

          var data = \"[{ \\\"firstName\\\" : \\\"\" + \$('#txtFirstName').val() + \"\\\", \\\"lastName\\\" : \\\"\" + \$('#txtLastName').val();
          data += \"\\\", \\\"email\\\" : \\\"\" + \$('#txtEmail').val() + \"\\\", \\\"username\\\" : \\\"\" + \$('#txtUsername').val();
          data += \"\\\", \\\"fax\\\" : \\\"\" + \$('#txtFax').val();
          data += \"\\\", \\\"phone\\\" : \\\"\" + \$('#txtPhone').val() + \"\\\", \\\"password\\\" : \\\"\" + \$('#txtPassword').val() + \"\\\", \\\"id\\\" : \\\"\";
          data += \$('#txtUserId').val() + \"\\\"}]\";

          \$.post(\"/updateUser\", data,  function(\$result) {
            \$('#btnCancel').click();
          });
        });
      });

    </script>

";
    }

    public function getTemplateName()
    {
        return "OnSiteLubeAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 244,  381 => 243,  345 => 207,  339 => 206,  335 => 204,  332 => 203,  328 => 202,  324 => 200,  298 => 180,  287 => 172,  276 => 163,  271 => 160,  266 => 157,  264 => 156,  250 => 145,  236 => 134,  224 => 125,  213 => 117,  202 => 109,  188 => 102,  171 => 88,  168 => 87,  164 => 86,  125 => 49,  116 => 46,  112 => 45,  108 => 44,  105 => 43,  101 => 42,  97 => 40,  88 => 38,  79 => 36,  73 => 35,  47 => 11,  44 => 10,  38 => 6,  33 => 5,  30 => 4,);
    }
}
