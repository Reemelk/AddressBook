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
        $__internal_ef59ce1111e9b76a8baf1973df0a9f70626ed19144f563e9eeb381745a4e57fa = $this->env->getExtension("native_profiler");
        $__internal_ef59ce1111e9b76a8baf1973df0a9f70626ed19144f563e9eeb381745a4e57fa->enter($__internal_ef59ce1111e9b76a8baf1973df0a9f70626ed19144f563e9eeb381745a4e57fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef59ce1111e9b76a8baf1973df0a9f70626ed19144f563e9eeb381745a4e57fa->leave($__internal_ef59ce1111e9b76a8baf1973df0a9f70626ed19144f563e9eeb381745a4e57fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d336d709a2f56c717ba4618c74c37915d93b60fe0094146ce0407edb461cbaf9 = $this->env->getExtension("native_profiler");
        $__internal_d336d709a2f56c717ba4618c74c37915d93b60fe0094146ce0407edb461cbaf9->enter($__internal_d336d709a2f56c717ba4618c74c37915d93b60fe0094146ce0407edb461cbaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_d336d709a2f56c717ba4618c74c37915d93b60fe0094146ce0407edb461cbaf9->leave($__internal_d336d709a2f56c717ba4618c74c37915d93b60fe0094146ce0407edb461cbaf9_prof);

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
