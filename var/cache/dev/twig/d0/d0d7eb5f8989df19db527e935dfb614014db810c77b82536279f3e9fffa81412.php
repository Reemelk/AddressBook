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
        $__internal_350660febeb916e990bbc84bd06f06d572a5ee23f1e4cc7dbea22624043e92e5 = $this->env->getExtension("native_profiler");
        $__internal_350660febeb916e990bbc84bd06f06d572a5ee23f1e4cc7dbea22624043e92e5->enter($__internal_350660febeb916e990bbc84bd06f06d572a5ee23f1e4cc7dbea22624043e92e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_350660febeb916e990bbc84bd06f06d572a5ee23f1e4cc7dbea22624043e92e5->leave($__internal_350660febeb916e990bbc84bd06f06d572a5ee23f1e4cc7dbea22624043e92e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67571e9768e5dd204bb14563832d239c1cd1f10fdc62a1f8ba863e17552e0851 = $this->env->getExtension("native_profiler");
        $__internal_67571e9768e5dd204bb14563832d239c1cd1f10fdc62a1f8ba863e17552e0851->enter($__internal_67571e9768e5dd204bb14563832d239c1cd1f10fdc62a1f8ba863e17552e0851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_67571e9768e5dd204bb14563832d239c1cd1f10fdc62a1f8ba863e17552e0851->leave($__internal_67571e9768e5dd204bb14563832d239c1cd1f10fdc62a1f8ba863e17552e0851_prof);

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
