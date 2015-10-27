<?php

/* AetCommunicationBundle::communication.layout.html.twig */
class __TwigTemplate_0b86096a073e7d18066003f95deeba27dd81d3728fabc17f8edac400a0396bd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::master.html.twig", "AetCommunicationBundle::communication.layout.html.twig", 1);
        $this->blocks = array(
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
            'aet_annuaire_communication_body' => array($this, 'block_aet_annuaire_communication_body'),
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

    // line 5
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 9
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetcommunication/css/communication.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <div class=\"communication_space_wrapper\">

        <div class=\"communication-space-header\">
            ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AetCommunicationBundle:Communication:communicationSearch"));
        echo "

            <h1 class=\"title2\">Communauté </h1>
        </div>

        <div class=\"communication_top_nav\">
            <span class=\"communication_top_nav_tab\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_index");
        echo "\">Toutes les communications</a>
                </span>

            <span class=\"communication_top_nav_tab\">
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_categories_index");
        echo "\">Par catégorie</a>
                </span>

            ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                <span class=\"communication_top_nav_tab\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_add");
            echo "\">Ajouter une communication</a></span>
            ";
        }
        // line 33
        echo "        </div>

        ";
        // line 35
        $this->displayBlock('aet_annuaire_communication_body', $context, $blocks);
        // line 37
        echo "
    </div>
";
    }

    // line 35
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        // line 36
        echo "        ";
    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle::communication.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  90 => 35,  84 => 37,  82 => 35,  78 => 33,  72 => 31,  70 => 30,  64 => 27,  57 => 23,  47 => 16,  39 => 11,  35 => 9,  32 => 6,  29 => 5,  11 => 1,);
    }
}
