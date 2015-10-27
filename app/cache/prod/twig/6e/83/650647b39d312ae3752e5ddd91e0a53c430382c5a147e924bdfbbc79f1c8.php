<?php

/* AetCommunicationBundle:Communication:view.html.twig */
class __TwigTemplate_6e83650647b39d312ae3752e5ddd91e0a53c430382c5a147e924bdfbbc79f1c8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_aet_annuaire_communication_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div>


    ";
        // line 11
        if (($this->env->getExtension('security')->isGranted("EDIT", (isset($context["communication"]) ? $context["communication"] : null)) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 12
            echo "

        <div class=\"communication_action_buttons\">

            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_communication_edit", array("id" => $this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"communication_view_button btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier
            </a>

            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_communication_delete", array("id" => $this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "image", array()), "webPath", array())), "html", null, true);
        echo "\"
                alt=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "image", array()), "alt", array()), "html", null, true);
        echo "\"
                />
    </div>

    <div class=\"communication_title\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "title", array()), "html", null, true);
        echo "
    </div>
    <div class=\"communication_view_user_name\">

    <div class=\"communication_view_user_name\">Par ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "user", array()), "html", null, true);
        echo "</i></div>
    <div class=\"communication_view_date\"> | ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo " </div>

    </div>

    <div class=\"communication_body\" >
    ";
        // line 50
        echo $this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "body", array());
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb65f7d_0") : $this->env->getExtension('assets')->getAssetUrl("css/eb65f7d_communicationView_1.css");
            // line 75
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "eb65f7d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb65f7d_1") : $this->env->getExtension('assets')->getAssetUrl("css/eb65f7d_communicationThread_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "eb65f7d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eb65f7d") : $this->env->getExtension('assets')->getAssetUrl("css/eb65f7d.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99f6233_0") : $this->env->getExtension('assets')->getAssetUrl("js/99f6233_jquery-1.11.2.min_1.js");
            // line 81
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "99f6233"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_99f6233") : $this->env->getExtension('assets')->getAssetUrl("js/99f6233.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 83
        echo "
        ";
        // line 84
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "AetCommunicationBundle:Communication:view.html.twig", 84)->display(array_merge($context, array("id" => (isset($context["threadId"]) ? $context["threadId"] : null))));
        // line 85
        echo "
        ";
        // line 93
        echo "

</div>
</div>

";
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
        return array (  174 => 93,  171 => 85,  169 => 84,  166 => 83,  152 => 81,  148 => 78,  145 => 77,  125 => 75,  121 => 70,  118 => 69,  114 => 65,  101 => 50,  93 => 45,  89 => 44,  82 => 40,  74 => 35,  70 => 34,  67 => 33,  64 => 29,  53 => 21,  45 => 16,  39 => 12,  37 => 11,  31 => 7,  28 => 6,  11 => 3,);
    }
}
