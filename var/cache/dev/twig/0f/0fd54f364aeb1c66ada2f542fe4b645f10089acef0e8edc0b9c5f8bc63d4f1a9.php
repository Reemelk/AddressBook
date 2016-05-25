<?php

/* @User/layout.html.twig */
class __TwigTemplate_efdcbbafcf53be80c63997a302fb04c099d9d3dc0b787545c88ac2ee666c2bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ca4b0902be6dbc0534d951900d15cd2c7d6c8e53eb9263cdd3266a8cd445288 = $this->env->getExtension("native_profiler");
        $__internal_4ca4b0902be6dbc0534d951900d15cd2c7d6c8e53eb9263cdd3266a8cd445288->enter($__internal_4ca4b0902be6dbc0534d951900d15cd2c7d6c8e53eb9263cdd3266a8cd445288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ca4b0902be6dbc0534d951900d15cd2c7d6c8e53eb9263cdd3266a8cd445288->leave($__internal_4ca4b0902be6dbc0534d951900d15cd2c7d6c8e53eb9263cdd3266a8cd445288_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a78a0e55d6505e417111e5d74e62d30bbbefb4dd48a7089520a17edcf78219cf = $this->env->getExtension("native_profiler");
        $__internal_a78a0e55d6505e417111e5d74e62d30bbbefb4dd48a7089520a17edcf78219cf->enter($__internal_a78a0e55d6505e417111e5d74e62d30bbbefb4dd48a7089520a17edcf78219cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_a78a0e55d6505e417111e5d74e62d30bbbefb4dd48a7089520a17edcf78219cf->leave($__internal_a78a0e55d6505e417111e5d74e62d30bbbefb4dd48a7089520a17edcf78219cf_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{  block('fos_user_content') }}*/
/* {% endblock %}*/
