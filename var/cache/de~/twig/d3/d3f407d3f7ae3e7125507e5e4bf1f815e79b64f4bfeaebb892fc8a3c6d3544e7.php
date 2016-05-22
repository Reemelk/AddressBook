<?php

/* @User/Registration/confirmed.html.twig */
class __TwigTemplate_db813093a79fae772b1409391d733619ab51e2e06be1ed910b976cb4ad395768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/confirmed.html.twig", 1);
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
        $__internal_4d4ff8f31730e4d17bea751f9194cf573407936eb52d353ef2b60b9eb80c17ef = $this->env->getExtension("native_profiler");
        $__internal_4d4ff8f31730e4d17bea751f9194cf573407936eb52d353ef2b60b9eb80c17ef->enter($__internal_4d4ff8f31730e4d17bea751f9194cf573407936eb52d353ef2b60b9eb80c17ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d4ff8f31730e4d17bea751f9194cf573407936eb52d353ef2b60b9eb80c17ef->leave($__internal_4d4ff8f31730e4d17bea751f9194cf573407936eb52d353ef2b60b9eb80c17ef_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_457233893c7041e5856312f92d3611c51bc89e89673feed0b1ed92e4444923b4 = $this->env->getExtension("native_profiler");
        $__internal_457233893c7041e5856312f92d3611c51bc89e89673feed0b1ed92e4444923b4->enter($__internal_457233893c7041e5856312f92d3611c51bc89e89673feed0b1ed92e4444923b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_457233893c7041e5856312f92d3611c51bc89e89673feed0b1ed92e4444923b4->leave($__internal_457233893c7041e5856312f92d3611c51bc89e89673feed0b1ed92e4444923b4_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/confirmed.html.twig";
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
