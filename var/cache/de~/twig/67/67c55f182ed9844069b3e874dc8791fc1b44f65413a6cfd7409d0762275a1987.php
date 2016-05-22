<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a94f714a70748917fbf51501ef2f618336a964deccc204f5d107cc0947cca482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_85c253598a155066bcbc5d5958a45b966ec5446568ba86f3f49bab83b5c25a7e = $this->env->getExtension("native_profiler");
        $__internal_85c253598a155066bcbc5d5958a45b966ec5446568ba86f3f49bab83b5c25a7e->enter($__internal_85c253598a155066bcbc5d5958a45b966ec5446568ba86f3f49bab83b5c25a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c253598a155066bcbc5d5958a45b966ec5446568ba86f3f49bab83b5c25a7e->leave($__internal_85c253598a155066bcbc5d5958a45b966ec5446568ba86f3f49bab83b5c25a7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_635e890421d5126313ce60263c812f7257d43dc8274ac9b172e9de73ec6f072e = $this->env->getExtension("native_profiler");
        $__internal_635e890421d5126313ce60263c812f7257d43dc8274ac9b172e9de73ec6f072e->enter($__internal_635e890421d5126313ce60263c812f7257d43dc8274ac9b172e9de73ec6f072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_635e890421d5126313ce60263c812f7257d43dc8274ac9b172e9de73ec6f072e->leave($__internal_635e890421d5126313ce60263c812f7257d43dc8274ac9b172e9de73ec6f072e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
