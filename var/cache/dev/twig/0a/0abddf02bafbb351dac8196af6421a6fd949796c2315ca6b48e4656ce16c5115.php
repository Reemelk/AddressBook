<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_16689a1daf5b52eb4053a1a0b9503f89821833c6e32b67c8b82c09fbfef9e207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4d7cd08600d43548ba44c26dba5b80abe2ea2859ee7e4acc30e1b3025be4ec4e = $this->env->getExtension("native_profiler");
        $__internal_4d7cd08600d43548ba44c26dba5b80abe2ea2859ee7e4acc30e1b3025be4ec4e->enter($__internal_4d7cd08600d43548ba44c26dba5b80abe2ea2859ee7e4acc30e1b3025be4ec4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7cd08600d43548ba44c26dba5b80abe2ea2859ee7e4acc30e1b3025be4ec4e->leave($__internal_4d7cd08600d43548ba44c26dba5b80abe2ea2859ee7e4acc30e1b3025be4ec4e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59b6a913a63ad65bab0718e249f2795c42539750b0ee379f6def7783c73ec563 = $this->env->getExtension("native_profiler");
        $__internal_59b6a913a63ad65bab0718e249f2795c42539750b0ee379f6def7783c73ec563->enter($__internal_59b6a913a63ad65bab0718e249f2795c42539750b0ee379f6def7783c73ec563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_59b6a913a63ad65bab0718e249f2795c42539750b0ee379f6def7783c73ec563->leave($__internal_59b6a913a63ad65bab0718e249f2795c42539750b0ee379f6def7783c73ec563_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
