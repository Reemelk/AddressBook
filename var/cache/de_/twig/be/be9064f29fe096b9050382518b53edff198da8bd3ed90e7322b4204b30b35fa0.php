<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7fdd8008bcb77dcf06e7818745fa1910c6187694409a24d2906597954a3691dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d346f2f97357ab24998e85bad8ba682716bfe2f7eb57bafbdaf25cedaf7423eb = $this->env->getExtension("native_profiler");
        $__internal_d346f2f97357ab24998e85bad8ba682716bfe2f7eb57bafbdaf25cedaf7423eb->enter($__internal_d346f2f97357ab24998e85bad8ba682716bfe2f7eb57bafbdaf25cedaf7423eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d346f2f97357ab24998e85bad8ba682716bfe2f7eb57bafbdaf25cedaf7423eb->leave($__internal_d346f2f97357ab24998e85bad8ba682716bfe2f7eb57bafbdaf25cedaf7423eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90b2fdc494cd72512225039dd9a56a49b231bb58f483cb70eca0ae4b59d9d4ce = $this->env->getExtension("native_profiler");
        $__internal_90b2fdc494cd72512225039dd9a56a49b231bb58f483cb70eca0ae4b59d9d4ce->enter($__internal_90b2fdc494cd72512225039dd9a56a49b231bb58f483cb70eca0ae4b59d9d4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_90b2fdc494cd72512225039dd9a56a49b231bb58f483cb70eca0ae4b59d9d4ce->leave($__internal_90b2fdc494cd72512225039dd9a56a49b231bb58f483cb70eca0ae4b59d9d4ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
