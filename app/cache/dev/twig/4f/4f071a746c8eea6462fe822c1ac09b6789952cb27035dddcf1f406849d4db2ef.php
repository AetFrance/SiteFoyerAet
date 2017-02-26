<?php

/* AetAnnuaireBundle::layout1.html.twig */
class __TwigTemplate_1a07aec564f9f260a4a27b5693009a9a7340a683b888a9378b89cb32d09dca6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::master.html.twig", "AetAnnuaireBundle::layout1.html.twig", 1);
        $this->blocks = array(
            'aet_annuaire_banner_section' => array($this, 'block_aet_annuaire_banner_section'),
            'aet_annuaire_banner_title' => array($this, 'block_aet_annuaire_banner_title'),
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
            'aet_annuaire_sub_body' => array($this, 'block_aet_annuaire_sub_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23a968a2c31a1d00616ccf26bd640b67c633f1a0317224db44faf366ff205b6a = $this->env->getExtension("native_profiler");
        $__internal_23a968a2c31a1d00616ccf26bd640b67c633f1a0317224db44faf366ff205b6a->enter($__internal_23a968a2c31a1d00616ccf26bd640b67c633f1a0317224db44faf366ff205b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetAnnuaireBundle::layout1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a968a2c31a1d00616ccf26bd640b67c633f1a0317224db44faf366ff205b6a->leave($__internal_23a968a2c31a1d00616ccf26bd640b67c633f1a0317224db44faf366ff205b6a_prof);

    }

    // line 3
    public function block_aet_annuaire_banner_section($context, array $blocks = array())
    {
        $__internal_4d877630e6fa134eed40f27dab95164eea3bc30275f792d211fee29b0ea5711e = $this->env->getExtension("native_profiler");
        $__internal_4d877630e6fa134eed40f27dab95164eea3bc30275f792d211fee29b0ea5711e->enter($__internal_4d877630e6fa134eed40f27dab95164eea3bc30275f792d211fee29b0ea5711e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_banner_section"));

        // line 4
        echo "
";
        // line 6
        echo "
    <div class=\"page-title\">
        <div class=\"row\">
            <div class=\"small-12 large-6 column\">
                <h1  class=\"animated flipInX\"><i class=\"icon-lock\"></i> ";
        // line 10
        $this->displayBlock('aet_annuaire_banner_title', $context, $blocks);
        // line 12
        echo "                </h1>
            </div>
            <div class=\"small-12 large-6 column\">
                <ul class=\"breadcrumbs right\">
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_homepage");
        echo "\">Home</a></li>
                    <li class=\"current\"><a href=\"#\"> ";
        // line 18
        echo " ";
        $this->displayBlock("aet_annuaire_banner_title", $context, $blocks);
        echo "</a></li>
                </ul>
            </div>
        </div>
    </div>
";
        // line 24
        echo "
";
        
        $__internal_4d877630e6fa134eed40f27dab95164eea3bc30275f792d211fee29b0ea5711e->leave($__internal_4d877630e6fa134eed40f27dab95164eea3bc30275f792d211fee29b0ea5711e_prof);

    }

    // line 10
    public function block_aet_annuaire_banner_title($context, array $blocks = array())
    {
        $__internal_dce6f82d855d69e5715a6cb8b3cec51b923b0008bd73909a2084da38fe3a64f7 = $this->env->getExtension("native_profiler");
        $__internal_dce6f82d855d69e5715a6cb8b3cec51b923b0008bd73909a2084da38fe3a64f7->enter($__internal_dce6f82d855d69e5715a6cb8b3cec51b923b0008bd73909a2084da38fe3a64f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_banner_title"));

        // line 11
        echo "                    ";
        
        $__internal_dce6f82d855d69e5715a6cb8b3cec51b923b0008bd73909a2084da38fe3a64f7->leave($__internal_dce6f82d855d69e5715a6cb8b3cec51b923b0008bd73909a2084da38fe3a64f7_prof);

    }

    // line 27
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        $__internal_964a5ca949b93e19b605ba783eb65de1c650a8d189dc5c97c725f8d8e023e76f = $this->env->getExtension("native_profiler");
        $__internal_964a5ca949b93e19b605ba783eb65de1c650a8d189dc5c97c725f8d8e023e76f->enter($__internal_964a5ca949b93e19b605ba783eb65de1c650a8d189dc5c97c725f8d8e023e76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_body"));

        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('aet_annuaire_sub_body', $context, $blocks);
        // line 31
        echo "
";
        
        $__internal_964a5ca949b93e19b605ba783eb65de1c650a8d189dc5c97c725f8d8e023e76f->leave($__internal_964a5ca949b93e19b605ba783eb65de1c650a8d189dc5c97c725f8d8e023e76f_prof);

    }

    // line 29
    public function block_aet_annuaire_sub_body($context, array $blocks = array())
    {
        $__internal_af1480c3337d25a422ea5c0739f890636321001ee2c3a44c5335f47625a95575 = $this->env->getExtension("native_profiler");
        $__internal_af1480c3337d25a422ea5c0739f890636321001ee2c3a44c5335f47625a95575->enter($__internal_af1480c3337d25a422ea5c0739f890636321001ee2c3a44c5335f47625a95575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_sub_body"));

        // line 30
        echo "    ";
        
        $__internal_af1480c3337d25a422ea5c0739f890636321001ee2c3a44c5335f47625a95575->leave($__internal_af1480c3337d25a422ea5c0739f890636321001ee2c3a44c5335f47625a95575_prof);

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
        return array (  119 => 30,  113 => 29,  105 => 31,  103 => 29,  100 => 28,  94 => 27,  87 => 11,  81 => 10,  73 => 24,  64 => 18,  60 => 16,  54 => 12,  52 => 10,  46 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::master.html.twig" %}*/
/* */
/* {% block aet_annuaire_banner_section %}*/
/* */
/* {#% if app.request.get('_route') != 'aet_annuaire_homepage' %#}*/
/* */
/*     <div class="page-title">*/
/*         <div class="row">*/
/*             <div class="small-12 large-6 column">*/
/*                 <h1  class="animated flipInX"><i class="icon-lock"></i> {% block aet_annuaire_banner_title %}*/
/*                     {% endblock %}*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="small-12 large-6 column">*/
/*                 <ul class="breadcrumbs right">*/
/*                     <li><a href="{{ path('aet_annuaire_homepage') }}">Home</a></li>*/
/*                     <li class="current"><a href="#"> {#% block aet_annuaire_banner_title %}*/
/*                             {% endblock %#} {{ block('aet_annuaire_banner_title') }}</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {#% endif %#}*/
/* */
/* {% endblock %}*/
/* */
/* {% block aet_annuaire_body %}*/
/* */
/*     {% block aet_annuaire_sub_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
