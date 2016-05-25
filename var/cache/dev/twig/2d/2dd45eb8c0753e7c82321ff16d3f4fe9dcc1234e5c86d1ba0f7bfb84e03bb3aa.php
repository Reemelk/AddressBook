<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_928bad4049568f0a700a58dc16eb6dc02a4d7ab9bf2e3a9db92d046bd33f12f8 extends Twig_Template
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
        $__internal_5814d71e5a88632577c3a756decf5594f4b94f8fef40f94010c665b5754fe1a1 = $this->env->getExtension("native_profiler");
        $__internal_5814d71e5a88632577c3a756decf5594f4b94f8fef40f94010c665b5754fe1a1->enter($__internal_5814d71e5a88632577c3a756decf5594f4b94f8fef40f94010c665b5754fe1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5814d71e5a88632577c3a756decf5594f4b94f8fef40f94010c665b5754fe1a1->leave($__internal_5814d71e5a88632577c3a756decf5594f4b94f8fef40f94010c665b5754fe1a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
