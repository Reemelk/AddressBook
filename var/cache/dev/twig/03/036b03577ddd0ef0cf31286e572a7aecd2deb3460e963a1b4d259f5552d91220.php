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
        $__internal_12d5d20d9e2c72d820941bf3a2efea4254b6b5f2fe48487186974452c3a6aba7 = $this->env->getExtension("native_profiler");
        $__internal_12d5d20d9e2c72d820941bf3a2efea4254b6b5f2fe48487186974452c3a6aba7->enter($__internal_12d5d20d9e2c72d820941bf3a2efea4254b6b5f2fe48487186974452c3a6aba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d5d20d9e2c72d820941bf3a2efea4254b6b5f2fe48487186974452c3a6aba7->leave($__internal_12d5d20d9e2c72d820941bf3a2efea4254b6b5f2fe48487186974452c3a6aba7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_587b77a4869055ea9320befeecd201a7149a69daf61338e38d4a11d06d0833a3 = $this->env->getExtension("native_profiler");
        $__internal_587b77a4869055ea9320befeecd201a7149a69daf61338e38d4a11d06d0833a3->enter($__internal_587b77a4869055ea9320befeecd201a7149a69daf61338e38d4a11d06d0833a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_587b77a4869055ea9320befeecd201a7149a69daf61338e38d4a11d06d0833a3->leave($__internal_587b77a4869055ea9320befeecd201a7149a69daf61338e38d4a11d06d0833a3_prof);

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
