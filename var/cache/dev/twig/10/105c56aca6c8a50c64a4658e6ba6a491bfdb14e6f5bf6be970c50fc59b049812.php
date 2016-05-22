<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_a6bef588d6e2f74542c3f86b742765916acd125428fdb1f8b85bf8f21b9718de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_94988d149bce1ef5b12532d9167f7bdd3630d01bee1522ba933516a2ee0c9fae = $this->env->getExtension("native_profiler");
        $__internal_94988d149bce1ef5b12532d9167f7bdd3630d01bee1522ba933516a2ee0c9fae->enter($__internal_94988d149bce1ef5b12532d9167f7bdd3630d01bee1522ba933516a2ee0c9fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94988d149bce1ef5b12532d9167f7bdd3630d01bee1522ba933516a2ee0c9fae->leave($__internal_94988d149bce1ef5b12532d9167f7bdd3630d01bee1522ba933516a2ee0c9fae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f73f9df0325e9c9b5e00b6844cf62044b5d5b1b2eb4a189ec9a5330981f92b91 = $this->env->getExtension("native_profiler");
        $__internal_f73f9df0325e9c9b5e00b6844cf62044b5d5b1b2eb4a189ec9a5330981f92b91->enter($__internal_f73f9df0325e9c9b5e00b6844cf62044b5d5b1b2eb4a189ec9a5330981f92b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_f73f9df0325e9c9b5e00b6844cf62044b5d5b1b2eb4a189ec9a5330981f92b91->leave($__internal_f73f9df0325e9c9b5e00b6844cf62044b5d5b1b2eb4a189ec9a5330981f92b91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
