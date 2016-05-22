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
        $__internal_22a25d8532fabd5657504b4d93bb96fd5a890aede94b7e94f902ed504529ed79 = $this->env->getExtension("native_profiler");
        $__internal_22a25d8532fabd5657504b4d93bb96fd5a890aede94b7e94f902ed504529ed79->enter($__internal_22a25d8532fabd5657504b4d93bb96fd5a890aede94b7e94f902ed504529ed79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a25d8532fabd5657504b4d93bb96fd5a890aede94b7e94f902ed504529ed79->leave($__internal_22a25d8532fabd5657504b4d93bb96fd5a890aede94b7e94f902ed504529ed79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_650040be3d30a1d67c0fbeb237a39d9423ed96a4b3ab23cfd9f583d0ce5759ce = $this->env->getExtension("native_profiler");
        $__internal_650040be3d30a1d67c0fbeb237a39d9423ed96a4b3ab23cfd9f583d0ce5759ce->enter($__internal_650040be3d30a1d67c0fbeb237a39d9423ed96a4b3ab23cfd9f583d0ce5759ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_650040be3d30a1d67c0fbeb237a39d9423ed96a4b3ab23cfd9f583d0ce5759ce->leave($__internal_650040be3d30a1d67c0fbeb237a39d9423ed96a4b3ab23cfd9f583d0ce5759ce_prof);

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
