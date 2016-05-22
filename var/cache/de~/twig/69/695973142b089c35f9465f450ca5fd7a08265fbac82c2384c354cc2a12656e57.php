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
        $__internal_70bad25a5aaea9bebfac86b29f8a638a1f0bdfe55bb3f9836218f71ae31b82cc = $this->env->getExtension("native_profiler");
        $__internal_70bad25a5aaea9bebfac86b29f8a638a1f0bdfe55bb3f9836218f71ae31b82cc->enter($__internal_70bad25a5aaea9bebfac86b29f8a638a1f0bdfe55bb3f9836218f71ae31b82cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_70bad25a5aaea9bebfac86b29f8a638a1f0bdfe55bb3f9836218f71ae31b82cc->leave($__internal_70bad25a5aaea9bebfac86b29f8a638a1f0bdfe55bb3f9836218f71ae31b82cc_prof);

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
