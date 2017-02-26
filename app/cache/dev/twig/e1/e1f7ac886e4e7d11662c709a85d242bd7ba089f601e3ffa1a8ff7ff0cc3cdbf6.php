<?php

/* AetCommunicationBundle:Communication:searchBox.html.twig */
class __TwigTemplate_27f12f2fc80a32efb0b1a313c1d0382cd95d9a0106c5148a31fc051d26bee133 extends Twig_Template
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
        $__internal_08ccbd987bfb829ddc844acd7c732350471c4707913b02d30706b4060153c673 = $this->env->getExtension("native_profiler");
        $__internal_08ccbd987bfb829ddc844acd7c732350471c4707913b02d30706b4060153c673->enter($__internal_08ccbd987bfb829ddc844acd7c732350471c4707913b02d30706b4060153c673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetCommunicationBundle:Communication:searchBox.html.twig"));

        // line 1
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), array(0 => $this));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 24
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'errors');
        echo "
    <div class=\"col-xs-6\" >
        ";
        // line 27
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "searchText", array()), 'widget', array("attr" => array("class" => "aet-communication-search-textbox")));
        echo "
    </div>
        <span class=\"aet-communication-search-submit\" >
            ";
        // line 31
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "search", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </span>
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'rest');
        echo "


    ";
        // line 37
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'form_end');
        echo "
</div>";
        
        $__internal_08ccbd987bfb829ddc844acd7c732350471c4707913b02d30706b4060153c673->leave($__internal_08ccbd987bfb829ddc844acd7c732350471c4707913b02d30706b4060153c673_prof);

    }

    // line 4
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_dd271b706ae2ad3253e75c1872bb0b2df6eb13ea365687e433498118b2229bb8 = $this->env->getExtension("native_profiler");
        $__internal_dd271b706ae2ad3253e75c1872bb0b2df6eb13ea365687e433498118b2229bb8->enter($__internal_dd271b706ae2ad3253e75c1872bb0b2df6eb13ea365687e433498118b2229bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 5
        echo "        ";
        ob_start();
        // line 6
        echo "            ";
        // line 9
        echo "            <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo "><span class=\"btn-label\"><i class=\"glyphicon glyphicon-search\"></i></span></button>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 11
        echo "    ";
        
        $__internal_dd271b706ae2ad3253e75c1872bb0b2df6eb13ea365687e433498118b2229bb8->leave($__internal_dd271b706ae2ad3253e75c1872bb0b2df6eb13ea365687e433498118b2229bb8_prof);

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
        return array (  103 => 11,  95 => 9,  93 => 6,  90 => 5,  84 => 4,  74 => 37,  68 => 33,  62 => 31,  55 => 27,  49 => 24,  44 => 21,  37 => 16,  32 => 12,  30 => 4,  26 => 2,  23 => 1,);
    }
}
/*     {% form_theme searchForm _self %}*/
/* */
/* <div style="display: none">*/
/*     {% block button_widget %}*/
/*         {% spaceless %}*/
/*             {#% if label is empty %}*/
/*                 {% set label = name|humanize %}*/
/*             {% endif %#}*/
/*             <button type="{{ type|default('button') }}" {{ block('button_attributes') }}><span class="btn-label"><i class="glyphicon glyphicon-search"></i></span></button>*/
/*         {% endspaceless %}*/
/*     {% endblock button_widget %}*/
/* */
/* </div>*/
/* */
/* <div class="aet-communication-search-box" > {#{ form(searchForm) }#}*/
/* */
/* */
/* */
/* */
/* */
/*     {{ form_start(searchForm, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(searchForm) }}*/
/*     <div class="col-xs-6" >*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(searchForm.searchText, {'attr': {'class': 'aet-communication-search-textbox'}}) }}*/
/*     </div>*/
/*         <span class="aet-communication-search-submit" >*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(searchForm.search, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*         </span>*/
/*     {{ form_rest(searchForm) }}*/
/* */
/* */
/*     {# Fermeture de la balise <form> du formulaire HTML #}*/
/*     {{ form_end(searchForm) }}*/
/* </div>*/
