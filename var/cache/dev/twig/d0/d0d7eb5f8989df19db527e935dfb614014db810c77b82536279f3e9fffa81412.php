<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_f06c7dc896216ae399966c3b8bfe1979a93f88bda8bd81fd81f70778177a7adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/register.html.twig", 1);
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
        $__internal_9c5c8ea63047d5fc98f355efa0d075c71e7064464386f12d1159477b22c6b0a2 = $this->env->getExtension("native_profiler");
        $__internal_9c5c8ea63047d5fc98f355efa0d075c71e7064464386f12d1159477b22c6b0a2->enter($__internal_9c5c8ea63047d5fc98f355efa0d075c71e7064464386f12d1159477b22c6b0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5c8ea63047d5fc98f355efa0d075c71e7064464386f12d1159477b22c6b0a2->leave($__internal_9c5c8ea63047d5fc98f355efa0d075c71e7064464386f12d1159477b22c6b0a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a5a5ece33c20353575c4b5875c4de33c9a7f4a625179b011faa06da08659cf8 = $this->env->getExtension("native_profiler");
        $__internal_1a5a5ece33c20353575c4b5875c4de33c9a7f4a625179b011faa06da08659cf8->enter($__internal_1a5a5ece33c20353575c4b5875c4de33c9a7f4a625179b011faa06da08659cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1a5a5ece33c20353575c4b5875c4de33c9a7f4a625179b011faa06da08659cf8->leave($__internal_1a5a5ece33c20353575c4b5875c4de33c9a7f4a625179b011faa06da08659cf8_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
