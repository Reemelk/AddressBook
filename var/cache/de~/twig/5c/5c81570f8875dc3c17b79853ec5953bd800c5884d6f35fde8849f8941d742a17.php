<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_6dddf54e3e2759eaf900af458d82eafb51c1309df1b8b369fda18de14970557b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_2d1fac985e8e53317ef952d7ab815200ccdd562a216cc09b1a50efa7c3093a4f = $this->env->getExtension("native_profiler");
        $__internal_2d1fac985e8e53317ef952d7ab815200ccdd562a216cc09b1a50efa7c3093a4f->enter($__internal_2d1fac985e8e53317ef952d7ab815200ccdd562a216cc09b1a50efa7c3093a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1fac985e8e53317ef952d7ab815200ccdd562a216cc09b1a50efa7c3093a4f->leave($__internal_2d1fac985e8e53317ef952d7ab815200ccdd562a216cc09b1a50efa7c3093a4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e842b8a8e7e09ae0e33316dcfdfaf23c34873297fac855263510c5665fd04ba = $this->env->getExtension("native_profiler");
        $__internal_3e842b8a8e7e09ae0e33316dcfdfaf23c34873297fac855263510c5665fd04ba->enter($__internal_3e842b8a8e7e09ae0e33316dcfdfaf23c34873297fac855263510c5665fd04ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3e842b8a8e7e09ae0e33316dcfdfaf23c34873297fac855263510c5665fd04ba->leave($__internal_3e842b8a8e7e09ae0e33316dcfdfaf23c34873297fac855263510c5665fd04ba_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
