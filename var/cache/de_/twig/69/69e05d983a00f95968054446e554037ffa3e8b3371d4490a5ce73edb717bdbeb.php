<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_30e36ddd53bd34bc3e3754cca51a2e1fef4b96beec6fc7846a427eaceced68b3 extends Twig_Template
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
        $__internal_8b6a10e8b01a7bdbd7a8deb7e6b5a2c3d5225a46e12827a3776f826f61050ee2 = $this->env->getExtension("native_profiler");
        $__internal_8b6a10e8b01a7bdbd7a8deb7e6b5a2c3d5225a46e12827a3776f826f61050ee2->enter($__internal_8b6a10e8b01a7bdbd7a8deb7e6b5a2c3d5225a46e12827a3776f826f61050ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8b6a10e8b01a7bdbd7a8deb7e6b5a2c3d5225a46e12827a3776f826f61050ee2->leave($__internal_8b6a10e8b01a7bdbd7a8deb7e6b5a2c3d5225a46e12827a3776f826f61050ee2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
