<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ed08bcfca5857632910702d9f7359c4b9b32d872cf7a9d8d27825cf0e5beaf32 extends Twig_Template
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
        $__internal_dfe5b79d8f7ff03215b0967a960471b6ec57d58b65c0aca76aa0e9d40c5f0330 = $this->env->getExtension("native_profiler");
        $__internal_dfe5b79d8f7ff03215b0967a960471b6ec57d58b65c0aca76aa0e9d40c5f0330->enter($__internal_dfe5b79d8f7ff03215b0967a960471b6ec57d58b65c0aca76aa0e9d40c5f0330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_dfe5b79d8f7ff03215b0967a960471b6ec57d58b65c0aca76aa0e9d40c5f0330->leave($__internal_dfe5b79d8f7ff03215b0967a960471b6ec57d58b65c0aca76aa0e9d40c5f0330_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
