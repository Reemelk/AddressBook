<?php

/* @User/Resetting/checkEmail.html.twig */
class __TwigTemplate_6c745aca3a5e7e97e6e0c4afdde30bd9390ff70eb430c37e8e199f7900d7c533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/checkEmail.html.twig", 1);
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
        $__internal_44aa111c1abbc9e7b117ea06dd8059a6fec28c430c45d832704bc91dfcba5c34 = $this->env->getExtension("native_profiler");
        $__internal_44aa111c1abbc9e7b117ea06dd8059a6fec28c430c45d832704bc91dfcba5c34->enter($__internal_44aa111c1abbc9e7b117ea06dd8059a6fec28c430c45d832704bc91dfcba5c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44aa111c1abbc9e7b117ea06dd8059a6fec28c430c45d832704bc91dfcba5c34->leave($__internal_44aa111c1abbc9e7b117ea06dd8059a6fec28c430c45d832704bc91dfcba5c34_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d31bb3f48347b4c98514cb556ba7df98beca861576557f65ee6f8904d0643b60 = $this->env->getExtension("native_profiler");
        $__internal_d31bb3f48347b4c98514cb556ba7df98beca861576557f65ee6f8904d0643b60->enter($__internal_d31bb3f48347b4c98514cb556ba7df98beca861576557f65ee6f8904d0643b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d31bb3f48347b4c98514cb556ba7df98beca861576557f65ee6f8904d0643b60->leave($__internal_d31bb3f48347b4c98514cb556ba7df98beca861576557f65ee6f8904d0643b60_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
