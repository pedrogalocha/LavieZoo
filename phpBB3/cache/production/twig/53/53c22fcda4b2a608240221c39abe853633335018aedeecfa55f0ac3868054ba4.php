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

/* overall_footer.html */
class __TwigTemplate_aa5fb171b0ba919d132c09eb5015d0c2a3bfc27726a4f9596a31b09d9d25a1ee extends \Twig\Template
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
        echo "\t\t";
        // line 2
        echo "\t\t
\t\t";
        // line 3
        // line 4
        echo "\t</div>

\t<div class=\"inventea-footer-wrapper\">
\t\t<div id=\"page-footer\" class=\"inventea-footer\" role=\"contentinfo\">
\t\t\t";
        // line 8
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "
\t\t\t<footer class=\"inventea-credits\">
\t\t\t\t";
        // line 11
        // line 12
        echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-copyright\">";
        // line 13
        echo ($context["CREDIT_LINE"] ?? null);
        echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        // line 15
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 16
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-copyright\">";
            // line 17
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-copyright\">Style <a href=\"https://phpbb.com/customise/db/style/we_universal\">we_universal</a>  created by INVENTEA & v12mike</span>
\t\t\t\t</p>
\t\t\t\t";
        // line 23
        // line 24
        echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<a class=\"footer-link\" href=\"";
        // line 25
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<span class=\"footer-link-text\">";
        // line 26
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t\t\t</a>

\t\t\t\t\t<a class=\"footer-link\" href=\"";
        // line 29
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<span class=\"footer-link-text\">";
        // line 30
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TERMS_LINK");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t\t";
        // line 33
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 34
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<span class=\"footer-info\">";
            // line 35
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 39
            echo "\t\t\t\t<p class=\"footer-row\">
\t\t\t\t\t<a class=\"footer-link text-strong\" href=\"";
            // line 40
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a>
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t</footer>
\t\t</div>
\t</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 47
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 51
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t\t<div class=\"alert_text\"></div>
\t</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 66
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 67
        echo "</div>
</div>

<script src=\"";
        // line 70
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 71
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 72
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>

";
        // line 74
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('2');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 75
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('2');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 76
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 77
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 82
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 89
        echo "
";
        // line 90
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 91
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\tif (typeof window.cookieconsent === \"object\") {
\t\twindow.addEventListener(\"load\", function(){
\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\"palette\": {
\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t},
\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\"content\": {
\t\t\t\t\t\"message\": \"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\"dismiss\": \"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\"link\": \"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\"href\": \"";
            // line 109
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t}
\t\t\t})
\t\t});
\t}
\t</script>
";
        }
        // line 116
        echo "
";
        // line 117
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 118
        echo "
";
        // line 119
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 119)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 120
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", []);
        echo "

";
        // line 122
        // line 123
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 123,  331 => 122,  326 => 120,  312 => 119,  309 => 118,  304 => 117,  301 => 116,  291 => 109,  287 => 108,  283 => 107,  279 => 106,  258 => 91,  256 => 90,  253 => 89,  243 => 82,  236 => 77,  234 => 76,  220 => 75,  206 => 74,  198 => 72,  190 => 71,  186 => 70,  181 => 67,  177 => 66,  157 => 51,  142 => 47,  136 => 43,  128 => 40,  125 => 39,  122 => 38,  116 => 35,  113 => 34,  111 => 33,  105 => 30,  99 => 29,  93 => 26,  87 => 25,  84 => 24,  83 => 23,  78 => 20,  72 => 17,  69 => 16,  67 => 15,  62 => 13,  59 => 12,  58 => 11,  54 => 9,  42 => 8,  36 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
