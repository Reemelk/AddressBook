<?php

/* @User/Profile/edit.html.twig */
class __TwigTemplate_6fadff5d4a2e17973609c0d91dd1d7e3f91f134e8091f74526f8becb711dfb79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/edit.html.twig", 1);
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
        $__internal_3867476557d89487d63c7accacc618e822f7591d68b6409ef98b1cee0d30ffb9 = $this->env->getExtension("native_profiler");
        $__internal_3867476557d89487d63c7accacc618e822f7591d68b6409ef98b1cee0d30ffb9->enter($__internal_3867476557d89487d63c7accacc618e822f7591d68b6409ef98b1cee0d30ffb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3867476557d89487d63c7accacc618e822f7591d68b6409ef98b1cee0d30ffb9->leave($__internal_3867476557d89487d63c7accacc618e822f7591d68b6409ef98b1cee0d30ffb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40172be3a83c22888697f495688ad785217dd3f214266665338f647b4adb60b1 = $this->env->getExtension("native_profiler");
        $__internal_40172be3a83c22888697f495688ad785217dd3f214266665338f647b4adb60b1->enter($__internal_40172be3a83c22888697f495688ad785217dd3f214266665338f647b4adb60b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_40172be3a83c22888697f495688ad785217dd3f214266665338f647b4adb60b1->leave($__internal_40172be3a83c22888697f495688ad785217dd3f214266665338f647b4adb60b1_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
