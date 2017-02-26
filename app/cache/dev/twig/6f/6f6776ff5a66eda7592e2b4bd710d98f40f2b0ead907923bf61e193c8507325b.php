<?php

/* AetCommunicationBundle:Communication:index.html.twig */
class __TwigTemplate_3b71a879584a602b0ae92b46dcd0b11f8b1545e779bfc4bac71e843d59f7d4e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AetCommunicationBundle::communication.layout.html.twig", "AetCommunicationBundle:Communication:index.html.twig", 3);
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
        $__internal_227797740967beaac94b21fde39748111919c64a79dfbcb9ed9e2b1d6f259be9 = $this->env->getExtension("native_profiler");
        $__internal_227797740967beaac94b21fde39748111919c64a79dfbcb9ed9e2b1d6f259be9->enter($__internal_227797740967beaac94b21fde39748111919c64a79dfbcb9ed9e2b1d6f259be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetCommunicationBundle:Communication:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_227797740967beaac94b21fde39748111919c64a79dfbcb9ed9e2b1d6f259be9->leave($__internal_227797740967beaac94b21fde39748111919c64a79dfbcb9ed9e2b1d6f259be9_prof);

    }

    // line 6
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        $__internal_ebac95f04e1296c2486f75b8c58fc8744ec4ddb7ea9df4ce2033ca3d01143127 = $this->env->getExtension("native_profiler");
        $__internal_ebac95f04e1296c2486f75b8c58fc8744ec4ddb7ea9df4ce2033ca3d01143127->enter($__internal_ebac95f04e1296c2486f75b8c58fc8744ec4ddb7ea9df4ce2033ca3d01143127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_communication_body"));

        // line 7
        echo "
<div>

    ";
        // line 10
        echo twig_include($this->env, $context, "AetCommunicationBundle:Communication:communicationlist.html.twig");
        echo "




    ";
        // line 31
        echo "
</div>

";
        
        $__internal_ebac95f04e1296c2486f75b8c58fc8744ec4ddb7ea9df4ce2033ca3d01143127->leave($__internal_ebac95f04e1296c2486f75b8c58fc8744ec4ddb7ea9df4ce2033ca3d01143127_prof);

    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 31,  45 => 10,  40 => 7,  34 => 6,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "AetCommunicationBundle::communication.layout.html.twig" %}*/
/* */
/* */
/* {% block aet_annuaire_communication_body %}*/
/* */
/* <div>*/
/* */
/*     {{ include("AetCommunicationBundle:Communication:communicationlist.html.twig") }}*/
/* */
/* */
/* */
/* */
/*     {# {% if not advert.categories.empty %}*/
/*     <p>*/
/*         Cette annonce est parue dans les catégories suivantes :*/
/*         {% for category in advert.categories %}*/
/*             {{ category.name }}{% if not loop.last %}, {% endif %}*/
/*         {% endfor %}*/
/*     </p>*/
/* {% endif %}*/
/* */
/* <div class="well">*/
/*     {% if advert.image is not null %}*/
/*         <div class="well">*/
/*             <img src="{{ advert.image.url }}" alt="{{ advert.image.alt }}">*/
/*         </div>*/
/* */
/*     {% endif %} #}*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
