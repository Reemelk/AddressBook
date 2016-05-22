<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fdd9f90adba4a0c3be3f676e259914a1eea7e9bb9fbf9959f770b4b659b63017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_e75b145b877b825bff3abf552b1f3d6713dc31698cb52a7188a5bdfb1f3b5151 = $this->env->getExtension("native_profiler");
        $__internal_e75b145b877b825bff3abf552b1f3d6713dc31698cb52a7188a5bdfb1f3b5151->enter($__internal_e75b145b877b825bff3abf552b1f3d6713dc31698cb52a7188a5bdfb1f3b5151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e75b145b877b825bff3abf552b1f3d6713dc31698cb52a7188a5bdfb1f3b5151->leave($__internal_e75b145b877b825bff3abf552b1f3d6713dc31698cb52a7188a5bdfb1f3b5151_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55cd123a2da1e1c02ce41e52c68bd79702c2d6e8ae7dfdc88c16115f24acae11 = $this->env->getExtension("native_profiler");
        $__internal_55cd123a2da1e1c02ce41e52c68bd79702c2d6e8ae7dfdc88c16115f24acae11->enter($__internal_55cd123a2da1e1c02ce41e52c68bd79702c2d6e8ae7dfdc88c16115f24acae11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_55cd123a2da1e1c02ce41e52c68bd79702c2d6e8ae7dfdc88c16115f24acae11->leave($__internal_55cd123a2da1e1c02ce41e52c68bd79702c2d6e8ae7dfdc88c16115f24acae11_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
