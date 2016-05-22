<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_cbc28219447a12a5abfc9fc77c5319e030eff08a2672f83a728e960f3dd81e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_b1fa570b4542f19da91197e19d665529d0fe723f518b9755493c7cbd85794f61 = $this->env->getExtension("native_profiler");
        $__internal_b1fa570b4542f19da91197e19d665529d0fe723f518b9755493c7cbd85794f61->enter($__internal_b1fa570b4542f19da91197e19d665529d0fe723f518b9755493c7cbd85794f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1fa570b4542f19da91197e19d665529d0fe723f518b9755493c7cbd85794f61->leave($__internal_b1fa570b4542f19da91197e19d665529d0fe723f518b9755493c7cbd85794f61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddbe659ec3b48511a65673231559003dc8c0dd77890521823925a8518b578ba1 = $this->env->getExtension("native_profiler");
        $__internal_ddbe659ec3b48511a65673231559003dc8c0dd77890521823925a8518b578ba1->enter($__internal_ddbe659ec3b48511a65673231559003dc8c0dd77890521823925a8518b578ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_ddbe659ec3b48511a65673231559003dc8c0dd77890521823925a8518b578ba1->leave($__internal_ddbe659ec3b48511a65673231559003dc8c0dd77890521823925a8518b578ba1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
