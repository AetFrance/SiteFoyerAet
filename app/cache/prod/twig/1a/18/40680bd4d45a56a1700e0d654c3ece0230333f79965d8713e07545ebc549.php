<?php

/* AetCommunicationBundle:Communication:searchBox.html.twig */
class __TwigTemplate_1a1840680bd4d45a56a1700e0d654c3ece0230333f79965d8713e07545ebc549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'button_widget' => array($this, 'block_button_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchForm"]) ? $context["searchForm"] : null), array(0 => $this));
        // line 2
        echo "
<div style=\"display: none\">
    ";
        // line 4
        $this->displayBlock('button_widget', $context, $blocks);
        // line 12
        echo "
</div>

<div class=\"aet-communication-search-box\" > ";
        // line 16
        echo "




    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 24
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'errors');
        echo "
    <div class=\"col-xs-6\" >
        ";
        // line 27
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "searchText", array()), 'widget', array("attr" => array("class" => "aet-communication-search-textbox")));
        echo "
    </div>
        <span class=\"aet-communication-search-submit\" >
            ";
        // line 31
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "search", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </span>
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'rest');
        echo "


    ";
        // line 37
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'form_end');
        echo "
</div>";
    }

    // line 4
    public function block_button_widget($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        ob_start();
        // line 6
        echo "            ";
        // line 9
        echo "            <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo "><span class=\"btn-label\"><i class=\"glyphicon glyphicon-search\"></i></span></button>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 11
        echo "    ";
    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:searchBox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  86 => 9,  84 => 6,  81 => 5,  78 => 4,  71 => 37,  65 => 33,  59 => 31,  52 => 27,  46 => 24,  41 => 21,  34 => 16,  29 => 12,  27 => 4,  23 => 2,  20 => 1,);
    }
}
