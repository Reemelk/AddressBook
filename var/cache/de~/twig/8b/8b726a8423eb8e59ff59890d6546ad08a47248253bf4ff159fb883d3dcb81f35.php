<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_6d5e0d246af443ef674d2752e1eb5bb3ff9def55c3c1aaaff8159816c05e0e39 extends Twig_Template
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
        $__internal_04ece16ba20961c677d6ceba98d3471d625a045ada7e0caf3a5f7d62ebcbd03e = $this->env->getExtension("native_profiler");
        $__internal_04ece16ba20961c677d6ceba98d3471d625a045ada7e0caf3a5f7d62ebcbd03e->enter($__internal_04ece16ba20961c677d6ceba98d3471d625a045ada7e0caf3a5f7d62ebcbd03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_04ece16ba20961c677d6ceba98d3471d625a045ada7e0caf3a5f7d62ebcbd03e->leave($__internal_04ece16ba20961c677d6ceba98d3471d625a045ada7e0caf3a5f7d62ebcbd03e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
