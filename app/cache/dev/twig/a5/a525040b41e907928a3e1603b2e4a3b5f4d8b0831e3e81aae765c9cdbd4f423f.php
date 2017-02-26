<?php

/* AetAnnuaireBundle:Page:aetlist.html.twig */
class __TwigTemplate_2c6cbe5a36881409d5b6e9a22807c6b12635f516b60cd2f6a8fcdb9191269046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AetAnnuaireBundle::layout1.html.twig", "AetAnnuaireBundle:Page:aetlist.html.twig", 1);
        $this->blocks = array(
            'aet_annuaire_banner_title' => array($this, 'block_aet_annuaire_banner_title'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'button_widget' => array($this, 'block_button_widget'),
            'aet_annuaire_sub_body' => array($this, 'block_aet_annuaire_sub_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AetAnnuaireBundle::layout1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_198b38ced790e466ed716e52060d987a5ee27ad5cd25f7f3d8e36ad44017bc0e = $this->env->getExtension("native_profiler");
        $__internal_198b38ced790e466ed716e52060d987a5ee27ad5cd25f7f3d8e36ad44017bc0e->enter($__internal_198b38ced790e466ed716e52060d987a5ee27ad5cd25f7f3d8e36ad44017bc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetAnnuaireBundle:Page:aetlist.html.twig"));

        // line 12
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_198b38ced790e466ed716e52060d987a5ee27ad5cd25f7f3d8e36ad44017bc0e->leave($__internal_198b38ced790e466ed716e52060d987a5ee27ad5cd25f7f3d8e36ad44017bc0e_prof);

    }

    // line 2
    public function block_aet_annuaire_banner_title($context, array $blocks = array())
    {
        $__internal_92456dc60a72dbfda5c8395f9d995ace6a50efc0c47b69b36f40a19870cffd6a = $this->env->getExtension("native_profiler");
        $__internal_92456dc60a72dbfda5c8395f9d995ace6a50efc0c47b69b36f40a19870cffd6a->enter($__internal_92456dc60a72dbfda5c8395f9d995ace6a50efc0c47b69b36f40a19870cffd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_banner_title"));

        // line 3
        echo "     Annuaire AET
 ";
        
        $__internal_92456dc60a72dbfda5c8395f9d995ace6a50efc0c47b69b36f40a19870cffd6a->leave($__internal_92456dc60a72dbfda5c8395f9d995ace6a50efc0c47b69b36f40a19870cffd6a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_02ead6381d8a66c2d703422155b62d2fadf883086fab0bb82835a09a6d8ee7d5 = $this->env->getExtension("native_profiler");
        $__internal_02ead6381d8a66c2d703422155b62d2fadf883086fab0bb82835a09a6d8ee7d5->enter($__internal_02ead6381d8a66c2d703422155b62d2fadf883086fab0bb82835a09a6d8ee7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Annuaire";
        
        $__internal_02ead6381d8a66c2d703422155b62d2fadf883086fab0bb82835a09a6d8ee7d5->leave($__internal_02ead6381d8a66c2d703422155b62d2fadf883086fab0bb82835a09a6d8ee7d5_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_346faf7ac9f4d6feacf28886f2cdc1336232c122cede84add15d69cf777fda78 = $this->env->getExtension("native_profiler");
        $__internal_346faf7ac9f4d6feacf28886f2cdc1336232c122cede84add15d69cf777fda78->enter($__internal_346faf7ac9f4d6feacf28886f2cdc1336232c122cede84add15d69cf777fda78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_346faf7ac9f4d6feacf28886f2cdc1336232c122cede84add15d69cf777fda78->leave($__internal_346faf7ac9f4d6feacf28886f2cdc1336232c122cede84add15d69cf777fda78_prof);

    }

    // line 14
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5883e4bef36cf2b155973afcb69f5e4d2822f6fe3739161a70bd9b52663fe7cb = $this->env->getExtension("native_profiler");
        $__internal_5883e4bef36cf2b155973afcb69f5e4d2822f6fe3739161a70bd9b52663fe7cb->enter($__internal_5883e4bef36cf2b155973afcb69f5e4d2822f6fe3739161a70bd9b52663fe7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 15
        echo "    ";
        ob_start();
        // line 16
        echo "        ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 17
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo "><span class=\"btn-label\"><i class=\"glyphicon glyphicon-search\"></i></span></button>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5883e4bef36cf2b155973afcb69f5e4d2822f6fe3739161a70bd9b52663fe7cb->leave($__internal_5883e4bef36cf2b155973afcb69f5e4d2822f6fe3739161a70bd9b52663fe7cb_prof);

    }

    // line 24
    public function block_aet_annuaire_sub_body($context, array $blocks = array())
    {
        $__internal_bbbd818d48deaa19290f9b1944d4b900ae7250fcdabe595170dee1367b82062a = $this->env->getExtension("native_profiler");
        $__internal_bbbd818d48deaa19290f9b1944d4b900ae7250fcdabe595170dee1367b82062a->enter($__internal_bbbd818d48deaa19290f9b1944d4b900ae7250fcdabe595170dee1367b82062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_sub_body"));

        // line 25
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aetannuaire/css/userList.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <div class=\"header-wrapper row\">



        <div class=\"aet-annuaire-search-box\" > ";
        // line 32
        echo "

        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 37
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'errors');
        echo "
        <div class=\"col-xs-6\" >
            ";
        // line 40
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "searchText", array()), 'widget', array("attr" => array("class" => "aet-annuaire-search-textbox")));
        echo "
        </div>
        <span class=\"aet-annuaire-search-submit\" >
            ";
        // line 44
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), "search", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </span>
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'rest');
        echo "


        ";
        // line 50
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : $this->getContext($context, "searchForm")), 'form_end');
        echo "
        </div>
        <!-- <h1 class=\"title2\" >Annuaire AET</h1> -->

    </div>

<div class=\"user_list_count row\">
    ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " ancien(s) enfant(s) de troupe trouvé(s)
</div>

";
        // line 75
        echo "
<div class=\"annuaire_list_pagination row\">
    ";
        // line 77
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>

";
        // line 152
        echo "

    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["aetUser"]) {
            // line 155
            echo "
        ";
            // line 156
            if (($this->getAttribute($context["aetUser"], "firstName", array()) != "amadou")) {
                // line 157
                echo "

            <div class=\"user_item row\" >


                        <div class=\"user_image_cell col-sm-2\">


                            <div class=\"user_image\" >

                                <a href=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_aetprofile_view", array("id" => $this->getAttribute($context["aetUser"], "id", array()))), "html", null, true);
                echo "\">
                                    <img
                                            src=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["aetUser"], "image", array()), "webPath", array())), "html", null, true);
                echo "\"
                                            alt=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["aetUser"], "image", array()), "alt", array()), "html", null, true);
                echo "\"
                                            />
                                </a>

                            </div>



                        </div>
                        <div class=\"user_miscellaneous_info_cell col-sm-5\">
                            <div class=\"user_miscellaneous_info\" >
                                <div class=\"user_first_name\" >
                                    <span class=\"aet_metadata\" >Prénom :</span> <span class=\"aet_data\" >";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "firstName", array()), "html", null, true);
                echo "</span>
                                </div>
                                <div class=\"user_first_name\" >
                                    <span class=\"aet_metadata\" >Nom :</span> <span class=\"aet_data\" >";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "lastName", array()), "html", null, true);
                echo "</span>
                                </div>
                                <div class=\"user_matricule\" >
                                    <span class=\"aet_metadata\" >Matricule :</span> <span class=\"aet_data\" >";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "matricule", array()), "html", null, true);
                echo "</span>
                                </div>

                                <div class=\"user_job\">
                                    <span class=\"aet_metadata\" >Activité principale :</span> <span class=\"aet_data\" >";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "activitePrincipale", array()), "html", null, true);
                echo "</span>
                                </div>

                                <div class=\"user_matricule\" >
                                    <span class=\"aet_metadata\" >Promotion :</span> <span class=\"aet_data\" >";
                // line 196
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aetUser"], "promotion", array()), "Y"), "html", null, true);
                echo "</span>
                                </div>
                            </div>

                        </div>
                        <div class=\"col-sm-5\">
                            <div class=\"user_other_miscellaneous_info\" >
                                <div class=\"user_address\">
                                    <span class=\"aet_metadata\" >Téléphone :</span> <span class=\"aet_data\" >";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "telephone", array()), "html", null, true);
                echo " </span>
                                </div>
                                <div class=\"user_postal_code\" >
                                    <span class=\"aet_metadata\" >Code postal :</span> <span class=\"aet_data\" >";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "codePostale", array()), "html", null, true);
                echo "</span>
                                </div>

                                <div class=\"user_city\">
                                    <span class=\"aet_metadata\" >Ville :</span> <span class=\"aet_data\" >";
                // line 211
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "ville", array()), "html", null, true);
                echo "</span>
                                </div>
                                <div class=\"user_country\">
                                    <span class=\"aet_metadata\" >Pays :</span> <span class=\"aet_data\" >";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('country_extension')->countryName($this->getAttribute($context["aetUser"], "pays", array())), "html", null, true);
                echo "</span>
                                </div>
                            </div>
                        </div>

            </div>
        ";
            }
            // line 221
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aetUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "
";
        // line 224
        echo "<div class=\"annuaire_list_pagination row\">
    ";
        // line 225
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>

";
        
        $__internal_bbbd818d48deaa19290f9b1944d4b900ae7250fcdabe595170dee1367b82062a->leave($__internal_bbbd818d48deaa19290f9b1944d4b900ae7250fcdabe595170dee1367b82062a_prof);

    }

    public function getTemplateName()
    {
        return "AetAnnuaireBundle:Page:aetlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 225,  315 => 224,  312 => 222,  306 => 221,  296 => 214,  290 => 211,  283 => 207,  277 => 204,  266 => 196,  259 => 192,  252 => 188,  246 => 185,  240 => 182,  225 => 170,  221 => 169,  216 => 167,  204 => 157,  202 => 156,  199 => 155,  195 => 154,  191 => 152,  185 => 77,  181 => 75,  175 => 57,  164 => 50,  158 => 46,  152 => 44,  145 => 40,  139 => 37,  134 => 34,  130 => 32,  120 => 25,  114 => 24,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  89 => 15,  83 => 14,  73 => 9,  67 => 8,  55 => 6,  47 => 3,  41 => 2,  34 => 1,  32 => 12,  11 => 1,);
    }
}
/* {% extends "AetAnnuaireBundle::layout1.html.twig" %}*/
/*  {% block aet_annuaire_banner_title %}*/
/*      Annuaire AET*/
/*  {% endblock %}*/
/* */
/* {% block title %}Annuaire{% endblock%}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% form_theme searchForm _self %}*/
/* */
/* {% block button_widget %}*/
/*     {% spaceless %}*/
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <button type="{{ type|default('button') }}" {{ block('button_attributes') }}><span class="btn-label"><i class="glyphicon glyphicon-search"></i></span></button>*/
/*     {% endspaceless %}*/
/* {% endblock button_widget %}*/
/* */
/* */
/* {% block aet_annuaire_sub_body %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/aetannuaire/css/userList.css') }}" type="text/css" media="all" />*/
/* */
/*     <div class="header-wrapper row">*/
/* */
/* */
/* */
/*         <div class="aet-annuaire-search-box" > {#{ form(searchForm) }#}*/
/* */
/* */
/*         {{ form_start(searchForm, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*         {# Les erreurs générales du formulaire. #}*/
/*         {{ form_errors(searchForm) }}*/
/*         <div class="col-xs-6" >*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(searchForm.searchText, {'attr': {'class': 'aet-annuaire-search-textbox'}}) }}*/
/*         </div>*/
/*         <span class="aet-annuaire-search-submit" >*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(searchForm.search, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*         </span>*/
/*         {{ form_rest(searchForm) }}*/
/* */
/* */
/*         {# Fermeture de la balise <form> du formulaire HTML #}*/
/*         {{ form_end(searchForm) }}*/
/*         </div>*/
/*         <!-- <h1 class="title2" >Annuaire AET</h1> -->*/
/* */
/*     </div>*/
/* */
/* <div class="user_list_count row">*/
/*     {{ pagination.getTotalItemCount }} ancien(s) enfant(s) de troupe trouvé(s)*/
/* </div>*/
/* */
/* {#*/
/* <div class="user_sorting_area">*/
/*     <div class="user_sorting_area_title">*/
/*         Trier par*/
/*     </div>*/
/* */
/*     <span{% if pagination.isSorted('a.firstName') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Prénom', 'a.firstName') }} | </span>*/
/*     <span{% if pagination.isSorted('a.lastName') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Nom', 'a.lastName') }} | </span>*/
/*     <span{% if pagination.isSorted('a.dateNaissance') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Date de Naissance', 'a.dateNaissance') }} | </span>*/
/*     <span{% if pagination.isSorted('a.activitePrincipale') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Activité principale', 'a.activitePrincipale') }} | </span>*/
/*     <span{% if pagination.isSorted('a.promotion') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Promotion', 'a.promotion') }}  | </span>*/
/*     <span{% if pagination.isSorted('a.codePostale') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Code postal', 'a.codePostale') }} | </span>*/
/*     <span{% if pagination.isSorted('a.ville') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Ville', 'a.ville') }}</span>*/
/*     <span{% if pagination.isSorted('a.pays') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Pays', 'a.pays') }}</span>*/
/* </div>#}*/
/* */
/* <div class="annuaire_list_pagination row">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* {#% for aetUser in pagination %}*/
/* */
/*     {% if aetUser.firstName!="amadou" %}*/
/* */
/* */
/*     <div class="user_item" >*/
/*         <table>*/
/*             <tr>*/
/*                 <td valign="middle" class="user_image_cell">*/
/* */
/* */
/*                     <div class="user_image" >*/
/* */
/*                         <a href="{{ path('aet_annuaire_aetprofile_view', {'id': aetUser.id}) }}">*/
/*                             <img*/
/*                                     src="{{ asset(aetUser.image.webPath) }}"*/
/*                                     alt="{{ aetUser.image.alt }}"*/
/*                                     />*/
/*                         </a>*/
/* */
/*                     </div>*/
/* */
/* */
/* */
/*                 </td>*/
/*                 <td valign="middle" class="user_miscellaneous_info_cell">*/
/*                     <div class="user_miscellaneous_info" >*/
/*                         <div class="user_first_name" >*/
/*                             <span class="aet_metadata" >Prénom :</span> <span class="aet_data" >{{ aetUser.firstName }}</span>*/
/*                         </div>*/
/*                         <div class="user_first_name" >*/
/*                             <span class="aet_metadata" >Nom :</span> <span class="aet_data" >{{ aetUser.lastName }}</span>*/
/*                         </div>*/
/*                         <div class="user_matricule" >*/
/*                             <span class="aet_metadata" >Matricule :</span> <span class="aet_data" >{{ aetUser.matricule }}</span>*/
/*                         </div>*/
/* */
/*                         <div class="user_job">*/
/*                             <span class="aet_metadata" >Activité principale :</span> <span class="aet_data" >{{ aetUser.activitePrincipale }}</span>*/
/*                         </div>*/
/* */
/*                         <div class="user_matricule" >*/
/*                             <span class="aet_metadata" >Promotion :</span> <span class="aet_data" >{{ aetUser.promotion|date('Y') }}</span>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </td>*/
/*                 <td valign="middle">*/
/*                     <div class="user_other_miscellaneous_info" >*/
/*                         <div class="user_address">*/
/*                             <span class="aet_metadata" >Téléphone :</span> <span class="aet_data" >{{ aetUser.telephone }} </span>*/
/*                         </div>*/
/*                         <div class="user_postal_code" >*/
/*                             <span class="aet_metadata" >Code postal :</span> <span class="aet_data" >{{ aetUser.codePostale }}</span>*/
/*                         </div>*/
/* */
/*                         <div class="user_city">*/
/*                             <span class="aet_metadata" >Ville :</span> <span class="aet_data" >{{ aetUser.ville }}</span>*/
/*                         </div>*/
/*                         <div class="user_country">*/
/*                             <span class="aet_metadata" >Pays :</span> <span class="aet_data" >{{ aetUser.pays|countryName }}</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </td>*/
/* */
/*             </tr>*/
/* */
/* */
/*         </table>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endfor %#}*/
/* */
/* */
/*     {% for aetUser in pagination %}*/
/* */
/*         {% if aetUser.firstName!="amadou" %}*/
/* */
/* */
/*             <div class="user_item row" >*/
/* */
/* */
/*                         <div class="user_image_cell col-sm-2">*/
/* */
/* */
/*                             <div class="user_image" >*/
/* */
/*                                 <a href="{{ path('aet_annuaire_aetprofile_view', {'id': aetUser.id}) }}">*/
/*                                     <img*/
/*                                             src="{{ asset(aetUser.image.webPath) }}"*/
/*                                             alt="{{ aetUser.image.alt }}"*/
/*                                             />*/
/*                                 </a>*/
/* */
/*                             </div>*/
/* */
/* */
/* */
/*                         </div>*/
/*                         <div class="user_miscellaneous_info_cell col-sm-5">*/
/*                             <div class="user_miscellaneous_info" >*/
/*                                 <div class="user_first_name" >*/
/*                                     <span class="aet_metadata" >Prénom :</span> <span class="aet_data" >{{ aetUser.firstName }}</span>*/
/*                                 </div>*/
/*                                 <div class="user_first_name" >*/
/*                                     <span class="aet_metadata" >Nom :</span> <span class="aet_data" >{{ aetUser.lastName }}</span>*/
/*                                 </div>*/
/*                                 <div class="user_matricule" >*/
/*                                     <span class="aet_metadata" >Matricule :</span> <span class="aet_data" >{{ aetUser.matricule }}</span>*/
/*                                 </div>*/
/* */
/*                                 <div class="user_job">*/
/*                                     <span class="aet_metadata" >Activité principale :</span> <span class="aet_data" >{{ aetUser.activitePrincipale }}</span>*/
/*                                 </div>*/
/* */
/*                                 <div class="user_matricule" >*/
/*                                     <span class="aet_metadata" >Promotion :</span> <span class="aet_data" >{{ aetUser.promotion|date('Y') }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="col-sm-5">*/
/*                             <div class="user_other_miscellaneous_info" >*/
/*                                 <div class="user_address">*/
/*                                     <span class="aet_metadata" >Téléphone :</span> <span class="aet_data" >{{ aetUser.telephone }} </span>*/
/*                                 </div>*/
/*                                 <div class="user_postal_code" >*/
/*                                     <span class="aet_metadata" >Code postal :</span> <span class="aet_data" >{{ aetUser.codePostale }}</span>*/
/*                                 </div>*/
/* */
/*                                 <div class="user_city">*/
/*                                     <span class="aet_metadata" >Ville :</span> <span class="aet_data" >{{ aetUser.ville }}</span>*/
/*                                 </div>*/
/*                                 <div class="user_country">*/
/*                                     <span class="aet_metadata" >Pays :</span> <span class="aet_data" >{{ aetUser.pays|countryName }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*             </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/* {# display navigation #}*/
/* <div class="annuaire_list_pagination row">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
