<?php

/* AetAnnuaireBundle:Page:aetprofile.edit.html.twig */
class __TwigTemplate_8b0a9223cc6505b0efec09d3f3d42580d8ccc26ada1c247f1b102eb5b675dc18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AetAnnuaireBundle::layout1.html.twig", "AetAnnuaireBundle:Page:aetprofile.edit.html.twig", 1);
        $this->blocks = array(
            'aet_annuaire_banner_title' => array($this, 'block_aet_annuaire_banner_title'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'aet_annuaire_sub_body' => array($this, 'block_aet_annuaire_sub_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AetAnnuaireBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c32a177ad0ce211b4e8c87a141fc4641a20636381bad103466737b69c22b0a50 = $this->env->getExtension("native_profiler");
        $__internal_c32a177ad0ce211b4e8c87a141fc4641a20636381bad103466737b69c22b0a50->enter($__internal_c32a177ad0ce211b4e8c87a141fc4641a20636381bad103466737b69c22b0a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetAnnuaireBundle:Page:aetprofile.edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32a177ad0ce211b4e8c87a141fc4641a20636381bad103466737b69c22b0a50->leave($__internal_c32a177ad0ce211b4e8c87a141fc4641a20636381bad103466737b69c22b0a50_prof);

    }

    // line 2
    public function block_aet_annuaire_banner_title($context, array $blocks = array())
    {
        $__internal_877da42567c3bb8f15e34f58cb2ececfd70f8f9cc8fd706fc690ac92246adaf9 = $this->env->getExtension("native_profiler");
        $__internal_877da42567c3bb8f15e34f58cb2ececfd70f8f9cc8fd706fc690ac92246adaf9->enter($__internal_877da42567c3bb8f15e34f58cb2ececfd70f8f9cc8fd706fc690ac92246adaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_banner_title"));

        // line 3
        echo "     &Eacute;dition profil
 ";
        
        $__internal_877da42567c3bb8f15e34f58cb2ececfd70f8f9cc8fd706fc690ac92246adaf9->leave($__internal_877da42567c3bb8f15e34f58cb2ececfd70f8f9cc8fd706fc690ac92246adaf9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f40a36768726cb407852f5c57e1fd2fc4aa5df414fe3415bca93804ea630b63 = $this->env->getExtension("native_profiler");
        $__internal_5f40a36768726cb407852f5c57e1fd2fc4aa5df414fe3415bca93804ea630b63->enter($__internal_5f40a36768726cb407852f5c57e1fd2fc4aa5df414fe3415bca93804ea630b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edition profil";
        
        $__internal_5f40a36768726cb407852f5c57e1fd2fc4aa5df414fe3415bca93804ea630b63->leave($__internal_5f40a36768726cb407852f5c57e1fd2fc4aa5df414fe3415bca93804ea630b63_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_45ba7caf7d954ea3c0e121099b41bbf56d6c6bf8093a76a3b3226e1bb5be709f = $this->env->getExtension("native_profiler");
        $__internal_45ba7caf7d954ea3c0e121099b41bbf56d6c6bf8093a76a3b3226e1bb5be709f->enter($__internal_45ba7caf7d954ea3c0e121099b41bbf56d6c6bf8093a76a3b3226e1bb5be709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 11
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_45ba7caf7d954ea3c0e121099b41bbf56d6c6bf8093a76a3b3226e1bb5be709f->leave($__internal_45ba7caf7d954ea3c0e121099b41bbf56d6c6bf8093a76a3b3226e1bb5be709f_prof);

    }

    // line 14
    public function block_aet_annuaire_sub_body($context, array $blocks = array())
    {
        $__internal_fa4d3d1757a56c145a94406b83b0479d241839704c1878c9e013338f8f6fcecb = $this->env->getExtension("native_profiler");
        $__internal_fa4d3d1757a56c145a94406b83b0479d241839704c1878c9e013338f8f6fcecb->enter($__internal_fa4d3d1757a56c145a94406b83b0479d241839704c1878c9e013338f8f6fcecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_sub_body"));

        // line 15
        echo "

<!--
<header>
    <h1 class=\"title2\">Edition profil</h1>
</header>-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aetannuaire/css/aetprofileedit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

<div class=\"well\">
    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-stacked")));
        echo "

    ";
        // line 27
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group clearfix\">
        ";
        // line 31
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Prénom"));
        echo "

        ";
        // line 34
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 38
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>


    <div class=\"form-group\">
        ";
        // line 45
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Nom"));
        echo "

        ";
        // line 48
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 52
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 57
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Photo"));
        echo "

        ";
        // line 60
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            <div class=\"user_image_wrapper\" >
                <div class=\"user_image\" >

                    <img
                            src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "image", array()), "webPath", array())), "html", null, true);
        echo "\"
                            alt=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "image", array()), "alt", array()), "html", null, true);
        echo "\"
                            />


                </div>
                <div class=\"user_profile_image_edit_message aet_form_field_description\">Photo de profil actuelle</div>

                ";
        // line 76
        echo "
                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'widget', array("simple_col" => 8));
        echo "

                <span class=\"aet_form_field_description\">Modifier votre photo de profil</span>

                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "resetImage", array()), 'widget', array("attr" => array("class" => "aet_reset_image_box")));
        echo "
                <span class=\"aet_form_field_description\">Supprimer votre photo de profil</span>

            </div>
        </div>
    </div>
    <div class=\"form-group\">

            ";
        // line 90
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Matricule"));
        echo "

            ";
        // line 93
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'errors');
        echo "

            <div class=\"col-xs-5\">
                ";
        // line 97
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
        ";
        // line 102
        echo "       ";
        // line 105
        echo "            ";
        // line 109
        echo "            ";
        // line 113
        echo "        ";
        // line 114
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Ville"));
        echo "

        ";
        // line 117
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 121
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 126
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code_postale", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Code Postal"));
        echo "

        ";
        // line 129
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code_postale", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 133
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code_postale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 138
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Pays"));
        echo "

        ";
        // line 141
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 145
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 150
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Téléphone"));
        echo "

        ";
        // line 153
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 157
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 162
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Login"));
        echo "

        ";
        // line 165
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 169
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 174
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Email"));
        echo "

        ";
        // line 177
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 181
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    ";
        // line 200
        echo "    <div class=\"form-group\">
        ";
        // line 202
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promotion", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Promotion AET"));
        echo "

        ";
        // line 205
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promotion", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 209
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promotion", array()), 'widget', array("simple_col" => 4));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 214
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activite_principale", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Activité Principale"));
        echo "

        ";
        // line 217
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activite_principale", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 221
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activite_principale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 226
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "whoami", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Description Personnelle"));
        echo "

        ";
        // line 229
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "whoami", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 233
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "whoami", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>



    <div class=\"aetregistration_submit\"><input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />  </div>
    ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 242
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>

";
        
        $__internal_fa4d3d1757a56c145a94406b83b0479d241839704c1878c9e013338f8f6fcecb->leave($__internal_fa4d3d1757a56c145a94406b83b0479d241839704c1878c9e013338f8f6fcecb_prof);

    }

    public function getTemplateName()
    {
        return "AetAnnuaireBundle:Page:aetprofile.edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 242,  430 => 240,  419 => 233,  412 => 229,  406 => 226,  398 => 221,  391 => 217,  385 => 214,  377 => 209,  370 => 205,  364 => 202,  361 => 200,  354 => 181,  347 => 177,  341 => 174,  333 => 169,  326 => 165,  320 => 162,  312 => 157,  305 => 153,  299 => 150,  291 => 145,  284 => 141,  278 => 138,  270 => 133,  263 => 129,  257 => 126,  249 => 121,  242 => 117,  236 => 114,  234 => 113,  232 => 109,  230 => 105,  228 => 102,  220 => 97,  213 => 93,  207 => 90,  196 => 81,  189 => 77,  186 => 76,  176 => 68,  172 => 67,  161 => 60,  155 => 57,  147 => 52,  140 => 48,  134 => 45,  124 => 38,  117 => 34,  111 => 31,  104 => 27,  99 => 24,  93 => 21,  85 => 15,  79 => 14,  69 => 11,  63 => 10,  51 => 8,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "AetAnnuaireBundle::layout1.html.twig" %}*/
/*  {% block aet_annuaire_banner_title %}*/
/*      &Eacute;dition profil*/
/*  {% endblock %}*/
/* */
/* */
/* */
/* {% block title %}Edition profil{% endblock%}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block aet_annuaire_sub_body  %}*/
/* */
/* */
/* <!--*/
/* <header>*/
/*     <h1 class="title2">Edition profil</h1>*/
/* </header>-->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/aetannuaire/css/aetprofileedit.css') }}" type="text/css" media="all" />*/
/* */
/* <div class="well">*/
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal form-stacked'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="form-group clearfix">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.firstname, 'Prénom', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.firstname) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.lastname, 'Nom', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.lastname) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.lastname, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.image, 'Photo', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.image) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             <div class="user_image_wrapper" >*/
/*                 <div class="user_image" >*/
/* */
/*                     <img*/
/*                             src="{{ asset(aetUser.image.webPath) }}"*/
/*                             alt="{{ aetUser.image.alt }}"*/
/*                             />*/
/* */
/* */
/*                 </div>*/
/*                 <div class="user_profile_image_edit_message aet_form_field_description">Photo de profil actuelle</div>*/
/* */
/*                 {# Génération de l'input. #}*/
/* */
/*                 {{ form_widget(form.image.file, {'simple_col': 8}) }}*/
/* */
/*                 <span class="aet_form_field_description">Modifier votre photo de profil</span>*/
/* */
/*                 {{ form_widget(form.image.resetImage, {'attr': {'class': 'aet_reset_image_box'}}) }}*/
/*                 <span class="aet_form_field_description">Supprimer votre photo de profil</span>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/* */
/*             {# Génération du label. #}*/
/*             {{ form_label(form.matricule, 'Matricule', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(form.matricule) }}*/
/* */
/*             <div class="col-xs-5">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.matricule, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*         {# Génération du label. #}*/
/*        {# {{ form_label(form.date_naissance, 'Date de Naissance', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*             {# {{ form_errors(form.date_naissance) }}*/
/* */
/*              <div class="col-xs-5">*/
/*                  {# Génération de l'input. #}*/
/*             {#      {{ form_widget(form.date_naissance, { 'simple_col': 4 })  }}*/
/*               </div>*/
/*           </div>*/
/*           <div class="form-group">#}*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.ville, 'Ville', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.ville) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.code_postale, 'Code Postal', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.code_postale) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.code_postale, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.pays, 'Pays', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.pays) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.pays, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.telephone, 'Téléphone', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.telephone) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.username, 'Login', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.username) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.email, 'Email', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.email) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     {#*/
/*     <div class="form-group">*/
/*         {{ form_errors(form.plainPassword.first) }}*/
/*         {{ form_label(form.plainPassword.first, 'Mot de passe', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/*         <div class="col-xs-5">*/
/*             {{ form_widget(form.plainPassword.first) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_errors(form.plainPassword.second) }}*/
/*         {{ form_label(form.plainPassword.second,  'Confirmez le Mot de passe', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/*         <div class="col-xs-5">*/
/*             {{ form_widget(form.plainPassword.second) }}*/
/*         </div>*/
/*     </div>*/
/*     #}*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.promotion, 'Promotion AET', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.promotion) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.promotion, { 'simple_col': 4 }) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.activite_principale, 'Activité Principale', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.activite_principale) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.activite_principale, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(form.whoami, 'Description Personnelle', {'label_attr': {'class': 'col-xs-3 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(form.whoami) }}*/
/* */
/*         <div class="col-xs-5">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(form.whoami, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     <div class="aetregistration_submit"><input type="submit" value="Enregistrer" class="btn btn-primary" />  </div>*/
/*     {{ form_rest(form) }}*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
