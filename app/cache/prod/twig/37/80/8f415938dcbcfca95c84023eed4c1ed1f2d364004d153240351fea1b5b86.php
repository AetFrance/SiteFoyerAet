<?php

/* FOSCommentBundle:Thread:comment_new.html.twig */
class __TwigTemplate_37808f415938dcbcfca95c84023eed4c1ed1f2d364004d153240351fea1b5b86 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        $this->loadTemplate("FOSCommentBundle:Thread:comment_new_content.html.twig", "FOSCommentBundle:Thread:comment_new.html.twig", 12)->display($context);
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
        return array (  22 => 12,  19 => 11,);
    }
}
