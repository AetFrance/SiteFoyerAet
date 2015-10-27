<?php

/* AetCommunicationBundle:Communication:communicationlist.html.twig */
class __TwigTemplate_62b30003d2b8fe95f9ed547dcb844e1bfe062b8959ea5862a03ca3cc40c36e83 extends Twig_Template
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
        // line 1
        echo "<div class=\"communication_list_count\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
        echo " communication(s) trouvée(s)
</div>

";
        // line 11
        echo "
<div class=\"communication_list_pagination\">
    ";
        // line 13
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
</div>

";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
            // line 17
            echo "    <div class=\"communication_item\" >
        <table>
            <tr>
                <td valign=\"top\">

                    <div class=\"communication_user_and_date\" >
                        <div class=\"communication_user_image\" >
                            ";
            // line 27
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_communication_view", array("id" => $this->getAttribute($context["communication"], "id", array()))), "html", null, true);
            echo "\">
                                <img
                                  src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["communication"], "image", array()), "webPath", array())), "html", null, true);
            echo "\"
                                  alt=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["communication"], "image", array()), "alt", array()), "html", null, true);
            echo "\"
                                />
                            </a>
                        </div>
                        <div class=\"communication_user_name\"><i>Par ";
            // line 34
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["communication"], "user", array()), "firstName", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["communication"], "user", array()), "lastName", array())), "html", null, true);
            echo "</i></div>
                        <div class=\"communication_date\"><i>Le ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["communication"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</i></div>
                    </div>

                </td>
                <td valign=\"top\">
                    <div class=\"communication_title\" >
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_communication_view", array("id" => $this->getAttribute($context["communication"], "id", array()))), "html", null, true);
            echo "\">";
            echo (((twig_length_filter($this->env, $this->getAttribute($context["communication"], "title", array())) > 80)) ? ((twig_slice($this->env, $this->getAttribute($context["communication"], "title", array()), 0, 80) . "...")) : ($this->getAttribute($context["communication"], "title", array())));
            echo "</a>
                    </div>
                    <div class=\"communication_body\" >
                        ";
            // line 45
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["communication"], "shortDesc", array()), "html", null, true);
            echo "
                    </div>
                </td>
            </tr>


        </table>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['communication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 56
        echo "<div class=\"communication_list_pagination\">
    ";
        // line 57
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "AetCommunicationBundle:Communication:communicationlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 57,  110 => 56,  107 => 54,  91 => 45,  83 => 41,  74 => 35,  68 => 34,  61 => 30,  57 => 29,  51 => 27,  42 => 17,  38 => 16,  32 => 13,  28 => 11,  22 => 2,  19 => 1,);
    }
}
