<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7699da2889fa7cc86b7c9315ca39447b1e064b191d6574575030407474d33070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_80f7acc859e8f9401217562eada8bc095176701ab07d6cce9636aaa1d968b1d0 = $this->env->getExtension("native_profiler");
        $__internal_80f7acc859e8f9401217562eada8bc095176701ab07d6cce9636aaa1d968b1d0->enter($__internal_80f7acc859e8f9401217562eada8bc095176701ab07d6cce9636aaa1d968b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f7acc859e8f9401217562eada8bc095176701ab07d6cce9636aaa1d968b1d0->leave($__internal_80f7acc859e8f9401217562eada8bc095176701ab07d6cce9636aaa1d968b1d0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb316a305c0774a314d718e850b0e61f4e49548bfc09cd8dc0221d5970aa9d68 = $this->env->getExtension("native_profiler");
        $__internal_cb316a305c0774a314d718e850b0e61f4e49548bfc09cd8dc0221d5970aa9d68->enter($__internal_cb316a305c0774a314d718e850b0e61f4e49548bfc09cd8dc0221d5970aa9d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cb316a305c0774a314d718e850b0e61f4e49548bfc09cd8dc0221d5970aa9d68->leave($__internal_cb316a305c0774a314d718e850b0e61f4e49548bfc09cd8dc0221d5970aa9d68_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
