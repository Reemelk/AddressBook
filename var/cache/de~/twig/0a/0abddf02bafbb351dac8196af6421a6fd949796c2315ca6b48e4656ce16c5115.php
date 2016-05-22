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
        $__internal_fe58a680b9a5d47082270cf192e9ea3917751ca6f8858e0f3f2c65d7c474d682 = $this->env->getExtension("native_profiler");
        $__internal_fe58a680b9a5d47082270cf192e9ea3917751ca6f8858e0f3f2c65d7c474d682->enter($__internal_fe58a680b9a5d47082270cf192e9ea3917751ca6f8858e0f3f2c65d7c474d682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe58a680b9a5d47082270cf192e9ea3917751ca6f8858e0f3f2c65d7c474d682->leave($__internal_fe58a680b9a5d47082270cf192e9ea3917751ca6f8858e0f3f2c65d7c474d682_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60326d23d6a3cd86d7e414e0352e119f2edfc38f34724a0f27e85c12143a86d0 = $this->env->getExtension("native_profiler");
        $__internal_60326d23d6a3cd86d7e414e0352e119f2edfc38f34724a0f27e85c12143a86d0->enter($__internal_60326d23d6a3cd86d7e414e0352e119f2edfc38f34724a0f27e85c12143a86d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_60326d23d6a3cd86d7e414e0352e119f2edfc38f34724a0f27e85c12143a86d0->leave($__internal_60326d23d6a3cd86d7e414e0352e119f2edfc38f34724a0f27e85c12143a86d0_prof);

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
