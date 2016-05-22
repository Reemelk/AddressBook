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
        $__internal_f745f6896cfa82462e383a3249c7b8737fb4c4fa52d14d47149c05eb1bd853dc = $this->env->getExtension("native_profiler");
        $__internal_f745f6896cfa82462e383a3249c7b8737fb4c4fa52d14d47149c05eb1bd853dc->enter($__internal_f745f6896cfa82462e383a3249c7b8737fb4c4fa52d14d47149c05eb1bd853dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f745f6896cfa82462e383a3249c7b8737fb4c4fa52d14d47149c05eb1bd853dc->leave($__internal_f745f6896cfa82462e383a3249c7b8737fb4c4fa52d14d47149c05eb1bd853dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84fafe258e083f6067663d13ff09b4d3d7f21c37441344f8521ec78daa45fa0b = $this->env->getExtension("native_profiler");
        $__internal_84fafe258e083f6067663d13ff09b4d3d7f21c37441344f8521ec78daa45fa0b->enter($__internal_84fafe258e083f6067663d13ff09b4d3d7f21c37441344f8521ec78daa45fa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_84fafe258e083f6067663d13ff09b4d3d7f21c37441344f8521ec78daa45fa0b->leave($__internal_84fafe258e083f6067663d13ff09b4d3d7f21c37441344f8521ec78daa45fa0b_prof);

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
