<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9dd8f5e969b3e143deced2250c38b89560ebb831a8e08016e4afbc486213a009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e8a50adb876b8c31218406ae854807301499be710286d1c76f1c6ec617016f89 = $this->env->getExtension("native_profiler");
        $__internal_e8a50adb876b8c31218406ae854807301499be710286d1c76f1c6ec617016f89->enter($__internal_e8a50adb876b8c31218406ae854807301499be710286d1c76f1c6ec617016f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a50adb876b8c31218406ae854807301499be710286d1c76f1c6ec617016f89->leave($__internal_e8a50adb876b8c31218406ae854807301499be710286d1c76f1c6ec617016f89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be8dca8d2333bcf620520f3f7216596669bae90e07e082bc99f8be27e9cb1b9f = $this->env->getExtension("native_profiler");
        $__internal_be8dca8d2333bcf620520f3f7216596669bae90e07e082bc99f8be27e9cb1b9f->enter($__internal_be8dca8d2333bcf620520f3f7216596669bae90e07e082bc99f8be27e9cb1b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_be8dca8d2333bcf620520f3f7216596669bae90e07e082bc99f8be27e9cb1b9f->leave($__internal_be8dca8d2333bcf620520f3f7216596669bae90e07e082bc99f8be27e9cb1b9f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
