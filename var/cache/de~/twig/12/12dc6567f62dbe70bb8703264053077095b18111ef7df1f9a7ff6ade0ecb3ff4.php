<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_d313ef72285ed2898f91436270abbc0b15c4e6c260ff21f7d6b276bcc4f886a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_eaae501c3cc4364ff2732d225bf166d023653876c7999d53546ae8765bf86fc4 = $this->env->getExtension("native_profiler");
        $__internal_eaae501c3cc4364ff2732d225bf166d023653876c7999d53546ae8765bf86fc4->enter($__internal_eaae501c3cc4364ff2732d225bf166d023653876c7999d53546ae8765bf86fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaae501c3cc4364ff2732d225bf166d023653876c7999d53546ae8765bf86fc4->leave($__internal_eaae501c3cc4364ff2732d225bf166d023653876c7999d53546ae8765bf86fc4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80dbc460a767c119421406fd12bda73a0e640c4542b26092f91a12b8577277c6 = $this->env->getExtension("native_profiler");
        $__internal_80dbc460a767c119421406fd12bda73a0e640c4542b26092f91a12b8577277c6->enter($__internal_80dbc460a767c119421406fd12bda73a0e640c4542b26092f91a12b8577277c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_80dbc460a767c119421406fd12bda73a0e640c4542b26092f91a12b8577277c6->leave($__internal_80dbc460a767c119421406fd12bda73a0e640c4542b26092f91a12b8577277c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
