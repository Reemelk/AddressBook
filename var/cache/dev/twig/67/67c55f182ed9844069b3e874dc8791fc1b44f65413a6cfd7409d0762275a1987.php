<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a94f714a70748917fbf51501ef2f618336a964deccc204f5d107cc0947cca482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_74f6598090db0c98f6302c1ce21b536b5933f1201ece7c73fdfe3b89bad1f7d6 = $this->env->getExtension("native_profiler");
        $__internal_74f6598090db0c98f6302c1ce21b536b5933f1201ece7c73fdfe3b89bad1f7d6->enter($__internal_74f6598090db0c98f6302c1ce21b536b5933f1201ece7c73fdfe3b89bad1f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f6598090db0c98f6302c1ce21b536b5933f1201ece7c73fdfe3b89bad1f7d6->leave($__internal_74f6598090db0c98f6302c1ce21b536b5933f1201ece7c73fdfe3b89bad1f7d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adf181cd6aadbffc46ce05c8881fe6d3a24d9cdf2878df2fd5353ee250ac96fe = $this->env->getExtension("native_profiler");
        $__internal_adf181cd6aadbffc46ce05c8881fe6d3a24d9cdf2878df2fd5353ee250ac96fe->enter($__internal_adf181cd6aadbffc46ce05c8881fe6d3a24d9cdf2878df2fd5353ee250ac96fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_adf181cd6aadbffc46ce05c8881fe6d3a24d9cdf2878df2fd5353ee250ac96fe->leave($__internal_adf181cd6aadbffc46ce05c8881fe6d3a24d9cdf2878df2fd5353ee250ac96fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
