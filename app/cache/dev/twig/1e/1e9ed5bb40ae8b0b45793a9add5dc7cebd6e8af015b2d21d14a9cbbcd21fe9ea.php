<?php

/* AetCommunicationBundle:Communication:categoriesindex.html.twig */
class __TwigTemplate_1f0dd5542a0ab68c2a16ff518a03931781ce2de15a971944d8f470e30f2c8ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AetCommunicationBundle::communication.layout.html.twig", "AetCommunicationBundle:Communication:categoriesindex.html.twig", 3);
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
        $__internal_7b65379d22900ab325fe7bc2db85133b57c5813a0eb3fa95e0dcb28eef2126dd = $this->env->getExtension("native_profiler");
        $__internal_7b65379d22900ab325fe7bc2db85133b57c5813a0eb3fa95e0dcb28eef2126dd->enter($__internal_7b65379d22900ab325fe7bc2db85133b57c5813a0eb3fa95e0dcb28eef2126dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetCommunicationBundle:Communication:categoriesindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b65379d22900ab325fe7bc2db85133b57c5813a0eb3fa95e0dcb28eef2126dd->leave($__internal_7b65379d22900ab325fe7bc2db85133b57c5813a0eb3fa95e0dcb28eef2126dd_prof);

    }

    // line 6
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        $__internal_03745797d9cd99134fbbf073227677146927a4b709437ae195dc804732194720 = $this->env->getExtension("native_profiler");
        $__internal_03745797d9cd99134fbbf073227677146927a4b709437ae195dc804732194720->enter($__internal_03745797d9cd99134fbbf073227677146927a4b709437ae195dc804732194720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_communication_body"));

        // line 7
        echo "

    <div class=\"communication_category_filter\">
        ";
        // line 11
        echo "
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 15
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 19
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'label', array("label_attr" => array("class" => "col-xs-2 control-label"), "label" => "Catégories"));
        echo "

            ";
        // line 22
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'errors');
        echo "

            <div class=\"col-xs-5\">
                ";
        // line 26
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'widget', array("attr" => array("class" => "aet_categories")));
        echo "
            </div>
        </div>

        <div class=\"aet_communication_list_filter_submit\" style=\"text-align: center\">
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Filtrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

            <br/>
            <br/>
        </div>




        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


        ";
        // line 45
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
    <div>

        ";
        // line 50
        echo twig_include($this->env, $context, "AetCommunicationBundle:Communication:communicationlist.html.twig");
        echo "



    </div>

";
        
        $__internal_03745797d9cd99134fbbf073227677146927a4b709437ae195dc804732194720->leave($__internal_03745797d9cd99134fbbf073227677146927a4b709437ae195dc804732194720_prof);

    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:categoriesindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  101 => 45,  95 => 41,  82 => 32,  73 => 26,  66 => 22,  60 => 19,  53 => 15,  48 => 12,  45 => 11,  40 => 7,  34 => 6,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "AetCommunicationBundle::communication.layout.html.twig" %}*/
/* */
/* */
/* {% block aet_annuaire_communication_body %}*/
/* */
/* */
/*     <div class="communication_category_filter">*/
/*         {# {{ form(form) }} #}*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*         {# Les erreurs générales du formulaire. #}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             {# Génération du label. #}*/
/*             {{ form_label(form.categories, 'Catégories', {'label_attr': {'class': 'col-xs-2 control-label'}}) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(form.categories) }}*/
/* */
/*             <div class="col-xs-5">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.categories, {'attr': {'class': 'aet_categories'}}) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="aet_communication_list_filter_submit" style="text-align: center">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.Filtrer, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*             <br/>*/
/*             <br/>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/*         {{ form_rest(form) }}*/
/* */
/* */
/*         {# Fermeture de la balise <form> du formulaire HTML #}*/
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/*     <div>*/
/* */
/*         {{ include("AetCommunicationBundle:Communication:communicationlist.html.twig") }}*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
