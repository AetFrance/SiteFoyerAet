<?php

/* FOSCommentBundle:Thread:comments.html.twig */
class __TwigTemplate_0ffb791e77f7636a94db1ae1d6159e22e628d2223d0c6b850c333e2e893ba970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25ce549d5c169e9983e40d70e31fa613255abc3c69057eba2c558987d6d27bcc = $this->env->getExtension("native_profiler");
        $__internal_25ce549d5c169e9983e40d70e31fa613255abc3c69057eba2c558987d6d27bcc->enter($__internal_25ce549d5c169e9983e40d70e31fa613255abc3c69057eba2c558987d6d27bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comments.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")), 0)) : (0));
        // line 13
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "tree")) : ("tree"));
        // line 14
        echo "
";
        // line 15
        if (((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) == 0)) {
            // line 16
            echo "    ";
            if ($this->env->getExtension('fos_comment')->canCommentThread((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")))) {
                // line 17
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()))));
                echo "
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            if ($this->env->getExtension('fos_comment')->canEditThread((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")))) {
                // line 21
                echo "    <div class=\"fos_comment_thread_commentable\">
        <button data-url=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_edit_thread_commentable", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()), "value" =>  !$this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "commentable", array()))), "html", null, true);
                echo "\" class=\"fos_comment_thread_commentable_action\">
            ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "commentable", array())) ? ("fos_comment_thread_close") : ("fos_comment_thread_open")), array(), "FOSCommentBundle"), "html", null, true);
                echo "
        </button>
    </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            $context["count"] = $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "numComments", array());
            // line 29
            echo "    <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("fos_comment_thread_comment_count", (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), array("%count%" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))), "FOSCommentBundle");
            echo "</h3>
";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["commentinfo"]) {
            // line 33
            echo "    ";
            $this->loadTemplate("FOSCommentBundle:Thread:comment.html.twig", "FOSCommentBundle:Thread:comments.html.twig", 33)->display(array_merge($context, array("children" => $this->getAttribute($context["commentinfo"], "children", array()), "comment" => $this->getAttribute($context["commentinfo"], "comment", array()), "depth" => (isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")), "view" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentinfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_25ce549d5c169e9983e40d70e31fa613255abc3c69057eba2c558987d6d27bcc->leave($__internal_25ce549d5c169e9983e40d70e31fa613255abc3c69057eba2c558987d6d27bcc_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  76 => 32,  73 => 31,  67 => 29,  65 => 28,  62 => 27,  55 => 23,  51 => 22,  48 => 21,  46 => 20,  43 => 19,  37 => 17,  34 => 16,  32 => 15,  29 => 14,  27 => 13,  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/*  This file is part of the FOSCommentBundle package.*/
/* */
/*  (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>*/
/* */
/*  This source file is subject to the MIT license that is bundled*/
/*  with this source code in the file LICENSE.*/
/* */
/* #}*/
/* */
/* {% set depth = depth|default(0) %}*/
/* {% set view = view|default('tree') %}*/
/* */
/* {% if depth == 0 %}*/
/*     {% if fos_comment_can_comment_thread(thread) %}*/
/*         {{ render(url('fos_comment_new_thread_comments', {"id": thread.id})) }}*/
/*     {% endif %}*/
/* */
/*     {% if fos_comment_can_edit_thread(thread) %}*/
/*     <div class="fos_comment_thread_commentable">*/
/*         <button data-url="{{ url('fos_comment_edit_thread_commentable', {'id': thread.id, 'value': not thread.commentable}) }}" class="fos_comment_thread_commentable_action">*/
/*             {{ (thread.commentable ? 'fos_comment_thread_close' : 'fos_comment_thread_open') | trans({}, 'FOSCommentBundle') }}*/
/*         </button>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% set count = thread.numComments %}*/
/*     <h3>{% transchoice count with {'%count%': count} from "FOSCommentBundle" %}fos_comment_thread_comment_count{% endtranschoice %}</h3>*/
/* {% endif %}*/
/* */
/* {% for commentinfo in comments %}*/
/*     {% include "FOSCommentBundle:Thread:comment.html.twig" with { "children": commentinfo.children, "comment": commentinfo.comment, "depth": depth, "view": view } %}*/
/* {% endfor %}*/
/* */
