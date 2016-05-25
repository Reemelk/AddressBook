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
        $__internal_5c4cfce1d866693387b281ea6589dd1fc4f92a3c50522361c6c7b98fbc6231b7 = $this->env->getExtension("native_profiler");
        $__internal_5c4cfce1d866693387b281ea6589dd1fc4f92a3c50522361c6c7b98fbc6231b7->enter($__internal_5c4cfce1d866693387b281ea6589dd1fc4f92a3c50522361c6c7b98fbc6231b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c4cfce1d866693387b281ea6589dd1fc4f92a3c50522361c6c7b98fbc6231b7->leave($__internal_5c4cfce1d866693387b281ea6589dd1fc4f92a3c50522361c6c7b98fbc6231b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71ffa24f0ffd56870145f5f4cda5c782b8a5b8fb4351949357d604841465227a = $this->env->getExtension("native_profiler");
        $__internal_71ffa24f0ffd56870145f5f4cda5c782b8a5b8fb4351949357d604841465227a->enter($__internal_71ffa24f0ffd56870145f5f4cda5c782b8a5b8fb4351949357d604841465227a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_71ffa24f0ffd56870145f5f4cda5c782b8a5b8fb4351949357d604841465227a->leave($__internal_71ffa24f0ffd56870145f5f4cda5c782b8a5b8fb4351949357d604841465227a_prof);

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
