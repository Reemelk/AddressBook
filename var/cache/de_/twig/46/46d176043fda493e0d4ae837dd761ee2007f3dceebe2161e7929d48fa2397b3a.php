<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_33e8daa15fbb28f1494d4b21d0ed6edcd2dcb4b139a4382d642f321c13845ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2d1ae8d9dea31c3b1d64ce36b6b6bf17f037cb73981b88058fba2574df9ac43 = $this->env->getExtension("native_profiler");
        $__internal_a2d1ae8d9dea31c3b1d64ce36b6b6bf17f037cb73981b88058fba2574df9ac43->enter($__internal_a2d1ae8d9dea31c3b1d64ce36b6b6bf17f037cb73981b88058fba2574df9ac43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a2d1ae8d9dea31c3b1d64ce36b6b6bf17f037cb73981b88058fba2574df9ac43->leave($__internal_a2d1ae8d9dea31c3b1d64ce36b6b6bf17f037cb73981b88058fba2574df9ac43_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aa44764a161ddb3eee8c7c77a33ebb266b400b3865106f87c8f12b6882533ade = $this->env->getExtension("native_profiler");
        $__internal_aa44764a161ddb3eee8c7c77a33ebb266b400b3865106f87c8f12b6882533ade->enter($__internal_aa44764a161ddb3eee8c7c77a33ebb266b400b3865106f87c8f12b6882533ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_aa44764a161ddb3eee8c7c77a33ebb266b400b3865106f87c8f12b6882533ade->leave($__internal_aa44764a161ddb3eee8c7c77a33ebb266b400b3865106f87c8f12b6882533ade_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a9765c9445879bba8a46bf11246d381199338659100597346bf3cf7d3ef396c7 = $this->env->getExtension("native_profiler");
        $__internal_a9765c9445879bba8a46bf11246d381199338659100597346bf3cf7d3ef396c7->enter($__internal_a9765c9445879bba8a46bf11246d381199338659100597346bf3cf7d3ef396c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a9765c9445879bba8a46bf11246d381199338659100597346bf3cf7d3ef396c7->leave($__internal_a9765c9445879bba8a46bf11246d381199338659100597346bf3cf7d3ef396c7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_63e17dac3304c0ec4240002781a2c661cfb13148e6718db937a209ded6740a86 = $this->env->getExtension("native_profiler");
        $__internal_63e17dac3304c0ec4240002781a2c661cfb13148e6718db937a209ded6740a86->enter($__internal_63e17dac3304c0ec4240002781a2c661cfb13148e6718db937a209ded6740a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_63e17dac3304c0ec4240002781a2c661cfb13148e6718db937a209ded6740a86->leave($__internal_63e17dac3304c0ec4240002781a2c661cfb13148e6718db937a209ded6740a86_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
