<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/ncn/templates/layout/page.html.twig */
class __TwigTemplate_dac8a3c005fdf3bdf92a83a18eae8993 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg flex-column" . (((        // line 47
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_schema"] ?? null), 47, $this->source))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_bg_schema"] ?? null), 49, $this->source))) : (" ")));
        // line 51
        echo "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_schema"] ?? null), 54, $this->source))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_bg_schema"] ?? null), 56, $this->source))) : (" ")));
        // line 58
        echo "
<div id=\"loading\">
  <div class=\"d-flex justify-content-center align-items-center h-100\">
    <div class=\"spinner-border\" role=\"status\">
      <span class=\"visually-hidden\">Loading...</span>
    </div>
  </div>
</div>

<header>
  ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "

  ";
        // line 70
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 70) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 70)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 70))) {
            // line 71
            echo "  <nav class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 71, $this->source), "html", null, true);
            echo "\">
    <div class=\"";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 72, $this->source), "html", null, true);
            echo " d-flex flex-nowrap justify-content-center\">
      ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "

      <button class=\"navbar-toggler collapsed text-primary\" type=\"button\" data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fa-solid fa-bars\"></i>
      </button>
    </div>
    <div class=\"main-menu w-100 bg-primary\">
      <div class=\"";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 82, $this->source), "html", null, true);
            echo "\">
        <div class=\"collapse navbar-collapse flex-wrap\" id=\"navbarSupportedContent\">
          ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </nav>
  ";
        }
        // line 91
        echo "
</header>

";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 94)) {
            // line 95
            echo "  <section id=\"slideshow\" class=\"slideshow\">
    ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
  </section>
";
        }
        // line 99
        echo "
";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "intro_block", [], "any", false, false, true, 100)) {
            // line 101
            echo "<div id=\"intro_block\">
\t<div class=\"";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 102, $this->source), "html", null, true);
            echo "\">
    <div class=\"intro_block\">
      ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "intro_block", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
    </div>
  </div>
</div>
";
        }
        // line 109
        echo "
";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_box_left", [], "any", false, false, true, 110) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_box_right", [], "any", false, false, true, 110))) {
            // line 111
            echo "<div id=\"content_box\">
\t<div class=\"";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 112, $this->source), "html", null, true);
            echo "\">
    <div class=\"row\">
      ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_box_left", [], "any", false, false, true, 114)) {
                // line 115
                echo "        <div id=\"content_box_left\" class=\"col-sm-8\">
          ";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_box_left", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 119
            echo "
      ";
            // line 120
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_box_right", [], "any", false, false, true, 120)) {
                // line 121
                echo "        <div id=\"content_box_right\" class=\"col-sm-4\">
          ";
                // line 122
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_box_right", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 125
            echo "    </div>
  </div>
</div>
";
        }
        // line 129
        echo "
";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "latest_news", [], "any", false, false, true, 130)) {
            // line 131
            echo "<div id=\"latest_news\">
  <div class=\"";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 132, $this->source), "html", null, true);
            echo "\">
    ";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "latest_news", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 137
        echo "

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 141
        echo "  <button type=\"button\" class=\"btn btn-primary rounded-0\" id=\"btn-back-to-top\">
    <i class=\"fas fa-arrow-up\"></i>
  </button>
  ";
        // line 145
        $context["sidebar_first_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 145) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 145))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 147
        echo "
  ";
        // line 149
        $context["sidebar_second_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 149) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 149))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 151
        echo "
  ";
        // line 153
        $context["content_classes"] = (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 153) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 153))) ? ("col-12 col-lg-6") : ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 153) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 153))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 155
        echo "

  <div class=\"";
        // line 157
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 157, $this->source), "html", null, true);
        echo "\">
    ";
        // line 158
        if ( !($context["is_front"] ?? null)) {
            // line 159
            echo "      <div class=\"main-wrapper\">
    ";
        }
        // line 161
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 161)) {
            // line 162
            echo "        <section class=\"breadcrumb\">
          <div class=\"";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 163, $this->source), "html", null, true);
            echo "\">
            ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
          </div>
        </section>
      ";
        }
        // line 168
        echo "      <div class=\"row g-0\">
        ";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 169)) {
            // line 170
            echo "          <div class=\"order-2 order-lg-1 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null), 170, $this->source), "html", null, true);
            echo "\">
            ";
            // line 171
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 174
        echo "        <div class=\"order-1 order-lg-2 ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 174, $this->source), "html", null, true);
        echo "\">
          ";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 177
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 177)) {
            // line 178
            echo "          <div class=\"order-3 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null), 178, $this->source), "html", null, true);
            echo "\">
            ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 182
        echo "      </div>
    ";
        // line 183
        if ( !($context["is_front"] ?? null)) {
            // line 184
            echo "      </div>
    ";
        }
        // line 186
        echo "  </div>

</main>

";
        // line 190
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 190)) {
            // line 191
            echo "<div id=\"services\">
  <div class=\"";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 192, $this->source), "html", null, true);
            echo "\">
    ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 197
        echo "
";
        // line 198
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "we_help", [], "any", false, false, true, 198))) {
            // line 199
            echo "<div id=\"we_help_area\">
  <div class=\"";
            // line 200
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 200, $this->source), "html", null, true);
            echo "\">
    ";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "we_help", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 205
        echo "
";
        // line 206
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "notice", [], "any", false, false, true, 206) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gallery", [], "any", false, false, true, 206))) {
            // line 207
            echo "<div id=\"notice_gallery\">
  <div class=\"";
            // line 208
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 208, $this->source), "html", null, true);
            echo "\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-5\">
        ";
            // line 211
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "notice", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"col-sm-12 col-md-7\">
        ";
            // line 214
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gallery", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
</div>
";
        }
        // line 220
        echo "
";
        // line 221
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "map", [], "any", false, false, true, 221)) {
            // line 222
            echo "  <div id=\"map\">
    ";
            // line 223
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "map", [], "any", false, false, true, 223), 223, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 226
        echo "
";
        // line 227
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 227) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 227)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 227)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 227)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 227))) {
            // line 228
            echo "<footer class=\"mt-auto py-0 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 228, $this->source), "html", null, true);
            echo "\">
  ";
            // line 229
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 229) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 229)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 229)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 229))) {
                // line 230
                echo "    <section class=\"footer-top\">
      <div class=\"";
                // line 231
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 231, $this->source), "html", null, true);
                echo "\">
        <div class=\"row\">
          ";
                // line 233
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 233)) {
                    // line 234
                    echo "            <div class=\"col-sm-12 col-md\">
              ";
                    // line 235
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 238
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 238)) {
                    // line 239
                    echo "            <div class=\"col-sm-12 col-md\">
              ";
                    // line 240
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 243
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 243)) {
                    // line 244
                    echo "            <div class=\"col-sm-12 col-md\">
              ";
                    // line 245
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 248
                echo "        </div>
      </div>
    </section>
  ";
            }
            // line 252
            echo "
  ";
            // line 253
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 253)) {
                // line 254
                echo "  <section class=\"footer-bottom\">
    <div class=\"";
                // line 255
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 255, $this->source), "html", null, true);
                echo "\">
      ";
                // line 256
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
                echo "
    </div>
  </section>
  ";
            }
            // line 260
            echo "</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/ncn/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 260,  468 => 256,  464 => 255,  461 => 254,  459 => 253,  456 => 252,  450 => 248,  444 => 245,  441 => 244,  438 => 243,  432 => 240,  429 => 239,  426 => 238,  420 => 235,  417 => 234,  415 => 233,  410 => 231,  407 => 230,  405 => 229,  400 => 228,  398 => 227,  395 => 226,  389 => 223,  386 => 222,  384 => 221,  381 => 220,  372 => 214,  366 => 211,  360 => 208,  357 => 207,  355 => 206,  352 => 205,  345 => 201,  341 => 200,  338 => 199,  336 => 198,  333 => 197,  326 => 193,  322 => 192,  319 => 191,  317 => 190,  311 => 186,  307 => 184,  305 => 183,  302 => 182,  296 => 179,  291 => 178,  289 => 177,  284 => 175,  279 => 174,  273 => 171,  268 => 170,  266 => 169,  263 => 168,  256 => 164,  252 => 163,  249 => 162,  246 => 161,  242 => 159,  240 => 158,  236 => 157,  232 => 155,  230 => 153,  227 => 151,  225 => 149,  222 => 147,  220 => 145,  215 => 141,  210 => 137,  203 => 133,  199 => 132,  196 => 131,  194 => 130,  191 => 129,  185 => 125,  179 => 122,  176 => 121,  174 => 120,  171 => 119,  165 => 116,  162 => 115,  160 => 114,  155 => 112,  152 => 111,  150 => 110,  147 => 109,  139 => 104,  134 => 102,  131 => 101,  129 => 100,  126 => 99,  120 => 96,  117 => 95,  115 => 94,  110 => 91,  101 => 85,  97 => 84,  92 => 82,  80 => 73,  76 => 72,  71 => 71,  69 => 70,  64 => 68,  52 => 58,  50 => 56,  49 => 55,  48 => 54,  47 => 53,  44 => 51,  42 => 49,  41 => 48,  40 => 47,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{%
set nav_classes = 'navbar navbar-expand-lg flex-column' ~
  (b5_navbar_schema != 'none' ? \" navbar-#{b5_navbar_schema}\" : ' ') ~
  (b5_navbar_schema != 'none' ? (b5_navbar_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_navbar_bg_schema != 'none' ? \" bg-#{b5_navbar_bg_schema}\" : ' ')
%}

{%
set footer_classes = ' ' ~
  (b5_footer_schema != 'none' ? \" footer-#{b5_footer_schema}\" : ' ') ~
  (b5_footer_schema != 'none' ? (b5_footer_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_footer_bg_schema != 'none' ? \" bg-#{b5_footer_bg_schema}\" : ' ')
%}

<div id=\"loading\">
  <div class=\"d-flex justify-content-center align-items-center h-100\">
    <div class=\"spinner-border\" role=\"status\">
      <span class=\"visually-hidden\">Loading...</span>
    </div>
  </div>
</div>

<header>
  {{ page.header }}

  {% if page.nav_branding or page.nav_main or page.nav_additional %}
  <nav class=\"{{ nav_classes }}\">
    <div class=\"{{ b5_top_container }} d-flex flex-nowrap justify-content-center\">
      {{ page.nav_branding }}

      <button class=\"navbar-toggler collapsed text-primary\" type=\"button\" data-bs-toggle=\"collapse\"
              data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
              aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <i class=\"fa-solid fa-bars\"></i>
      </button>
    </div>
    <div class=\"main-menu w-100 bg-primary\">
      <div class=\"{{ b5_top_container }}\">
        <div class=\"collapse navbar-collapse flex-wrap\" id=\"navbarSupportedContent\">
          {{ page.nav_main }}
          {{ page.nav_additional }}
        </div>
      </div>
    </div>
  </nav>
  {% endif %}

</header>

{% if page.slideshow %}
  <section id=\"slideshow\" class=\"slideshow\">
    {{ page.slideshow }}
  </section>
{% endif %}

{% if page.intro_block %}
<div id=\"intro_block\">
\t<div class=\"{{ b5_top_container }}\">
    <div class=\"intro_block\">
      {{ page.intro_block }}
    </div>
  </div>
</div>
{% endif %}

{% if page.content_box_left or page.content_box_right %}
<div id=\"content_box\">
\t<div class=\"{{ b5_top_container }}\">
    <div class=\"row\">
      {% if page.content_box_left %}
        <div id=\"content_box_left\" class=\"col-sm-8\">
          {{ page.content_box_left }}
        </div>
      {% endif %}

      {% if page.content_box_right %}
        <div id=\"content_box_right\" class=\"col-sm-4\">
          {{ page.content_box_right }}
        </div>
      {% endif %}
    </div>
  </div>
</div>
{% endif %}

{% if page.latest_news %}
<div id=\"latest_news\">
  <div class=\"{{ b5_top_container }}\">
    {{ page.latest_news }}
  </div>
</div>
{% endif %}


<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
  <button type=\"button\" class=\"btn btn-primary rounded-0\" id=\"btn-back-to-top\">
    <i class=\"fas fa-arrow-up\"></i>
  </button>
  {%
  set sidebar_first_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set sidebar_second_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set content_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-lg-6' : ((page.sidebar_first or page.sidebar_second) ? 'col-12 col-lg-9' : 'col-12' )
   %}


  <div class=\"{{ b5_top_container }}\">
    {% if not is_front %}
      <div class=\"main-wrapper\">
    {% endif %}
      {% if page.breadcrumb %}
        <section class=\"breadcrumb\">
          <div class=\"{{ b5_top_container }}\">
            {{ page.breadcrumb }}
          </div>
        </section>
      {% endif %}
      <div class=\"row g-0\">
        {% if page.sidebar_first %}
          <div class=\"order-2 order-lg-1 {{ sidebar_first_classes }}\">
            {{ page.sidebar_first }}
          </div>
        {% endif %}
        <div class=\"order-1 order-lg-2 {{ content_classes }}\">
          {{ page.content }}
        </div>
        {% if page.sidebar_second %}
          <div class=\"order-3 {{ sidebar_second_classes }}\">
            {{ page.sidebar_second }}
          </div>
        {% endif %}
      </div>
    {% if not is_front %}
      </div>
    {% endif %}
  </div>

</main>

{% if page.services %}
<div id=\"services\">
  <div class=\"{{ b5_top_container }}\">
    {{ page.services }}
  </div>
</div>
{% endif %}

{% if is_front and page.we_help %}
<div id=\"we_help_area\">
  <div class=\"{{ b5_top_container }}\">
    {{ page.we_help }}
  </div>
</div>
{% endif %}

{% if page.notice or page.gallery %}
<div id=\"notice_gallery\">
  <div class=\"{{ b5_top_container }}\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-md-5\">
        {{ page.notice }}
      </div>
      <div class=\"col-sm-12 col-md-7\">
        {{ page.gallery }}
      </div>
    </div>
  </div>
</div>
{% endif %}

{% if page.map %}
  <div id=\"map\">
    {{ page.map }}
  </div>
{% endif %}

{% if page.footer or page.footer_col_1 or page.footer_col_2 or page.footer_col_3 or page.footer_col_4 %}
<footer class=\"mt-auto py-0 {{ footer_classes }}\">
  {% if page.footer_col_1 or page.footer_col_2 or page.footer_col_3 or page.footer_col_4 %}
    <section class=\"footer-top\">
      <div class=\"{{ b5_top_container }}\">
        <div class=\"row\">
          {% if page.footer_col_1 %}
            <div class=\"col-sm-12 col-md\">
              {{ page.footer_col_1 }}
            </div>
          {% endif %}
          {% if page.footer_col_2 %}
            <div class=\"col-sm-12 col-md\">
              {{ page.footer_col_2 }}
            </div>
          {% endif %}
          {% if page.footer_col_3 %}
            <div class=\"col-sm-12 col-md\">
              {{ page.footer_col_3 }}
            </div>
          {% endif %}
        </div>
      </div>
    </section>
  {% endif %}

  {% if page.footer %}
  <section class=\"footer-bottom\">
    <div class=\"{{ b5_top_container }}\">
      {{ page.footer }}
    </div>
  </section>
  {% endif %}
</footer>
{% endif %}
", "themes/custom/ncn/templates/layout/page.html.twig", "/app/web/themes/custom/ncn/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 70);
        static $filters = array("escape" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
