<?php

/* ::master.html.twig */
class __TwigTemplate_87a72d896b6162070f7e46a14ab80bcb24a8e0e9e7384908be5c44f561fd0715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'login' => array($this, 'block_login'),
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
            'orange' => array($this, 'block_orange'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />


    <title>AET PMS</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "

</head>
<body>
<div id=\"page\">
    <div id=\"sidebar\">
        <div id=\"logo\">
            <h1><a href=\"#\"></a></h1>
        </div>
        <!-- end header -->
        <div id=\"menu\">
            <ul>
\t\t\t\t<li class=\"first\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_homepage");
        echo "\">Accueil</a></li>
                <li class=\"first\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "presentation"));
        echo "\">Pr&eacute;sentation</a></li>
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "motpresident"));
        echo "\">Le Mot du Pr&eacute;sident</a></li>
                
\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "historiquepms"));
        echo "\">Le Prytan&eacute;e Militaire de Saint-Louis</a></li>
\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "missions"));
        echo "\">Nos missions</a></li>
\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "cotisations"));
        echo "\">Pourquoi cotiser ?</a></li>
\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "magazine"));
        echo "\">Magazine</a></li>
                ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_aetlist");
            echo "\">Annuaire</a></li>
                ";
        }
        // line 40
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_index");
        echo "\">Communauté</a></li>
\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "gouvernance"));
        echo "\">Gouvernance</a></li>
\t\t\t\t<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "statuts"));
        echo "\">Statuts</a></li>
                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_contact");
        echo "\">Contact</a></li>
                ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_search_index_aetusers");
            echo "\">Indexer les utilisateurs</a></li>
                    <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_search_index_erase_aetusers");
            echo "\">Vider l'index des utilisateurs</a></li>
                    <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_search_index_aetcommunications");
            echo "\">Indexer les communications</a></li>
                    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_search_index_erase_aetcommunications");
            echo "\">Vider l'index des communications</a></li>
                ";
        }
        // line 50
        echo "

            </ul>
        </div>
        <!-- end menu -->
        <div id=\"login\">
            ";
        // line 56
        $this->displayBlock('login', $context, $blocks);
        // line 77
        echo "        </div>
        ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 79
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 80
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
    </div>
    <!-- end sidebar -->
    <div id=\"content\">
        <div><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetannuaire/images/photo_couverture.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"740\" height=\"220\" /></div>
        <div id=\"content_wrapper\">
        ";
        // line 91
        $this->displayBlock('aet_annuaire_body', $context, $blocks);
        // line 93
        echo "        </div>
        ";
        // line 94
        $this->displayBlock('orange', $context, $blocks);
        // line 127
        echo "    </div>
    <!-- end content -->
    <div style=\"clear: both;\">&nbsp;</div>
</div>
<!-- end page -->
<div id=\"footer\">
    <p id=\"legal\">Tous droits r&eacute;serv&eacute;s&copy; Annuaire des Anciens Enfants de troupe PMS. Fait par <a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_homepage");
        echo "\">FoyerAetPMS</a>.</p>
    <p id=\"links\"><a href=\"#\">Mentions L&eacute;gales</a> | <a href=\"#\">Conditions d&#39;utilisations </a></p>
</div>
</body>
</html>
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" medial=\"all\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetannuaire/css/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"icon\" type=\"image/ico\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aetannuaire/images/favicon.ico"), "html", null, true);
        echo "\">
    ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "    ";
    }

    // line 56
    public function block_login($context, array $blocks = array())
    {
        // line 57
        echo "                <h2 class=\"title1\">Connexion AET</h2>
                ";
        // line 59
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => ((twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array())) . " ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array())))), "FOSUserBundle"), "html", null, true);
            echo "
                    </br>
                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_aetprofile_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                        Editer mon profil
                    </a>
                    |
                    <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                    ";
            // line 70
            echo "                ";
        } else {
            // line 71
            echo "                    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AetAnnuaireBundle:Default:LoginBis"));
            echo "

                    <h3 class=\"title1\"> <p><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">Mot de passe oublié?</a></h3><br />
                    <h2><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_register");
            echo "\">Inscription</a></h2>
                ";
        }
        // line 76
        echo "            ";
    }

    // line 91
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        // line 92
        echo "        ";
    }

    // line 94
    public function block_orange($context, array $blocks = array())
    {
        // line 95
        echo "        <!--
        <div class=\"boxed orange\">
            <div class=\"col-one\">
                <h2 class=\"title3\">Lorem Ipsum Dolorem</h2>
                <ul>
                    <li><a href=\"#\">Semper vestibulum</a></li>
                    <li><a href=\"#\">Vestibulum luctus</a></li>
                    <li><a href=\"#\">Integer rutrum</a></li>
                    <li><a href=\"#\">Etiam malesuada</a></li>
                    <li><a href=\"#\">Elementum facilisis</a></li>
                    <li><a href=\"#\">Ut tincidunt</a></li>
                    <li><a href=\"#\">Odio sagittis</a></li>
                </ul>
            </div>
            <div class=\"col-two\">
                <h2 class=\"title3\">Lorem Ipsum Dolorem</h2>
                <ul>
                    <li><a href=\"#\">Semper vestibulum</a></li>
                    <li><a href=\"#\">Vestibulum luctus</a></li>
                    <li><a href=\"#\">Integer rutrum</a></li>
                    <li><a href=\"#\">Etiam malesuada</a></li>
                    <li><a href=\"#\">Elementum facilisis</a></li>
                    <li><a href=\"#\">Ut tincidunt</a></li>
                    <li><a href=\"#\">Odio sagittis</a></li>
                </ul>
            </div>

            <div style=\"clear: both;\">&nbsp;</div>

        </div>
        -->
        ";
    }

    public function getTemplateName()
    {
        return "::master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 95,  291 => 94,  287 => 92,  284 => 91,  280 => 76,  275 => 74,  271 => 73,  265 => 71,  262 => 70,  257 => 67,  253 => 66,  246 => 62,  240 => 60,  237 => 59,  234 => 57,  231 => 56,  227 => 16,  224 => 15,  218 => 13,  214 => 12,  209 => 11,  206 => 10,  196 => 133,  188 => 127,  186 => 94,  183 => 93,  181 => 91,  176 => 89,  170 => 85,  164 => 84,  155 => 81,  150 => 80,  145 => 79,  141 => 78,  138 => 77,  136 => 56,  128 => 50,  123 => 48,  119 => 47,  115 => 46,  110 => 45,  108 => 44,  104 => 43,  100 => 42,  96 => 41,  91 => 40,  85 => 38,  83 => 37,  79 => 36,  75 => 35,  71 => 34,  67 => 33,  62 => 31,  58 => 30,  54 => 29,  40 => 17,  37 => 15,  35 => 10,  24 => 1,);
    }
}
