<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_775f1749e540c25eeba9ba60ad1bdf7410e40d8fedae88d7a1961b654acac2c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_290176110dae335497de09cf220121e7b62a235eafb50103721fffd22d8bc69d = $this->env->getExtension("native_profiler");
        $__internal_290176110dae335497de09cf220121e7b62a235eafb50103721fffd22d8bc69d->enter($__internal_290176110dae335497de09cf220121e7b62a235eafb50103721fffd22d8bc69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_290176110dae335497de09cf220121e7b62a235eafb50103721fffd22d8bc69d->leave($__internal_290176110dae335497de09cf220121e7b62a235eafb50103721fffd22d8bc69d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48a32d3266a50ca129d6abca572ae15f5c03d7b41956ce8d771920569fbc1c78 = $this->env->getExtension("native_profiler");
        $__internal_48a32d3266a50ca129d6abca572ae15f5c03d7b41956ce8d771920569fbc1c78->enter($__internal_48a32d3266a50ca129d6abca572ae15f5c03d7b41956ce8d771920569fbc1c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_48a32d3266a50ca129d6abca572ae15f5c03d7b41956ce8d771920569fbc1c78->leave($__internal_48a32d3266a50ca129d6abca572ae15f5c03d7b41956ce8d771920569fbc1c78_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
