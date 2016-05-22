<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_12322d38f49778d2642c327486a3f8717b73a2b66e6b3df310773a84a844cbee extends Twig_Template
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
        $__internal_1bcc9a3bbb9575f6d2c81960fe36ba10c6bf47710097a6a8848cc121b01ff21d = $this->env->getExtension("native_profiler");
        $__internal_1bcc9a3bbb9575f6d2c81960fe36ba10c6bf47710097a6a8848cc121b01ff21d->enter($__internal_1bcc9a3bbb9575f6d2c81960fe36ba10c6bf47710097a6a8848cc121b01ff21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1bcc9a3bbb9575f6d2c81960fe36ba10c6bf47710097a6a8848cc121b01ff21d->leave($__internal_1bcc9a3bbb9575f6d2c81960fe36ba10c6bf47710097a6a8848cc121b01ff21d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
