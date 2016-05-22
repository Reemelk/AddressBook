<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_d57fa9b5c4245bc4ee8727208055a146141a64084fb622b083600f13b44239b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84a3a5ef877e1a1654e70c2f87576000251e63208a4040085df91def7fce6b48 = $this->env->getExtension("native_profiler");
        $__internal_84a3a5ef877e1a1654e70c2f87576000251e63208a4040085df91def7fce6b48->enter($__internal_84a3a5ef877e1a1654e70c2f87576000251e63208a4040085df91def7fce6b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a3a5ef877e1a1654e70c2f87576000251e63208a4040085df91def7fce6b48->leave($__internal_84a3a5ef877e1a1654e70c2f87576000251e63208a4040085df91def7fce6b48_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad4b83c214c03a45f8e6030bb985a62866a33240dfc41229df2d014762550ec3 = $this->env->getExtension("native_profiler");
        $__internal_ad4b83c214c03a45f8e6030bb985a62866a33240dfc41229df2d014762550ec3->enter($__internal_ad4b83c214c03a45f8e6030bb985a62866a33240dfc41229df2d014762550ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ad4b83c214c03a45f8e6030bb985a62866a33240dfc41229df2d014762550ec3->leave($__internal_ad4b83c214c03a45f8e6030bb985a62866a33240dfc41229df2d014762550ec3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
