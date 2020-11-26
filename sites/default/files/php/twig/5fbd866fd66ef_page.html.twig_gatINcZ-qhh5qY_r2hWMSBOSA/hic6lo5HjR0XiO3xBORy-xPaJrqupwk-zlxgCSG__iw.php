<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/insha/templates/page.html.twig */
class __TwigTemplate_5b0e5d291bfde51ca3ead6d0aefb46ef62fa996a55f783a04eaad1812adf6c67 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 67];
        $filters = ["t" => 65, "escape" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 63
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
      <div class=\"section layout-container clearfix\">
        ";
        // line 67
        if (($context["logo"] ?? null)) {
            // line 68
            echo "          <a class=\"floatl\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
            <img src=\"";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" />
          </a>
        ";
        }
        // line 72
        echo "        ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 73
            echo "          <div id=\"name-and-slogan\"";
            if ((($context["hide_site_name"] ?? null) && ($context["hide_site_slogan"] ?? null))) {
                echo " class=\"visually-hidden displayinb floatl\"";
            }
            echo ">
            ";
            // line 74
            if (($context["site_name"] ?? null)) {
                // line 75
                echo "              ";
                if (($context["title"] ?? null)) {
                    // line 76
                    echo "                <h1 id=\"site-name\"";
                    if (($context["hide_site_name"] ?? null)) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
                  <strong>
                    <a href=\"";
                    // line 78
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                    echo "</span></a>
                  </strong>
                </h1>
              ";
                    // line 82
                    echo "              ";
                } else {
                    // line 83
                    echo "                <h1 id=\"site-name\"";
                    if (($context["hide_site_name"] ?? null)) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
                  <a href=\"";
                    // line 84
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                    echo "</span></a>
                </h1>
              ";
                }
                // line 87
                echo "            ";
            }
            // line 88
            echo "            ";
            if (($context["site_slogan"] ?? null)) {
                // line 89
                echo "              <div id=\"site-slogan\"";
                if (($context["hide_site_slogan"] ?? null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">
                ";
                // line 90
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 93
            echo "          </div>
        ";
        }
        // line 95
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])) {
            // line 96
            echo "          <div id=\"secondary-menu\" class=\"navigation displayinb floatr margintop1\">
            ";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 100
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "messages", [])) {
            // line 101
            echo "          <div id=\"messages\" class=\"width100 floatl displayinb bottom-buffer top-buffer\">
            <div class=\"section clearfix\">
              ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "messages", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 107
        echo "        ";
        if (($context["header"] ?? null)) {
            // line 108
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 110
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 111
            echo "          <div id=\"main-menu\" class=\"navigation floatl displayinb width100 bottom-buffer\">
            ";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 115
        echo "      </div>
    </header>

    ";
        // line 118
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 119
            echo "      <div id=\"featured\"><div class=\"section clearfix\">
          ";
            // line 120
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
      </div></div><!-- /.section, /#featured -->
    ";
        }
        // line 123
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">

        ";
        // line 132
        echo "
        ";
        // line 133
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 134
            echo "
          <div id=\"sidebar\" class=\"column sidebar floatl width30\">
            <div class=\"section\">
              ";
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
            </div>
          </div><!-- /#sidebar -->

          ";
            // line 141
            if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
                // line 142
                echo "            <div class=\"help-wrapper displayinb width68 floatr\">
              ";
                // line 143
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 146
            echo "
          ";
            // line 147
            if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
                // line 148
                echo "            <div id=\"highlighted\" class=\"highlighted-wrapper displayinb width68 floatr\">
              ";
                // line 149
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 152
            echo "          
          <div id=\"content\" class=\"column displayinb width68 floatr\"><div class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
            // line 155
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
            ";
            // line 156
            if (($context["title"] ?? null)) {
                // line 157
                echo "              <h1 class=\"title\" id=\"page-title\">
                ";
                // line 158
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "
              </h1>
            ";
            }
            // line 161
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
            ";
            // line 162
            if (($context["tabs"] ?? null)) {
                // line 163
                echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tabs"));
                echo "\">
                ";
                // line 164
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
                echo "
              </nav>
            ";
            }
            // line 167
            echo "            ";
            if (($context["action_links"] ?? null)) {
                // line 168
                echo "              <ul class=\"action-links\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
                echo "</ul>
            ";
            }
            // line 170
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div></div><!-- /#content -->

          ";
        } else {
            // line 174
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
                // line 175
                echo "            <div class=\"help-wrapper displayinb width100 floatr\">
              ";
                // line 176
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 179
            echo "
          ";
            // line 180
            if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
                // line 181
                echo "            <div id=\"highlighted\" class=\"highlighted-wrapper displayinb width100 floatr\">
              ";
                // line 182
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 185
            echo "          
          <div id=\"content\" class=\"column displayinb width100 floatr\"><div class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
            // line 188
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
            ";
            // line 189
            if (($context["title"] ?? null)) {
                // line 190
                echo "              <h1 class=\"title\" id=\"page-title\">
                ";
                // line 191
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "
              </h1>
            ";
            }
            // line 194
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
            ";
            // line 195
            if (($context["tabs"] ?? null)) {
                // line 196
                echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tabs"));
                echo "\">
                ";
                // line 197
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
                echo "
              </nav>
            ";
            }
            // line 200
            echo "            ";
            if (($context["action_links"] ?? null)) {
                // line 201
                echo "              <ul class=\"action-links\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
                echo "</ul>
            ";
            }
            // line 203
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div></div><!-- /#content -->
        ";
        }
        // line 206
        echo "
      </div><!-- /#main -->
    </div><!-- /#main-wrapper -->
  </div><!-- /#page -->
</div><!-- /#page-wrapper -->
<div id=\"footer-wrapper\">
  <div class=\"section\">
      ";
        // line 213
        if (((($this->getAttribute(($context["page"] ?? null), "footer_firstcolumn", []) || $this->getAttribute(($context["page"] ?? null), "footer_secondcolumn", [])) || $this->getAttribute(($context["page"] ?? null), "footer_thirdcolumn", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourthcolumn", []))) {
            // line 214
            echo "        <div id=\"footer-columns\" class=\"clearfix width100\">
          <div class=\"footer-columns footer_firstcolumn_wrapper width24 floatl\">
            ";
            // line 216
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_firstcolumn", [])), "html", null, true);
            echo "
          </div>
          <div class=\"footer-columns footer_secondcolumn_wrapper width24 floatl\">
            ";
            // line 219
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_secondcolumn", [])), "html", null, true);
            echo "
          </div>
          <div class=\"footer-columns footer_thirdcolumn_wrapper width24 floatl\">
            ";
            // line 222
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_thirdcolumn", [])), "html", null, true);
            echo "
          </div>
          <div class=\"footer-columns footer_fourthcolumn_wrapper width24 floatl\">
            ";
            // line 225
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourthcolumn", [])), "html", null, true);
            echo "
          </div>
        </div><!-- /#footer-columns -->
      ";
        }
        // line 229
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 230
            echo "        <div id=\"footer\" class=\"clearfix\">
          ";
            // line 231
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 234
        echo "  </div><!-- /.section -->
</div><!-- /#footer-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/insha/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 234,  449 => 231,  446 => 230,  443 => 229,  436 => 225,  430 => 222,  424 => 219,  418 => 216,  414 => 214,  412 => 213,  403 => 206,  396 => 203,  390 => 201,  387 => 200,  381 => 197,  376 => 196,  374 => 195,  369 => 194,  363 => 191,  360 => 190,  358 => 189,  354 => 188,  349 => 185,  343 => 182,  340 => 181,  338 => 180,  335 => 179,  329 => 176,  326 => 175,  323 => 174,  315 => 170,  309 => 168,  306 => 167,  300 => 164,  295 => 163,  293 => 162,  288 => 161,  282 => 158,  279 => 157,  277 => 156,  273 => 155,  268 => 152,  262 => 149,  259 => 148,  257 => 147,  254 => 146,  248 => 143,  245 => 142,  243 => 141,  236 => 137,  231 => 134,  229 => 133,  226 => 132,  220 => 123,  214 => 120,  211 => 119,  209 => 118,  204 => 115,  198 => 112,  195 => 111,  192 => 110,  186 => 108,  183 => 107,  176 => 103,  172 => 101,  169 => 100,  163 => 97,  160 => 96,  157 => 95,  153 => 93,  147 => 90,  140 => 89,  137 => 88,  134 => 87,  124 => 84,  117 => 83,  114 => 82,  104 => 78,  96 => 76,  93 => 75,  91 => 74,  84 => 73,  81 => 72,  73 => 69,  66 => 68,  64 => 67,  59 => 65,  55 => 63,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/insha/templates/page.html.twig", "C:\\Users\\charl\\Sites\\devdesktop\\drupal-8.9.1\\themes\\insha\\templates\\page.html.twig");
    }
}
