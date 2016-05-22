<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7699da2889fa7cc86b7c9315ca39447b1e064b191d6574575030407474d33070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_f389f4d050ed86ebfdbf5f2a94c8e16150fd64b8fae28b44cd1e1a4085760348 = $this->env->getExtension("native_profiler");
        $__internal_f389f4d050ed86ebfdbf5f2a94c8e16150fd64b8fae28b44cd1e1a4085760348->enter($__internal_f389f4d050ed86ebfdbf5f2a94c8e16150fd64b8fae28b44cd1e1a4085760348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f389f4d050ed86ebfdbf5f2a94c8e16150fd64b8fae28b44cd1e1a4085760348->leave($__internal_f389f4d050ed86ebfdbf5f2a94c8e16150fd64b8fae28b44cd1e1a4085760348_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_836986654a2b7ed93bd5004c8ab552e3d03db146c66bfc84b9cbfd138c7f5195 = $this->env->getExtension("native_profiler");
        $__internal_836986654a2b7ed93bd5004c8ab552e3d03db146c66bfc84b9cbfd138c7f5195->enter($__internal_836986654a2b7ed93bd5004c8ab552e3d03db146c66bfc84b9cbfd138c7f5195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_836986654a2b7ed93bd5004c8ab552e3d03db146c66bfc84b9cbfd138c7f5195->leave($__internal_836986654a2b7ed93bd5004c8ab552e3d03db146c66bfc84b9cbfd138c7f5195_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
