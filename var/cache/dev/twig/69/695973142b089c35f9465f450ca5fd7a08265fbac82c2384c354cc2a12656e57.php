<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_0b5028e2b788800efec5fbc7d5a07f928e583370b02ab464acdce2d2fbf8408b extends Twig_Template
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
        $__internal_7b86f7522e5ccca3c298a3b32e59be48501c4aea3e76e55108aca36a06dad7fd = $this->env->getExtension("native_profiler");
        $__internal_7b86f7522e5ccca3c298a3b32e59be48501c4aea3e76e55108aca36a06dad7fd->enter($__internal_7b86f7522e5ccca3c298a3b32e59be48501c4aea3e76e55108aca36a06dad7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7b86f7522e5ccca3c298a3b32e59be48501c4aea3e76e55108aca36a06dad7fd->leave($__internal_7b86f7522e5ccca3c298a3b32e59be48501c4aea3e76e55108aca36a06dad7fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
