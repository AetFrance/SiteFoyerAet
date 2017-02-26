<?php

/* FOSCommentBundle:Thread:comment_new_content.html.twig */
class __TwigTemplate_97303d814ce1f1e22b05a2256c7294216e34bd3f49668c9cc427bc0eca741c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment_form_holder' => array($this, 'block_fos_comment_comment_form_holder'),
            'fos_comment_form_title' => array($this, 'block_fos_comment_form_title'),
            'fos_comment_comment_new_form' => array($this, 'block_fos_comment_comment_new_form'),
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d53dbafb7bc512ebcb39543629b28bdff05343721f1ea0e8fb6b6c97de3f11e6 = $this->env->getExtension("native_profiler");
        $__internal_d53dbafb7bc512ebcb39543629b28bdff05343721f1ea0e8fb6b6c97de3f11e6->enter($__internal_d53dbafb7bc512ebcb39543629b28bdff05343721f1ea0e8fb6b6c97de3f11e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new_content.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["first"] = ((array_key_exists("first", $context)) ? (_twig_default_filter((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), false)) : (false));
        // line 13
        echo "
";
        // line 14
        $context["url_parameters"] = array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 15
        if ( !(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))) {
            // line 16
            echo "    ";
            $context["url_parameters"] = twig_array_merge((isset($context["url_parameters"]) ? $context["url_parameters"] : $this->getContext($context, "url_parameters")), array("parentId" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id", array())));
        }
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('fos_comment_comment_form_holder', $context, $blocks);
        
        $__internal_d53dbafb7bc512ebcb39543629b28bdff05343721f1ea0e8fb6b6c97de3f11e6->leave($__internal_d53dbafb7bc512ebcb39543629b28bdff05343721f1ea0e8fb6b6c97de3f11e6_prof);

    }

    public function block_fos_comment_comment_form_holder($context, array $blocks = array())
    {
        $__internal_19ef19b8076d4f33cea4434d3f4bc7884b0ea2b768f4c30cbc9b6ebe149d580b = $this->env->getExtension("native_profiler");
        $__internal_19ef19b8076d4f33cea4434d3f4bc7884b0ea2b768f4c30cbc9b6ebe149d580b->enter($__internal_19ef19b8076d4f33cea4434d3f4bc7884b0ea2b768f4c30cbc9b6ebe149d580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

        // line 20
        echo "    <div class=\"fos_comment_comment_form_holder\">
        ";
        // line 21
        $this->displayBlock('fos_comment_form_title', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('fos_comment_comment_new_form', $context, $blocks);
        // line 55
        echo "
    </div>
";
        
        $__internal_19ef19b8076d4f33cea4434d3f4bc7884b0ea2b768f4c30cbc9b6ebe149d580b->leave($__internal_19ef19b8076d4f33cea4434d3f4bc7884b0ea2b768f4c30cbc9b6ebe149d580b_prof);

    }

    // line 21
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        $__internal_00192b63958cf72a6278c7fc1e6857add0a84ee7ea4f6446b9e3a74a49b51800 = $this->env->getExtension("native_profiler");
        $__internal_00192b63958cf72a6278c7fc1e6857add0a84ee7ea4f6446b9e3a74a49b51800->enter($__internal_00192b63958cf72a6278c7fc1e6857add0a84ee7ea4f6446b9e3a74a49b51800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

        // line 22
        echo "            ";
        if ((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) {
            // line 23
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline_first", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        } elseif ( !(null ===         // line 24
(isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))) {
            // line 25
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_reply_to", array("%name%" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "authorName", array())), "FOSCommentBundle");
            echo "</h3>
            ";
        } else {
            // line 27
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        }
        // line 29
        echo "        ";
        
        $__internal_00192b63958cf72a6278c7fc1e6857add0a84ee7ea4f6446b9e3a74a49b51800->leave($__internal_00192b63958cf72a6278c7fc1e6857add0a84ee7ea4f6446b9e3a74a49b51800_prof);

    }

    // line 31
    public function block_fos_comment_comment_new_form($context, array $blocks = array())
    {
        $__internal_d2b89bc87e11cfa68e6d1c455403cc8b77a7bfa7da5fd2cd48fb3db2f0c6063e = $this->env->getExtension("native_profiler");
        $__internal_d2b89bc87e11cfa68e6d1c455403cc8b77a7bfa7da5fd2cd48fb3db2f0c6063e->enter($__internal_d2b89bc87e11cfa68e6d1c455403cc8b77a7bfa7da5fd2cd48fb3db2f0c6063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

        // line 32
        echo "            <form class=\"fos_comment_comment_new_form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_post_thread_comments", (isset($context["url_parameters"]) ? $context["url_parameters"] : $this->getContext($context, "url_parameters"))), "html", null, true);
        echo "\" data-parent=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array()))) : ("")), "html", null, true);
        echo "\" method=\"POST\">

                ";
        // line 34
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 43
        echo "
                <div class=\"fos_comment_submit\">
                    ";
        // line 45
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 51
        echo "                </div>

            </form>
        ";
        
        $__internal_d2b89bc87e11cfa68e6d1c455403cc8b77a7bfa7da5fd2cd48fb3db2f0c6063e->leave($__internal_d2b89bc87e11cfa68e6d1c455403cc8b77a7bfa7da5fd2cd48fb3db2f0c6063e_prof);

    }

    // line 34
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_0dbaafa603cb7ed30975162033189ef3571602c6d58a3992541025f11ceefee3 = $this->env->getExtension("native_profiler");
        $__internal_0dbaafa603cb7ed30975162033189ef3571602c6d58a3992541025f11ceefee3->enter($__internal_0dbaafa603cb7ed30975162033189ef3571602c6d58a3992541025f11ceefee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 35
        echo "                    <div class=\"fos_comment_form_errors\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "
                    </div>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget');
        echo "

                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
        
        $__internal_0dbaafa603cb7ed30975162033189ef3571602c6d58a3992541025f11ceefee3->leave($__internal_0dbaafa603cb7ed30975162033189ef3571602c6d58a3992541025f11ceefee3_prof);

    }

    // line 45
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_6263820ebf2393079615cb87dd606031dcc169ddad41e624ed0856a0ca4db912 = $this->env->getExtension("native_profiler");
        $__internal_6263820ebf2393079615cb87dd606031dcc169ddad41e624ed0856a0ca4db912->enter($__internal_6263820ebf2393079615cb87dd606031dcc169ddad41e624ed0856a0ca4db912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 46
        echo "                        ";
        if ( !(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))) {
            // line 47
            echo "                            <input type=\"button\" value=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_cancel", array(), "FOSCommentBundle");
            echo "\" class=\"fos_comment_comment_reply_cancel\" />
                        ";
        }
        // line 49
        echo "                        <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
                    ";
        
        $__internal_6263820ebf2393079615cb87dd606031dcc169ddad41e624ed0856a0ca4db912->leave($__internal_6263820ebf2393079615cb87dd606031dcc169ddad41e624ed0856a0ca4db912_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 49,  185 => 47,  182 => 46,  176 => 45,  167 => 41,  162 => 39,  157 => 37,  153 => 36,  150 => 35,  144 => 34,  134 => 51,  132 => 45,  128 => 43,  126 => 34,  118 => 32,  112 => 31,  105 => 29,  99 => 27,  93 => 25,  91 => 24,  86 => 23,  83 => 22,  77 => 21,  68 => 55,  66 => 31,  63 => 30,  61 => 21,  58 => 20,  46 => 19,  43 => 18,  39 => 16,  37 => 15,  35 => 14,  32 => 13,  30 => 12,  27 => 11,);
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
/* {% set first = first|default(false) %}*/
/* */
/* {% set url_parameters = {'id': id } %}*/
/* {% if parent is not null %}*/
/*     {% set url_parameters = url_parameters|merge({'parentId': parent.id}) %}*/
/* {% endif %}*/
/* */
/* {% block fos_comment_comment_form_holder %}*/
/*     <div class="fos_comment_comment_form_holder">*/
/*         {% block fos_comment_form_title %}*/
/*             {% if first %}*/
/*                 <h3>{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_headline_first{% endtrans %}</h3>*/
/*             {% elseif parent is not null %}*/
/*                 <h3>{% trans with {"%name%": parent.authorName } from 'FOSCommentBundle' %}fos_comment_comment_reply_reply_to{% endtrans %}</h3>*/
/*             {% else %}*/
/*                 <h3>{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_headline{% endtrans %}</h3>*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/*         {% block fos_comment_comment_new_form %}*/
/*             <form class="fos_comment_comment_new_form" action="{{ url('fos_comment_post_thread_comments', url_parameters) }}" data-parent="{{ parent.id|default() }}" method="POST">*/
/* */
/*                 {% block fos_comment_form_fields %}*/
/*                     <div class="fos_comment_form_errors">*/
/*                     {{ form_errors(form) }}*/
/*                     {{ form_errors(form.body) }}*/
/*                     </div>*/
/*                     {{ form_widget(form.body) }}*/
/* */
/*                     {{ form_rest(form) }}*/
/*                 {% endblock %}*/
/* */
/*                 <div class="fos_comment_submit">*/
/*                     {% block fos_comment_form_submit %}*/
/*                         {% if parent is not null %}*/
/*                             <input type="button" value="{% trans from 'FOSCommentBundle' %}fos_comment_comment_reply_cancel{% endtrans %}" class="fos_comment_comment_reply_cancel" />*/
/*                         {% endif %}*/
/*                         <input type="submit" value="{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_submit{% endtrans %}" />*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*             </form>*/
/*         {% endblock fos_comment_comment_new_form %}*/
/* */
/*     </div>*/
/* {% endblock fos_comment_comment_form_holder %}*/
/* */
