<?php

/* AetCommunicationBundle:Communication:form.html.twig */
class __TwigTemplate_e727f13db0738ba3689dd75df942972af87512f6c0815948e94be812a2ee7bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64dbb0bcc30e01ee3a92d70b8d70cd65e980a5d3eb588506b83c51d55c6fba0 = $this->env->getExtension("native_profiler");
        $__internal_e64dbb0bcc30e01ee3a92d70b8d70cd65e980a5d3eb588506b83c51d55c6fba0->enter($__internal_e64dbb0bcc30e01ee3a92d70b8d70cd65e980a5d3eb588506b83c51d55c6fba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetCommunicationBundle:Communication:form.html.twig"));

        // line 2
        echo "

";
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aetcommunication/css/communicationForm.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<div class=\"well\">
    ";
        // line 9
        echo "
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 13
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">
        ";
        // line 17
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Titre de la communication"));
        echo "

        ";
        // line 20
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 24
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 30
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDesc", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Courte description de la communication"));
        echo "

        ";
        // line 33
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDesc", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 37
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDesc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 43
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Image de la communication"));
        echo "

        ";
        // line 46
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "

        <div class=\"col-xs-5 communication_form_image_wrapper\">

            ";
        // line 50
        if (((isset($context["communicationEditMode"]) ? $context["communicationEditMode"] : $this->getContext($context, "communicationEditMode")) == true)) {
            // line 51
            echo "                <div class=\"communication_edit_form_image_wrapper\">
                    <div class=\"communication_view_user_image\">
                        ";
            // line 56
            echo "                        <img
                                src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
                                alt=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
                                />

                    </div>
                    <div class=\"communication_view_user_image_edit_message aet_form_field_description\">Image actuelle de la communication</div>
                </div>
            ";
        }
        // line 65
        echo "
            ";
        // line 67
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'widget', array("simple_col" => 8));
        echo "
            <span class=\"aet_form_field_description\">Télécharger une image pour la communication</span>

            ";
        // line 70
        if (((isset($context["communicationEditMode"]) ? $context["communicationEditMode"] : $this->getContext($context, "communicationEditMode")) == "True")) {
            // line 71
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "resetImage", array()), 'widget', array("attr" => array("class" => "aet_reset_image_box")));
            echo "
                <span class=\"aet_form_field_description\">Supprimer l'image de la communication</span>
            ";
        }
        // line 74
        echo "
        </div>

    </div>

    <div class=\"form-group\">
        ";
        // line 81
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Contenu de la communication"));
        echo "

        ";
        // line 84
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'errors');
        echo "

        <div class=\"col-xs-8 communication-body-edit\">
            ";
        // line 88
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 94
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Catégories de la communication"));
        echo "

        ";
        // line 97
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'errors');
        echo "

        <div class=\"col-xs-4\">
            ";
        // line 101
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 106
        echo "    <div class=\"aet_communication_submit\" >
    ";
        // line 108
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    </div>





    ";
        // line 116
        echo "    ";
        // line 123
        echo "
    ";
        // line 127
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


    ";
        // line 131
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        // line 139
        echo "</div>";
        
        $__internal_e64dbb0bcc30e01ee3a92d70b8d70cd65e980a5d3eb588506b83c51d55c6fba0->leave($__internal_e64dbb0bcc30e01ee3a92d70b8d70cd65e980a5d3eb588506b83c51d55c6fba0_prof);

    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 139,  224 => 131,  217 => 127,  214 => 123,  212 => 116,  201 => 108,  198 => 106,  190 => 101,  183 => 97,  177 => 94,  168 => 88,  161 => 84,  155 => 81,  147 => 74,  140 => 71,  138 => 70,  131 => 67,  128 => 65,  118 => 58,  114 => 57,  111 => 56,  107 => 51,  105 => 50,  97 => 46,  91 => 43,  82 => 37,  75 => 33,  69 => 30,  60 => 24,  53 => 20,  47 => 17,  40 => 13,  35 => 10,  32 => 9,  26 => 6,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
/* */
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <link rel="stylesheet" href="{{ asset('bundles/aetcommunication/css/communicationForm.css') }}" type="text/css" media="all" />*/
/* <div class="well">*/
/*     {# {{ form(form) }} #}*/
/* */
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.title, 'Titre de la communication', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.title) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.shortDesc, 'Courte description de la communication', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.shortDesc) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.shortDesc, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.image, 'Image de la communication', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.image) }}*/
/* */
/*         <div class="col-xs-5 communication_form_image_wrapper">*/
/* */
/*             {% if communicationEditMode == true %}*/
/*                 <div class="communication_edit_form_image_wrapper">*/
/*                     <div class="communication_view_user_image">*/
/*                         {#{% image '@AetCommunicationBundle/Resources/public/images/defaultAvatar.jpg' %}*/
/*                              <img src="{{ asset_url }}" alt="{{ communication.user }}"/>*/
/*                          {% endimage %}	#}*/
/*                         <img*/
/*                                 src="{{ asset(communication.image.webPath) }}"*/
/*                                 alt="{{ communication.image.alt }}"*/
/*                                 />*/
/* */
/*                     </div>*/
/*                     <div class="communication_view_user_image_edit_message aet_form_field_description">Image actuelle de la communication</div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.image.file, {'simple_col': 8}) }}*/
/*             <span class="aet_form_field_description">Télécharger une image pour la communication</span>*/
/* */
/*             {% if communicationEditMode == "True" %}*/
/*                 {{ form_widget(form.image.resetImage, {'attr': {'class': 'aet_reset_image_box'}}) }}*/
/*                 <span class="aet_form_field_description">Supprimer l'image de la communication</span>*/
/*             {% endif %}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.body, 'Contenu de la communication', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.body) }}*/
/* */
/*         <div class="col-xs-8 communication-body-edit">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.body, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.categories, 'Catégories de la communication', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.categories) }}*/
/* */
/*         <div class="col-xs-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.categories, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {#<div class="col-xs-4"> #}*/
/*     <div class="aet_communication_submit" >*/
/*     {# Génération de l'input. #}*/
/*         {{ form_widget(form.Enregistrer, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/*     {# Idem pour le champ 'category'. #}*/
/*     {#<div class="form-group">*/
/*         {{ form_label(form.categories, "Categories de la communication", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*         {{ form_errors(form.categories) }}*/
/*         <div class="col-sm-4">*/
/*             {{ form_widget(form.categories, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>#}*/
/* */
/*     {# Génération automatique des champs pas encore écrits.*/
/*      Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*      et tous les champs cachés (type « hidden »). #}*/
/*     {{ form_rest(form) }}*/
/* */
/* */
/*     {# Fermeture de la balise <form> du formulaire HTML #}*/
/*     {{ form_end(form) }}*/
/* */
/*     {#<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>*/
/* 	<script type="text/javascript">*/
/* 	tinymce.init({*/
/* 		selector: "textarea"*/
/* 	 });*/
/* 	</script> #}*/
/* </div>*/
