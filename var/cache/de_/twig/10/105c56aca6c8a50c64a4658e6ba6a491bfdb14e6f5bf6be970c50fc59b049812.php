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
        $__internal_40588bc6ec44cff43bb3e1d50581a6cbf0c9110a869b1fc5b5424d8839987df3 = $this->env->getExtension("native_profiler");
        $__internal_40588bc6ec44cff43bb3e1d50581a6cbf0c9110a869b1fc5b5424d8839987df3->enter($__internal_40588bc6ec44cff43bb3e1d50581a6cbf0c9110a869b1fc5b5424d8839987df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40588bc6ec44cff43bb3e1d50581a6cbf0c9110a869b1fc5b5424d8839987df3->leave($__internal_40588bc6ec44cff43bb3e1d50581a6cbf0c9110a869b1fc5b5424d8839987df3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87b72a2ac3eae33b89534c39c60aa715365674795c75254d3fa06a4156203d24 = $this->env->getExtension("native_profiler");
        $__internal_87b72a2ac3eae33b89534c39c60aa715365674795c75254d3fa06a4156203d24->enter($__internal_87b72a2ac3eae33b89534c39c60aa715365674795c75254d3fa06a4156203d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_87b72a2ac3eae33b89534c39c60aa715365674795c75254d3fa06a4156203d24->leave($__internal_87b72a2ac3eae33b89534c39c60aa715365674795c75254d3fa06a4156203d24_prof);

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
