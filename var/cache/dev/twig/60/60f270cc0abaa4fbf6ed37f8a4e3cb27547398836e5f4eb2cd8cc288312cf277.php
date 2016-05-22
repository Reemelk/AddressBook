<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4870be73447384b91fdd5f83abb31f42058b1853ae5ad5e6f15489c78fce80c8 extends Twig_Template
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
        $__internal_16ad39f74b0b5884f6f6c3da27a1413255299e5f183378b8245ecc78093f29fa = $this->env->getExtension("native_profiler");
        $__internal_16ad39f74b0b5884f6f6c3da27a1413255299e5f183378b8245ecc78093f29fa->enter($__internal_16ad39f74b0b5884f6f6c3da27a1413255299e5f183378b8245ecc78093f29fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_16ad39f74b0b5884f6f6c3da27a1413255299e5f183378b8245ecc78093f29fa->leave($__internal_16ad39f74b0b5884f6f6c3da27a1413255299e5f183378b8245ecc78093f29fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
