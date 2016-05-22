<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_fa8bc8692a4d2471617da28b77814239bbf7a7a398e2f08bfc778b65331a0982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Security/login.html.twig", 1);
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
        $__internal_a9afd2968def7f2e7b02d5644e7ad8402b3ca07e674480b02b5d6653ab22e607 = $this->env->getExtension("native_profiler");
        $__internal_a9afd2968def7f2e7b02d5644e7ad8402b3ca07e674480b02b5d6653ab22e607->enter($__internal_a9afd2968def7f2e7b02d5644e7ad8402b3ca07e674480b02b5d6653ab22e607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9afd2968def7f2e7b02d5644e7ad8402b3ca07e674480b02b5d6653ab22e607->leave($__internal_a9afd2968def7f2e7b02d5644e7ad8402b3ca07e674480b02b5d6653ab22e607_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19ceda87ae30a0828ba87afb8127885cbd77b48114f32c693a84629899b96dda = $this->env->getExtension("native_profiler");
        $__internal_19ceda87ae30a0828ba87afb8127885cbd77b48114f32c693a84629899b96dda->enter($__internal_19ceda87ae30a0828ba87afb8127885cbd77b48114f32c693a84629899b96dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"col-md-5 center-block\">
        <form class=\"form-signin\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <label for=\"username\" class=\"sr-only\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Email address\" required=\"required\" />
            <label for=\"password\" class=\"sr-only\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"_password\" required=\"required\" />
            <div class=\"checkbox\">
                <label for=\"remember_me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
        </form>
    </div>
";
        
        $__internal_19ceda87ae30a0828ba87afb8127885cbd77b48114f32c693a84629899b96dda->leave($__internal_19ceda87ae30a0828ba87afb8127885cbd77b48114f32c693a84629899b96dda_prof);

    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  76 => 19,  69 => 15,  65 => 14,  61 => 13,  56 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <div class="col-md-5 center-block">*/
/*         <form class="form-signin" action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*             <h2 class="form-signin-heading">Please sign in</h2>*/
/*             <label for="username" class="sr-only">{{ 'security.login.username'|trans }}</label>*/
/*             <input type="text" id="username" class="form-control" name="_username" value="{{ last_username }}" placeholder="Email address" required="required" />*/
/*             <label for="password" class="sr-only">{{ 'security.login.password'|trans }}</label>*/
/*             <input type="password" id="password" class="form-control" placeholder="Password" name="_password" required="required" />*/
/*             <div class="checkbox">*/
/*                 <label for="remember_me">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> {{ 'security.login.remember_me'|trans }}*/
/*                 </label>*/
/*             </div>*/
/*             <button class="btn btn-lg btn-primary btn-block" type="submit">{{ 'security.login.submit'|trans }}</button>*/
/*         </form>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
