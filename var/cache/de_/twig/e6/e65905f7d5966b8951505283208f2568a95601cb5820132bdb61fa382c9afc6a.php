<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ffedf4edb2837aa75dc202013ce33034d7f55c9b63aff9946288db362c580cff extends Twig_Template
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
        $__internal_e73ccb10edc367c47c1e8fc5183446deb07ba57aa262df48c5ac8f3bef0bfda4 = $this->env->getExtension("native_profiler");
        $__internal_e73ccb10edc367c47c1e8fc5183446deb07ba57aa262df48c5ac8f3bef0bfda4->enter($__internal_e73ccb10edc367c47c1e8fc5183446deb07ba57aa262df48c5ac8f3bef0bfda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e73ccb10edc367c47c1e8fc5183446deb07ba57aa262df48c5ac8f3bef0bfda4->leave($__internal_e73ccb10edc367c47c1e8fc5183446deb07ba57aa262df48c5ac8f3bef0bfda4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
