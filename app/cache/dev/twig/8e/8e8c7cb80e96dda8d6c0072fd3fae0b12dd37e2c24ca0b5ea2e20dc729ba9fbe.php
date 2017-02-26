<?php

/* AetCommunicationBundle::communication.layout.html.twig */
class __TwigTemplate_416c83f951b1d7930a2f58b320b902903c77bf550716b7ae4f0dfb02f1ef89a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::master.html.twig", "AetCommunicationBundle::communication.layout.html.twig", 1);
        $this->blocks = array(
            'aet_annuaire_banner_section' => array($this, 'block_aet_annuaire_banner_section'),
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
            'aet_annuaire_communication_body' => array($this, 'block_aet_annuaire_communication_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d37c23eeb267255f2d93c0d9edde103bcc49e806b4192c51224888a68a18e685 = $this->env->getExtension("native_profiler");
        $__internal_d37c23eeb267255f2d93c0d9edde103bcc49e806b4192c51224888a68a18e685->enter($__internal_d37c23eeb267255f2d93c0d9edde103bcc49e806b4192c51224888a68a18e685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetCommunicationBundle::communication.layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d37c23eeb267255f2d93c0d9edde103bcc49e806b4192c51224888a68a18e685->leave($__internal_d37c23eeb267255f2d93c0d9edde103bcc49e806b4192c51224888a68a18e685_prof);

    }

    // line 3
    public function block_aet_annuaire_banner_section($context, array $blocks = array())
    {
        $__internal_e45654ccec9663ae9eee1c29392a38bfa549ca1ebe02fd076a5900e18bc0a865 = $this->env->getExtension("native_profiler");
        $__internal_e45654ccec9663ae9eee1c29392a38bfa549ca1ebe02fd076a5900e18bc0a865->enter($__internal_e45654ccec9663ae9eee1c29392a38bfa549ca1ebe02fd076a5900e18bc0a865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_banner_section"));

        // line 4
        echo "
    ";
        // line 6
        echo "
    <div class=\"page-title\">
        <div class=\"row\">
            <div class=\"small-12 large-6 column\">
                <h1  class=\"animated flipInX\"><i class=\"icon-lock\"></i> Espace Communication
                </h1>
            </div>
            <div class=\"small-12 large-6 column\">
                <ul class=\"breadcrumbs right\">
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_homepage");
        echo "\">Home</a></li>
                    <li class=\"current\"><a href=\"#\"> ";
        // line 17
        echo " ";
        $this->displayBlock("aet_annuaire_banner_title", $context, $blocks);
        echo "</a></li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 23
        echo "
";
        
        $__internal_e45654ccec9663ae9eee1c29392a38bfa549ca1ebe02fd076a5900e18bc0a865->leave($__internal_e45654ccec9663ae9eee1c29392a38bfa549ca1ebe02fd076a5900e18bc0a865_prof);

    }

    // line 26
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        $__internal_609f4104f59b1a66256b92158d8c7798c253ff56b76493492bd706d0529d4cb7 = $this->env->getExtension("native_profiler");
        $__internal_609f4104f59b1a66256b92158d8c7798c253ff56b76493492bd706d0529d4cb7->enter($__internal_609f4104f59b1a66256b92158d8c7798c253ff56b76493492bd706d0529d4cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_body"));

        // line 27
        echo "

    ";
        // line 31
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aetcommunication/css/communication.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <div class=\"communication_space_wrapper\">

        ";
        // line 58
        echo "        <div class=\"row\">

            <div class=\"col-md-10\">
                <div class=\"communication_top_nav_tab col-md-3\">
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_index");
        echo "\">Toutes les communications</a>
                    </div>

                <div class=\"communication_top_nav_tab col-md-3\">
                <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_categories_index");
        echo "\">Par catégorie</a>
                    </div>

                ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 70
            echo "                    <div class=\"communication_top_nav_tab col-md-4\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_add");
            echo "\">Ajouter une communication</a></div>
                ";
        }
        // line 72
        echo "            </div>

            <div class=\"col-md-2\">
                ";
        // line 75
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AetCommunicationBundle:Communication:communicationSearch"));
        echo "

            </div>
        </div>
        ";
        // line 79
        $this->displayBlock('aet_annuaire_communication_body', $context, $blocks);
        // line 81
        echo "
    </div>

";
        
        $__internal_609f4104f59b1a66256b92158d8c7798c253ff56b76493492bd706d0529d4cb7->leave($__internal_609f4104f59b1a66256b92158d8c7798c253ff56b76493492bd706d0529d4cb7_prof);

    }

    // line 79
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        $__internal_667f186c49efd93f34592fdf4dce9f69ef2a12735c819b467d9e106fda669a43 = $this->env->getExtension("native_profiler");
        $__internal_667f186c49efd93f34592fdf4dce9f69ef2a12735c819b467d9e106fda669a43->enter($__internal_667f186c49efd93f34592fdf4dce9f69ef2a12735c819b467d9e106fda669a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_communication_body"));

        // line 80
        echo "        ";
        
        $__internal_667f186c49efd93f34592fdf4dce9f69ef2a12735c819b467d9e106fda669a43->leave($__internal_667f186c49efd93f34592fdf4dce9f69ef2a12735c819b467d9e106fda669a43_prof);

    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle::communication.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 80,  149 => 79,  139 => 81,  137 => 79,  130 => 75,  125 => 72,  119 => 70,  117 => 69,  111 => 66,  104 => 62,  98 => 58,  91 => 33,  87 => 31,  83 => 27,  77 => 26,  69 => 23,  60 => 17,  56 => 15,  45 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::master.html.twig" %}*/
/* */
/* {% block aet_annuaire_banner_section %}*/
/* */
/*     {#% if app.request.get('_route') != 'aet_annuaire_homepage' %#}*/
/* */
/*     <div class="page-title">*/
/*         <div class="row">*/
/*             <div class="small-12 large-6 column">*/
/*                 <h1  class="animated flipInX"><i class="icon-lock"></i> Espace Communication*/
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
/*     {#% endif %#}*/
/* */
/* {% endblock %}*/
/* */
/* {% block aet_annuaire_body %}*/
/* */
/* */
/*     {#<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" medial="all">*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>#}*/
/* */
/* */
/*     <link rel="stylesheet" href="{{ asset('bundles/aetcommunication/css/communication.css') }}" type="text/css" media="all" />*/
/* */
/*     <div class="communication_space_wrapper">*/
/* */
/*         {#*/
/*         <div class="communication-space-header">*/
/*             {{ render(controller("AetCommunicationBundle:Communication:communicationSearch")) }}*/
/* */
/*         </div>*/
/* */
/*         <div class="communication_top_nav">*/
/*             <span class="communication_top_nav_tab">*/
/*             <a href="{{ path('aet_annuaire_communication_index') }}">Toutes les communications</a>*/
/*                 </span>*/
/* */
/*             <span class="communication_top_nav_tab">*/
/*             <a href="{{ path('aet_annuaire_communication_categories_index') }}">Par catégorie</a>*/
/*                 </span>*/
/* */
/*             {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                 <span class="communication_top_nav_tab"><a href="{{ path('aet_annuaire_communication_add') }}">Ajouter une communication</a></span>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         #}*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-10">*/
/*                 <div class="communication_top_nav_tab col-md-3">*/
/*                 <a href="{{ path('aet_annuaire_communication_index') }}">Toutes les communications</a>*/
/*                     </div>*/
/* */
/*                 <div class="communication_top_nav_tab col-md-3">*/
/*                 <a href="{{ path('aet_annuaire_communication_categories_index') }}">Par catégorie</a>*/
/*                     </div>*/
/* */
/*                 {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                     <div class="communication_top_nav_tab col-md-4"><a href="{{ path('aet_annuaire_communication_add') }}">Ajouter une communication</a></div>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             <div class="col-md-2">*/
/*                 {{ render(controller("AetCommunicationBundle:Communication:communicationSearch")) }}*/
/* */
/*             </div>*/
/*         </div>*/
/*         {% block aet_annuaire_communication_body %}*/
/*         {% endblock %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
