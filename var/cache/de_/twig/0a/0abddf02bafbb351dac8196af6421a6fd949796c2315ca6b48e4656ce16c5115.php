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
        $__internal_d034e4a172ce60871884644b37fadbd65487af9555f1efc5d541ad3d2badf0e3 = $this->env->getExtension("native_profiler");
        $__internal_d034e4a172ce60871884644b37fadbd65487af9555f1efc5d541ad3d2badf0e3->enter($__internal_d034e4a172ce60871884644b37fadbd65487af9555f1efc5d541ad3d2badf0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d034e4a172ce60871884644b37fadbd65487af9555f1efc5d541ad3d2badf0e3->leave($__internal_d034e4a172ce60871884644b37fadbd65487af9555f1efc5d541ad3d2badf0e3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e748132db79e865c7b102d4366831e3190680c7983da7a1127931bcb3df160dc = $this->env->getExtension("native_profiler");
        $__internal_e748132db79e865c7b102d4366831e3190680c7983da7a1127931bcb3df160dc->enter($__internal_e748132db79e865c7b102d4366831e3190680c7983da7a1127931bcb3df160dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e748132db79e865c7b102d4366831e3190680c7983da7a1127931bcb3df160dc->leave($__internal_e748132db79e865c7b102d4366831e3190680c7983da7a1127931bcb3df160dc_prof);

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
