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
        $__internal_97932265aed930da6d161c4459444b3de7aa24221b33e95fab82a0c1d95de930 = $this->env->getExtension("native_profiler");
        $__internal_97932265aed930da6d161c4459444b3de7aa24221b33e95fab82a0c1d95de930->enter($__internal_97932265aed930da6d161c4459444b3de7aa24221b33e95fab82a0c1d95de930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97932265aed930da6d161c4459444b3de7aa24221b33e95fab82a0c1d95de930->leave($__internal_97932265aed930da6d161c4459444b3de7aa24221b33e95fab82a0c1d95de930_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28d0f8c6286f9d7e98ff220f9c39ca936dc7e73f5aa8285704166ba2f606fe52 = $this->env->getExtension("native_profiler");
        $__internal_28d0f8c6286f9d7e98ff220f9c39ca936dc7e73f5aa8285704166ba2f606fe52->enter($__internal_28d0f8c6286f9d7e98ff220f9c39ca936dc7e73f5aa8285704166ba2f606fe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_28d0f8c6286f9d7e98ff220f9c39ca936dc7e73f5aa8285704166ba2f606fe52->leave($__internal_28d0f8c6286f9d7e98ff220f9c39ca936dc7e73f5aa8285704166ba2f606fe52_prof);

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
