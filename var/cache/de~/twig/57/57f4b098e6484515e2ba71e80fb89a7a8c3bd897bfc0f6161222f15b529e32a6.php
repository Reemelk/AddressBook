<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4025944b65976a7cdfbf783319fc244dc25013c7088d369bf842201deb93d716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_8ff9e7e09b3b331bae9f5d2899e4744af7d9013ff64c06891f7b3bf010258df0 = $this->env->getExtension("native_profiler");
        $__internal_8ff9e7e09b3b331bae9f5d2899e4744af7d9013ff64c06891f7b3bf010258df0->enter($__internal_8ff9e7e09b3b331bae9f5d2899e4744af7d9013ff64c06891f7b3bf010258df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ff9e7e09b3b331bae9f5d2899e4744af7d9013ff64c06891f7b3bf010258df0->leave($__internal_8ff9e7e09b3b331bae9f5d2899e4744af7d9013ff64c06891f7b3bf010258df0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_506ef2c582966218639c6ff8bd2a2d69d2c2156a81b6f516e6eb2e979f19d587 = $this->env->getExtension("native_profiler");
        $__internal_506ef2c582966218639c6ff8bd2a2d69d2c2156a81b6f516e6eb2e979f19d587->enter($__internal_506ef2c582966218639c6ff8bd2a2d69d2c2156a81b6f516e6eb2e979f19d587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_506ef2c582966218639c6ff8bd2a2d69d2c2156a81b6f516e6eb2e979f19d587->leave($__internal_506ef2c582966218639c6ff8bd2a2d69d2c2156a81b6f516e6eb2e979f19d587_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
