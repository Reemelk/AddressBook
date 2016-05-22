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
        $__internal_8d375f7c10d00df90cf1eb629701f54c886bc5f979b21b7c754014472fb27a98 = $this->env->getExtension("native_profiler");
        $__internal_8d375f7c10d00df90cf1eb629701f54c886bc5f979b21b7c754014472fb27a98->enter($__internal_8d375f7c10d00df90cf1eb629701f54c886bc5f979b21b7c754014472fb27a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d375f7c10d00df90cf1eb629701f54c886bc5f979b21b7c754014472fb27a98->leave($__internal_8d375f7c10d00df90cf1eb629701f54c886bc5f979b21b7c754014472fb27a98_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b3bf23a32803eec06b0589a84f91ec5dd1d0df215faf166c4df3b906632b25b = $this->env->getExtension("native_profiler");
        $__internal_7b3bf23a32803eec06b0589a84f91ec5dd1d0df215faf166c4df3b906632b25b->enter($__internal_7b3bf23a32803eec06b0589a84f91ec5dd1d0df215faf166c4df3b906632b25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_7b3bf23a32803eec06b0589a84f91ec5dd1d0df215faf166c4df3b906632b25b->leave($__internal_7b3bf23a32803eec06b0589a84f91ec5dd1d0df215faf166c4df3b906632b25b_prof);

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
