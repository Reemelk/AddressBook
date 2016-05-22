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
        $__internal_9474993157dbd2bf3a0c85e436dcd208c72be11eeb8a60750296bff172babc59 = $this->env->getExtension("native_profiler");
        $__internal_9474993157dbd2bf3a0c85e436dcd208c72be11eeb8a60750296bff172babc59->enter($__internal_9474993157dbd2bf3a0c85e436dcd208c72be11eeb8a60750296bff172babc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9474993157dbd2bf3a0c85e436dcd208c72be11eeb8a60750296bff172babc59->leave($__internal_9474993157dbd2bf3a0c85e436dcd208c72be11eeb8a60750296bff172babc59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_047006de577c98a4842a58e2faf805f396b52b94b25815875941791dea461f54 = $this->env->getExtension("native_profiler");
        $__internal_047006de577c98a4842a58e2faf805f396b52b94b25815875941791dea461f54->enter($__internal_047006de577c98a4842a58e2faf805f396b52b94b25815875941791dea461f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_047006de577c98a4842a58e2faf805f396b52b94b25815875941791dea461f54->leave($__internal_047006de577c98a4842a58e2faf805f396b52b94b25815875941791dea461f54_prof);

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
