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
        $__internal_1e92aeb5f3e1a64fddc60561c7ba1875ef65b4e2e77d1569a6103891b4501662 = $this->env->getExtension("native_profiler");
        $__internal_1e92aeb5f3e1a64fddc60561c7ba1875ef65b4e2e77d1569a6103891b4501662->enter($__internal_1e92aeb5f3e1a64fddc60561c7ba1875ef65b4e2e77d1569a6103891b4501662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e92aeb5f3e1a64fddc60561c7ba1875ef65b4e2e77d1569a6103891b4501662->leave($__internal_1e92aeb5f3e1a64fddc60561c7ba1875ef65b4e2e77d1569a6103891b4501662_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cbd913ea12da941118e58611a839ed443d6e3e635dc93a7b3c3fc561038663f = $this->env->getExtension("native_profiler");
        $__internal_6cbd913ea12da941118e58611a839ed443d6e3e635dc93a7b3c3fc561038663f->enter($__internal_6cbd913ea12da941118e58611a839ed443d6e3e635dc93a7b3c3fc561038663f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6cbd913ea12da941118e58611a839ed443d6e3e635dc93a7b3c3fc561038663f->leave($__internal_6cbd913ea12da941118e58611a839ed443d6e3e635dc93a7b3c3fc561038663f_prof);

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
