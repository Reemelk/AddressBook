<?php

/* @User/Reception/index.html.twig */
class __TwigTemplate_f7e220fbfb8e56a52d8202e6b47ce0807e1c255813685cd1626c0610fca96a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/Reception/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7b3d7ed8a300a1dc0f597bf3e32ecd5cf91917c3adc5e376b2425cbcbc03901 = $this->env->getExtension("native_profiler");
        $__internal_d7b3d7ed8a300a1dc0f597bf3e32ecd5cf91917c3adc5e376b2425cbcbc03901->enter($__internal_d7b3d7ed8a300a1dc0f597bf3e32ecd5cf91917c3adc5e376b2425cbcbc03901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Reception/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7b3d7ed8a300a1dc0f597bf3e32ecd5cf91917c3adc5e376b2425cbcbc03901->leave($__internal_d7b3d7ed8a300a1dc0f597bf3e32ecd5cf91917c3adc5e376b2425cbcbc03901_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c504bd0fa3afc23b566eafd80c60767977472cc772115759a17e1035b389e08 = $this->env->getExtension("native_profiler");
        $__internal_3c504bd0fa3afc23b566eafd80c60767977472cc772115759a17e1035b389e08->enter($__internal_3c504bd0fa3afc23b566eafd80c60767977472cc772115759a17e1035b389e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Welcome !</h1>
            <p>Developed with Symfony 3</p>
            <p>By Julien Lesieur.</p>
        </div>
    </div>
";
        
        $__internal_3c504bd0fa3afc23b566eafd80c60767977472cc772115759a17e1035b389e08->leave($__internal_3c504bd0fa3afc23b566eafd80c60767977472cc772115759a17e1035b389e08_prof);

    }

    public function getTemplateName()
    {
        return "@User/Reception/index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Welcome !</h1>*/
/*             <p>Developed with Symfony 3</p>*/
/*             <p>By Julien Lesieur.</p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
