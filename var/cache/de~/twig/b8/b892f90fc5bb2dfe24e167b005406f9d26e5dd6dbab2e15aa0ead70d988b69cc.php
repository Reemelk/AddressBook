<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_444dd55963faf6d4df55a5f06306c85a01f65a4eff524550183731f8c7d90baa extends Twig_Template
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
        $__internal_74a51c562283cf19e2c90617c1291b0cfee68f37b851beb5f5b9f3b074a61e79 = $this->env->getExtension("native_profiler");
        $__internal_74a51c562283cf19e2c90617c1291b0cfee68f37b851beb5f5b9f3b074a61e79->enter($__internal_74a51c562283cf19e2c90617c1291b0cfee68f37b851beb5f5b9f3b074a61e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_74a51c562283cf19e2c90617c1291b0cfee68f37b851beb5f5b9f3b074a61e79->leave($__internal_74a51c562283cf19e2c90617c1291b0cfee68f37b851beb5f5b9f3b074a61e79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
