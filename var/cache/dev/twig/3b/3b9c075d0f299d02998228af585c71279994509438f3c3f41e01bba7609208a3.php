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
        $__internal_39ec8c87c4a72b7f2d38a6e2f7d7feebfa3fafc0a94321e859de154afcfc8d1f = $this->env->getExtension("native_profiler");
        $__internal_39ec8c87c4a72b7f2d38a6e2f7d7feebfa3fafc0a94321e859de154afcfc8d1f->enter($__internal_39ec8c87c4a72b7f2d38a6e2f7d7feebfa3fafc0a94321e859de154afcfc8d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ec8c87c4a72b7f2d38a6e2f7d7feebfa3fafc0a94321e859de154afcfc8d1f->leave($__internal_39ec8c87c4a72b7f2d38a6e2f7d7feebfa3fafc0a94321e859de154afcfc8d1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee1a0726d34ea9a01b7744984615da3283a16b37150c52fca19277e689877f2c = $this->env->getExtension("native_profiler");
        $__internal_ee1a0726d34ea9a01b7744984615da3283a16b37150c52fca19277e689877f2c->enter($__internal_ee1a0726d34ea9a01b7744984615da3283a16b37150c52fca19277e689877f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ee1a0726d34ea9a01b7744984615da3283a16b37150c52fca19277e689877f2c->leave($__internal_ee1a0726d34ea9a01b7744984615da3283a16b37150c52fca19277e689877f2c_prof);

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
