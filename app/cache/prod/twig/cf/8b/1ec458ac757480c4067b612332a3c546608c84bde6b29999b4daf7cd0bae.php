<?php

/* AetAnnuaireBundle::layout1.html.twig */
class __TwigTemplate_cf8b1ec458ac757480c4067b612332a3c546608c84bde6b29999b4daf7cd0bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::master.html.twig", "AetAnnuaireBundle::layout1.html.twig", 1);
        $this->blocks = array(
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <h1 class=\"title2\">Bienvenue sur l'Annuaire Web des AET !</h1>
    <br/>
    <br/>
   <h3> <p><strong>Veuillez vous identifier pour accéder au contenu du site</strong></p></h3>


";
    }

    public function getTemplateName()
    {
        return "AetAnnuaireBundle::layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }
}
