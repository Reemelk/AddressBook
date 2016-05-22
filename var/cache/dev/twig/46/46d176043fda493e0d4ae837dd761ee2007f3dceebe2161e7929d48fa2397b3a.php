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
        $__internal_dbad5acb9cab41a0bc6010396d381cf5f4b5b9a381c7e39d6f6c84517ffff510 = $this->env->getExtension("native_profiler");
        $__internal_dbad5acb9cab41a0bc6010396d381cf5f4b5b9a381c7e39d6f6c84517ffff510->enter($__internal_dbad5acb9cab41a0bc6010396d381cf5f4b5b9a381c7e39d6f6c84517ffff510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dbad5acb9cab41a0bc6010396d381cf5f4b5b9a381c7e39d6f6c84517ffff510->leave($__internal_dbad5acb9cab41a0bc6010396d381cf5f4b5b9a381c7e39d6f6c84517ffff510_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3ac347b26c62ee81f9a355e494b63c4cdd4839a91b7115460a85ee007e476c97 = $this->env->getExtension("native_profiler");
        $__internal_3ac347b26c62ee81f9a355e494b63c4cdd4839a91b7115460a85ee007e476c97->enter($__internal_3ac347b26c62ee81f9a355e494b63c4cdd4839a91b7115460a85ee007e476c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3ac347b26c62ee81f9a355e494b63c4cdd4839a91b7115460a85ee007e476c97->leave($__internal_3ac347b26c62ee81f9a355e494b63c4cdd4839a91b7115460a85ee007e476c97_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_de8794b38d8b1f4cf840fcfff2db0306e9704a77339cb7712380f2e7b05ac55b = $this->env->getExtension("native_profiler");
        $__internal_de8794b38d8b1f4cf840fcfff2db0306e9704a77339cb7712380f2e7b05ac55b->enter($__internal_de8794b38d8b1f4cf840fcfff2db0306e9704a77339cb7712380f2e7b05ac55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_de8794b38d8b1f4cf840fcfff2db0306e9704a77339cb7712380f2e7b05ac55b->leave($__internal_de8794b38d8b1f4cf840fcfff2db0306e9704a77339cb7712380f2e7b05ac55b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f4832139da462e285ad235d6f8f5324aff40c045ead9a6dac6937b465b2cee42 = $this->env->getExtension("native_profiler");
        $__internal_f4832139da462e285ad235d6f8f5324aff40c045ead9a6dac6937b465b2cee42->enter($__internal_f4832139da462e285ad235d6f8f5324aff40c045ead9a6dac6937b465b2cee42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f4832139da462e285ad235d6f8f5324aff40c045ead9a6dac6937b465b2cee42->leave($__internal_f4832139da462e285ad235d6f8f5324aff40c045ead9a6dac6937b465b2cee42_prof);

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
