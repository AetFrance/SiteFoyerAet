<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_64eb662b92ef659ae7fefe9c6bfc42e3604d0dd322a13212086beba05e923393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::master.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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

    // line 5
    public function block_aet_annuaire_body($context, array $blocks = array())
    {
        // line 6
        echo "    <p>Vous recevrez un e-mail vous invitant à valider votre inscription. <br/>
        Vous devez cliquer sur le lien qui se trouve dans cet e-mail afin de procéder à la validation de votre inscription.
    </p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 1,);
    }
}
