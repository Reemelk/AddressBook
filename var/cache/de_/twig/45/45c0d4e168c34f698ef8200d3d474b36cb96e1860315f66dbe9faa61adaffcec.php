<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_65ee5caee8bc9fe4dc71dd941c2ef30d28fd0fdea95660964c9045a79925edac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_944345cc14c3d7651b9eda5bcb7aaff3f55bdc4a5e261dcb31b88378d9aa2c23 = $this->env->getExtension("native_profiler");
        $__internal_944345cc14c3d7651b9eda5bcb7aaff3f55bdc4a5e261dcb31b88378d9aa2c23->enter($__internal_944345cc14c3d7651b9eda5bcb7aaff3f55bdc4a5e261dcb31b88378d9aa2c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944345cc14c3d7651b9eda5bcb7aaff3f55bdc4a5e261dcb31b88378d9aa2c23->leave($__internal_944345cc14c3d7651b9eda5bcb7aaff3f55bdc4a5e261dcb31b88378d9aa2c23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4644bcdcbf170c2dfef00168c0938cc326b744a67cb1e3550e07f36c0500f552 = $this->env->getExtension("native_profiler");
        $__internal_4644bcdcbf170c2dfef00168c0938cc326b744a67cb1e3550e07f36c0500f552->enter($__internal_4644bcdcbf170c2dfef00168c0938cc326b744a67cb1e3550e07f36c0500f552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4644bcdcbf170c2dfef00168c0938cc326b744a67cb1e3550e07f36c0500f552->leave($__internal_4644bcdcbf170c2dfef00168c0938cc326b744a67cb1e3550e07f36c0500f552_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
