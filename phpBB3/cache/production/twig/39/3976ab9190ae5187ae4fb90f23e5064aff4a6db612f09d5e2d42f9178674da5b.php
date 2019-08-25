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

/* navbar_footer.html */
class __TwigTemplate_b71893c04a6fe442dbb14fea28094bca816b7f427125b667bffd5772fd403006 extends \Twig\Template
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
        echo "<nav>
\t<ul id=\"nav-footer\" class=\"nav-footer linklist\" role=\"menubar\">
\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 4
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 5
            echo "\t\t\t\t";
            ob_start();
            // line 6
            echo "\t\t\t\t<span class=\"crumb\">
\t\t\t\t\t<a href=\"";
            // line 7
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">
\t\t\t\t\t\t<span>";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "\t\t\t";
        }
        // line 13
        echo "\t\t\t";
        // line 14
        echo "\t\t\t";
        ob_start();
        // line 15
        echo "\t\t\t<span class=\"crumb\">
\t\t\t\t<a href=\"";
        // line 16
        echo ($context["U_INDEX"] ?? null);
        echo "\" data-navbar-reference=\"index\">
\t\t\t\t\t<span>";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span>
\t\t\t\t</a>
\t\t\t</span>
\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 21
        echo "\t\t\t";
        // line 22
        echo "\t\t</li>

\t\t";
        // line 24
        if (($context["U_ACP"] ?? null)) {
            // line 25
            echo "\t\t\t<li class=\"small-icon\" data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 26
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "</a>
\t\t\t</li>
\t\t";
        }
        // line 29
        echo "\t\t";
        if ((($context["U_CONTACT_US"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 30
            echo "\t\t\t<li class=\"small-icon\" data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 31
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US");
            echo "</a>
\t\t\t</li>
\t\t";
        }
        // line 34
        echo "
\t\t";
        // line 35
        // line 36
        echo "\t\t";
        // line 37
        echo "
\t\t";
        // line 38
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 39
            echo "\t\t\t<li class=\"small-icon\">
\t\t\t\t<a href=\"";
            // line 40
            echo ($context["U_DELETE_COOKIES"] ?? null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_COOKIES");
            echo "</a>
\t\t\t</li>
\t\t";
        }
        // line 43
        echo "
\t\t";
        // line 44
        // line 45
        echo "\t\t<li>";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t\t";
        // line 46
        // line 47
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  142 => 46,  137 => 45,  136 => 44,  133 => 43,  125 => 40,  122 => 39,  120 => 38,  117 => 37,  115 => 36,  114 => 35,  111 => 34,  103 => 31,  100 => 30,  97 => 29,  87 => 26,  84 => 25,  82 => 24,  78 => 22,  76 => 21,  69 => 17,  65 => 16,  62 => 15,  59 => 14,  57 => 13,  54 => 12,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_footer.html", "");
    }
}
