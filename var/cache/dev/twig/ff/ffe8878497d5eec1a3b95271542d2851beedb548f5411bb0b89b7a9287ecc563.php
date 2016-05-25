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
        $__internal_9995205f39f3f49a37c2f9f572f8932fde4e24a06743f7b681a6147ba80e1eca = $this->env->getExtension("native_profiler");
        $__internal_9995205f39f3f49a37c2f9f572f8932fde4e24a06743f7b681a6147ba80e1eca->enter($__internal_9995205f39f3f49a37c2f9f572f8932fde4e24a06743f7b681a6147ba80e1eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9995205f39f3f49a37c2f9f572f8932fde4e24a06743f7b681a6147ba80e1eca->leave($__internal_9995205f39f3f49a37c2f9f572f8932fde4e24a06743f7b681a6147ba80e1eca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb1e534ab7ac013222d53a79862eabb7b850e81496241e52793a162cfa4f50f2 = $this->env->getExtension("native_profiler");
        $__internal_bb1e534ab7ac013222d53a79862eabb7b850e81496241e52793a162cfa4f50f2->enter($__internal_bb1e534ab7ac013222d53a79862eabb7b850e81496241e52793a162cfa4f50f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_bb1e534ab7ac013222d53a79862eabb7b850e81496241e52793a162cfa4f50f2->leave($__internal_bb1e534ab7ac013222d53a79862eabb7b850e81496241e52793a162cfa4f50f2_prof);

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
