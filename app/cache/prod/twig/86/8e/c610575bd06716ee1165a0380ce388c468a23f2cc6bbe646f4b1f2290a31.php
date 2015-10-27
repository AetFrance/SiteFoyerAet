<?php

/* AetAnnuaireBundle:Registration:email.html.twig */
class __TwigTemplate_868ec610575bd06716ee1165a0380ce388c468a23f2cc6bbe646f4b1f2290a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
    ";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
    ";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AetAnnuaireBundle:Registration:email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  47 => 9,  45 => 8,  42 => 7,  35 => 4,  33 => 3,  30 => 2,  26 => 12,  24 => 7,  22 => 2,);
    }
}
