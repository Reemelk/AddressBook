<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_2d1b1976bfa410045fcc1734d782e4451bbd1830d1d5f48b205308f4d7708e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a6b2a96daf35546bea220429c7c5bfccbb71dfd72d8f6cce7a7a1ac23f1a4d96 = $this->env->getExtension("native_profiler");
        $__internal_a6b2a96daf35546bea220429c7c5bfccbb71dfd72d8f6cce7a7a1ac23f1a4d96->enter($__internal_a6b2a96daf35546bea220429c7c5bfccbb71dfd72d8f6cce7a7a1ac23f1a4d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b2a96daf35546bea220429c7c5bfccbb71dfd72d8f6cce7a7a1ac23f1a4d96->leave($__internal_a6b2a96daf35546bea220429c7c5bfccbb71dfd72d8f6cce7a7a1ac23f1a4d96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b719c0c234deaa1ef8e939bc9f3dcac79db13529bb2674e89fe913fb639b87a5 = $this->env->getExtension("native_profiler");
        $__internal_b719c0c234deaa1ef8e939bc9f3dcac79db13529bb2674e89fe913fb639b87a5->enter($__internal_b719c0c234deaa1ef8e939bc9f3dcac79db13529bb2674e89fe913fb639b87a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b719c0c234deaa1ef8e939bc9f3dcac79db13529bb2674e89fe913fb639b87a5->leave($__internal_b719c0c234deaa1ef8e939bc9f3dcac79db13529bb2674e89fe913fb639b87a5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
