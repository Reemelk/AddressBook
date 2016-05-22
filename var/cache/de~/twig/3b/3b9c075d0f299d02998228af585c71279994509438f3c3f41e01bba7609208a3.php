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
        $__internal_3cd002bed5953cc7b4c4f9a4d80a8bb58f5fc5080568283f2546bede1b57d321 = $this->env->getExtension("native_profiler");
        $__internal_3cd002bed5953cc7b4c4f9a4d80a8bb58f5fc5080568283f2546bede1b57d321->enter($__internal_3cd002bed5953cc7b4c4f9a4d80a8bb58f5fc5080568283f2546bede1b57d321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd002bed5953cc7b4c4f9a4d80a8bb58f5fc5080568283f2546bede1b57d321->leave($__internal_3cd002bed5953cc7b4c4f9a4d80a8bb58f5fc5080568283f2546bede1b57d321_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c67608f602a6c243e616cfe8dab0805376ff26674c66676e827438d1ca3993e3 = $this->env->getExtension("native_profiler");
        $__internal_c67608f602a6c243e616cfe8dab0805376ff26674c66676e827438d1ca3993e3->enter($__internal_c67608f602a6c243e616cfe8dab0805376ff26674c66676e827438d1ca3993e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c67608f602a6c243e616cfe8dab0805376ff26674c66676e827438d1ca3993e3->leave($__internal_c67608f602a6c243e616cfe8dab0805376ff26674c66676e827438d1ca3993e3_prof);

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
