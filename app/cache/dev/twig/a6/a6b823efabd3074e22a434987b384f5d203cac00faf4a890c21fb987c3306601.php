<?php

/* FOSCommentBundle:Thread:comment.html.twig */
class __TwigTemplate_15b9469827686a0ec84d92374b11cac74a3dfefc62bc87454038cad831adce19 extends Twig_Template
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
        $__internal_4cf3f9d329de72a4701668389d0752b41671dda939cb2bbe5ab86848bf5a07bf = $this->env->getExtension("native_profiler");
        $__internal_4cf3f9d329de72a4701668389d0752b41671dda939cb2bbe5ab86848bf5a07bf->enter($__internal_4cf3f9d329de72a4701668389d0752b41671dda939cb2bbe5ab86848bf5a07bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "tree")) : ("tree"));
        // line 13
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")), 0)) : (0));
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("FOSCommentBundle:Thread:comment_content.html.twig", "FOSCommentBundle:Thread:comment.html.twig", 15)->display($context);
        
        $__internal_4cf3f9d329de72a4701668389d0752b41671dda939cb2bbe5ab86848bf5a07bf->leave($__internal_4cf3f9d329de72a4701668389d0752b41671dda939cb2bbe5ab86848bf5a07bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 15,  29 => 14,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% set view = view|default('tree') %}*/
/* {% set depth = depth|default(0) %}*/
/* */
/* {% include "FOSCommentBundle:Thread:comment_content.html.twig" %}*/
/* */
