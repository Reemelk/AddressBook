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
        $__internal_ef4cd483196c0499b3b41c68852bf9bede0c1cb342bfbe40cc95af808ef0a816 = $this->env->getExtension("native_profiler");
        $__internal_ef4cd483196c0499b3b41c68852bf9bede0c1cb342bfbe40cc95af808ef0a816->enter($__internal_ef4cd483196c0499b3b41c68852bf9bede0c1cb342bfbe40cc95af808ef0a816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ef4cd483196c0499b3b41c68852bf9bede0c1cb342bfbe40cc95af808ef0a816->leave($__internal_ef4cd483196c0499b3b41c68852bf9bede0c1cb342bfbe40cc95af808ef0a816_prof);

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
