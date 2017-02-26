<?php

/* FOSCommentBundle:Thread:comment_new.html.twig */
class __TwigTemplate_48a1d9b246a34cdb44c756480065d5f103caac820b7dba2f484c0e3cf0ddc74a extends Twig_Template
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
        $__internal_eb02a20ba094c0ae2b6de78889d794811b5f9d0cc4e231cb3356eddc27fabe24 = $this->env->getExtension("native_profiler");
        $__internal_eb02a20ba094c0ae2b6de78889d794811b5f9d0cc4e231cb3356eddc27fabe24->enter($__internal_eb02a20ba094c0ae2b6de78889d794811b5f9d0cc4e231cb3356eddc27fabe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_new.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("FOSCommentBundle:Thread:comment_new_content.html.twig", "FOSCommentBundle:Thread:comment_new.html.twig", 12)->display($context);
        
        $__internal_eb02a20ba094c0ae2b6de78889d794811b5f9d0cc4e231cb3356eddc27fabe24->leave($__internal_eb02a20ba094c0ae2b6de78889d794811b5f9d0cc4e231cb3356eddc27fabe24_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {% include "FOSCommentBundle:Thread:comment_new_content.html.twig" %}*/
/* */
