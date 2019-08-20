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

/* overall_header.html */
class __TwigTemplate_a0be3ee15639b06947337be88b67c26dc54ffb096adbd10be9554be0fb2ba2ce extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: we_universal
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:      nextgen ( http://xeronix.org/ )
\tModified by:      v12mike ( v12mike@ingenious.co.nz )
-->

";
        // line 33
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 34
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 49
        echo "
<link href=\"";
        // line 50
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/stylesheet.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 51
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 52
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 53
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/responsive.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 54
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/responsive.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 55
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/custom.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 57
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 58
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/prosilver/theme/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 60
        echo "
";
        // line 61
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 62
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/prosilver/theme/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 64
        echo "
";
        // line 65
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 66
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 68
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 70
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 73
        // line 74
        echo "
";
        // line 75
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", []);
        echo "

";
        // line 77
        // line 78
        echo "
<!--[if lt IE 9]>
\t<script src=\"";
        // line 80
        echo ($context["T_TEMPLATE_PATH"] ?? null);
        echo "/html5shiv.min.js\"></script>
<![endif]-->

</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 84
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " logged-in";
        } else {
            echo " logged-out";
        }
        echo "\">

";
        // line 86
        // line 87
        echo "
<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>

\t<div class=\"inventea-headerbar\">
\t\t<nav class=\"inventea-wrapper inventea-userbar\">
\t\t\t";
        // line 93
        $location = "navbar_responsive_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_responsive_header.html", "overall_header.html", 93)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 94
        echo "

\t\t\t<ul class=\"linklist bulletin inventea-user-menu\" role=\"menubar\">
\t\t\t\t";
        // line 97
        // line 98
        echo "\t\t\t\t";
        // line 99
        echo "\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 100
            echo "\t\t\t\t\t";
            // line 101
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t\t";
            // line 102
            // line 103
            echo "\t\t\t\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t\t\t\t<a href=\"";
            // line 104
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 108
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 110
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 111
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 116
            // line 117
            echo "
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 119
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 120
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            // line 123
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 125
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 126
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 130
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 131
            // line 132
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 135
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 136
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 143
            // line 144
            echo "\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t";
            // line 147
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 148
                echo "\t\t\t\t\t\t<li class=\"small-icon rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a id=\"pm-disp\" href=\"";
                // line 149
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 150
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
                echo " </span><strong class=\"badge";
                if ( !($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 155
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 156
                echo "\t\t\t\t\t\t<li class=\"small-icon dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-last-responsive=\"true\">
\t\t\t\t\t\t\t<a id=\"notif-disp\" href=\"";
                // line 157
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 158
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo " </span><strong class=\"badge";
                if ( !($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 160
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "overall_header.html", 160)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 161
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 164
            // line 165
            echo "\t\t\t\t\t
\t\t\t\t";
        } else {
            // line 167
            echo "\t\t\t\t\t\t<li class=\"small-icon rightside\" data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"icon fa-fw fa-sign-in\" aria-hidden=\"true\"></i>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 168
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 169
                echo "\t\t\t\t\t\t<li class=\"small-icon rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"icon fa-fw fa-user-plus\" aria-hidden=\"true\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 172
            // line 173
            echo "\t\t\t\t\t
\t\t\t\t";
        }
        // line 175
        echo "\t\t\t</ul>
\t\t</nav>
\t</div>

\t\t<div class=\"inventea-header\">
\t\t\t<header>
\t\t";
        // line 181
        echo "\t
\t\t\t";
        // line 182
        // line 183
        echo "\t\t\t<nav>
\t\t\t<div class=\"inventea-posts-menu\">
\t\t\t\t<ul class=\"inventea-menu\" role=\"menubar\">
\t\t\t\t\t";
        // line 186
        // line 187
        echo "\t\t\t\t\t";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 188
            echo "\t\t\t\t\t";
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 189
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 190
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</a>
\t\t\t\t\t</li>";
            }
            // line 192
            echo "\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 193
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 194
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</a>
\t\t\t\t\t</li>";
            }
            // line 196
            echo "\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 197
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 198
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</a>
\t\t\t\t\t</li>";
            }
            // line 200
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 201
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 204
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 207
        echo "\t\t\t\t\t";
        // line 208
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"inventea-dashboard\" role=\"banner\">
\t\t\t\t";
        // line 212
        // line 213
        echo "\t\t\t\t<a href=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        }
        echo "\" style=\"position: absolute; left: 0%; top: 20%; width: 100%; height: 60%;\">
\t\t\t\t\t<div class=\"inventea-sitename\">
\t\t\t\t\t\t<h1>";
        // line 215
        echo ($context["SITENAME"] ?? null);
        echo "</h1>
\t\t\t\t\t\t<span>";
        // line 216
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t";
        // line 219
        // line 220
        echo "\t\t\t\t";
        // line 221
        echo "\t\t\t\t<img class=\"inventea-dashboard-image\" src=\"";
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/we_universal/theme/images/dashboard.jpg?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" alt=\"forum header image\">
\t\t\t\t";
        // line 222
        // line 223
        echo "\t\t\t</div>

\t\t\t<nav>
\t\t\t\t<div class=\"inventea-forum-menu\">
\t\t\t\t\t<ul class=\"inventea-menu\" role=\"menubar\">
\t\t\t\t\t\t";
        // line 228
        // line 229
        echo "\t\t\t\t\t\t<li id=\"button_faq\">
\t\t\t\t\t\t\t<a href=\"";
        // line 230
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 232
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 233
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 234
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</a>
\t\t\t\t\t\t</li>";
        }
        // line 236
        echo "\t\t\t\t\t\t";
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 237
            echo "\t\t\t\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 238
                echo "\t\t\t\t\t\t<li id=\"button_memberlist\">
\t\t\t\t\t\t\t<a href=\"";
                // line 239
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</a>
\t\t\t\t\t\t</li>";
            }
            // line 241
            echo "\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 242
                echo "\t\t\t\t\t\t<li id=\"button_team\">
\t\t\t\t\t\t\t<a href=\"";
                // line 243
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</a>
\t\t\t\t\t\t</li>";
            }
            // line 245
            echo "\t\t\t\t\t\t";
        }
        // line 246
        echo "\t\t\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 247
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 248
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
            echo "</a>
\t\t\t\t\t\t</li>";
        }
        // line 250
        echo "\t\t\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 251
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 252
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
            echo "</a>
\t\t\t\t\t\t</li>";
        }
        // line 254
        echo "\t\t\t\t\t\t";
        // line 255
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t";
        // line 258
        // line 259
        echo "\t\t</header>
\t</div>

\t<div class=\"inventea-wrapper inventea-content\" role=\"main\">
\t\t";
        // line 263
        // line 264
        echo "
\t\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t\t";
        // line 266
        if (($context["S_INDEX"] ?? null)) {
            // line 267
            echo "\t\t\t\t<li class=\"rightside inventea-time\">";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo ($context["LAST_VISIT_DATE"] ?? null);
            } else {
                echo ($context["CURRENT_TIME"] ?? null);
            }
            echo "</li>
\t\t\t";
        }
        // line 269
        echo "
\t\t\t";
        // line 270
        $value = " itemtype=\"http://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        $context['definition']->set('MICRODATA', $value);
        // line 271
        echo "\t\t\t";
        $context["navlink_position"] = 1;
        echo "\t\t\t
\t\t\t";
        // line 272
        // line 273
        echo "\t\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t\t";
        // line 274
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 275
            echo "\t\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
        }
        // line 277
        echo "\t\t\t\t";
        // line 278
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>\t\t\t\t\t
\t\t\t\t";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", []));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 280
            echo "\t\t\t\t\t";
            // line 281
            echo "\t\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            if ($this->getAttribute($context["navlinks"], "MICRODATA", [])) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", []);
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", []);
            echo "\" itemtype=\"https://schema.org/Thing\" itemprop=\"item\"><span itemprop=\"name\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", []);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t\t";
            // line 282
            // line 283
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "\t\t\t\t";
        // line 285
        echo "\t\t\t</li>
\t\t\t";
        // line 286
        // line 287
        echo "\t\t</ul>

\t\t";
        // line 289
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 290
            echo "\t\t\t<div id=\"information\" class=\"rules\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<strong>";
            // line 292
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 296
        echo "
\t\t";
        // line 297
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  923 => 297,  920 => 296,  910 => 292,  906 => 290,  904 => 289,  900 => 287,  899 => 286,  896 => 285,  894 => 284,  888 => 283,  887 => 282,  871 => 281,  869 => 280,  865 => 279,  849 => 278,  847 => 277,  834 => 275,  832 => 274,  829 => 273,  828 => 272,  823 => 271,  820 => 270,  817 => 269,  807 => 267,  805 => 266,  801 => 264,  800 => 263,  794 => 259,  793 => 258,  788 => 255,  786 => 254,  777 => 252,  774 => 251,  771 => 250,  762 => 248,  759 => 247,  756 => 246,  753 => 245,  746 => 243,  743 => 242,  740 => 241,  733 => 239,  730 => 238,  727 => 237,  724 => 236,  717 => 234,  714 => 233,  712 => 232,  703 => 230,  700 => 229,  699 => 228,  692 => 223,  691 => 222,  684 => 221,  682 => 220,  681 => 219,  675 => 216,  671 => 215,  655 => 213,  654 => 212,  648 => 208,  646 => 207,  638 => 204,  630 => 201,  627 => 200,  620 => 198,  617 => 197,  614 => 196,  607 => 194,  604 => 193,  601 => 192,  594 => 190,  591 => 189,  588 => 188,  585 => 187,  584 => 186,  579 => 183,  578 => 182,  575 => 181,  567 => 175,  563 => 173,  562 => 172,  559 => 171,  551 => 169,  549 => 168,  540 => 167,  536 => 165,  535 => 164,  532 => 163,  528 => 161,  516 => 160,  505 => 158,  501 => 157,  496 => 156,  494 => 155,  491 => 154,  478 => 150,  474 => 149,  471 => 148,  469 => 147,  464 => 144,  463 => 143,  453 => 136,  447 => 135,  442 => 132,  441 => 131,  438 => 130,  431 => 126,  425 => 125,  422 => 124,  420 => 123,  414 => 120,  408 => 119,  404 => 117,  403 => 116,  400 => 115,  393 => 111,  389 => 110,  386 => 109,  384 => 108,  367 => 104,  364 => 103,  363 => 102,  356 => 101,  354 => 100,  351 => 99,  349 => 98,  348 => 97,  343 => 94,  331 => 93,  323 => 87,  322 => 86,  308 => 84,  301 => 80,  297 => 78,  296 => 77,  291 => 75,  288 => 74,  287 => 73,  279 => 70,  275 => 68,  267 => 66,  265 => 65,  262 => 64,  254 => 62,  252 => 61,  249 => 60,  241 => 58,  239 => 57,  232 => 55,  226 => 54,  220 => 53,  214 => 52,  208 => 51,  202 => 50,  199 => 49,  182 => 34,  180 => 33,  169 => 24,  163 => 22,  161 => 21,  158 => 20,  155 => 18,  142 => 17,  129 => 16,  118 => 15,  107 => 14,  96 => 13,  85 => 12,  74 => 11,  72 => 10,  47 => 8,  43 => 7,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
