<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a94f714a70748917fbf51501ef2f618336a964deccc204f5d107cc0947cca482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbbb8e27e339f15a76161ed78555bd8aa736df136d37c9ee0c172e135d562d2f = $this->env->getExtension("native_profiler");
        $__internal_dbbb8e27e339f15a76161ed78555bd8aa736df136d37c9ee0c172e135d562d2f->enter($__internal_dbbb8e27e339f15a76161ed78555bd8aa736df136d37c9ee0c172e135d562d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbbb8e27e339f15a76161ed78555bd8aa736df136d37c9ee0c172e135d562d2f->leave($__internal_dbbb8e27e339f15a76161ed78555bd8aa736df136d37c9ee0c172e135d562d2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_258555bd0e88fc22931ad8050c4136ac18603937d07e2e5c13979e36a982aae7 = $this->env->getExtension("native_profiler");
        $__internal_258555bd0e88fc22931ad8050c4136ac18603937d07e2e5c13979e36a982aae7->enter($__internal_258555bd0e88fc22931ad8050c4136ac18603937d07e2e5c13979e36a982aae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_258555bd0e88fc22931ad8050c4136ac18603937d07e2e5c13979e36a982aae7->leave($__internal_258555bd0e88fc22931ad8050c4136ac18603937d07e2e5c13979e36a982aae7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
