<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a24c8cab63ff353ebf9cc02bf3ed709e1f08f859d25a2ae84b253a5f9f8e8ec7 extends Twig_Template
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
        $__internal_6a43fe0b0d24234c393b6b3a486b21e93e71ae30ef86924ce45d45db4b1e9356 = $this->env->getExtension("native_profiler");
        $__internal_6a43fe0b0d24234c393b6b3a486b21e93e71ae30ef86924ce45d45db4b1e9356->enter($__internal_6a43fe0b0d24234c393b6b3a486b21e93e71ae30ef86924ce45d45db4b1e9356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6a43fe0b0d24234c393b6b3a486b21e93e71ae30ef86924ce45d45db4b1e9356->leave($__internal_6a43fe0b0d24234c393b6b3a486b21e93e71ae30ef86924ce45d45db4b1e9356_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
