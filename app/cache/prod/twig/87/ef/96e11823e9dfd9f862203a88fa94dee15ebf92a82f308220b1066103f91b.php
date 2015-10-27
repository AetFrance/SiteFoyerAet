<?php

/* AetCommunicationBundle:Communication:add.html.twig */
class __TwigTemplate_87ef96e11823e9dfd9f862203a88fa94dee15ebf92a82f308220b1066103f91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AetCommunicationBundle::communication.layout.html.twig", "AetCommunicationBundle:Communication:add.html.twig", 1);
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

    // line 4
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <h2>Créer une communication</h2>

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetcommunication/css/communicationEdit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    ";
        // line 10
        echo twig_include($this->env, $context, "AetCommunicationBundle:Communication:form.html.twig");
        echo "

    <p>
        Vous êtes en train de créer une communication
    </p>

    ";
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  41 => 10,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }
}
