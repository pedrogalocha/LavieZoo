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

/* viewtopic_topic_tools.html */
class __TwigTemplate_7df3dbf759542e1d99b0270be116308b835e0d39ad63bb66d523428e12624c33 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 2
            echo "\t";
            // line 3
            echo "\t";
            if (($context["U_WATCH_TOPIC"] ?? null)) {
                // line 4
                echo "\t\t<a href=\"";
                echo ($context["U_WATCH_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "\" id=\"topic_watch_button\">
\t\t\t<span>";
                // line 5
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "</span> <i class=\"icon fa-";
                if (($context["S_WATCHING_TOPIC"] ?? null)) {
                    echo "check-";
                }
                echo "square-o fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t";
            }
            // line 8
            echo "\t<span class=\"responsive-hide\">
\t\t";
            // line 9
            if (($context["U_BOOKMARK_TOPIC"] ?? null)) {
                // line 10
                echo "\t\t\t<a href=\"";
                echo ($context["U_BOOKMARK_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOKMARK_TOPIC");
                echo "\" id=\"topic_bookmark_button\">
\t\t\t\t\t<span>";
                // line 11
                echo ($context["S_BOOKMARK_TOPIC"] ?? null);
                echo "</span> <i class=\"icon fa-bookmark-o fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t";
            }
            // line 14
            echo "\t\t";
            if (($context["U_BUMP_TOPIC"] ?? null)) {
                // line 15
                echo "\t\t\t<a href=\"";
                echo ($context["U_BUMP_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                echo "\" id=\"topic_bump_button\">
\t\t\t\t\t<span>";
                // line 16
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                echo "</span> <i class=\"icon fa-level-up fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t";
            }
            // line 19
            echo "\t</span>
\t";
            // line 20
            if ((((((($context["U_WATCH_TOPIC"] ?? null) || ($context["U_BOOKMARK_TOPIC"] ?? null)) || ($context["U_BUMP_TOPIC"] ?? null)) || ($context["U_EMAIL_TOPIC"] ?? null)) || ($context["U_PRINT_TOPIC"] ?? null)) || ($context["S_DISPLAY_TOPIC_TOOLS"] ?? null))) {
                // line 21
                echo "\t\t<div class=\"dropdown-container dropdown-button-control topic-tools responsive-show\"";
                if ( !(((($context["U_BUMP_TOPIC"] ?? null) || ($context["U_EMAIL_TOPIC"] ?? null)) || ($context["U_PRINT_TOPIC"] ?? null)) || ($context["S_DISPLAY_TOPIC_TOOLS"] ?? null))) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t\t\t<span title=\"";
                // line 22
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_TOOLS");
                echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t\t<i class=\"icon fa-wrench fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t</span>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\">
\t\t\t\t\t<div class=\"pointer-inner\"></div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t";
                // line 31
                // line 32
                echo "\t\t\t\t\t";
                if (($context["U_WATCH_TOPIC"] ?? null)) {
                    // line 33
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 34
                    echo ($context["U_WATCH_TOPIC"] ?? null);
                    echo "\" class=\"watch-topic-link\" title=\"";
                    echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                    echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
                    if (($context["S_WATCHING_TOPIC"] ?? null)) {
                        echo "fa-check-square-o";
                    } else {
                        echo "fa-square-o";
                    }
                    echo " fa-fw\" data-toggle-text=\"";
                    echo ($context["S_WATCH_TOPIC_TOGGLE"] ?? null);
                    echo "\" data-toggle-url=\"";
                    echo ($context["U_WATCH_TOPIC_TOGGLE"] ?? null);
                    echo "\" data-update-all=\".watch-topic-link\">
\t\t\t\t\t\t\t<i class=\"icon ";
                    // line 35
                    if (($context["S_WATCHING_TOPIC"] ?? null)) {
                        echo "fa-check-square-o";
                    } else {
                        echo "fa-square-o";
                    }
                    echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                    echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                    echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t";
                if (($context["U_BOOKMARK_TOPIC"] ?? null)) {
                    // line 40
                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 41
                    echo ($context["U_BOOKMARK_TOPIC"] ?? null);
                    echo "\" class=\"bookmark-link\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOKMARK_TOPIC");
                    echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                    echo ($context["S_BOOKMARK_TOGGLE"] ?? null);
                    echo "\" data-update-all=\".bookmark-link\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-bookmark-o fa-fw\" aria-hidden=\"true\"></i><span>";
                    // line 42
                    echo ($context["S_BOOKMARK_TOPIC"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t";
                if (($context["U_BUMP_TOPIC"] ?? null)) {
                    // line 47
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 48
                    echo ($context["U_BUMP_TOPIC"] ?? null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                    echo "\" data-ajax=\"true\">
\t\t\t\t\t\t\t<i class=\"icon fa-level-up fa-fw\" aria-hidden=\"true\"></i><span>";
                    // line 49
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                    echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t";
                if (($context["U_EMAIL_TOPIC"] ?? null)) {
                    // line 54
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 55
                    echo ($context["U_EMAIL_TOPIC"] ?? null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
                    echo "\">
\t\t\t\t\t\t\t<i class=\"icon fa-envelope-o fa-fw\" aria-hidden=\"true\"></i><span>";
                    // line 56
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
                    echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t";
                if (($context["U_PRINT_TOPIC"] ?? null)) {
                    // line 61
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                    // line 62
                    echo ($context["U_PRINT_TOPIC"] ?? null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRINT_TOPIC");
                    echo "\" accesskey=\"p\">
\t\t\t\t\t\t\t<i class=\"icon fa-print fa-fw\" aria-hidden=\"true\"></i><span>";
                    // line 63
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRINT_TOPIC");
                    echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t\t";
                // line 68
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 68,  226 => 67,  219 => 63,  213 => 62,  210 => 61,  207 => 60,  200 => 56,  194 => 55,  191 => 54,  188 => 53,  181 => 49,  175 => 48,  172 => 47,  169 => 46,  162 => 42,  154 => 41,  151 => 40,  148 => 39,  135 => 35,  119 => 34,  116 => 33,  113 => 32,  112 => 31,  100 => 22,  93 => 21,  91 => 20,  88 => 19,  82 => 16,  75 => 15,  72 => 14,  66 => 11,  59 => 10,  57 => 9,  54 => 8,  44 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_topic_tools.html", "");
    }
}
