<?php

/* AetAnnuaireBundle:Page:aetpage.view.html.twig */
class __TwigTemplate_fea4b96f36d15484cb8dab603f47b7af2790a3b0c2af431f533d663d44018b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::master.html.twig", "AetAnnuaireBundle:Page:aetpage.view.html.twig", 2);
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
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetannuaire/css/aetpage.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "
        <div class=\"aet_page_edition_Button\">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_page_edit", array("urlId" => $this->getAttribute((isset($context["AetPage"]) ? $context["AetPage"] : null), "urlId", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier
            </a>
        </div>

    ";
        }
        // line 18
        echo "
    <!--
    <header>

        <h1 class=\"title2\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["AetPage"]) ? $context["AetPage"] : null), "title", array()), "html", null, true);
        echo "</h1>
    </header>-->

    <div class=\"aet-Page\" >
        ";
        // line 26
        echo $this->getAttribute((isset($context["AetPage"]) ? $context["AetPage"] : null), "content", array());
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "AetAnnuaireBundle:Page:aetpage.view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  61 => 22,  55 => 18,  45 => 11,  41 => 9,  39 => 8,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
