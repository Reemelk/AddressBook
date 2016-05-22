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
        $__internal_48d1e53be962c825f3bd84ed35e8430185946aac836049dc0b78ff6564ce2190 = $this->env->getExtension("native_profiler");
        $__internal_48d1e53be962c825f3bd84ed35e8430185946aac836049dc0b78ff6564ce2190->enter($__internal_48d1e53be962c825f3bd84ed35e8430185946aac836049dc0b78ff6564ce2190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d1e53be962c825f3bd84ed35e8430185946aac836049dc0b78ff6564ce2190->leave($__internal_48d1e53be962c825f3bd84ed35e8430185946aac836049dc0b78ff6564ce2190_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b386624cac70cf93e16bdb9ffbe8703dd17de77503cee99cf4ab3c588b69a412 = $this->env->getExtension("native_profiler");
        $__internal_b386624cac70cf93e16bdb9ffbe8703dd17de77503cee99cf4ab3c588b69a412->enter($__internal_b386624cac70cf93e16bdb9ffbe8703dd17de77503cee99cf4ab3c588b69a412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_b386624cac70cf93e16bdb9ffbe8703dd17de77503cee99cf4ab3c588b69a412->leave($__internal_b386624cac70cf93e16bdb9ffbe8703dd17de77503cee99cf4ab3c588b69a412_prof);

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
