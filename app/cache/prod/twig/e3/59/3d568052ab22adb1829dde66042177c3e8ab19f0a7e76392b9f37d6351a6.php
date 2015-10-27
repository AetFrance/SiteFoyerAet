<?php

/* AetCommunicationBundle:Communication:form.html.twig */
class __TwigTemplate_e3593d568052ab22adb1829dde66042177c3e8ab19f0a7e76392b9f37d6351a6 extends Twig_Template
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
        // line 2
        echo "

";
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetcommunication/css/communicationForm.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<div class=\"well\">
    ";
        // line 9
        echo "
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 13
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

    <div class=\"form-group\">
        ";
        // line 17
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Titre de la communication"));
        echo "

        ";
        // line 20
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 24
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 30
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shortDesc", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Courte description de la communication"));
        echo "

        ";
        // line 33
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shortDesc", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 37
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "shortDesc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 43
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Image de la communication"));
        echo "

        ";
        // line 46
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'errors');
        echo "

        <div class=\"col-xs-5 communication_form_image_wrapper\">

            ";
        // line 50
        if (((isset($context["communicationEditMode"]) ? $context["communicationEditMode"] : null) == true)) {
            // line 51
            echo "                <div class=\"communication_edit_form_image_wrapper\">
                    <div class=\"communication_view_user_image\">
                        ";
            // line 56
            echo "                        <img
                                src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
                                alt=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["communication"]) ? $context["communication"] : null), "image", array()), "alt", array()), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), "file", array()), 'widget', array("simple_col" => 8));
        echo "
            <span class=\"aet_form_field_description\">Télécharger une image pour la communication</span>

            ";
        // line 70
        if (((isset($context["communicationEditMode"]) ? $context["communicationEditMode"] : null) == "True")) {
            // line 71
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), "resetImage", array()), 'widget', array("attr" => array("class" => "aet_reset_image_box")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Contenu de la communication"));
        echo "

        ";
        // line 84
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'errors');
        echo "

        <div class=\"col-xs-8 communication-body-edit\">
            ";
        // line 88
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 94
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categories", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Catégories de la communication"));
        echo "

        ";
        // line 97
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categories", array()), 'errors');
        echo "

        <div class=\"col-xs-4\">
            ";
        // line 101
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 106
        echo "    <div class=\"aet_communication_submit\" >
    ";
        // line 108
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "


    ";
        // line 131
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    ";
        // line 139
        echo "</div>";
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
        return array (  227 => 139,  221 => 131,  214 => 127,  211 => 123,  209 => 116,  198 => 108,  195 => 106,  187 => 101,  180 => 97,  174 => 94,  165 => 88,  158 => 84,  152 => 81,  144 => 74,  137 => 71,  135 => 70,  128 => 67,  125 => 65,  115 => 58,  111 => 57,  108 => 56,  104 => 51,  102 => 50,  94 => 46,  88 => 43,  79 => 37,  72 => 33,  66 => 30,  57 => 24,  50 => 20,  44 => 17,  37 => 13,  32 => 10,  29 => 9,  23 => 6,  19 => 2,);
    }
}
