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
        $__internal_7cc37752c3533d7cf552476dcbb0b8a55b7407ede05b8fe2812bfc6485157af1 = $this->env->getExtension("native_profiler");
        $__internal_7cc37752c3533d7cf552476dcbb0b8a55b7407ede05b8fe2812bfc6485157af1->enter($__internal_7cc37752c3533d7cf552476dcbb0b8a55b7407ede05b8fe2812bfc6485157af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7cc37752c3533d7cf552476dcbb0b8a55b7407ede05b8fe2812bfc6485157af1->leave($__internal_7cc37752c3533d7cf552476dcbb0b8a55b7407ede05b8fe2812bfc6485157af1_prof);

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
