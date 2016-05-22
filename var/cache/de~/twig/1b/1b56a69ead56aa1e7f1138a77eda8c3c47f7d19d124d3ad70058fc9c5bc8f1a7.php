<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b8de229f899d45d8a9d4566d9363835bbe89f821573c814e6ab8cff0d0dcbb4e extends Twig_Template
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
        $__internal_cf58d657cbb34e8ea2489d4fb88b2c706c8e025bab7b06be5abd05512195478a = $this->env->getExtension("native_profiler");
        $__internal_cf58d657cbb34e8ea2489d4fb88b2c706c8e025bab7b06be5abd05512195478a->enter($__internal_cf58d657cbb34e8ea2489d4fb88b2c706c8e025bab7b06be5abd05512195478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cf58d657cbb34e8ea2489d4fb88b2c706c8e025bab7b06be5abd05512195478a->leave($__internal_cf58d657cbb34e8ea2489d4fb88b2c706c8e025bab7b06be5abd05512195478a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
