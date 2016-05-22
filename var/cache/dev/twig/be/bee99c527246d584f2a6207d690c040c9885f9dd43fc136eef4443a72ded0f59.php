<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_920fa55e9409d20c50e6849bae591dcce185eca59132f98aa976dccbe3ec3caa extends Twig_Template
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
        $__internal_79cbc01bb767016ed42c916c5b3ab49bf3cc7bb9410737f9f703234d1e0409c7 = $this->env->getExtension("native_profiler");
        $__internal_79cbc01bb767016ed42c916c5b3ab49bf3cc7bb9410737f9f703234d1e0409c7->enter($__internal_79cbc01bb767016ed42c916c5b3ab49bf3cc7bb9410737f9f703234d1e0409c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_79cbc01bb767016ed42c916c5b3ab49bf3cc7bb9410737f9f703234d1e0409c7->leave($__internal_79cbc01bb767016ed42c916c5b3ab49bf3cc7bb9410737f9f703234d1e0409c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
