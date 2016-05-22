<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a8033372f84a8ac6cefb3938416c7b6791cf253f65b3fbe7923dd8cd5ea5e4be extends Twig_Template
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
        $__internal_edb120d048e8839163219f5f7660fd74e3266a7bd1a4b1d9d4ea69dfce6838bf = $this->env->getExtension("native_profiler");
        $__internal_edb120d048e8839163219f5f7660fd74e3266a7bd1a4b1d9d4ea69dfce6838bf->enter($__internal_edb120d048e8839163219f5f7660fd74e3266a7bd1a4b1d9d4ea69dfce6838bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_edb120d048e8839163219f5f7660fd74e3266a7bd1a4b1d9d4ea69dfce6838bf->leave($__internal_edb120d048e8839163219f5f7660fd74e3266a7bd1a4b1d9d4ea69dfce6838bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
