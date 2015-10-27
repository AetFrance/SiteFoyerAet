<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9a3e76fe2077282462aeeec44f673da859471443d62117d4fd67faab969a12b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::master.html.twig", "FOSUserBundle:Registration:register.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
            'orange' => array($this, 'block_orange'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inscription";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        // line 10
        echo "


    <header>
        <h1 class=\"title2\">Inscription AET</h1>
    </header>

    <div class=\"well\" >

        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\" >
            <div class=\"form-group\">
                ";
        // line 22
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Prénom"));
        echo "

                ";
        // line 25
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 29
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 34
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Nom"));
        echo "

                ";
        // line 37
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 41
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 46
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Photo"));
        echo "

                ";
        // line 49
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 53
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'widget', array("simple_col" => 4));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 58
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricule", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Matricule"));
        echo "

                ";
        // line 61
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricule", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 65
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 70
        echo "             ";
        // line 73
        echo "                ";
        // line 77
        echo "                ";
        // line 81
        echo "                ";
        // line 82
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Ville"));
        echo "

                ";
        // line 85
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 89
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 94
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Pays"));
        echo "

                ";
        // line 97
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 101
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 106
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code_postale", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Code Postal"));
        echo "

                ";
        // line 109
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code_postale", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 113
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "code_postale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 118
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Téléphone"));
        echo "

                ";
        // line 121
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 125
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 130
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Login"));
        echo "

                ";
        // line 133
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 137
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 142
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Email"));
        echo "

                ";
        // line 145
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 149
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'errors');
        echo "
                ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Mot de passe"));
        echo "
                <div class=\"col-xs-5\">
                    ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'errors');
        echo "
                ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Confirmez le Mot de passe"));
        echo "
                <div class=\"col-xs-5\">
                    ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 168
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotion", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Promotion"));
        echo "

                ";
        // line 171
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotion", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 175
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "promotion", array()), 'widget', array("simple_col" => 4));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 180
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activite_principale", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Activité Principale"));
        echo "

                ";
        // line 183
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activite_principale", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 187
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activite_principale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 192
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "whoami", array()), 'label', array("label_attr" => array("class" => "col-xs-3 control-label"), "label" => "Description Personnelle"));
        echo "

                ";
        // line 195
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "whoami", array()), 'errors');
        echo "

                <div class=\"col-xs-5\">
                    ";
        // line 199
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "whoami", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>



            <div class=\"aetregistration_submit\"><input type=\"submit\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />  </div>
            ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </form>

    </div>
";
    }

    // line 211
    public function block_orange($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 211,  387 => 206,  383 => 205,  373 => 199,  366 => 195,  360 => 192,  352 => 187,  345 => 183,  339 => 180,  331 => 175,  324 => 171,  318 => 168,  311 => 163,  306 => 161,  302 => 160,  295 => 156,  290 => 154,  286 => 153,  278 => 149,  271 => 145,  265 => 142,  257 => 137,  250 => 133,  244 => 130,  236 => 125,  229 => 121,  223 => 118,  215 => 113,  208 => 109,  202 => 106,  194 => 101,  187 => 97,  181 => 94,  173 => 89,  166 => 85,  160 => 82,  158 => 81,  156 => 77,  154 => 73,  152 => 70,  144 => 65,  137 => 61,  131 => 58,  123 => 53,  116 => 49,  110 => 46,  102 => 41,  95 => 37,  89 => 34,  81 => 29,  74 => 25,  68 => 22,  61 => 19,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 2,);
    }
}
