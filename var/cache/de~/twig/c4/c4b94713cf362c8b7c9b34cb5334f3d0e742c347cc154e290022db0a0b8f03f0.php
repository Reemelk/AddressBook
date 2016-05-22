<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_49ddbcd17c23a08140f30910fc07de7210b58220fc3a5bdb79607f89348eb369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_73680ab9af489180f3e560e43130192fe1de98ed331b6e09003c104ebe2e61e1 = $this->env->getExtension("native_profiler");
        $__internal_73680ab9af489180f3e560e43130192fe1de98ed331b6e09003c104ebe2e61e1->enter($__internal_73680ab9af489180f3e560e43130192fe1de98ed331b6e09003c104ebe2e61e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73680ab9af489180f3e560e43130192fe1de98ed331b6e09003c104ebe2e61e1->leave($__internal_73680ab9af489180f3e560e43130192fe1de98ed331b6e09003c104ebe2e61e1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33f9e90cdede90e8156afaa0a371a8e04398a85aaf6c58f9551ce0056719d917 = $this->env->getExtension("native_profiler");
        $__internal_33f9e90cdede90e8156afaa0a371a8e04398a85aaf6c58f9551ce0056719d917->enter($__internal_33f9e90cdede90e8156afaa0a371a8e04398a85aaf6c58f9551ce0056719d917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_33f9e90cdede90e8156afaa0a371a8e04398a85aaf6c58f9551ce0056719d917->leave($__internal_33f9e90cdede90e8156afaa0a371a8e04398a85aaf6c58f9551ce0056719d917_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
