<?php

/* FOSCommentBundle:Thread:async.html.twig */
class __TwigTemplate_06d495ef067043b2736a37b5f2ea334696c6cffe3f71e3ff06dc5fb2e237913e extends Twig_Template
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
        $__internal_4eb0da0d97afeda483b6a21c8e59d692649ab72abfe29bdc670e913aa1891733 = $this->env->getExtension("native_profiler");
        $__internal_4eb0da0d97afeda483b6a21c8e59d692649ab72abfe29bdc670e913aa1891733->enter($__internal_4eb0da0d97afeda483b6a21c8e59d692649ab72abfe29bdc670e913aa1891733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:async.html.twig"));

        // line 11
        echo "
<div id=\"fos_comment_thread\"></div>

";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "35a8e64_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35a8e64_0") : $this->env->getExtension('asset')->getAssetUrl("js/35a8e64_comments_1.js");
            // line 15
            echo "<script type=\"text/javascript\">
// thread id
var fos_comment_thread_id = '";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "';

// api base url to use for initial requests
var fos_comment_thread_api_base_url = '";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_comment_get_threads");
            echo "';

// Snippet for asynchronously loading the comments
(function() {
    var fos_comment_script = document.createElement('script');
    fos_comment_script.async = true;
    fos_comment_script.src = '";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "';
    fos_comment_script.type = 'text/javascript';

    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
})();
</script>
";
        } else {
            // asset "35a8e64"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35a8e64") : $this->env->getExtension('asset')->getAssetUrl("js/35a8e64.js");
            // line 15
            echo "<script type=\"text/javascript\">
// thread id
var fos_comment_thread_id = '";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "';

// api base url to use for initial requests
var fos_comment_thread_api_base_url = '";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_comment_get_threads");
            echo "';

// Snippet for asynchronously loading the comments
(function() {
    var fos_comment_script = document.createElement('script');
    fos_comment_script.async = true;
    fos_comment_script.src = '";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "';
    fos_comment_script.type = 'text/javascript';

    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
})();
</script>
";
        }
        unset($context["asset_url"]);
        
        $__internal_4eb0da0d97afeda483b6a21c8e59d692649ab72abfe29bdc670e913aa1891733->leave($__internal_4eb0da0d97afeda483b6a21c8e59d692649ab72abfe29bdc670e913aa1891733_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  72 => 20,  66 => 17,  62 => 15,  50 => 26,  41 => 20,  35 => 17,  31 => 15,  27 => 14,  22 => 11,);
    }
}
/* {#*/
/* */
/*  This file is part of the FOSCommentBundle package.*/
/* */
/*  (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>*/
/* */
/*  This source file is subject to the MIT license that is bundled*/
/*  with this source code in the file LICENSE.*/
/* */
/* #}*/
/* */
/* <div id="fos_comment_thread"></div>*/
/* */
/* {% javascripts '@FOSCommentBundle/Resources/assets/js/comments.js' %}*/
/* <script type="text/javascript">*/
/* // thread id*/
/* var fos_comment_thread_id = '{{ id }}';*/
/* */
/* // api base url to use for initial requests*/
/* var fos_comment_thread_api_base_url = '{{ path('fos_comment_get_threads') }}';*/
/* */
/* // Snippet for asynchronously loading the comments*/
/* (function() {*/
/*     var fos_comment_script = document.createElement('script');*/
/*     fos_comment_script.async = true;*/
/*     fos_comment_script.src = '{{ asset_url }}';*/
/*     fos_comment_script.type = 'text/javascript';*/
/* */
/*     (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);*/
/* })();*/
/* </script>*/
/* {% endjavascripts %}*/
/* */
