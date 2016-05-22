<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_da2082a9e59bc7213074587973481d15585cf279a9440e3384ea00a2d9f17248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_e370a7188f8827ac499a965b5255beaaa5623b755168b49639920bdc348284fa = $this->env->getExtension("native_profiler");
        $__internal_e370a7188f8827ac499a965b5255beaaa5623b755168b49639920bdc348284fa->enter($__internal_e370a7188f8827ac499a965b5255beaaa5623b755168b49639920bdc348284fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e370a7188f8827ac499a965b5255beaaa5623b755168b49639920bdc348284fa->leave($__internal_e370a7188f8827ac499a965b5255beaaa5623b755168b49639920bdc348284fa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_149ba51978eca90b61ab8b1f46e5313a374b739561ac27e892a5dd294a937fad = $this->env->getExtension("native_profiler");
        $__internal_149ba51978eca90b61ab8b1f46e5313a374b739561ac27e892a5dd294a937fad->enter($__internal_149ba51978eca90b61ab8b1f46e5313a374b739561ac27e892a5dd294a937fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_149ba51978eca90b61ab8b1f46e5313a374b739561ac27e892a5dd294a937fad->leave($__internal_149ba51978eca90b61ab8b1f46e5313a374b739561ac27e892a5dd294a937fad_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
