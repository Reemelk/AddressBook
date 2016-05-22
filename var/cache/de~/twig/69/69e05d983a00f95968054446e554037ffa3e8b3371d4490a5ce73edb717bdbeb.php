<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_30e36ddd53bd34bc3e3754cca51a2e1fef4b96beec6fc7846a427eaceced68b3 extends Twig_Template
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
        $__internal_bf34e7628921cfc9409b7b444ca1debe95c418fdc60469c311056f00e55288fe = $this->env->getExtension("native_profiler");
        $__internal_bf34e7628921cfc9409b7b444ca1debe95c418fdc60469c311056f00e55288fe->enter($__internal_bf34e7628921cfc9409b7b444ca1debe95c418fdc60469c311056f00e55288fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bf34e7628921cfc9409b7b444ca1debe95c418fdc60469c311056f00e55288fe->leave($__internal_bf34e7628921cfc9409b7b444ca1debe95c418fdc60469c311056f00e55288fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
