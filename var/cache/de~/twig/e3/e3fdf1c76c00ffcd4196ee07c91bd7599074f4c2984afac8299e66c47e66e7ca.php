<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a6a0955e6f904297574945bdb2f951d2128c402d3bbce683047e8a368529bc98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_a57a42ba9d08b87c0f200a29d9dfc479ff19a0d6a45604e906e92b8ec29bde4a = $this->env->getExtension("native_profiler");
        $__internal_a57a42ba9d08b87c0f200a29d9dfc479ff19a0d6a45604e906e92b8ec29bde4a->enter($__internal_a57a42ba9d08b87c0f200a29d9dfc479ff19a0d6a45604e906e92b8ec29bde4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57a42ba9d08b87c0f200a29d9dfc479ff19a0d6a45604e906e92b8ec29bde4a->leave($__internal_a57a42ba9d08b87c0f200a29d9dfc479ff19a0d6a45604e906e92b8ec29bde4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cad7928f653bdf0586c7c8dbfd0fed3e6920f6cbdf9a7ccf400d560ae76892f9 = $this->env->getExtension("native_profiler");
        $__internal_cad7928f653bdf0586c7c8dbfd0fed3e6920f6cbdf9a7ccf400d560ae76892f9->enter($__internal_cad7928f653bdf0586c7c8dbfd0fed3e6920f6cbdf9a7ccf400d560ae76892f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_cad7928f653bdf0586c7c8dbfd0fed3e6920f6cbdf9a7ccf400d560ae76892f9->leave($__internal_cad7928f653bdf0586c7c8dbfd0fed3e6920f6cbdf9a7ccf400d560ae76892f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
