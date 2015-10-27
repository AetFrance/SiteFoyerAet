<?php

/* AetAnnuaireBundle:Page:aetlist.html.twig */
class __TwigTemplate_975359472dcd67137a30d66f76dbeb1e43c04951f12f1999a786ef2624499633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::master.html.twig", "AetAnnuaireBundle:Page:aetlist.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'button_widget' => array($this, 'block_button_widget'),
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->env->getExtension('form')->renderer->setTheme((isset($context["searchForm"]) ? $context["searchForm"] : null), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Annuaire";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_button_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 16
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 17
            echo "        ";
        }
        // line 18
        echo "        <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo "><span class=\"btn-label\"><i class=\"glyphicon glyphicon-search\"></i></span></button>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 23
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        // line 24
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetannuaire/css/userList.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <div class=\"header-wrapper\">
    <header>


        <div class=\"aet-annuaire-search-box\" > ";
        // line 31
        echo "

        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 36
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'errors');
        echo "
        <div class=\"col-xs-6\" >
            ";
        // line 39
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "searchText", array()), 'widget', array("attr" => array("class" => "aet-annuaire-search-textbox")));
        echo "
        </div>
        <span class=\"aet-annuaire-search-submit\" >
            ";
        // line 43
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["searchForm"]) ? $context["searchForm"] : null), "search", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        </span>
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'rest');
        echo "


        ";
        // line 49
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["searchForm"]) ? $context["searchForm"] : null), 'form_end');
        echo "
        </div>
        <h1 class=\"title2\" >Annuaire AET</h1>
    </header>
    </div>

<div class=\"user_list_count\">
    ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
        echo " ancien(s) enfant(s) de troupe trouvé(s)
</div>

";
        // line 74
        echo "
<div class=\"communication_list_pagination\">
    ";
        // line 76
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
</div>

";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["aetUser"]) {
            // line 80
            if ((($this->getAttribute($context["aetUser"], "firstName", array()) != "aetpms1") && ($this->getAttribute($context["aetUser"], "enabled", array()) != false))) {
                // line 81
                echo "    <div class=\"user_item\" >
        <table>
            <tr>
                <td valign=\"top\" class=\"user_image_cell\">


                    <div class=\"user_image\" >
                        ";
                // line 91
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_aetprofile_view", array("id" => $this->getAttribute($context["aetUser"], "id", array()))), "html", null, true);
                echo "\">
                            <img
                                    src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["aetUser"], "image", array()), "webPath", array())), "html", null, true);
                echo "\"
                                    alt=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["aetUser"], "image", array()), "alt", array()), "html", null, true);
                echo "\"
                                    />
                        </a>
                        ";
                // line 101
                echo "                    </div>



                </td>
                <td valign=\"top\" class=\"user_miscellaneous_info_cell\">
                    <div class=\"user_miscellaneous_info\" >
                        <div class=\"user_first_name\" >
                            <span class=\"aet_metadata\" >Prénom :</span> <span class=\"aet_data\" >";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "firstName", array()), "html", null, true);
                echo "</span>
                        </div>
                        <div class=\"user_first_name\" >
                            <span class=\"aet_metadata\" >Nom :</span> <span class=\"aet_data\" >";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "lastName", array()), "html", null, true);
                echo "</span>
                        </div>
                        <div class=\"user_matricule\" >
                            <span class=\"aet_metadata\" >Matricule :</span> <span class=\"aet_data\" >";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "matricule", array()), "html", null, true);
                echo "</span>
                        </div>
                      ";
                // line 120
                echo "                        <div class=\"user_job\">
                            <span class=\"aet_metadata\" >Activité principale :</span> <span class=\"aet_data\" >";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "activitePrincipale", array()), "html", null, true);
                echo "</span>
                        </div>

                        <div class=\"user_matricule\" >
                            <span class=\"aet_metadata\" >Promotion :</span> <span class=\"aet_data\" >";
                // line 125
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aetUser"], "promotion", array()), "Y"), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                </td>
                <td valign=\"top\">
                    <div class=\"user_other_miscellaneous_info\" >
                        <div class=\"user_address\">
                            <span class=\"aet_metadata\" >Téléphone :</span> <span class=\"aet_data\" >";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "telephone", array()), "html", null, true);
                echo " </span>
                        </div>
                        <div class=\"user_postal_code\" >
                            <span class=\"aet_metadata\" >Code postal :</span> <span class=\"aet_data\" >";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "codePostale", array()), "html", null, true);
                echo "</span>
                        </div>

                        <div class=\"user_city\">
                            <span class=\"aet_metadata\" >Ville :</span> <span class=\"aet_data\" >";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["aetUser"], "ville", array()), "html", null, true);
                echo "</span>
                        </div>
                        <div class=\"user_country\">
                            <span class=\"aet_metadata\" >Pays :</span> <span class=\"aet_data\" >";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('country_extension')->countryName($this->getAttribute($context["aetUser"], "pays", array())), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    ";
                // line 148
                echo "                    ";
                // line 161
                echo "                </td>

            </tr>


        </table>
    </div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aetUser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "
";
        // line 172
        echo "<div class=\"communication_list_pagination\">
    ";
        // line 173
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
</div>

";
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
        return array (  276 => 173,  273 => 172,  270 => 170,  256 => 161,  254 => 148,  247 => 143,  241 => 140,  234 => 136,  228 => 133,  217 => 125,  210 => 121,  207 => 120,  202 => 115,  196 => 112,  190 => 109,  180 => 101,  174 => 94,  170 => 93,  164 => 91,  155 => 81,  153 => 80,  149 => 79,  143 => 76,  139 => 74,  133 => 56,  122 => 49,  116 => 45,  110 => 43,  103 => 39,  97 => 36,  92 => 33,  88 => 31,  78 => 24,  75 => 23,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  53 => 14,  50 => 13,  43 => 8,  40 => 7,  34 => 5,  30 => 1,  28 => 11,  11 => 1,);
    }
}
