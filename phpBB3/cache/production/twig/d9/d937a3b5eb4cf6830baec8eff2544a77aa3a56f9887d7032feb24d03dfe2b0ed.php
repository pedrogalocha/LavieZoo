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

/* navbar_responsive_header.html */
class __TwigTemplate_8982004c1cf09a60ba163263113c804abcfa2e7650e6fba57b04ee826cc2a4c9 extends \Twig\Template
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
        echo "<div class=\"dropdown-container hidden inventea-mobile-dropdown-menu\">
\t<a href=\"#\" class=\"dropdown-trigger inventea-toggle\"><i class=\"icon fa fa-bars\"></i></a>
\t<div class=\"dropdown hidden\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<ul class=\"dropdown-contents\" role=\"menubar\">

\t\t";
        // line 7
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 8
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 9
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa fa-fw fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\t<span>";
            // line 11
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 15
        echo "
\t\t<li>
\t\t\t<a href=\"";
        // line 17
        echo ($context["U_INDEX"] ?? null);
        echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa fa-fw ";
        // line 18
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "fa-globe";
        } else {
            echo "fa-home";
        }
        echo "\" aria-hidden=\"true\"></i>
\t\t\t\t<span>";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span>
\t\t\t</a>
\t\t</li>\t\t
\t\t";
        // line 22
        // line 23
        echo "
\t\t<li ";
        // line 24
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t<a id=\"menu_faq\" href=\"";
        // line 25
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 26
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 29
        // line 30
        echo "
\t\t";
        // line 31
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 32
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 33
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t";
            // line 38
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 39
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 40
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 41
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 45
            echo "
\t\t\t";
            // line 46
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 47
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 48
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 49
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 53
            echo "
\t\t\t";
            // line 54
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 55
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 56
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 60
            echo "\t

\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 63
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 68
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 69
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"separator\"></li>
\t\t";
        }
        // line 74
        echo "
\t\t";
        // line 75
        // line 76
        echo "
\t\t";
        // line 77
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 78
            echo "\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 79
                echo "\t\t\t\t<li id=\"menu_memberlist\">
\t\t\t\t\t<a href=\"";
                // line 80
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 81
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 85
            echo "\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 86
                echo "\t\t\t\t<li id=\"menu_team\">
\t\t\t\t\t<a href=\"";
                // line 87
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 88
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 92
            echo "\t\t";
        }
        // line 93
        echo "
\t\t";
        // line 94
        if (($context["U_ACP"] ?? null)) {
            // line 95
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 96
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 97
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 101
        echo "\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 102
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 103
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 104
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 108
        echo "            ";
        // line 109
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_responsive_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 109,  289 => 108,  282 => 104,  276 => 103,  273 => 102,  270 => 101,  263 => 97,  257 => 96,  254 => 95,  252 => 94,  249 => 93,  246 => 92,  239 => 88,  235 => 87,  232 => 86,  229 => 85,  222 => 81,  218 => 80,  215 => 79,  212 => 78,  210 => 77,  207 => 76,  206 => 75,  203 => 74,  195 => 69,  191 => 68,  184 => 64,  180 => 63,  175 => 60,  168 => 57,  164 => 56,  161 => 55,  159 => 54,  156 => 53,  149 => 49,  145 => 48,  142 => 47,  140 => 46,  137 => 45,  130 => 41,  126 => 40,  123 => 39,  121 => 38,  114 => 34,  110 => 33,  107 => 32,  105 => 31,  102 => 30,  101 => 29,  95 => 26,  89 => 25,  81 => 24,  78 => 23,  77 => 22,  71 => 19,  63 => 18,  59 => 17,  55 => 15,  48 => 11,  43 => 9,  40 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_responsive_header.html", "");
    }
}
