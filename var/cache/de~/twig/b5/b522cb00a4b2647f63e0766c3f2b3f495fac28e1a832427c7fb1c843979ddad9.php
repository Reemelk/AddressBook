<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e266f72745c67c074bef481e7200eb8c63960affbe5a74d51d0a6daba33cf544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_2ad528cd3653aa3e68f9ff69a6b9c35d77d9ec7680ca2f4629605702b522b318 = $this->env->getExtension("native_profiler");
        $__internal_2ad528cd3653aa3e68f9ff69a6b9c35d77d9ec7680ca2f4629605702b522b318->enter($__internal_2ad528cd3653aa3e68f9ff69a6b9c35d77d9ec7680ca2f4629605702b522b318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad528cd3653aa3e68f9ff69a6b9c35d77d9ec7680ca2f4629605702b522b318->leave($__internal_2ad528cd3653aa3e68f9ff69a6b9c35d77d9ec7680ca2f4629605702b522b318_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cf68d8c1cdd12b73dc88c246fecfc7e01c06fbb0d9916c145d7b889dd04b0ed = $this->env->getExtension("native_profiler");
        $__internal_3cf68d8c1cdd12b73dc88c246fecfc7e01c06fbb0d9916c145d7b889dd04b0ed->enter($__internal_3cf68d8c1cdd12b73dc88c246fecfc7e01c06fbb0d9916c145d7b889dd04b0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_3cf68d8c1cdd12b73dc88c246fecfc7e01c06fbb0d9916c145d7b889dd04b0ed->leave($__internal_3cf68d8c1cdd12b73dc88c246fecfc7e01c06fbb0d9916c145d7b889dd04b0ed_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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
