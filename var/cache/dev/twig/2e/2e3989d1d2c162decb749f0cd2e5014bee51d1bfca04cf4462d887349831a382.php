<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_58fbf6b5af700a484494d955e22ca6def0911dad418dedb992f75fefdf17f558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a508fb0c7fe25c238b4a2a0032eb4b21dfd182f1f7eec1fe2d68c1478bda184b = $this->env->getExtension("native_profiler");
        $__internal_a508fb0c7fe25c238b4a2a0032eb4b21dfd182f1f7eec1fe2d68c1478bda184b->enter($__internal_a508fb0c7fe25c238b4a2a0032eb4b21dfd182f1f7eec1fe2d68c1478bda184b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a508fb0c7fe25c238b4a2a0032eb4b21dfd182f1f7eec1fe2d68c1478bda184b->leave($__internal_a508fb0c7fe25c238b4a2a0032eb4b21dfd182f1f7eec1fe2d68c1478bda184b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7013797993e5ce87dc957f986ece10ceb0f06691500d95c8aa33f0d79d0e5bd9 = $this->env->getExtension("native_profiler");
        $__internal_7013797993e5ce87dc957f986ece10ceb0f06691500d95c8aa33f0d79d0e5bd9->enter($__internal_7013797993e5ce87dc957f986ece10ceb0f06691500d95c8aa33f0d79d0e5bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7013797993e5ce87dc957f986ece10ceb0f06691500d95c8aa33f0d79d0e5bd9->leave($__internal_7013797993e5ce87dc957f986ece10ceb0f06691500d95c8aa33f0d79d0e5bd9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
