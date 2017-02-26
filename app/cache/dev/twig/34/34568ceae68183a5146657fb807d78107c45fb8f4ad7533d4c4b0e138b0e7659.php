<?php

/* AetCommunicationBundle:Communication:communicationlist.html.twig */
class __TwigTemplate_2bec744f77f5a9bac96c41bb9cf6c6e399e263bed9866403b482df20d695d317 extends Twig_Template
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
        $__internal_2d89cf40dbe18ae1fbdf442cb114408b9a0b1fdb4105a9e527a86e6256801141 = $this->env->getExtension("native_profiler");
        $__internal_2d89cf40dbe18ae1fbdf442cb114408b9a0b1fdb4105a9e527a86e6256801141->enter($__internal_2d89cf40dbe18ae1fbdf442cb114408b9a0b1fdb4105a9e527a86e6256801141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AetCommunicationBundle:Communication:communicationlist.html.twig"));

        // line 1
        echo "<div class=\"communication_list_count\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " communication(s) trouvée(s)
</div>

";
        // line 11
        echo "
<div class=\"communication_list_pagination\">
    ";
        // line 13
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>

";
        // line 51
        echo "
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
            // line 53
            echo "    <div class=\"communication_item\" >

            <div class=\"row\">
                <div class=\"col-md-1\">

                    <div class=\"communication_user_and_date\" >
                        <div class=\"communication_user_image\" >

                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_communication_view", array("id" => $this->getAttribute($context["communication"], "id", array()))), "html", null, true);
            echo "\">
                                <img
                                  src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["communication"], "image", array()), "webPath", array())), "html", null, true);
            echo "\"
                                  alt=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["communication"], "image", array()), "alt", array()), "html", null, true);
            echo "\"
                                />
                            </a>
                        </div>
                        <div class=\"communication_user_name\"><i>Par ";
            // line 68
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["communication"], "user", array()), "firstName", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["communication"], "user", array()), "lastName", array())), "html", null, true);
            echo "</i></div>
                        <div class=\"communication_date\"><i>Le ";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["communication"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</i></div>
                    </div>

                </div>
                <div class=\"col-md-9\">
                    <div class=\"communication_title\" >
                        <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aet_annuaire_communication_view", array("id" => $this->getAttribute($context["communication"], "id", array()))), "html", null, true);
            echo "\">";
            echo (((twig_length_filter($this->env, $this->getAttribute($context["communication"], "title", array())) > 80)) ? ((twig_slice($this->env, $this->getAttribute($context["communication"], "title", array()), 0, 80) . "...")) : ($this->getAttribute($context["communication"], "title", array())));
            echo "</a>
                    </div>
                    <div class=\"communication_body\" >
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["communication"], "shortDesc", array()), "html", null, true);
            echo "
                    </div>
                </div>
            </div>



    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['communication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
";
        // line 89
        echo "<div class=\"communication_list_pagination\">
    ";
        // line 90
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>";
        
        $__internal_2d89cf40dbe18ae1fbdf442cb114408b9a0b1fdb4105a9e527a86e6256801141->leave($__internal_2d89cf40dbe18ae1fbdf442cb114408b9a0b1fdb4105a9e527a86e6256801141_prof);

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
        return array (  118 => 90,  115 => 89,  112 => 87,  97 => 78,  89 => 75,  80 => 69,  74 => 68,  67 => 64,  63 => 63,  58 => 61,  48 => 53,  44 => 52,  41 => 51,  35 => 13,  31 => 11,  25 => 2,  22 => 1,);
    }
}
/* <div class="communication_list_count">*/
/*     {{ pagination.getTotalItemCount }} communication(s) trouvée(s)*/
/* </div>*/
/* */
/* {# sorting of properties based on query components*/
/* <div>*/
/* */
/*     <div>{{ knp_pagination_sortable(pagination, 'Id', 'c.id') }}</div>*/
/*     <div{% if pagination.isSorted('a.Title') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'c.title') }}</div>*/
/* </div>#}*/
/* */
/* <div class="communication_list_pagination">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
/* */
/* {#% for communication in pagination %}*/
/*     <div class="communication_item" >*/
/*         <table>*/
/*             <tr>*/
/*                 <td valign="top">*/
/* */
/*                     <div class="communication_user_and_date" >*/
/*                         <div class="communication_user_image" >*/
/* */
/*                             <a href="{{ path('aet_annuaire_communication_view', {'id': communication.id}) }}">*/
/*                                 <img*/
/*                                   src="{{ asset(communication.image.webPath) }}"*/
/*                                   alt="{{ communication.image.alt }}"*/
/*                                 />*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="communication_user_name"><i>Par {{ communication.user.firstName | capitalize }} {{ communication.user.lastName | upper }}</i></div>*/
/*                         <div class="communication_date"><i>Le {{ communication.date|date('d/m/Y') }}</i></div>*/
/*                     </div>*/
/* */
/*                 </td>*/
/*                 <td valign="top">*/
/*                     <div class="communication_title" >*/
/*                         <a href="{{ path('aet_annuaire_communication_view', {'id': communication.id}) }}">{{ communication.title|length > 80 ? (communication.title|slice(0, 80) ~ '...')|raw : (communication.title|raw) }}</a>*/
/*                     </div>*/
/*                     <div class="communication_body" >*/
/*                         {{ communication.shortDesc }}*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/* */
/* */
/*         </table>*/
/*     </div>*/
/* {% endfor %#}*/
/* */
/* {% for communication in pagination %}*/
/*     <div class="communication_item" >*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-1">*/
/* */
/*                     <div class="communication_user_and_date" >*/
/*                         <div class="communication_user_image" >*/
/* */
/*                             <a href="{{ path('aet_annuaire_communication_view', {'id': communication.id}) }}">*/
/*                                 <img*/
/*                                   src="{{ asset(communication.image.webPath) }}"*/
/*                                   alt="{{ communication.image.alt }}"*/
/*                                 />*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="communication_user_name"><i>Par {{ communication.user.firstName | capitalize }} {{ communication.user.lastName | upper }}</i></div>*/
/*                         <div class="communication_date"><i>Le {{ communication.date|date('d/m/Y') }}</i></div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="col-md-9">*/
/*                     <div class="communication_title" >*/
/*                         <a href="{{ path('aet_annuaire_communication_view', {'id': communication.id}) }}">{{ communication.title|length > 80 ? (communication.title|slice(0, 80) ~ '...')|raw : (communication.title|raw) }}</a>*/
/*                     </div>*/
/*                     <div class="communication_body" >*/
/*                         {{ communication.shortDesc }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/*     </div>*/
/* {% endfor %}*/
/* */
/* {# display navigation #}*/
/* <div class="communication_list_pagination">*/
/*     {{ knp_pagination_render(pagination) }}*/
/* </div>*/
