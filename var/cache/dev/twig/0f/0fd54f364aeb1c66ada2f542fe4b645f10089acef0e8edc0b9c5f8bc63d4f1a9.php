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
        $__internal_d69dbc92e84e83f7914ce7c6a92258b35a2faa0ad218ad9e5de833ab95e721fd = $this->env->getExtension("native_profiler");
        $__internal_d69dbc92e84e83f7914ce7c6a92258b35a2faa0ad218ad9e5de833ab95e721fd->enter($__internal_d69dbc92e84e83f7914ce7c6a92258b35a2faa0ad218ad9e5de833ab95e721fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69dbc92e84e83f7914ce7c6a92258b35a2faa0ad218ad9e5de833ab95e721fd->leave($__internal_d69dbc92e84e83f7914ce7c6a92258b35a2faa0ad218ad9e5de833ab95e721fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79e1191cbc911e40c0fa9ee696dc5481f7009c1393da9c0d632153ae621388d6 = $this->env->getExtension("native_profiler");
        $__internal_79e1191cbc911e40c0fa9ee696dc5481f7009c1393da9c0d632153ae621388d6->enter($__internal_79e1191cbc911e40c0fa9ee696dc5481f7009c1393da9c0d632153ae621388d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_79e1191cbc911e40c0fa9ee696dc5481f7009c1393da9c0d632153ae621388d6->leave($__internal_79e1191cbc911e40c0fa9ee696dc5481f7009c1393da9c0d632153ae621388d6_prof);

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
