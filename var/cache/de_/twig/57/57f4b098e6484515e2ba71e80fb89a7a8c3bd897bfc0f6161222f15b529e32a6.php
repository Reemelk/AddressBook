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
        $__internal_1e206a9848d161f3670ad0a55cbd003c44e9a952fcb3c3667a982e3a2c027875 = $this->env->getExtension("native_profiler");
        $__internal_1e206a9848d161f3670ad0a55cbd003c44e9a952fcb3c3667a982e3a2c027875->enter($__internal_1e206a9848d161f3670ad0a55cbd003c44e9a952fcb3c3667a982e3a2c027875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e206a9848d161f3670ad0a55cbd003c44e9a952fcb3c3667a982e3a2c027875->leave($__internal_1e206a9848d161f3670ad0a55cbd003c44e9a952fcb3c3667a982e3a2c027875_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d18595222a12c2f0952f52b90ab9de430b13fe58f5192b8c43059dd65a9c2fe7 = $this->env->getExtension("native_profiler");
        $__internal_d18595222a12c2f0952f52b90ab9de430b13fe58f5192b8c43059dd65a9c2fe7->enter($__internal_d18595222a12c2f0952f52b90ab9de430b13fe58f5192b8c43059dd65a9c2fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_d18595222a12c2f0952f52b90ab9de430b13fe58f5192b8c43059dd65a9c2fe7->leave($__internal_d18595222a12c2f0952f52b90ab9de430b13fe58f5192b8c43059dd65a9c2fe7_prof);

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
