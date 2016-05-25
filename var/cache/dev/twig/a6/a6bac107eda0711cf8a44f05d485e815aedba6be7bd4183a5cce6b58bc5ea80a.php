<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_d57fa9b5c4245bc4ee8727208055a146141a64084fb622b083600f13b44239b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_98ec530d80cd6262fada7076c438bb2125b714c8e63969ec2c17e2f86ffd596d = $this->env->getExtension("native_profiler");
        $__internal_98ec530d80cd6262fada7076c438bb2125b714c8e63969ec2c17e2f86ffd596d->enter($__internal_98ec530d80cd6262fada7076c438bb2125b714c8e63969ec2c17e2f86ffd596d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98ec530d80cd6262fada7076c438bb2125b714c8e63969ec2c17e2f86ffd596d->leave($__internal_98ec530d80cd6262fada7076c438bb2125b714c8e63969ec2c17e2f86ffd596d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_756860275cba28ff96d7f7ea697a0f089c3a236e7a53ee0fd8dd185959325dc2 = $this->env->getExtension("native_profiler");
        $__internal_756860275cba28ff96d7f7ea697a0f089c3a236e7a53ee0fd8dd185959325dc2->enter($__internal_756860275cba28ff96d7f7ea697a0f089c3a236e7a53ee0fd8dd185959325dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_756860275cba28ff96d7f7ea697a0f089c3a236e7a53ee0fd8dd185959325dc2->leave($__internal_756860275cba28ff96d7f7ea697a0f089c3a236e7a53ee0fd8dd185959325dc2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
