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
        $__internal_73a47f4a1e09320ce6493fc816fccb410e3755adf3dd43702a438be2c3e2bd05 = $this->env->getExtension("native_profiler");
        $__internal_73a47f4a1e09320ce6493fc816fccb410e3755adf3dd43702a438be2c3e2bd05->enter($__internal_73a47f4a1e09320ce6493fc816fccb410e3755adf3dd43702a438be2c3e2bd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73a47f4a1e09320ce6493fc816fccb410e3755adf3dd43702a438be2c3e2bd05->leave($__internal_73a47f4a1e09320ce6493fc816fccb410e3755adf3dd43702a438be2c3e2bd05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c7afa0a3218d8fbf64bf5882535785231d692c50a24693178cf16b2ebe884a7 = $this->env->getExtension("native_profiler");
        $__internal_5c7afa0a3218d8fbf64bf5882535785231d692c50a24693178cf16b2ebe884a7->enter($__internal_5c7afa0a3218d8fbf64bf5882535785231d692c50a24693178cf16b2ebe884a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_5c7afa0a3218d8fbf64bf5882535785231d692c50a24693178cf16b2ebe884a7->leave($__internal_5c7afa0a3218d8fbf64bf5882535785231d692c50a24693178cf16b2ebe884a7_prof);

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
