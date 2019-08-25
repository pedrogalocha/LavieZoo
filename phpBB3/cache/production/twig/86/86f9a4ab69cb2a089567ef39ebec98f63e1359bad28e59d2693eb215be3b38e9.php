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

/* forumlist_body.html */
class __TwigTemplate_e44354800868e6dd45a41c406722f8e233428d5cf4f619bd33723035d3f3459e extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forumrow", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", []) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", [])) || $this->getAttribute($context["forumrow"], "S_NO_CAT", []))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", []) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", [])) || $this->getAttribute($context["forumrow"], "S_NO_CAT", []))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                // line 17
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBFORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 19
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 20
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 22
                // line 23
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"inventea topiclist forums\">
\t";
            }
            // line 27
            echo "\t";
            // line 28
            echo "
\t";
            // line 29
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", [])) {
                // line 30
                echo "\t\t";
                // line 31
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 32
                // line 33
                echo "\t\t\t<dl title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", []);
                echo "\">
\t\t\t\t<dt class=\"row-item ";
                // line 34
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", []);
                echo "\"></dt>
\t\t\t\t<dd>
\t\t\t\t\t<a href=\"";
                // line 36
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                echo "\" class=\"row-item-link\"></a>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 38
                if ((($context["S_ENABLE_FEEDS"] ?? null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", []))) {
                    // line 39
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 40
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 41
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", [])) {
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                    // line 47
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", []);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 48
                    // line 49
                    echo "\t\t\t\t\t\t";
                }
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 50
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", [])) {
                    echo "<br />";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", []);
                }
                // line 51
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "MODERATORS", [])) {
                    // line 52
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", []);
                    echo "
\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", [])) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", []))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t";
                    // line 56
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t";
                        echo "<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", []);
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon ";
                        // line 59
                        if ($this->getAttribute($context["subforum"], "IS_LINK", [])) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo " icon-red";
                        } else {
                            echo " icon-blue";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", []);
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", [])) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "\t\t\t\t\t\t\t";
                    // line 62
                    echo "\t\t\t\t\t\t";
                }
                // line 63
                echo "
\t\t\t\t\t\t";
                // line 64
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 65
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 66
                    if ($this->getAttribute($context["forumrow"], "CLICKS", [])) {
                        // line 67
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", []);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 68
$context["forumrow"], "S_IS_LINK", []) && $this->getAttribute($context["forumrow"], "TOPICS", []))) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t\t";
                // line 75
                if ($this->getAttribute($context["forumrow"], "CLICKS", [])) {
                    // line 76
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", []);
                    echo "</strong></span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 77
$context["forumrow"], "S_IS_LINK", [])) {
                    // line 78
                    echo "\t\t\t\t\t<dd class=\"topics\">
\t\t\t\t\t\t";
                    // line 79
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                    echo "</strong><br />
\t\t\t\t\t\t";
                    // line 80
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["forumrow"], "POSTS", []);
                    echo "</strong>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 84
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", [])) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 86
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 88
$context["forumrow"], "U_UNAPPROVED_POSTS", [])) {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 90
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", [])) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 95
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", [])) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", []);
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", []);
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", []);
                        // line 100
                        echo "\t\t\t\t\t\t\t\t";
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            // line 101
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 102
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 105
                        echo "\t\t\t\t\t\t\t\t<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", []);
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 107
                        echo "\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", [])) {
                            // line 108
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED_FORUM", $this->getAttribute($context["forumrow"], "TOPICS", []));
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 110
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 112
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 113
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 116
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 118
                echo "\t\t\t</dl>
\t\t\t";
                // line 119
                // line 120
                echo "\t\t</li>
\t\t";
                // line 121
                // line 122
                echo "\t";
            }
            // line 123
            echo "
\t";
            // line 124
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", [])) {
                // line 125
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 129
                // line 130
                echo "\t";
            }
            // line 131
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 133
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 135
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 135,  450 => 133,  444 => 131,  441 => 130,  440 => 129,  434 => 125,  432 => 124,  429 => 123,  426 => 122,  425 => 121,  422 => 120,  421 => 119,  418 => 118,  414 => 116,  409 => 113,  406 => 112,  400 => 110,  394 => 108,  391 => 107,  385 => 105,  379 => 102,  372 => 101,  369 => 100,  364 => 99,  354 => 97,  352 => 96,  350 => 95,  345 => 94,  342 => 93,  336 => 90,  329 => 89,  327 => 88,  322 => 86,  315 => 85,  313 => 84,  303 => 80,  296 => 79,  293 => 78,  291 => 77,  283 => 76,  281 => 75,  277 => 73,  273 => 71,  264 => 69,  262 => 68,  254 => 67,  252 => 66,  249 => 65,  247 => 64,  244 => 63,  241 => 62,  239 => 61,  233 => 60,  215 => 59,  197 => 58,  193 => 57,  187 => 56,  185 => 55,  182 => 54,  173 => 52,  170 => 51,  165 => 50,  156 => 49,  155 => 48,  150 => 47,  148 => 46,  145 => 45,  136 => 41,  126 => 40,  123 => 39,  121 => 38,  116 => 36,  111 => 34,  106 => 33,  105 => 32,  102 => 31,  100 => 30,  98 => 29,  95 => 28,  93 => 27,  87 => 23,  86 => 22,  81 => 20,  77 => 19,  65 => 18,  62 => 17,  61 => 16,  55 => 12,  52 => 11,  51 => 10,  48 => 9,  41 => 4,  38 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
