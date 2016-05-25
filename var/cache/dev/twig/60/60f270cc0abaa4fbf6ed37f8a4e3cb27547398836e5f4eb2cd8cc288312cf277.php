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
        $__internal_34c3a2bdab0c3de9f0e99393351c1d6211732b8b9fd510502e2916ae8ef43dd2 = $this->env->getExtension("native_profiler");
        $__internal_34c3a2bdab0c3de9f0e99393351c1d6211732b8b9fd510502e2916ae8ef43dd2->enter($__internal_34c3a2bdab0c3de9f0e99393351c1d6211732b8b9fd510502e2916ae8ef43dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_34c3a2bdab0c3de9f0e99393351c1d6211732b8b9fd510502e2916ae8ef43dd2->leave($__internal_34c3a2bdab0c3de9f0e99393351c1d6211732b8b9fd510502e2916ae8ef43dd2_prof);

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
