<?php

/* AetAnnuaireBundle:Page:aetprofile.edit.html.twig */
class __TwigTemplate_963d606e70a076d1d7f871479a04aac4b33f9407c3380b6ae75540c3b5ae9f05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::master.html.twig", "AetAnnuaireBundle:Page:aetprofile.edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Edition profil";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        // line 9
        echo "


<header>
    <h1 class=\"title2\">Edition profil</h1>
</header>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetannuaire/css/aetprofileedit.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

<div class=\"well\">
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 21
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

    <div class=\"form-group\">
        ";
        // line 25
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Prénom"));
        echo "

        ";
        // line 28
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>


    <div class=\"form-group\">
        ";
        // line 39
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Nom"));
        echo "

        ";
        // line 42
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 46
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 51
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Photo"));
        echo "

        ";
        // line 54
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            <div class=\"user_image_wrapper\" >
                <div class=\"user_image\" >

                    <img
                            src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "image", array()), "webPath", array())), "html", null, true);
        echo "\"
                            alt=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "image", array()), "alt", array()), "html", null, true);
        echo "\"
                            />


                </div>
                <div class=\"user_profile_image_edit_message aet_form_field_description\">Photo de profil actuelle</div>

                ";
        // line 70
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), "file", array()), 'widget', array("simple_col" => 8));
        echo "

                <span class=\"aet_form_field_description\">Modifier votre photo de profil</span>

                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), "resetImage", array()), 'widget', array("attr" => array("class" => "aet_reset_image_box")));
        echo "
                <span class=\"aet_form_field_description\">Supprimer votre photo de profil</span>

            </div>
        </div>
    </div>
    <div class=\"form-group\">

            ";
        // line 84
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricule", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Matricule"));
        echo "

            ";
        // line 87
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricule", array()), 'errors');
        echo "

            <div class=\"col-xs-5\">
                ";
        // line 91
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
        ";
        // line 96
        echo "       ";
        // line 99
        echo "            ";
        // line 103
        echo "            ";
        // line 107
        echo "        ";
        // line 108
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Ville"));
        echo "

        ";
        // line 111
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 115
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 120
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code_postale", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Code Postal"));
        echo "

        ";
        // line 123
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code_postale", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 127
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code_postale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 132
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Pays"));
        echo "

        ";
        // line 135
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 139
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 144
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Téléphone"));
        echo "

        ";
        // line 147
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 151
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 156
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Login"));
        echo "

        ";
        // line 159
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 163
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 168
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Email"));
        echo "

        ";
        // line 171
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 175
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    ";
        // line 194
        echo "    <div class=\"form-group\">
        ";
        // line 196
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotion", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Promotion AET"));
        echo "

        ";
        // line 199
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotion", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 203
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotion", array()), 'widget', array("simple_col" => 4));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 208
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activite_principale", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Activité Principale"));
        echo "

        ";
        // line 211
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activite_principale", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 215
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activite_principale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 220
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "whoami", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Description Personnelle"));
        echo "

        ";
        // line 223
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "whoami", array()), 'errors');
        echo "

        <div class=\"col-xs-5\">
            ";
        // line 227
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "whoami", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>



    <div class=\"aetregistration_submit\"><input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />  </div>
    ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    ";
        // line 236
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>

";
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
        return array (  399 => 236,  394 => 234,  383 => 227,  376 => 223,  370 => 220,  362 => 215,  355 => 211,  349 => 208,  341 => 203,  334 => 199,  328 => 196,  325 => 194,  318 => 175,  311 => 171,  305 => 168,  297 => 163,  290 => 159,  284 => 156,  276 => 151,  269 => 147,  263 => 144,  255 => 139,  248 => 135,  242 => 132,  234 => 127,  227 => 123,  221 => 120,  213 => 115,  206 => 111,  200 => 108,  198 => 107,  196 => 103,  194 => 99,  192 => 96,  184 => 91,  177 => 87,  171 => 84,  160 => 75,  153 => 71,  150 => 70,  140 => 62,  136 => 61,  125 => 54,  119 => 51,  111 => 46,  104 => 42,  98 => 39,  88 => 32,  81 => 28,  75 => 25,  68 => 21,  63 => 18,  57 => 15,  49 => 9,  46 => 8,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
