<?php

/* AetCommunicationBundle:Communication:edit.html.twig */
class __TwigTemplate_d3339705acee0b57da6fb83aa38e750b2aded2be289d9b475dc414fbbbc36550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AetCommunicationBundle::communication.layout.html.twig", "AetCommunicationBundle:Communication:edit.html.twig", 1);
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
        $__internal_99e0e474f4d1c1d58d0f957ca1a468d228997aa116aadc289b01bb9fc5514360 = $this->env->getExtension("native_profiler");
        $__internal_99e0e474f4d1c1d58d0f957ca1a468d228997aa116aadc289b01bb9fc5514360->enter($__internal_99e0e474f4d1c1d58d0f957ca1a468d228997aa116aadc289b01bb9fc5514360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetCommunicationBundle:Communication:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99e0e474f4d1c1d58d0f957ca1a468d228997aa116aadc289b01bb9fc5514360->leave($__internal_99e0e474f4d1c1d58d0f957ca1a468d228997aa116aadc289b01bb9fc5514360_prof);

    }

    // line 4
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        $__internal_de5fb0a03e6090618e06488edf314867d024bc8b06a8620c723d31b2810d2da8 = $this->env->getExtension("native_profiler");
        $__internal_de5fb0a03e6090618e06488edf314867d024bc8b06a8620c723d31b2810d2da8->enter($__internal_de5fb0a03e6090618e06488edf314867d024bc8b06a8620c723d31b2810d2da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_communication_body"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aetcommunication/css/communicationEdit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <h2>Modifier une communication</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "AetCommunicationBundle:Communication:form.html.twig");
        echo "

    <p>
        Vous êtes en train de modifier une communication
    </p>

    ";
        // line 21
        echo "
";
        
        $__internal_de5fb0a03e6090618e06488edf314867d024bc8b06a8620c723d31b2810d2da8->leave($__internal_de5fb0a03e6090618e06488edf314867d024bc8b06a8620c723d31b2810d2da8_prof);

    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  48 => 9,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "AetCommunicationBundle::communication.layout.html.twig"  %}*/
/* */
/* */
/* {% block aet_annuaire_communication_body %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/aetcommunication/css/communicationEdit.css') }}" type="text/css" media="all" />*/
/* */
/*     <h2>Modifier une communication</h2>*/
/* */
/*     {{ include("AetCommunicationBundle:Communication:form.html.twig") }}*/
/* */
/*     <p>*/
/*         Vous êtes en train de modifier une communication*/
/*     </p>*/
/* */
/*     {#  <p>*/
/*          <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*              <i class="glyphicon glyphicon-chevron-left"></i>*/
/*              Créer l'annonce*/
/*          </a>*/
/*      </p>#}*/
/* */
/* {% endblock %}*/
