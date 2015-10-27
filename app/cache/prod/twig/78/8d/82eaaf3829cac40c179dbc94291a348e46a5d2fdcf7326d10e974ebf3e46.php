<?php

/* AetCommunicationBundle:Communication:edit.html.twig */
class __TwigTemplate_788d82eaaf3829cac40c179dbc94291a348e46a5d2fdcf7326d10e974ebf3e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AetCommunicationBundle::communication.layout.html.twig", "AetCommunicationBundle:Communication:edit.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetcommunication/css/communicationEdit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <h2>Modifier une communication</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "AetCommunicationBundle:Communication:form.html.twig");
        echo "

    <p>
        Vous êtes en train de modifier une communication
    </p>

    ";
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 21,  39 => 9,  31 => 5,  28 => 4,  11 => 1,);
    }
}
