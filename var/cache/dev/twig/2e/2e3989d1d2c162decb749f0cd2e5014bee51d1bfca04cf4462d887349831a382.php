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
        $__internal_3a92a2fda4a852b1579e87f49c4c106ce875ebb7f4c53f64efa6dcadce0144d2 = $this->env->getExtension("native_profiler");
        $__internal_3a92a2fda4a852b1579e87f49c4c106ce875ebb7f4c53f64efa6dcadce0144d2->enter($__internal_3a92a2fda4a852b1579e87f49c4c106ce875ebb7f4c53f64efa6dcadce0144d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a92a2fda4a852b1579e87f49c4c106ce875ebb7f4c53f64efa6dcadce0144d2->leave($__internal_3a92a2fda4a852b1579e87f49c4c106ce875ebb7f4c53f64efa6dcadce0144d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf6391fa7c16822cff998c4b0bec8c9b149656e777b07d1610c6ecdadb4964d4 = $this->env->getExtension("native_profiler");
        $__internal_cf6391fa7c16822cff998c4b0bec8c9b149656e777b07d1610c6ecdadb4964d4->enter($__internal_cf6391fa7c16822cff998c4b0bec8c9b149656e777b07d1610c6ecdadb4964d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cf6391fa7c16822cff998c4b0bec8c9b149656e777b07d1610c6ecdadb4964d4->leave($__internal_cf6391fa7c16822cff998c4b0bec8c9b149656e777b07d1610c6ecdadb4964d4_prof);

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
