<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1ec6a15e59fc85679356fc3c29fc94addabc5636db4fcde91b3b02d5bcd8d6d0 extends Twig_Template
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
        $__internal_001d792d98a15966333a8accbe79406d228b4fc0110a6ebc0bb4c5d907249d09 = $this->env->getExtension("native_profiler");
        $__internal_001d792d98a15966333a8accbe79406d228b4fc0110a6ebc0bb4c5d907249d09->enter($__internal_001d792d98a15966333a8accbe79406d228b4fc0110a6ebc0bb4c5d907249d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_001d792d98a15966333a8accbe79406d228b4fc0110a6ebc0bb4c5d907249d09->leave($__internal_001d792d98a15966333a8accbe79406d228b4fc0110a6ebc0bb4c5d907249d09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
