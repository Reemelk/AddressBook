<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_a596f387190a327170cb85cbe6824301afa7551809a61573fb5b317d00611cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/show.html.twig", 1);
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
        $__internal_d22fc4a92ffa4762a6d22fcc0bf5046ab6570259e14ab8022f6671baa1acdfd0 = $this->env->getExtension("native_profiler");
        $__internal_d22fc4a92ffa4762a6d22fcc0bf5046ab6570259e14ab8022f6671baa1acdfd0->enter($__internal_d22fc4a92ffa4762a6d22fcc0bf5046ab6570259e14ab8022f6671baa1acdfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d22fc4a92ffa4762a6d22fcc0bf5046ab6570259e14ab8022f6671baa1acdfd0->leave($__internal_d22fc4a92ffa4762a6d22fcc0bf5046ab6570259e14ab8022f6671baa1acdfd0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d88d332975865044e38f5b0cc970a657819ab24b848a2479ab95dd45f3250f2 = $this->env->getExtension("native_profiler");
        $__internal_4d88d332975865044e38f5b0cc970a657819ab24b848a2479ab95dd45f3250f2->enter($__internal_4d88d332975865044e38f5b0cc970a657819ab24b848a2479ab95dd45f3250f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4d88d332975865044e38f5b0cc970a657819ab24b848a2479ab95dd45f3250f2->leave($__internal_4d88d332975865044e38f5b0cc970a657819ab24b848a2479ab95dd45f3250f2_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
