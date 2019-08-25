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

/* viewforum_body.html */
class __TwigTemplate_96f8b41c515f9387e123d41bdffd6389cd218de2f3a7b31faf4681639675ba1b extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 6
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 8
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none !important;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 9
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 14
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 29
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 30
                echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
                // line 31
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" class=\"mark-read rightside\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t</div>
";
            }
            // line 34
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 36
        echo "
";
        // line 37
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 38
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 40
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 41
                echo "\t\t";
                // line 42
                echo "
\t\t<a href=\"";
                // line 43
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 44
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 45
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 47
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 49
                echo "\t\t</a>
\t\t";
                // line 50
                if (($context["U_WATCH_FORUM_LINK"] ?? null)) {
                    // line 51
                    echo "\t\t\t<a href=\"";
                    echo ($context["U_WATCH_FORUM_LINK"] ?? null);
                    echo "\" class=\"button\" title=\"";
                    echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                    echo "\">
\t\t\t\t<span>";
                    // line 52
                    echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                    echo "</span> 
\t\t\t\t<i class=\"icon fa-";
                    // line 53
                    if (($context["S_WATCHING_FORUM"] ?? null)) {
                        echo "check-";
                    }
                    echo "square-o fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t";
                }
                // line 56
                echo "\t";
                // line 57
                echo "\t";
            }
            // line 58
            echo "
\t";
            // line 59
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 60
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 61
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 63
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 64
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 65
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 67
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 68
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t\t";
                // line 70
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 75
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 77
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 78
            echo "\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t";
            // line 79
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 80
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 80)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 81
                echo "\t\t";
            } else {
                // line 82
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 84
            echo "\t</div>

\t</div>
";
        }
        // line 88
        echo "
";
        // line 89
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 90
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 93
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 97
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 98
                echo "
\t\t<form action=\"";
                // line 99
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 105
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 109
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 110
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 113
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 115
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 116
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 120
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 122
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t";
                // line 123
                echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 133
            echo "
";
        }
        // line 135
        echo "
";
        // line 136
        // line 137
        echo "
";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 139
            echo "
\t";
            // line 140
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", []))) {
                // line 141
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 145
            echo "
\t";
            // line 146
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", []) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []))) {
                // line 147
                echo "\t\t<div class=\"forumbg";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", []) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt";
                // line 152
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", []) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])))) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 153
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 154
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"inventea topiclist topics\">
\t";
            }
            // line 160
            echo "
\t\t";
            // line 161
            // line 162
            echo "\t\t<li class=\"row";
            if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", []) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", [])) {
                echo " announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", [])) {
                echo " sticky";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                echo " reported";
            }
            echo "\">
\t\t\t";
            // line 163
            // line 164
            echo "\t\t\t<dl title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", []);
            echo "\">
\t\t\t\t<dt class=\"row-item ";
            // line 165
            echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", []);
            echo "\">";
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", []) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo "<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", []);
                echo "\" alt=\"\" title=\"\" />";
            }
            echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t";
            // line 167
            if (( !$this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" class=\"row-item-link\"></a>";
            }
            // line 168
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                echo "\" class=\"row-item-link\"></a>";
            }
            // line 169
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 170
            // line 171
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", [])) {
                // line 172
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", []);
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", []);
                echo "</a>
\t\t\t\t\t\t";
            } else {
                // line 174
                echo "\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", []);
                echo "
\t\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", []) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", []))) {
                // line 177
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", []);
                echo "\" title=\"";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", [])) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED");
                }
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 178
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", [])) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED");
                }
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", [])) {
                // line 182
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 183
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 186
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                // line 187
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 188
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 193
            // line 194
            echo "
\t\t\t\t\t\t";
            // line 195
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 196
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 197
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 198
                if ($this->getAttribute($context["topicrow"], "REPLIES", [])) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
                    echo " &raquo; <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", []) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", [])))) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "FORUM_NAME", []);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 204
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                // line 205
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                echo $this->getAttribute($context["topicrow"], "REPLIES", []);
                echo "</strong></span>
\t\t\t\t\t\t";
            }
            // line 207
            echo "
\t\t\t\t\t\t<div class=\"topic-poster responsive-hide left-box\">
\t\t\t\t\t\t\t";
            // line 209
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", [])) {
                echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 210
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", [])) {
                echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
            }
            // line 211
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", []);
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", []);
            echo "
\t\t\t\t\t\t\t";
            // line 212
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", []) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", [])))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", []);
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", []);
                echo "</a>";
            }
            // line 213
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 215
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", []))) {
                // line 216
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 219
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 220
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", [])) {
                        // line 221
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", [])) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 222
$context["pagination"], "S_IS_ELLIPSIS", [])) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 223
$context["pagination"], "S_IS_NEXT", [])) {
                        // line 224
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a class=\"button\" href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 226
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 230
            echo "
\t\t\t\t\t\t";
            // line 231
            // line 232
            echo "\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"posts\">
\t\t\t\t\t";
            // line 235
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo $this->getAttribute($context["topicrow"], "REPLIES", []);
            echo "</strong><br />
\t\t\t\t\t";
            // line 236
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo $this->getAttribute($context["topicrow"], "VIEWS", []);
            echo "</strong>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t<span><dfn>";
            // line 239
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
            // line 240
            echo "\t\t\t\t\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && $this->getAttribute($context["topicrow"], "U_LAST_POST", []))) {
                // line 241
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 242
                echo ($context["VIEW_LATEST_POST"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t\t\t<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
            echo "
\t\t\t\t\t</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 249
            // line 250
            echo "\t\t</li>
\t\t";
            // line 251
            // line 252
            echo "
\t";
            // line 253
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", [])) {
                // line 254
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 258
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 260
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 261
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 263
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            } elseif ( !            // line 266
($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 267
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 269
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS_IN_CATEGORY");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "
";
        // line 275
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 276
            echo "\t<div class=\"action-bar bar-bottom\">
\t\t";
            // line 277
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 278
                echo "\t\t\t
\t\t\t";
                // line 279
                // line 280
                echo "
\t\t\t<a href=\"";
                // line 281
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t";
                // line 282
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 283
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                    echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                } else {
                    // line 285
                    echo "\t\t\t\t<span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                    echo "</span> <i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                }
                // line 287
                echo "\t\t\t</a>
\t\t\t";
                // line 288
                if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                    // line 289
                    echo "\t\t\t\t<a href=\"";
                    echo ($context["U_WATCH_FORUM_LINK"] ?? null);
                    echo "\" class=\"button\" title=\"";
                    echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                    echo "\" id=\"forum_watch_button\">
\t\t\t\t\t<span>";
                    // line 290
                    echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                    echo "</span>
\t\t\t\t\t<i class=\"icon fa-";
                    // line 291
                    if (($context["S_WATCHING_FORUM"] ?? null)) {
                        echo "check-";
                    }
                    echo "square-o fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t</a>
\t\t\t";
                }
                // line 294
                echo "
\t\t\t";
                // line 295
                // line 296
                echo "\t\t";
            }
            // line 297
            echo "
\t\t";
            // line 298
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 299
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["S_FORUM_ACTION"] ?? null);
                echo "\">
\t\t\t";
                // line 300
                $location = "display_options.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("display_options.html", "viewforum_body.html", 300)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 301
                echo "\t\t\t</form>
\t\t";
            }
            // line 303
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 305
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 306
            echo "\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 307
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 308
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 308)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 309
                echo "\t\t\t";
            } else {
                // line 310
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 312
            echo "\t\t</div>
\t</div>
";
        }
        // line 315
        echo "
";
        // line 316
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 316)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 317
        echo "
";
        // line 318
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 319
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 320
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 321
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 324
        echo "
";
        // line 325
        if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
            // line 326
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 327
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", []));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo $this->getAttribute($context["rules"], "RULE", []);
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 331
        echo "
";
        // line 332
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 332)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1090 => 332,  1087 => 331,  1073 => 328,  1069 => 327,  1066 => 326,  1064 => 325,  1061 => 324,  1055 => 321,  1049 => 320,  1046 => 319,  1044 => 318,  1041 => 317,  1029 => 316,  1026 => 315,  1021 => 312,  1015 => 310,  1012 => 309,  999 => 308,  997 => 307,  992 => 306,  984 => 305,  980 => 303,  976 => 301,  964 => 300,  959 => 299,  957 => 298,  954 => 297,  951 => 296,  950 => 295,  947 => 294,  939 => 291,  935 => 290,  928 => 289,  926 => 288,  923 => 287,  917 => 285,  911 => 283,  909 => 282,  899 => 281,  896 => 280,  895 => 279,  892 => 278,  890 => 277,  887 => 276,  885 => 275,  882 => 274,  871 => 269,  867 => 267,  865 => 266,  859 => 263,  855 => 261,  852 => 260,  846 => 258,  840 => 254,  838 => 253,  835 => 252,  834 => 251,  831 => 250,  830 => 249,  822 => 245,  816 => 242,  809 => 241,  806 => 240,  800 => 239,  791 => 236,  784 => 235,  779 => 232,  778 => 231,  775 => 230,  770 => 227,  764 => 226,  754 => 224,  752 => 223,  746 => 222,  739 => 221,  736 => 220,  732 => 219,  727 => 216,  725 => 215,  721 => 213,  711 => 212,  702 => 211,  697 => 210,  693 => 209,  689 => 207,  681 => 205,  678 => 204,  666 => 202,  663 => 201,  647 => 199,  645 => 198,  633 => 197,  630 => 196,  628 => 195,  625 => 194,  624 => 193,  620 => 191,  614 => 188,  607 => 187,  604 => 186,  598 => 183,  591 => 182,  588 => 181,  578 => 178,  567 => 177,  564 => 176,  558 => 174,  550 => 172,  547 => 171,  546 => 170,  543 => 169,  536 => 168,  530 => 167,  518 => 165,  513 => 164,  512 => 163,  491 => 162,  490 => 161,  487 => 160,  478 => 154,  474 => 153,  460 => 152,  449 => 147,  447 => 146,  444 => 145,  438 => 141,  436 => 140,  433 => 139,  428 => 138,  425 => 137,  424 => 136,  421 => 135,  417 => 133,  404 => 123,  400 => 122,  395 => 120,  387 => 116,  381 => 115,  375 => 113,  369 => 110,  364 => 109,  347 => 105,  338 => 99,  335 => 98,  333 => 97,  326 => 93,  321 => 90,  319 => 89,  316 => 88,  310 => 84,  304 => 82,  301 => 81,  288 => 80,  286 => 79,  281 => 78,  273 => 77,  269 => 75,  261 => 70,  256 => 68,  250 => 67,  245 => 65,  241 => 64,  237 => 63,  232 => 61,  229 => 60,  227 => 59,  224 => 58,  221 => 57,  219 => 56,  211 => 53,  207 => 52,  200 => 51,  198 => 50,  195 => 49,  189 => 47,  183 => 45,  181 => 44,  171 => 43,  168 => 42,  166 => 41,  164 => 40,  160 => 38,  158 => 37,  155 => 36,  141 => 34,  133 => 31,  130 => 30,  128 => 29,  126 => 28,  123 => 27,  117 => 23,  112 => 21,  107 => 20,  99 => 18,  97 => 17,  88 => 14,  86 => 13,  83 => 12,  79 => 10,  65 => 9,  59 => 8,  55 => 6,  53 => 5,  52 => 4,  43 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewforum_body.html", "");
    }
}
