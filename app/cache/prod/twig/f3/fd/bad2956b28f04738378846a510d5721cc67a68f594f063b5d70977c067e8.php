<?php

/* AetAnnuaireBundle:Page:aetprofile.view.html.twig */
class __TwigTemplate_f3fdbad2956b28f04738378846a510d5721cc67a68f594f063b5d70977c067e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::master.html.twig", "AetAnnuaireBundle:Page:aetprofile.view.html.twig", 3);
        $this->blocks = array(
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

    // line 6
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetannuaire/css/aetprofileview.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <header>
        <h1 class=\"title2\">Annuaire AET</h1>
    </header>

    <div class=\"user_item\" >



        <div class=\"user_image\" >
            ";
        // line 22
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_aetprofile_view", array("id" => $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "id", array()))), "html", null, true);
        echo "\">
                <img
                        src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "image", array()), "webPath", array())), "html", null, true);
        echo "\"
                        alt=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "image", array()), "alt", array()), "html", null, true);
        echo "\"
                        />
            </a>
            ";
        // line 28
        if (($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            // line 29
            echo "                <div class=\"aet_profile_edition_below_image_area\">
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_aetprofile_edit", array("id" => $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
                        <i class=\"glyphicon glyphicon-edit\"></i>
                        Editer mon profil
                    </a>
                </div>
            ";
        }
        // line 36
        echo "            ";
        // line 40
        echo "        </div>





        <div class=\"user_first_name aet_metadata_block\" >
            <span class=\"aet_metadata\" >Prénom :</span> <span class=\"aet_data\" >";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "firstName", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"user_first_name aet_metadata_block\" >
            <span class=\"aet_metadata\" >Nom :</span> <span class=\"aet_data\" >";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "lastName", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"user_matricule aet_metadata_block\" >
            <span class=\"aet_metadata\" >Matricule :</span> <span class=\"aet_data\" >";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "matricule", array()), "html", null, true);
        echo "</span>
        </div>
      ";
        // line 58
        echo "        <div class=\"user_job aet_metadata_block\">
            <span class=\"aet_metadata\" >Activité principale :</span> <span class=\"aet_data\" >";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "activitePrincipale", array()), "html", null, true);
        echo "</span>
        </div>

        <div class=\"user_promotion aet_metadata_block\" >
            <span class=\"aet_metadata\" >Promotion :</span> <span class=\"aet_data\" >";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "promotion", array()), "Y"), "html", null, true);
        echo "</span>
        </div>





        <div class=\"user_address aet_metadata_block\">
            <span class=\"aet_metadata\" >Téléphone :</span> <span class=\"aet_data\" >";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "telephone", array()), "html", null, true);
        echo " </span>
        </div>
        <div class=\"user_postal_code aet_metadata_block\" >
            <span class=\"aet_metadata\" >Code postal :</span> <span class=\"aet_data\" >";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "codePostale", array()), "html", null, true);
        echo "</span>
        </div>

        <div class=\"user_city aet_metadata_block\">
            <span class=\"aet_metadata\" >Ville :</span> <span class=\"aet_data\" >";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "ville", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"user_country aet_metadata_block\">
            <span class=\"aet_metadata\" >Pays :</span> <span class=\"aet_data\" > ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('country_extension')->countryName($this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "pays", array())), "html", null, true);
        echo "</span>
        </div>


        ";
        // line 86
        echo "        <div class=\"user_whoAmI aet_metadata_block\" >


                <span class=\"aet_metadata\" >
                    Présentation :
                </span>


                <span class=\"aet_data\" >
                    ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aetUser"]) ? $context["aetUser"] : null), "whoami", array()), "html", null, true);
        echo "
                </span>

        </div>



    </div>

";
    }

    public function getTemplateName()
    {
        return "AetAnnuaireBundle:Page:aetprofile.view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 95,  153 => 86,  146 => 81,  140 => 78,  133 => 74,  127 => 71,  116 => 63,  109 => 59,  106 => 58,  101 => 53,  95 => 50,  89 => 47,  80 => 40,  78 => 36,  69 => 30,  66 => 29,  64 => 28,  58 => 25,  54 => 24,  48 => 22,  34 => 8,  31 => 7,  28 => 6,  11 => 3,);
    }
}
