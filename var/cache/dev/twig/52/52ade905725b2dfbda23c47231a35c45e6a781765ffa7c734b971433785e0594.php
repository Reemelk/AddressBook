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
        $__internal_64446fb2d212686325d0f2c31b65fd4f1ecf26da9adc2412948a1a0613f65811 = $this->env->getExtension("native_profiler");
        $__internal_64446fb2d212686325d0f2c31b65fd4f1ecf26da9adc2412948a1a0613f65811->enter($__internal_64446fb2d212686325d0f2c31b65fd4f1ecf26da9adc2412948a1a0613f65811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64446fb2d212686325d0f2c31b65fd4f1ecf26da9adc2412948a1a0613f65811->leave($__internal_64446fb2d212686325d0f2c31b65fd4f1ecf26da9adc2412948a1a0613f65811_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74e5d8745bb9dffb78f592e75b2765721a0fdea6e361076fded96f74ad920c05 = $this->env->getExtension("native_profiler");
        $__internal_74e5d8745bb9dffb78f592e75b2765721a0fdea6e361076fded96f74ad920c05->enter($__internal_74e5d8745bb9dffb78f592e75b2765721a0fdea6e361076fded96f74ad920c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"alert alert-success\" role=\"alert\" style=\"margin-top: 10px\"><p class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p></div>
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
        
        $__internal_74e5d8745bb9dffb78f592e75b2765721a0fdea6e361076fded96f74ad920c05->leave($__internal_74e5d8745bb9dffb78f592e75b2765721a0fdea6e361076fded96f74ad920c05_prof);

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
/*     <div class="alert alert-success" role="alert" style="margin-top: 10px"><p class="text-center">{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p></div>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
