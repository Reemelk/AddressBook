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
        $__internal_87f648868a56c7247f891af7b4e1d36b4772efa4385613d707bf593c86729e82 = $this->env->getExtension("native_profiler");
        $__internal_87f648868a56c7247f891af7b4e1d36b4772efa4385613d707bf593c86729e82->enter($__internal_87f648868a56c7247f891af7b4e1d36b4772efa4385613d707bf593c86729e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f648868a56c7247f891af7b4e1d36b4772efa4385613d707bf593c86729e82->leave($__internal_87f648868a56c7247f891af7b4e1d36b4772efa4385613d707bf593c86729e82_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47a8e121f06442ed862fb8bc2255f1f0b2bfe726981d1ff6512ef9d9fae623ba = $this->env->getExtension("native_profiler");
        $__internal_47a8e121f06442ed862fb8bc2255f1f0b2bfe726981d1ff6512ef9d9fae623ba->enter($__internal_47a8e121f06442ed862fb8bc2255f1f0b2bfe726981d1ff6512ef9d9fae623ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_47a8e121f06442ed862fb8bc2255f1f0b2bfe726981d1ff6512ef9d9fae623ba->leave($__internal_47a8e121f06442ed862fb8bc2255f1f0b2bfe726981d1ff6512ef9d9fae623ba_prof);

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
/*     <div class="alert alert-success" role="alert" style="margin-top: 10px"><p class="text-center">{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p></div>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
