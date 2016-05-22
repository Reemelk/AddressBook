<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_6dddf54e3e2759eaf900af458d82eafb51c1309df1b8b369fda18de14970557b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_b0b028520ae49199ccd5119815f7f3514e8bd16672136f322ec9b6415b1aaf6c = $this->env->getExtension("native_profiler");
        $__internal_b0b028520ae49199ccd5119815f7f3514e8bd16672136f322ec9b6415b1aaf6c->enter($__internal_b0b028520ae49199ccd5119815f7f3514e8bd16672136f322ec9b6415b1aaf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b028520ae49199ccd5119815f7f3514e8bd16672136f322ec9b6415b1aaf6c->leave($__internal_b0b028520ae49199ccd5119815f7f3514e8bd16672136f322ec9b6415b1aaf6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fb4d14aa8e2fc822be1a5a0a998f200a34159e554fc2760392212265113c51e = $this->env->getExtension("native_profiler");
        $__internal_5fb4d14aa8e2fc822be1a5a0a998f200a34159e554fc2760392212265113c51e->enter($__internal_5fb4d14aa8e2fc822be1a5a0a998f200a34159e554fc2760392212265113c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5fb4d14aa8e2fc822be1a5a0a998f200a34159e554fc2760392212265113c51e->leave($__internal_5fb4d14aa8e2fc822be1a5a0a998f200a34159e554fc2760392212265113c51e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
