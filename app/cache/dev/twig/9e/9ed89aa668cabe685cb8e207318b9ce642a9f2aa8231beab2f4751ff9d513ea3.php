<?php

/* ::master.html.twig */
class __TwigTemplate_803bc64c3f95777e65ca9ed96a0d4d93a784d282d4b3378eac23daddd4ce0819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'aet_annuaire_banner_section' => array($this, 'block_aet_annuaire_banner_section'),
            'aet_annuaire_body' => array($this, 'block_aet_annuaire_body'),
            'aet_annuaire_homepage_content' => array($this, 'block_aet_annuaire_homepage_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a06d93704be9fee0618894a5dceb733c30d4e8cc7312eabbee0b6fff51c9b78b = $this->env->getExtension("native_profiler");
        $__internal_a06d93704be9fee0618894a5dceb733c30d4e8cc7312eabbee0b6fff51c9b78b->enter($__internal_a06d93704be9fee0618894a5dceb733c30d4e8cc7312eabbee0b6fff51c9b78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::master.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> \t\t\t\t <html class=\"no-js lt-ie9\" lang=\"en\" > <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\" > <!--<![endif]-->

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Site Web des anciens enfants de troupe</title>

    <!--
    <link rel=\"stylesheet\" href=\"css/foundation.css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" media=\"screen\">-->


    <!-- <link rel=\"stylesheet\" href=\"css/animate-custom.css\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"css/style.css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"css/prettyPhoto.css\"> -->

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
    <!-- <script src=\"js/vendor/custom.modernizr.js\"></script> -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/custom.modernizr.js"), "html", null, true);
        echo "\"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <link rel=\"stylesheet\" href=\"css/ie8-hack.css\">
    <![endif]-->
</head>
<body>
<!-- Start: Wrapper -->
<div class=\"wrapper\">
    <!-- Start: Header -->
    <header id=\"header\">
        <div class=\"row\" >
            <nav class=\"top-bar\" >
                <ul class=\"title-area\">
                    <li class=\"name\">
                        <h1><a href=\"index.html\" class=\"logo\"><i class=\"icon-html5\"></i> Utlimate<span>Foundation</span></a></h1>
                    </li>
                    <li class=\"toggle-topbar\"><a href=\"#\"><i class=\"icon-reorder\"></i></a></li>
                </ul>
                <section class=\"top-bar-section\">
                    <ul class=\"right\">
                        <li class=\"active has-dropdown\"><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_homepage");
        echo "\">Pr&eacute;sentation de l'association</a>
                            <ul  class=\"dropdown\">
                                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "motpresident"));
        echo "\">Mot du Pr&eacute;sident</a></li>

                            </ul>
                        </li>
                        <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_page_view", array("urlId" => "actualites"));
        echo "\">Actualit&eacute;s</a></li>
                        ";
        // line 63
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 64
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_aetlist");
            echo "\">Annuaire</a></li>
                        ";
        }
        // line 66
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_index");
        echo "\">Communications</a></li>
                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("aet_annuaire_contact");
        echo "\">Contact</a></li>

                        ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 70
            echo "                            <li class=\"has-dropdown\"> <a href=\"#\" >Administration</a>
                                <ul  class=\"dropdown\">

                                    <li><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_search_index_aetusers");
            echo "\">Indexer les utilisateurs</a></li>
                                    <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_search_index_erase_aetusers");
            echo "\">Vider l'index des utilisateurs</a></li>
                                    <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_search_index_aetcommunications");
            echo "\">Indexer les communications</a></li>
                                    <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_communication_search_index_erase_aetcommunications");
            echo "\">Vider l'index des communications</a></li>

                                </ul>
                            </li>
                        ";
        }
        // line 81
        echo "
                        ";
        // line 82
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 83
            echo "                            <li class=\"has-dropdown\">
                                <a class=\"redNavElement\" href=\"#\">
                                    Connect&eacute;
                                    </a>
                                <ul  class=\"dropdown\">
                                    <li>
                                        <a class=\"redNavElement\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_aetprofile_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><!--<span style=\"position:relative;display:inline-block;max-width:180px;white-space: nowrap;overflow:hidden;text-overflow: ellipsis;\">-->
                                            ";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "  <!--</span>-->
                                        </a>
                                    </li>
                                    <li ><a class=\"redNavElement\" href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                            ";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                        </a></li>
                                </ul>
                            </li>

                            ";
            // line 100
            echo "                        ";
        } else {
            // line 101
            echo "                        <li class=\"has-dropdown\">
                            <a class=\"redNavElement\" href=\"#\">
                                Acc&egrave;s
                            </a>

                            <ul  class=\"dropdown\">
                                <li> <a class=\"redNavElement\" href=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_Login_disp");
            echo "\">Connexion </a></li>
                                <li ><a  class=\"redNavElement\" href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("aet_annuaire_register");
            echo "\"> Inscription </a></li>
                            </ul>

                        </li>

                        ";
        }
        // line 114
        echo "



                    </ul>
                </section>
            </nav>
        </div>
        <div style=\"float:right;position:relative;top:-35px;margin-right:10px;\">

        </div>
    </header>
    <!-- End: Header -->
    <!-- Start: Banner -->
    ";
        // line 128
        $this->displayBlock('aet_annuaire_banner_section', $context, $blocks);
        // line 130
        echo "




    <!-- End: Banner -->

    <div id=\"content\" class=\"row\">
     ";
        // line 139
        echo "        <div id=\"content_wrapper\" class=\"\">
            ";
        // line 140
        $this->displayBlock('aet_annuaire_body', $context, $blocks);
        // line 142
        echo "        </div>
    </div>


    ";
        // line 146
        $this->displayBlock('aet_annuaire_homepage_content', $context, $blocks);
        // line 148
        echo "
    <!-- Start:Footer-->
    <footer>

<!--

        <div class=\"row widgets-block\">
            <div class=\"small-12 large-3 column widget\">
                <h4 >Flickr Photostream</h4>
                <div class=\"flickr-widget\">
                    <script type=\"text/javascript\" src=\"http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=15817260@N02\"></script>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"small-12 large-3 column widget\">
                <h4 >Browse pages</h4>
                <ul class=\"link-list\">
                    <li><a href=\"#\">About our company</a></li>
                    <li><a href=\"#\">Our services</a></li>
                    <li><a href=\"#\">Meet our team</a></li>
                    <li><a href=\"#\">Explore our portfolio</a></li>
                    <li><a href=\"#\">Get in touch with us</a></li>
                </ul>
            </div>

            <div class=\"small-12 large-3 column widget\">
                <h4>Get in touch with us</h4>
                <p>
                    <strong>Red &amp; White Business, Inc. </strong><br />
                    775 Red building Ave, Suite B20 <br />
                    San Francisco, CA 94227. <br />
                </p>
                <p>
                    <i class=\"icon-phone\"></i> (123) 456-7890 <br>
                    <i class=\"icon-envelope-alt\"></i> email@domainname.com
                </p>
            </div>

            <div class=\"small-12 large-3 column widget\">
                <h4 class=\"title\">  Subscribe</h4>
                <p >
                    Lorem ipsum dolor sit amet, conafs
                    sectetur adipisicing elit, sed dofrt
                    Eiusmod tempor.
                </p>
                <form class=\"form-inline\">
                    <input type=\"text\" class=\"input-medium\" placeholder=\"Your email\">
                    &nbsp;<button type=\"submit\" class=\"small button secondary\">Subscribe</button>
                </form>
            </div>
        </div>-->

        <div id=\"social-links\" class=\"aligncenter\">
            <a href=\"\" class=\"up-arrow\"><i class=\"icon-angle-up\"></i></a>
            <div class=\"row\">
                <a href=\"#\"><i class=\"icon-facebook icon-circled icon-64\"></i></a>
                <a href=\"#\"><i class=\"icon-twitter icon-circled icon-64\"></i></a>
                <a href=\"#\"><i class=\"icon-google-plus icon-circled icon-64\"></i></a>
                <a href=\"#\"><i class=\"icon-linkedin icon-circled icon-64\"></i></a>
                <a href=\"#\"><i class=\"icon-pinterest icon-circled icon-64\"></i></a>
                <a href=\"#\"><i class=\"icon-tumblr-sign icon-circled icon-64\"></i></a>
                <a href=\"#\"><i class=\"icon-dribbble icon-circled icon-64\"></i></a>
            </div>
            <div class=\"copyrights\">
                &copy;2013 <a href=\"http://www.ad-says.com\" target=\"_blank\">AdSays Creation Pvt. Ltd.</a> All Rights Reserved.
            </div>

        </div>

    </footer>
    <!-- End:Footer-->
</div>
<!-- End: Wrapper -->

<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
<script>
    window.jQuery || document.write('<script src=\"js/vendor/jquery.js\"><\\/script>')
</script>
<!--<script src=\"js/foundation.min.js\"></script>
<script src=\"js/vendor/jquery.prettyPhoto.js\"></script>
<script src=\"js/custom.js\"></script>-->
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/foundation.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" >
    /*For photo Gallery*/
    \$(document).ready(function() {
        \$(\"a[data-link^='prettyPhoto']\").prettyPhoto({
            show_title : false, /* true/false */
            social_tools : false,
            hook : \"data-link\",
            overlay_gallery : false,
        });
    });
</script>

<script>
    \$(document).foundation();
</script>
</body>
</html>
";
        
        $__internal_a06d93704be9fee0618894a5dceb733c30d4e8cc7312eabbee0b6fff51c9b78b->leave($__internal_a06d93704be9fee0618894a5dceb733c30d4e8cc7312eabbee0b6fff51c9b78b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20e02731fd86765ced026def694e5ac70f9065e00f9af15541b8ad9c50514a04 = $this->env->getExtension("native_profiler");
        $__internal_20e02731fd86765ced026def694e5ac70f9065e00f9af15541b8ad9c50514a04->enter($__internal_20e02731fd86765ced026def694e5ac70f9065e00f9af15541b8ad9c50514a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" medial=\"all\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" medial=\"all\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" medial=\"all\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate-custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" medial=\"all\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" medial=\"all\"><link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" medial=\"all\">


        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/aetannuaire/css/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <!--[if IE 7]>
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome-ie7.min.css"), "html", null, true);
        echo "\">
        <![endif]-->
    ";
        
        $__internal_20e02731fd86765ced026def694e5ac70f9065e00f9af15541b8ad9c50514a04->leave($__internal_20e02731fd86765ced026def694e5ac70f9065e00f9af15541b8ad9c50514a04_prof);

    }

    // line 128
    public function block_aet_annuaire_banner_section($context, array $blocks = array())
    {
        $__internal_3c8825068ae8a6556dfbfb5cdd40a1c0484e8b820a714c25bfe6762580fcc012 = $this->env->getExtension("native_profiler");
        $__internal_3c8825068ae8a6556dfbfb5cdd40a1c0484e8b820a714c25bfe6762580fcc012->enter($__internal_3c8825068ae8a6556dfbfb5cdd40a1c0484e8b820a714c25bfe6762580fcc012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_banner_section"));

        // line 129
        echo "    ";
        
        $__internal_3c8825068ae8a6556dfbfb5cdd40a1c0484e8b820a714c25bfe6762580fcc012->leave($__internal_3c8825068ae8a6556dfbfb5cdd40a1c0484e8b820a714c25bfe6762580fcc012_prof);

    }

    // line 140
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        $__internal_008d6875bb012c742408c31efe24700ad5c3dee3ba7af40e256f7ab99bde073b = $this->env->getExtension("native_profiler");
        $__internal_008d6875bb012c742408c31efe24700ad5c3dee3ba7af40e256f7ab99bde073b->enter($__internal_008d6875bb012c742408c31efe24700ad5c3dee3ba7af40e256f7ab99bde073b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_body"));

        // line 141
        echo "            ";
        
        $__internal_008d6875bb012c742408c31efe24700ad5c3dee3ba7af40e256f7ab99bde073b->leave($__internal_008d6875bb012c742408c31efe24700ad5c3dee3ba7af40e256f7ab99bde073b_prof);

    }

    // line 146
    public function block_aet_annuaire_homepage_content($context, array $blocks = array())
    {
        $__internal_2f5da3e317029b09452f87aaef28c9251a9b66f074607a6c1a2d20aa7e1e6963 = $this->env->getExtension("native_profiler");
        $__internal_2f5da3e317029b09452f87aaef28c9251a9b66f074607a6c1a2d20aa7e1e6963->enter($__internal_2f5da3e317029b09452f87aaef28c9251a9b66f074607a6c1a2d20aa7e1e6963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aet_annuaire_homepage_content"));

        // line 147
        echo "    ";
        
        $__internal_2f5da3e317029b09452f87aaef28c9251a9b66f074607a6c1a2d20aa7e1e6963->leave($__internal_2f5da3e317029b09452f87aaef28c9251a9b66f074607a6c1a2d20aa7e1e6963_prof);

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
        return array (  438 => 147,  432 => 146,  425 => 141,  419 => 140,  412 => 129,  406 => 128,  396 => 29,  391 => 27,  383 => 24,  379 => 23,  375 => 22,  371 => 21,  366 => 20,  360 => 19,  333 => 232,  329 => 231,  325 => 230,  321 => 229,  238 => 148,  236 => 146,  230 => 142,  228 => 140,  225 => 139,  215 => 130,  213 => 128,  197 => 114,  188 => 108,  184 => 107,  176 => 101,  173 => 100,  165 => 94,  161 => 93,  155 => 90,  151 => 89,  143 => 83,  141 => 82,  138 => 81,  130 => 76,  126 => 75,  122 => 74,  118 => 73,  113 => 70,  111 => 69,  106 => 67,  101 => 66,  95 => 64,  93 => 63,  89 => 62,  82 => 58,  77 => 56,  52 => 34,  48 => 32,  46 => 19,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->*/
/* */
/* <head>*/
/*     <meta charset="utf-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*     <title>Site Web des anciens enfants de troupe</title>*/
/* */
/*     <!--*/
/*     <link rel="stylesheet" href="css/foundation.css" media="all" />*/
/*     <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">-->*/
/* */
/* */
/*     <!-- <link rel="stylesheet" href="css/animate-custom.css" media="screen"/>*/
/*     <link rel="stylesheet" href="css/style.css" media="all"/>*/
/*     <link rel="stylesheet" href="css/prettyPhoto.css"> -->*/
/* */
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" medial="all">*/
/*         <link href="{{ asset('css/foundation.css') }}" rel="stylesheet" medial="all">*/
/*         <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" medial="all">*/
/*         <link href="{{ asset('css/animate-custom.css') }}" rel="stylesheet" medial="all">*/
/*         <link href="{{ asset('css/style.css') }}" rel="stylesheet" medial="all"><link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" medial="all">*/
/* */
/* */
/*         <link rel="stylesheet" href="{{ asset('bundles/aetannuaire/css/default.css') }}" type="text/css" media="all" />*/
/*         <!--[if IE 7]>*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome-ie7.min.css') }}">*/
/*         <![endif]-->*/
/*     {% endblock %}*/
/* */
/*     <!-- <script src="js/vendor/custom.modernizr.js"></script> -->*/
/*     <script src="{{ asset('js/vendor/custom.modernizr.js') }}"></script>*/
/*     <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <link rel="stylesheet" href="css/ie8-hack.css">*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* <!-- Start: Wrapper -->*/
/* <div class="wrapper">*/
/*     <!-- Start: Header -->*/
/*     <header id="header">*/
/*         <div class="row" >*/
/*             <nav class="top-bar" >*/
/*                 <ul class="title-area">*/
/*                     <li class="name">*/
/*                         <h1><a href="index.html" class="logo"><i class="icon-html5"></i> Utlimate<span>Foundation</span></a></h1>*/
/*                     </li>*/
/*                     <li class="toggle-topbar"><a href="#"><i class="icon-reorder"></i></a></li>*/
/*                 </ul>*/
/*                 <section class="top-bar-section">*/
/*                     <ul class="right">*/
/*                         <li class="active has-dropdown"><a href="{{ path('aet_annuaire_homepage') }}">Pr&eacute;sentation de l'association</a>*/
/*                             <ul  class="dropdown">*/
/*                                 <li><a href="{{ path('aet_annuaire_page_view', {'urlId': 'motpresident'}) }}">Mot du Pr&eacute;sident</a></li>*/
/* */
/*                             </ul>*/
/*                         </li>*/
/*                         <li><a href="{{ path('aet_annuaire_page_view', {'urlId': 'actualites'}) }}">Actualit&eacute;s</a></li>*/
/*                         {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                             <li><a href="{{ path('aet_annuaire_aetlist') }}">Annuaire</a></li>*/
/*                         {% endif %}*/
/*                         <li><a href="{{ path('aet_annuaire_communication_index') }}">Communications</a></li>*/
/*                         <li><a href="{{ path('aet_annuaire_contact') }}">Contact</a></li>*/
/* */
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/*                             <li class="has-dropdown"> <a href="#" >Administration</a>*/
/*                                 <ul  class="dropdown">*/
/* */
/*                                     <li><a href="{{ path('aet_annuaire_search_index_aetusers') }}">Indexer les utilisateurs</a></li>*/
/*                                     <li><a href="{{ path('aet_annuaire_search_index_erase_aetusers') }}">Vider l'index des utilisateurs</a></li>*/
/*                                     <li><a href="{{ path('aet_annuaire_communication_search_index_aetcommunications') }}">Indexer les communications</a></li>*/
/*                                     <li><a href="{{ path('aet_annuaire_communication_search_index_erase_aetcommunications') }}">Vider l'index des communications</a></li>*/
/* */
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif %}*/
/* */
/*                         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                             <li class="has-dropdown">*/
/*                                 <a class="redNavElement" href="#">*/
/*                                     Connect&eacute;*/
/*                                     </a>*/
/*                                 <ul  class="dropdown">*/
/*                                     <li>*/
/*                                         <a class="redNavElement" href="{{ path('aet_annuaire_aetprofile_view', {'id': app.user.id}) }}"><!--<span style="position:relative;display:inline-block;max-width:180px;white-space: nowrap;overflow:hidden;text-overflow: ellipsis;">-->*/
/*                                             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}  <!--</span>-->*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li ><a class="redNavElement" href="{{ path('fos_user_security_logout') }}">*/
/*                                             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                                         </a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                             {# si sinon on affiche le résultat de "LoginBisAction" #}*/
/*                         {% else %}*/
/*                         <li class="has-dropdown">*/
/*                             <a class="redNavElement" href="#">*/
/*                                 Acc&egrave;s*/
/*                             </a>*/
/* */
/*                             <ul  class="dropdown">*/
/*                                 <li> <a class="redNavElement" href="{{ path('aet_annuaire_Login_disp') }}">Connexion </a></li>*/
/*                                 <li ><a  class="redNavElement" href="{{ path('aet_annuaire_register') }}"> Inscription </a></li>*/
/*                             </ul>*/
/* */
/*                         </li>*/
/* */
/*                         {% endif %}*/
/* */
/* */
/* */
/* */
/*                     </ul>*/
/*                 </section>*/
/*             </nav>*/
/*         </div>*/
/*         <div style="float:right;position:relative;top:-35px;margin-right:10px;">*/
/* */
/*         </div>*/
/*     </header>*/
/*     <!-- End: Header -->*/
/*     <!-- Start: Banner -->*/
/*     {% block aet_annuaire_banner_section %}*/
/*     {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/*     <!-- End: Banner -->*/
/* */
/*     <div id="content" class="row">*/
/*      {# <div><img src="{{ asset('bundles/aetannuaire/images/photo_couverture.jpg') }}" alt="" width="740" height="220" /></div>#}*/
/*         <div id="content_wrapper" class="">*/
/*             {% block aet_annuaire_body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     {% block aet_annuaire_homepage_content %}*/
/*     {% endblock %}*/
/* */
/*     <!-- Start:Footer-->*/
/*     <footer>*/
/* */
/* <!--*/
/* */
/*         <div class="row widgets-block">*/
/*             <div class="small-12 large-3 column widget">*/
/*                 <h4 >Flickr Photostream</h4>*/
/*                 <div class="flickr-widget">*/
/*                     <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=15817260@N02"></script>*/
/*                     <div class="clear"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="small-12 large-3 column widget">*/
/*                 <h4 >Browse pages</h4>*/
/*                 <ul class="link-list">*/
/*                     <li><a href="#">About our company</a></li>*/
/*                     <li><a href="#">Our services</a></li>*/
/*                     <li><a href="#">Meet our team</a></li>*/
/*                     <li><a href="#">Explore our portfolio</a></li>*/
/*                     <li><a href="#">Get in touch with us</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="small-12 large-3 column widget">*/
/*                 <h4>Get in touch with us</h4>*/
/*                 <p>*/
/*                     <strong>Red &amp; White Business, Inc. </strong><br />*/
/*                     775 Red building Ave, Suite B20 <br />*/
/*                     San Francisco, CA 94227. <br />*/
/*                 </p>*/
/*                 <p>*/
/*                     <i class="icon-phone"></i> (123) 456-7890 <br>*/
/*                     <i class="icon-envelope-alt"></i> email@domainname.com*/
/*                 </p>*/
/*             </div>*/
/* */
/*             <div class="small-12 large-3 column widget">*/
/*                 <h4 class="title">  Subscribe</h4>*/
/*                 <p >*/
/*                     Lorem ipsum dolor sit amet, conafs*/
/*                     sectetur adipisicing elit, sed dofrt*/
/*                     Eiusmod tempor.*/
/*                 </p>*/
/*                 <form class="form-inline">*/
/*                     <input type="text" class="input-medium" placeholder="Your email">*/
/*                     &nbsp;<button type="submit" class="small button secondary">Subscribe</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>-->*/
/* */
/*         <div id="social-links" class="aligncenter">*/
/*             <a href="" class="up-arrow"><i class="icon-angle-up"></i></a>*/
/*             <div class="row">*/
/*                 <a href="#"><i class="icon-facebook icon-circled icon-64"></i></a>*/
/*                 <a href="#"><i class="icon-twitter icon-circled icon-64"></i></a>*/
/*                 <a href="#"><i class="icon-google-plus icon-circled icon-64"></i></a>*/
/*                 <a href="#"><i class="icon-linkedin icon-circled icon-64"></i></a>*/
/*                 <a href="#"><i class="icon-pinterest icon-circled icon-64"></i></a>*/
/*                 <a href="#"><i class="icon-tumblr-sign icon-circled icon-64"></i></a>*/
/*                 <a href="#"><i class="icon-dribbble icon-circled icon-64"></i></a>*/
/*             </div>*/
/*             <div class="copyrights">*/
/*                 &copy;2013 <a href="http://www.ad-says.com" target="_blank">AdSays Creation Pvt. Ltd.</a> All Rights Reserved.*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </footer>*/
/*     <!-- End:Footer-->*/
/* </div>*/
/* <!-- End: Wrapper -->*/
/* */
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>*/
/* <script>*/
/*     window.jQuery || document.write('<script src="js/vendor/jquery.js"><\/script>')*/
/* </script>*/
/* <!--<script src="js/foundation.min.js"></script>*/
/* <script src="js/vendor/jquery.prettyPhoto.js"></script>*/
/* <script src="js/custom.js"></script>-->*/
/* <script src="{{ asset('js/foundation.min.js') }}"></script>*/
/* <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>*/
/* <script src="{{ asset('js/custom.js') }}"></script>*/
/* <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/* */
/* <script type="text/javascript" >*/
/*     /*For photo Gallery*//* */
/*     $(document).ready(function() {*/
/*         $("a[data-link^='prettyPhoto']").prettyPhoto({*/
/*             show_title : false, /* true/false *//* */
/*             social_tools : false,*/
/*             hook : "data-link",*/
/*             overlay_gallery : false,*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* <script>*/
/*     $(document).foundation();*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
