<?php

/* @User/Resetting/request.html.twig */
class __TwigTemplate_973f8cba4d4dc8ebc0dcd5a24e89692a62a3c0e5031ff0d6033ea2b844fa0548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/request.html.twig", 1);
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
        $__internal_fdcdc6819cb00539095147f6bd4908625f098ea7058e7899041d647885d08a3e = $this->env->getExtension("native_profiler");
        $__internal_fdcdc6819cb00539095147f6bd4908625f098ea7058e7899041d647885d08a3e->enter($__internal_fdcdc6819cb00539095147f6bd4908625f098ea7058e7899041d647885d08a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdcdc6819cb00539095147f6bd4908625f098ea7058e7899041d647885d08a3e->leave($__internal_fdcdc6819cb00539095147f6bd4908625f098ea7058e7899041d647885d08a3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49cf3b28490cc5258443945140660f6c1920e80ff14122fc94b7cd9a5a77f2aa = $this->env->getExtension("native_profiler");
        $__internal_49cf3b28490cc5258443945140660f6c1920e80ff14122fc94b7cd9a5a77f2aa->enter($__internal_49cf3b28490cc5258443945140660f6c1920e80ff14122fc94b7cd9a5a77f2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_49cf3b28490cc5258443945140660f6c1920e80ff14122fc94b7cd9a5a77f2aa->leave($__internal_49cf3b28490cc5258443945140660f6c1920e80ff14122fc94b7cd9a5a77f2aa_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request.html.twig";
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
