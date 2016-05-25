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
        $__internal_09dcf35250d742cfe9c0a785a881f65c4d0c3d975556a354aef508e5bb0b97db = $this->env->getExtension("native_profiler");
        $__internal_09dcf35250d742cfe9c0a785a881f65c4d0c3d975556a354aef508e5bb0b97db->enter($__internal_09dcf35250d742cfe9c0a785a881f65c4d0c3d975556a354aef508e5bb0b97db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_09dcf35250d742cfe9c0a785a881f65c4d0c3d975556a354aef508e5bb0b97db->leave($__internal_09dcf35250d742cfe9c0a785a881f65c4d0c3d975556a354aef508e5bb0b97db_prof);

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
