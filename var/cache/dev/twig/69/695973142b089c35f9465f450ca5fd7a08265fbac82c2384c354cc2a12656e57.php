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
        $__internal_8dcd4ff26af282299fe5234a48157d2a6ad66e5f1915a546d86a7b82c0fe9100 = $this->env->getExtension("native_profiler");
        $__internal_8dcd4ff26af282299fe5234a48157d2a6ad66e5f1915a546d86a7b82c0fe9100->enter($__internal_8dcd4ff26af282299fe5234a48157d2a6ad66e5f1915a546d86a7b82c0fe9100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8dcd4ff26af282299fe5234a48157d2a6ad66e5f1915a546d86a7b82c0fe9100->leave($__internal_8dcd4ff26af282299fe5234a48157d2a6ad66e5f1915a546d86a7b82c0fe9100_prof);

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
