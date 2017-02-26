<?php

/* AetAnnuaireBundle:Page:aetprofile.view.html.twig */
class __TwigTemplate_cb2d369142e01c7559ae9d31a10e0717026f3def185695613fffe4d6a97f6984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AetAnnuaireBundle::layout1.html.twig", "AetAnnuaireBundle:Page:aetprofile.view.html.twig", 1);
        $this->blocks = array(
            'aet_annuaire_banner_title' => array($this, 'block_aet_annuaire_banner_title'),
            'aet_annuaire_sub_body' => array($this, 'block_aet_annuaire_sub_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AetAnnuaireBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8718da4d7dddb615ee92fc8f0833c8df56bf3eb63609033537e9f64cf31459b4 = $this->env->getExtension("native_profiler");
        $__internal_8718da4d7dddb615ee92fc8f0833c8df56bf3eb63609033537e9f64cf31459b4->enter($__internal_8718da4d7dddb615ee92fc8f0833c8df56bf3eb63609033537e9f64cf31459b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetAnnuaireBundle:Page:aetprofile.view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8718da4d7dddb615ee92fc8f0833c8df56bf3eb63609033537e9f64cf31459b4->leave($__internal_8718da4d7dddb615ee92fc8f0833c8df56bf3eb63609033537e9f64cf31459b4_prof);

    }

    // line 2
    public function block_aet_annuaire_banner_title($context, array $blocks = array())
    {
        $__internal_acfe92ec03e50d05405c8f808d35e81e2265f025913f55ef3e0add99f4edf488 = $this->env->getExtension("native_profiler");
        $__internal_acfe92ec03e50d05405c8f808d35e81e2265f025913f55ef3e0add99f4edf488->enter($__internal_acfe92ec03e50d05405c8f808d35e81e2265f025913f55ef3e0add99f4edf488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_banner_title"));

        // line 3
        echo "     Profil AET
 ";
        
        $__internal_acfe92ec03e50d05405c8f808d35e81e2265f025913f55ef3e0add99f4edf488->leave($__internal_acfe92ec03e50d05405c8f808d35e81e2265f025913f55ef3e0add99f4edf488_prof);

    }

    // line 6
    public function block_aet_annuaire_sub_body($context, array $blocks = array())
    {
        $__internal_8874dce7da29fc2431d71247ab441650347acc60a316e1359d910b9eff455a78 = $this->env->getExtension("native_profiler");
        $__internal_8874dce7da29fc2431d71247ab441650347acc60a316e1359d910b9eff455a78->enter($__internal_8874dce7da29fc2431d71247ab441650347acc60a316e1359d910b9eff455a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_sub_body"));

        // line 7
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aetannuaire/css/aetprofileview.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

     <!--
    <header>
        <h1 class=\"title2\">Annuaire AET</h1>
    </header>
     -->

    <div class=\"user_item\" >



        <div class=\"user_image\" >
            ";
        // line 25
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_aetprofile_view", array("id" => $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "id", array()))), "html", null, true);
        echo "\">
                <img
                        src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "image", array()), "webPath", array())), "html", null, true);
        echo "\"
                        alt=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "image", array()), "alt", array()), "html", null, true);
        echo "\"
                        />
            </a>
            ";
        // line 31
        if (($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 32
            echo "                <div class=\"aet_profile_edition_below_image_area\">
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_aetprofile_edit", array("id" => $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
                        <i class=\"glyphicon glyphicon-edit\"></i>
                        Editer mon profil
                    </a>
                </div>
            ";
        }
        // line 39
        echo "            ";
        // line 43
        echo "        </div>





        <div class=\"user_first_name aet_metadata_block\" >
            <span class=\"aet_metadata\" >Prénom :</span> <span class=\"aet_data\" >";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "firstName", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"user_first_name aet_metadata_block\" >
            <span class=\"aet_metadata\" >Nom :</span> <span class=\"aet_data\" >";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "lastName", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"user_matricule aet_metadata_block\" >
            <span class=\"aet_metadata\" >Matricule :</span> <span class=\"aet_data\" >";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "matricule", array()), "html", null, true);
        echo "</span>
        </div>
      ";
        // line 61
        echo "        <div class=\"user_job aet_metadata_block\">
            <span class=\"aet_metadata\" >Activité principale :</span> <span class=\"aet_data\" >";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "activitePrincipale", array()), "html", null, true);
        echo "</span>
        </div>

        <div class=\"user_promotion aet_metadata_block\" >
            <span class=\"aet_metadata\" >Promotion :</span> <span class=\"aet_data\" >";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "promotion", array()), "Y"), "html", null, true);
        echo "</span>
        </div>





        <div class=\"user_address aet_metadata_block\">
            <span class=\"aet_metadata\" >Téléphone :</span> <span class=\"aet_data\" >";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "telephone", array()), "html", null, true);
        echo " </span>
        </div>
        <div class=\"user_postal_code aet_metadata_block\" >
            <span class=\"aet_metadata\" >Code postal :</span> <span class=\"aet_data\" >";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "codePostale", array()), "html", null, true);
        echo "</span>
        </div>

        <div class=\"user_city aet_metadata_block\">
            <span class=\"aet_metadata\" >Ville :</span> <span class=\"aet_data\" >";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "ville", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"user_country aet_metadata_block\">
            <span class=\"aet_metadata\" >Pays :</span> <span class=\"aet_data\" > ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('country_extension')->countryName($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "pays", array())), "html", null, true);
        echo "</span>
        </div>


        ";
        // line 89
        echo "        <div class=\"user_whoAmI aet_metadata_block\" >


                <span class=\"aet_metadata\" >
                    Présentation :
                </span>


                <span class=\"aet_data\" >
                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : $this->getContext($context, "aetUser")), "whoami", array()), "html", null, true);
        echo "
                </span>

        </div>



    </div>

";
        
        $__internal_8874dce7da29fc2431d71247ab441650347acc60a316e1359d910b9eff455a78->leave($__internal_8874dce7da29fc2431d71247ab441650347acc60a316e1359d910b9eff455a78_prof);

    }

    public function getTemplateName()
    {
        return "AetAnnuaireBundle:Page:aetprofile.view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 98,  180 => 89,  173 => 84,  167 => 81,  160 => 77,  154 => 74,  143 => 66,  136 => 62,  133 => 61,  128 => 56,  122 => 53,  116 => 50,  107 => 43,  105 => 39,  96 => 33,  93 => 32,  91 => 31,  85 => 28,  81 => 27,  75 => 25,  59 => 9,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "AetAnnuaireBundle::layout1.html.twig" %}*/
/*  {% block aet_annuaire_banner_title %}*/
/*      Profil AET*/
/*  {% endblock %}*/
/* */
/*  {% block aet_annuaire_sub_body %}*/
/* */
/* */
/*     <link rel="stylesheet" href="{{ asset('bundles/aetannuaire/css/aetprofileview.css') }}" type="text/css" media="all" />*/
/* */
/*      <!--*/
/*     <header>*/
/*         <h1 class="title2">Annuaire AET</h1>*/
/*     </header>*/
/*      -->*/
/* */
/*     <div class="user_item" >*/
/* */
/* */
/* */
/*         <div class="user_image" >*/
/*             {#{% image '@AetAnnuaireBundle/Resources/public/uploads/AetProfilePictures/defaultAvatar.jpg' %}*/
/*                 <img src="{{ asset_url }}" alt="defaultPicture"/>*/
/*             {% endimage %}#}*/
/*             <a href="{{ path('aet_annuaire_aetprofile_view', {'id': aetUser.id}) }}">*/
/*                 <img*/
/*                         src="{{ asset(aetUser.image.webPath) }}"*/
/*                         alt="{{ aetUser.image.alt }}"*/
/*                         />*/
/*             </a>*/
/*             {% if aetUser.id == app.user.id %}*/
/*                 <div class="aet_profile_edition_below_image_area">*/
/*                     <a href="{{ path('aet_annuaire_aetprofile_edit', {'id': aetUser.id}) }}" class="btn btn-default">*/
/*                         <i class="glyphicon glyphicon-edit"></i>*/
/*                         Editer mon profil*/
/*                     </a>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {#<img*/
/*                     src="{{ asset('bundles/aetannuaire/images/defaultAvatar.jpg') }}"*/
/*                     alt="defaultPicture"   aetprofileview.css*/
/*                     />#}*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/*         <div class="user_first_name aet_metadata_block" >*/
/*             <span class="aet_metadata" >Prénom :</span> <span class="aet_data" >{{ aetUser.firstName }}</span>*/
/*         </div>*/
/*         <div class="user_first_name aet_metadata_block" >*/
/*             <span class="aet_metadata" >Nom :</span> <span class="aet_data" >{{ aetUser.lastName }}</span>*/
/*         </div>*/
/*         <div class="user_matricule aet_metadata_block" >*/
/*             <span class="aet_metadata" >Matricule :</span> <span class="aet_data" >{{ aetUser.matricule }}</span>*/
/*         </div>*/
/*       {#  <div class="user_birth_date aet_metadata_block">*/
/*             <span class="aet_metadata" >Date de Naissance :</span> <span class="aet_data" >{{ aetUser.dateNaissance|date('d/m/Y') }}</span>*/
/*         </div>#}*/
/*         <div class="user_job aet_metadata_block">*/
/*             <span class="aet_metadata" >Activité principale :</span> <span class="aet_data" >{{ aetUser.activitePrincipale }}</span>*/
/*         </div>*/
/* */
/*         <div class="user_promotion aet_metadata_block" >*/
/*             <span class="aet_metadata" >Promotion :</span> <span class="aet_data" >{{ aetUser.promotion|date('Y') }}</span>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/*         <div class="user_address aet_metadata_block">*/
/*             <span class="aet_metadata" >Téléphone :</span> <span class="aet_data" >{{ aetUser.telephone }} </span>*/
/*         </div>*/
/*         <div class="user_postal_code aet_metadata_block" >*/
/*             <span class="aet_metadata" >Code postal :</span> <span class="aet_data" >{{ aetUser.codePostale }}</span>*/
/*         </div>*/
/* */
/*         <div class="user_city aet_metadata_block">*/
/*             <span class="aet_metadata" >Ville :</span> <span class="aet_data" >{{ aetUser.ville }}</span>*/
/*         </div>*/
/*         <div class="user_country aet_metadata_block">*/
/*             <span class="aet_metadata" >Pays :</span> <span class="aet_data" > {{ aetUser.pays|countryName }}</span>*/
/*         </div>*/
/* */
/* */
/*         {#{ communication.shortDesc|length > 255 ? (communication.shortDesc|slice(0, 255) ~ '...')|raw  : (communication.shortDesc|raw) }#}*/
/*         <div class="user_whoAmI aet_metadata_block" >*/
/* */
/* */
/*                 <span class="aet_metadata" >*/
/*                     Présentation :*/
/*                 </span>*/
/* */
/* */
/*                 <span class="aet_data" >*/
/*                     {{ aetUser.whoami }}*/
/*                 </span>*/
/* */
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
