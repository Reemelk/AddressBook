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
        $__internal_e80a274076ba11f31a97eb50a8f878fb2ce58447919b8c260c2c8ff6e330f787 = $this->env->getExtension("native_profiler");
        $__internal_e80a274076ba11f31a97eb50a8f878fb2ce58447919b8c260c2c8ff6e330f787->enter($__internal_e80a274076ba11f31a97eb50a8f878fb2ce58447919b8c260c2c8ff6e330f787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e80a274076ba11f31a97eb50a8f878fb2ce58447919b8c260c2c8ff6e330f787->leave($__internal_e80a274076ba11f31a97eb50a8f878fb2ce58447919b8c260c2c8ff6e330f787_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d0971dc6708e32c77e6769891b3dc03280ad3044b104bb5f804ba9742060ac1 = $this->env->getExtension("native_profiler");
        $__internal_4d0971dc6708e32c77e6769891b3dc03280ad3044b104bb5f804ba9742060ac1->enter($__internal_4d0971dc6708e32c77e6769891b3dc03280ad3044b104bb5f804ba9742060ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4d0971dc6708e32c77e6769891b3dc03280ad3044b104bb5f804ba9742060ac1->leave($__internal_4d0971dc6708e32c77e6769891b3dc03280ad3044b104bb5f804ba9742060ac1_prof);

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
