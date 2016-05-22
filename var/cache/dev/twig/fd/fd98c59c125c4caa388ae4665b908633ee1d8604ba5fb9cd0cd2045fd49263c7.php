<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_32b87c01eebfc1209f4c9378b965a24e95056d93f22a9a055f774481e472b79f extends Twig_Template
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
        $__internal_549dd08fb48071fc833c6b50781d744f5faa83f81f720bc431c64e5649f44d17 = $this->env->getExtension("native_profiler");
        $__internal_549dd08fb48071fc833c6b50781d744f5faa83f81f720bc431c64e5649f44d17->enter($__internal_549dd08fb48071fc833c6b50781d744f5faa83f81f720bc431c64e5649f44d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_549dd08fb48071fc833c6b50781d744f5faa83f81f720bc431c64e5649f44d17->leave($__internal_549dd08fb48071fc833c6b50781d744f5faa83f81f720bc431c64e5649f44d17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
