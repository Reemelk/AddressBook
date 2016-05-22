<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_d4516336f70984dc9a588f5ae6f27276a31fb82b3fc583130cdc4bdd0ae1f34e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f48e96ba052df815749244d98380bc14b4ccd82fa076bff35dba08f13df41b40 = $this->env->getExtension("native_profiler");
        $__internal_f48e96ba052df815749244d98380bc14b4ccd82fa076bff35dba08f13df41b40->enter($__internal_f48e96ba052df815749244d98380bc14b4ccd82fa076bff35dba08f13df41b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f48e96ba052df815749244d98380bc14b4ccd82fa076bff35dba08f13df41b40->leave($__internal_f48e96ba052df815749244d98380bc14b4ccd82fa076bff35dba08f13df41b40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9dacec50d2bb53c8211f0f52dfd8eb110680d07b2613c9619fccf5d5af09d1f = $this->env->getExtension("native_profiler");
        $__internal_b9dacec50d2bb53c8211f0f52dfd8eb110680d07b2613c9619fccf5d5af09d1f->enter($__internal_b9dacec50d2bb53c8211f0f52dfd8eb110680d07b2613c9619fccf5d5af09d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b9dacec50d2bb53c8211f0f52dfd8eb110680d07b2613c9619fccf5d5af09d1f->leave($__internal_b9dacec50d2bb53c8211f0f52dfd8eb110680d07b2613c9619fccf5d5af09d1f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
