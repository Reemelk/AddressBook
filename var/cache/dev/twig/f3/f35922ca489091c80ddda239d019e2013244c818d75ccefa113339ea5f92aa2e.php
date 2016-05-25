<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_a3f9cd3e18b48e6627a8343c558fa2cc195851806263e2045afa39dcba0c53c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_7cf1261d4bdd25bdf71638baf8746ad5fdd2522ef942a5e55121e8c0d73b142d = $this->env->getExtension("native_profiler");
        $__internal_7cf1261d4bdd25bdf71638baf8746ad5fdd2522ef942a5e55121e8c0d73b142d->enter($__internal_7cf1261d4bdd25bdf71638baf8746ad5fdd2522ef942a5e55121e8c0d73b142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cf1261d4bdd25bdf71638baf8746ad5fdd2522ef942a5e55121e8c0d73b142d->leave($__internal_7cf1261d4bdd25bdf71638baf8746ad5fdd2522ef942a5e55121e8c0d73b142d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_892550e54873ff947aea269e21fe3e416fd22565ca8054bc3a34343f20eb65b6 = $this->env->getExtension("native_profiler");
        $__internal_892550e54873ff947aea269e21fe3e416fd22565ca8054bc3a34343f20eb65b6->enter($__internal_892550e54873ff947aea269e21fe3e416fd22565ca8054bc3a34343f20eb65b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_892550e54873ff947aea269e21fe3e416fd22565ca8054bc3a34343f20eb65b6->leave($__internal_892550e54873ff947aea269e21fe3e416fd22565ca8054bc3a34343f20eb65b6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
