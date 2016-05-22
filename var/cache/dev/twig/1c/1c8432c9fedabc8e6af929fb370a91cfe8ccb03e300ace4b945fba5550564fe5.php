<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_38e46277e17e466216180b397679be57314abc1a771c29ea2ba7faa80fbe35e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_3bf141df72fa5e441e00f4bf692acd6a81d7111c8c7e5cd875bbfdd9e2985479 = $this->env->getExtension("native_profiler");
        $__internal_3bf141df72fa5e441e00f4bf692acd6a81d7111c8c7e5cd875bbfdd9e2985479->enter($__internal_3bf141df72fa5e441e00f4bf692acd6a81d7111c8c7e5cd875bbfdd9e2985479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf141df72fa5e441e00f4bf692acd6a81d7111c8c7e5cd875bbfdd9e2985479->leave($__internal_3bf141df72fa5e441e00f4bf692acd6a81d7111c8c7e5cd875bbfdd9e2985479_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5980969f4f9f1bcd190271c53f4a3bac6149dc4b45d67412cbb6fbfa5cc37d8 = $this->env->getExtension("native_profiler");
        $__internal_d5980969f4f9f1bcd190271c53f4a3bac6149dc4b45d67412cbb6fbfa5cc37d8->enter($__internal_d5980969f4f9f1bcd190271c53f4a3bac6149dc4b45d67412cbb6fbfa5cc37d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d5980969f4f9f1bcd190271c53f4a3bac6149dc4b45d67412cbb6fbfa5cc37d8->leave($__internal_d5980969f4f9f1bcd190271c53f4a3bac6149dc4b45d67412cbb6fbfa5cc37d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
