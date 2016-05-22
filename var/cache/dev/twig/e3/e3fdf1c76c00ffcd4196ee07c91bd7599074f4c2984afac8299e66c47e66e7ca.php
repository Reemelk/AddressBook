<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a6a0955e6f904297574945bdb2f951d2128c402d3bbce683047e8a368529bc98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_f88e246b2a5694dc9df0a4262e0be40bc0031143ee311d95c09c588fb5b9ccce = $this->env->getExtension("native_profiler");
        $__internal_f88e246b2a5694dc9df0a4262e0be40bc0031143ee311d95c09c588fb5b9ccce->enter($__internal_f88e246b2a5694dc9df0a4262e0be40bc0031143ee311d95c09c588fb5b9ccce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f88e246b2a5694dc9df0a4262e0be40bc0031143ee311d95c09c588fb5b9ccce->leave($__internal_f88e246b2a5694dc9df0a4262e0be40bc0031143ee311d95c09c588fb5b9ccce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cc7e9f48c3d6b0988b33207943203cb81b97216116752bb48721db17734efb4 = $this->env->getExtension("native_profiler");
        $__internal_3cc7e9f48c3d6b0988b33207943203cb81b97216116752bb48721db17734efb4->enter($__internal_3cc7e9f48c3d6b0988b33207943203cb81b97216116752bb48721db17734efb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_3cc7e9f48c3d6b0988b33207943203cb81b97216116752bb48721db17734efb4->leave($__internal_3cc7e9f48c3d6b0988b33207943203cb81b97216116752bb48721db17734efb4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
