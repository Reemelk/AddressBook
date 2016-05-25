<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_b6061b2393d53e1f84a519289494104f34e557639816e244b5e86e6a10b0daf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_f7b88bc8ef1c6e76ff37d677b7b940ae5d6b71bce27b01df3a1b9501e6eb83df = $this->env->getExtension("native_profiler");
        $__internal_f7b88bc8ef1c6e76ff37d677b7b940ae5d6b71bce27b01df3a1b9501e6eb83df->enter($__internal_f7b88bc8ef1c6e76ff37d677b7b940ae5d6b71bce27b01df3a1b9501e6eb83df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b88bc8ef1c6e76ff37d677b7b940ae5d6b71bce27b01df3a1b9501e6eb83df->leave($__internal_f7b88bc8ef1c6e76ff37d677b7b940ae5d6b71bce27b01df3a1b9501e6eb83df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0481ab60a9beaccf33ce5be65d04aa4e2b85a7380af712461832804c8993e542 = $this->env->getExtension("native_profiler");
        $__internal_0481ab60a9beaccf33ce5be65d04aa4e2b85a7380af712461832804c8993e542->enter($__internal_0481ab60a9beaccf33ce5be65d04aa4e2b85a7380af712461832804c8993e542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_0481ab60a9beaccf33ce5be65d04aa4e2b85a7380af712461832804c8993e542->leave($__internal_0481ab60a9beaccf33ce5be65d04aa4e2b85a7380af712461832804c8993e542_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
