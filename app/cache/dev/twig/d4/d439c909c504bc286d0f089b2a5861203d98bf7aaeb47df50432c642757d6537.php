<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_221990d8b7f5e8973a3f67b73e8eb6323e65fb557d1a49dc9cd11243d30ecfbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4050cd964e0c9147f16f2cfd2cd128f8758c5ac26f031b308d1cde5702951475 = $this->env->getExtension("native_profiler");
        $__internal_4050cd964e0c9147f16f2cfd2cd128f8758c5ac26f031b308d1cde5702951475->enter($__internal_4050cd964e0c9147f16f2cfd2cd128f8758c5ac26f031b308d1cde5702951475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        
        $__internal_4050cd964e0c9147f16f2cfd2cd128f8758c5ac26f031b308d1cde5702951475->leave($__internal_4050cd964e0c9147f16f2cfd2cd128f8758c5ac26f031b308d1cde5702951475_prof);

    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_7afc194b4a91368d52cbca07093ff624595b7867c98779db2d19bc0e6a6319ca = $this->env->getExtension("native_profiler");
        $__internal_7afc194b4a91368d52cbca07093ff624595b7867c98779db2d19bc0e6a6319ca->enter($__internal_7afc194b4a91368d52cbca07093ff624595b7867c98779db2d19bc0e6a6319ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable"))) {
            // line 5
            echo "        ";
            if ((isset($context["autoload"]) ? $context["autoload"] : $this->getContext($context, "autoload"))) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo $this->env->getExtension('ivory_ckeditor')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")));
                echo "\";
            </script>
            <script type=\"text/javascript\" src=\"";
                // line 9
                echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")));
                echo "\"></script>
        ";
            }
            // line 11
            echo "        <script type=\"text/javascript\">
            ";
            // line 12
            echo $this->env->getExtension('ivory_ckeditor')->renderDestroy((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            echo "

            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 15
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderPlugin($context["plugin_name"], $context["plugin"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 19
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderStylesSet($context["style_name"], $context["style"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 23
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderTemplate($context["template_name"], $context["template"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
            ";
            // line 26
            echo $this->env->getExtension('ivory_ckeditor')->renderReplace((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
            echo "
        </script>
    ";
        }
        
        $__internal_7afc194b4a91368d52cbca07093ff624595b7867c98779db2d19bc0e6a6319ca->leave($__internal_7afc194b4a91368d52cbca07093ff624595b7867c98779db2d19bc0e6a6319ca_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  114 => 25,  105 => 23,  101 => 22,  98 => 21,  89 => 19,  85 => 18,  82 => 17,  73 => 15,  69 => 14,  64 => 12,  61 => 11,  56 => 9,  51 => 7,  48 => 6,  45 => 5,  43 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block ckeditor_widget %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* */
/*     {% if enable %}*/
/*         {% if autoload %}*/
/*             <script type="text/javascript">*/
/*                 var CKEDITOR_BASEPATH = "{{ ckeditor_base_path(base_path) }}";*/
/*             </script>*/
/*             <script type="text/javascript" src="{{ ckeditor_js_path(js_path) }}"></script>*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             {{ ckeditor_destroy(id) }}*/
/* */
/*             {% for plugin_name, plugin in plugins %}*/
/*                 {{ ckeditor_plugin(plugin_name, plugin) }}*/
/*             {% endfor %}*/
/* */
/*             {% for style_name, style in styles %}*/
/*                 {{ ckeditor_styles_set(style_name, style) }}*/
/*             {% endfor %}*/
/* */
/*             {% for template_name, template in templates %}*/
/*                 {{ ckeditor_template(template_name, template) }}*/
/*             {% endfor %}*/
/* */
/*             {{ ckeditor_replace(id, config) }}*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
