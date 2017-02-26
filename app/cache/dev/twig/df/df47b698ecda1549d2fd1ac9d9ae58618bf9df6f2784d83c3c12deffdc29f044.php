<?php

/* AetCommunicationBundle:Communication:view.html.twig */
class __TwigTemplate_6034e82307411aa3e358ccc1edafdab05a68840c83cb0b7bc9f6e225462fd8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AetCommunicationBundle::communication.layout.html.twig", "AetCommunicationBundle:Communication:view.html.twig", 3);
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
        $__internal_6efc4175592422af2130d5464a0751d3f670f5dd3bb252738f4fcb5ffdf8dbd6 = $this->env->getExtension("native_profiler");
        $__internal_6efc4175592422af2130d5464a0751d3f670f5dd3bb252738f4fcb5ffdf8dbd6->enter($__internal_6efc4175592422af2130d5464a0751d3f670f5dd3bb252738f4fcb5ffdf8dbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetCommunicationBundle:Communication:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6efc4175592422af2130d5464a0751d3f670f5dd3bb252738f4fcb5ffdf8dbd6->leave($__internal_6efc4175592422af2130d5464a0751d3f670f5dd3bb252738f4fcb5ffdf8dbd6_prof);

    }

    // line 6
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        $__internal_e2e86d0da52ce3c7e8ff3aa8f21cc1a54625e50fd7ac5747170a0655dc048d85 = $this->env->getExtension("native_profiler");
        $__internal_e2e86d0da52ce3c7e8ff3aa8f21cc1a54625e50fd7ac5747170a0655dc048d85->enter($__internal_e2e86d0da52ce3c7e8ff3aa8f21cc1a54625e50fd7ac5747170a0655dc048d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_communication_body"));

        // line 7
        echo "
<div>


    ";
        // line 11
        if (($this->env->getExtension('security')->isGranted("EDIT", (isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication"))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 12
            echo "

        <div class=\"communication_action_buttons\">

            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_communication_edit", array("id" => $this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "id", array()))), "html", null, true);
            echo "\" class=\"communication_view_button btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier
            </a>

            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_communication_delete", array("id" => $this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "id", array()))), "html", null, true);
            echo "\" class=\"communication_view_button btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer
            </a>

        </div>

    ";
        }
        // line 29
        echo "    <div class=\"communication_view_user_image\">
        ";
        // line 33
        echo "        <img
                src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "image", array()), "webPath", array())), "html", null, true);
        echo "\"
                alt=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "image", array()), "alt", array()), "html", null, true);
        echo "\"
                />
    </div>

    <div class=\"communication_title\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "title", array()), "html", null, true);
        echo "
    </div>
    <div class=\"communication_view_user_name\">

    <div class=\"communication_view_user_name\">Par ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "user", array()), "html", null, true);
        echo "</i></div>
    <div class=\"communication_view_date\"> | ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "date", array()), "d/m/Y"), "html", null, true);
        echo " </div>

    </div>

    <div class=\"communication_body\" >
    ";
        // line 50
        echo $this->getAttribute((isset($context["communication"]) ? $context["communication"] : $this->getContext($context, "communication")), "body", array());
        echo "

    </div>


    <div class=\"communication_comment_section_title\">
        Commentaires
    </div>

    <div class=\"communication_body\">
        ";
        // line 65
        echo "

        ";
        // line 69
        echo "
        ";
        // line 70
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eb65f7d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb65f7d_0") : $this->env->getExtension('asset')->getAssetUrl("css/eb65f7d_communicationView_1.css");
            // line 75
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "eb65f7d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb65f7d_1") : $this->env->getExtension('asset')->getAssetUrl("css/eb65f7d_communicationThread_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "eb65f7d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb65f7d") : $this->env->getExtension('asset')->getAssetUrl("css/eb65f7d.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 77
        echo "
        ";
        // line 78
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "99f6233_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99f6233_0") : $this->env->getExtension('asset')->getAssetUrl("js/99f6233_jquery-1.11.2.min_1.js");
            // line 81
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "99f6233"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99f6233") : $this->env->getExtension('asset')->getAssetUrl("js/99f6233.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 83
        echo "
        ";
        // line 84
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "AetCommunicationBundle:Communication:view.html.twig", 84)->display(array_merge($context, array("id" => (isset($context["threadId"]) ? $context["threadId"] : $this->getContext($context, "threadId")))));
        // line 85
        echo "
        ";
        // line 93
        echo "

</div>
</div>

";
        
        $__internal_e2e86d0da52ce3c7e8ff3aa8f21cc1a54625e50fd7ac5747170a0655dc048d85->leave($__internal_e2e86d0da52ce3c7e8ff3aa8f21cc1a54625e50fd7ac5747170a0655dc048d85_prof);

    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 93,  180 => 85,  178 => 84,  175 => 83,  161 => 81,  157 => 78,  154 => 77,  134 => 75,  130 => 70,  127 => 69,  123 => 65,  110 => 50,  102 => 45,  98 => 44,  91 => 40,  83 => 35,  79 => 34,  76 => 33,  73 => 29,  62 => 21,  54 => 16,  48 => 12,  46 => 11,  40 => 7,  34 => 6,  11 => 3,);
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
/* */
/*     {% if is_granted('EDIT',communication) or is_granted('ROLE_ADMIN') %}*/
/* */
/* */
/*         <div class="communication_action_buttons">*/
/* */
/*             <a href="{{ path('aet_annuaire_communication_edit', {'id': communication.id}) }}" class="communication_view_button btn btn-default">*/
/*                 <i class="glyphicon glyphicon-edit"></i>*/
/*                 Modifier*/
/*             </a>*/
/* */
/*             <a href="{{ path('aet_annuaire_communication_delete', {'id': communication.id}) }}" class="communication_view_button btn btn-danger">*/
/*                 <i class="glyphicon glyphicon-trash"></i>*/
/*                 Supprimer*/
/*             </a>*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/*     <div class="communication_view_user_image">*/
/*         {#{% image '@AetCommunicationBundle/Resources/public/images/defaultAvatar.jpg' %}*/
/*              <img src="{{ asset_url }}" alt="{{ communication.user }}"/>*/
/*          {% endimage %}	#}*/
/*         <img*/
/*                 src="{{ asset(communication.image.webPath) }}"*/
/*                 alt="{{ communication.image.alt }}"*/
/*                 />*/
/*     </div>*/
/* */
/*     <div class="communication_title">*/
/*         {{ communication.title }}*/
/*     </div>*/
/*     <div class="communication_view_user_name">*/
/* */
/*     <div class="communication_view_user_name">Par {{ communication.user }}</i></div>*/
/*     <div class="communication_view_date"> | {{ communication.date|date('d/m/Y') }} </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="communication_body" >*/
/*     {{ communication.body|raw }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class="communication_comment_section_title">*/
/*         Commentaires*/
/*     </div>*/
/* */
/*     <div class="communication_body">*/
/*         {#*/
/*         {% stylesheets filter='?yui_css' '@FOSCommentBundle/Resources/assets/css/comments.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/*         #}*/
/* */
/* */
/*         {#<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>#}*/
/* */
/*         {% stylesheets*/
/*         '@AetCommunicationBundle/Resources/public/css/communicationView.css'*/
/*         '@AetCommunicationBundle/Resources/public/css/communicationThread.css'*/
/*         filter='?yui_css'*/
/*         %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/* */
/*         {% javascripts filter='?yui_js'*/
/*             '@AetCommunicationBundle/Resources/public/js/jquery-1.11.2.min.js'*/
/*         %}*/
/*             <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/* */
/*         {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': threadId} %}*/
/* */
/*         {#*/
/*         {% javascripts filter='?yui_js'*/
/*             '@FOSCommentBundle/Resources/assets/js/comments.js'*/
/*         %}*/
/*             <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*         #}*/
/* */
/* */
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
