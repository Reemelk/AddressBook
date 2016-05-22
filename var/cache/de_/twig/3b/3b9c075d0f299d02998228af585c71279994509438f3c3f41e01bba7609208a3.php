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
        $__internal_441c6fa85b9f413e2e907e45672574a470a0b45df5a5c46dd0e6f5eb2838c835 = $this->env->getExtension("native_profiler");
        $__internal_441c6fa85b9f413e2e907e45672574a470a0b45df5a5c46dd0e6f5eb2838c835->enter($__internal_441c6fa85b9f413e2e907e45672574a470a0b45df5a5c46dd0e6f5eb2838c835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_441c6fa85b9f413e2e907e45672574a470a0b45df5a5c46dd0e6f5eb2838c835->leave($__internal_441c6fa85b9f413e2e907e45672574a470a0b45df5a5c46dd0e6f5eb2838c835_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ce843263cffe18ca0400b206634678b35fd2c09aab4f484de173b9a35d1c880 = $this->env->getExtension("native_profiler");
        $__internal_0ce843263cffe18ca0400b206634678b35fd2c09aab4f484de173b9a35d1c880->enter($__internal_0ce843263cffe18ca0400b206634678b35fd2c09aab4f484de173b9a35d1c880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_0ce843263cffe18ca0400b206634678b35fd2c09aab4f484de173b9a35d1c880->leave($__internal_0ce843263cffe18ca0400b206634678b35fd2c09aab4f484de173b9a35d1c880_prof);

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
