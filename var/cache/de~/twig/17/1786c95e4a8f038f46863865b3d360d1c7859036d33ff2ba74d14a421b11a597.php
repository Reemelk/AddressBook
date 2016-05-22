<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_9b9fa3ea0be64633c99b47d01b0c0ce2006462771efa51b9f55bd1793e8bd2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_923aa9bc24848c175079ef5b117fd64df0344957b79a9bb3c52c650afeb2c405 = $this->env->getExtension("native_profiler");
        $__internal_923aa9bc24848c175079ef5b117fd64df0344957b79a9bb3c52c650afeb2c405->enter($__internal_923aa9bc24848c175079ef5b117fd64df0344957b79a9bb3c52c650afeb2c405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_923aa9bc24848c175079ef5b117fd64df0344957b79a9bb3c52c650afeb2c405->leave($__internal_923aa9bc24848c175079ef5b117fd64df0344957b79a9bb3c52c650afeb2c405_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70cb53dafedb977be6059d6003d6edc9650163bb87a0de7a222c1f347edcc51c = $this->env->getExtension("native_profiler");
        $__internal_70cb53dafedb977be6059d6003d6edc9650163bb87a0de7a222c1f347edcc51c->enter($__internal_70cb53dafedb977be6059d6003d6edc9650163bb87a0de7a222c1f347edcc51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_70cb53dafedb977be6059d6003d6edc9650163bb87a0de7a222c1f347edcc51c->leave($__internal_70cb53dafedb977be6059d6003d6edc9650163bb87a0de7a222c1f347edcc51c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
