<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_9b9fa3ea0be64633c99b47d01b0c0ce2006462771efa51b9f55bd1793e8bd2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_419aa03c7c8453a3dd9416c9818c4fcf4aaf586d01343b47e6bb9877bc58af4c = $this->env->getExtension("native_profiler");
        $__internal_419aa03c7c8453a3dd9416c9818c4fcf4aaf586d01343b47e6bb9877bc58af4c->enter($__internal_419aa03c7c8453a3dd9416c9818c4fcf4aaf586d01343b47e6bb9877bc58af4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_419aa03c7c8453a3dd9416c9818c4fcf4aaf586d01343b47e6bb9877bc58af4c->leave($__internal_419aa03c7c8453a3dd9416c9818c4fcf4aaf586d01343b47e6bb9877bc58af4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6fe77a4e153147d1ef41a806df18ef883c90c4e3ac54eb7ab8294539e81d54d = $this->env->getExtension("native_profiler");
        $__internal_d6fe77a4e153147d1ef41a806df18ef883c90c4e3ac54eb7ab8294539e81d54d->enter($__internal_d6fe77a4e153147d1ef41a806df18ef883c90c4e3ac54eb7ab8294539e81d54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d6fe77a4e153147d1ef41a806df18ef883c90c4e3ac54eb7ab8294539e81d54d->leave($__internal_d6fe77a4e153147d1ef41a806df18ef883c90c4e3ac54eb7ab8294539e81d54d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
