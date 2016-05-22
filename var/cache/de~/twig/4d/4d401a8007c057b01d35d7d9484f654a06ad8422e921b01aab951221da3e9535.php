<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_ed62cb7aa5a187f83293d635d8d656843067a6da5a559772131846e88860bbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/reset.html.twig", 1);
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
        $__internal_29f46d6eb0ad5a02845c6e1e00b1007cca483dac6a07c125e070a6c3872d2f0b = $this->env->getExtension("native_profiler");
        $__internal_29f46d6eb0ad5a02845c6e1e00b1007cca483dac6a07c125e070a6c3872d2f0b->enter($__internal_29f46d6eb0ad5a02845c6e1e00b1007cca483dac6a07c125e070a6c3872d2f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29f46d6eb0ad5a02845c6e1e00b1007cca483dac6a07c125e070a6c3872d2f0b->leave($__internal_29f46d6eb0ad5a02845c6e1e00b1007cca483dac6a07c125e070a6c3872d2f0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_daf15ce9ec9e1046a373dc3d73190ba739a5a99cfd0a2905309dd008ca155f35 = $this->env->getExtension("native_profiler");
        $__internal_daf15ce9ec9e1046a373dc3d73190ba739a5a99cfd0a2905309dd008ca155f35->enter($__internal_daf15ce9ec9e1046a373dc3d73190ba739a5a99cfd0a2905309dd008ca155f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_daf15ce9ec9e1046a373dc3d73190ba739a5a99cfd0a2905309dd008ca155f35->leave($__internal_daf15ce9ec9e1046a373dc3d73190ba739a5a99cfd0a2905309dd008ca155f35_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
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
