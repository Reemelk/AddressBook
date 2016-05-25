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
        $__internal_90a5facaebc19164538f08432c7a8f10335cfe03244bc568d3a604446a14c9f8 = $this->env->getExtension("native_profiler");
        $__internal_90a5facaebc19164538f08432c7a8f10335cfe03244bc568d3a604446a14c9f8->enter($__internal_90a5facaebc19164538f08432c7a8f10335cfe03244bc568d3a604446a14c9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a5facaebc19164538f08432c7a8f10335cfe03244bc568d3a604446a14c9f8->leave($__internal_90a5facaebc19164538f08432c7a8f10335cfe03244bc568d3a604446a14c9f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99df6dc8fb6354664fdcf4ee14c0a6431742c512078817fa99952258e7c66d19 = $this->env->getExtension("native_profiler");
        $__internal_99df6dc8fb6354664fdcf4ee14c0a6431742c512078817fa99952258e7c66d19->enter($__internal_99df6dc8fb6354664fdcf4ee14c0a6431742c512078817fa99952258e7c66d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_99df6dc8fb6354664fdcf4ee14c0a6431742c512078817fa99952258e7c66d19->leave($__internal_99df6dc8fb6354664fdcf4ee14c0a6431742c512078817fa99952258e7c66d19_prof);

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
