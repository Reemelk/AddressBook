<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6d5e0d246af443ef674d2752e1eb5bb3ff9def55c3c1aaaff8159816c05e0e39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b2db06f2960aa03d354e83194df9d81c25d960a1de5ff88a112d2d7ad85ba64 = $this->env->getExtension("native_profiler");
        $__internal_7b2db06f2960aa03d354e83194df9d81c25d960a1de5ff88a112d2d7ad85ba64->enter($__internal_7b2db06f2960aa03d354e83194df9d81c25d960a1de5ff88a112d2d7ad85ba64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7b2db06f2960aa03d354e83194df9d81c25d960a1de5ff88a112d2d7ad85ba64->leave($__internal_7b2db06f2960aa03d354e83194df9d81c25d960a1de5ff88a112d2d7ad85ba64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
