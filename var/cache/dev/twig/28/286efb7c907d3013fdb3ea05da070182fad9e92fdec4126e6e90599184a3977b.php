<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8858ec56889f19ae937ce5dd4c13933061c9bd379e4c0a89864c34f8e93f9be3 extends Twig_Template
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
        $__internal_38455081508d4e5db4e023ec1606e51e7af0187f8d004dc3519b2235d4c1a339 = $this->env->getExtension("native_profiler");
        $__internal_38455081508d4e5db4e023ec1606e51e7af0187f8d004dc3519b2235d4c1a339->enter($__internal_38455081508d4e5db4e023ec1606e51e7af0187f8d004dc3519b2235d4c1a339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_38455081508d4e5db4e023ec1606e51e7af0187f8d004dc3519b2235d4c1a339->leave($__internal_38455081508d4e5db4e023ec1606e51e7af0187f8d004dc3519b2235d4c1a339_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
