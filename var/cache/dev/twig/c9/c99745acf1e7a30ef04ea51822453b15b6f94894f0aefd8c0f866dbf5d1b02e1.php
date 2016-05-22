<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2d1b1976bfa410045fcc1734d782e4451bbd1830d1d5f48b205308f4d7708e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_281779a5c5200208081c9c2dff44f19fb5ff977d75f41d43d1c324f45d0d131b = $this->env->getExtension("native_profiler");
        $__internal_281779a5c5200208081c9c2dff44f19fb5ff977d75f41d43d1c324f45d0d131b->enter($__internal_281779a5c5200208081c9c2dff44f19fb5ff977d75f41d43d1c324f45d0d131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281779a5c5200208081c9c2dff44f19fb5ff977d75f41d43d1c324f45d0d131b->leave($__internal_281779a5c5200208081c9c2dff44f19fb5ff977d75f41d43d1c324f45d0d131b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2d4f822ac1803c3ba85375b0524c5b429f24b903d379c36086ca9a3011591fc = $this->env->getExtension("native_profiler");
        $__internal_f2d4f822ac1803c3ba85375b0524c5b429f24b903d379c36086ca9a3011591fc->enter($__internal_f2d4f822ac1803c3ba85375b0524c5b429f24b903d379c36086ca9a3011591fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f2d4f822ac1803c3ba85375b0524c5b429f24b903d379c36086ca9a3011591fc->leave($__internal_f2d4f822ac1803c3ba85375b0524c5b429f24b903d379c36086ca9a3011591fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
