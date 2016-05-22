<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_ed62cb7aa5a187f83293d635d8d656843067a6da5a559772131846e88860bbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/reset.html.twig", 1);
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
        $__internal_fb53135250096208097a52d398cdd23466e72c784aef08aa15e5cea54022d40e = $this->env->getExtension("native_profiler");
        $__internal_fb53135250096208097a52d398cdd23466e72c784aef08aa15e5cea54022d40e->enter($__internal_fb53135250096208097a52d398cdd23466e72c784aef08aa15e5cea54022d40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb53135250096208097a52d398cdd23466e72c784aef08aa15e5cea54022d40e->leave($__internal_fb53135250096208097a52d398cdd23466e72c784aef08aa15e5cea54022d40e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0de716c2f8c9a7c3ba04607c9f352a9f0055b6a25b03e108bee74aff3d7ccdec = $this->env->getExtension("native_profiler");
        $__internal_0de716c2f8c9a7c3ba04607c9f352a9f0055b6a25b03e108bee74aff3d7ccdec->enter($__internal_0de716c2f8c9a7c3ba04607c9f352a9f0055b6a25b03e108bee74aff3d7ccdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0de716c2f8c9a7c3ba04607c9f352a9f0055b6a25b03e108bee74aff3d7ccdec->leave($__internal_0de716c2f8c9a7c3ba04607c9f352a9f0055b6a25b03e108bee74aff3d7ccdec_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
