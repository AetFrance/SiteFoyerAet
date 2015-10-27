<?php

/* AetCommunicationBundle:Communication:index.html.twig */
class __TwigTemplate_12e7404f81005ad769801f320b9a404913aa08c2ee3136d5a2195d0d29662f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AetCommunicationBundle::communication.layout.html.twig", "AetCommunicationBundle:Communication:index.html.twig", 3);
        $this->blocks = array(
            'aet_annuaire_communication_body' => array($this, 'block_aet_annuaire_communication_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AetCommunicationBundle::communication.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div>

    ";
        // line 10
        echo twig_include($this->env, $context, "AetCommunicationBundle:Communication:communicationlist.html.twig");
        echo "




    ";
        // line 31
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 31,  36 => 10,  31 => 7,  28 => 6,  11 => 3,);
    }
}
