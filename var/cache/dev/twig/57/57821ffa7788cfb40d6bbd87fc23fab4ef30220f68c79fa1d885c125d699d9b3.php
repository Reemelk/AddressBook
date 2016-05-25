<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_ba32917fd4ee85660359ac80e1080cd674218597c41be3a5b33a887e5bd7791e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_bc453a894f1d364a91a1cbe5f654ccee1b9852f66a5b69a8a5354076e7a828e9 = $this->env->getExtension("native_profiler");
        $__internal_bc453a894f1d364a91a1cbe5f654ccee1b9852f66a5b69a8a5354076e7a828e9->enter($__internal_bc453a894f1d364a91a1cbe5f654ccee1b9852f66a5b69a8a5354076e7a828e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc453a894f1d364a91a1cbe5f654ccee1b9852f66a5b69a8a5354076e7a828e9->leave($__internal_bc453a894f1d364a91a1cbe5f654ccee1b9852f66a5b69a8a5354076e7a828e9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1e4d7d583b7805a1b1980e890bab5e4bed0e9b6411f48fd51c03bc1efa47f37 = $this->env->getExtension("native_profiler");
        $__internal_a1e4d7d583b7805a1b1980e890bab5e4bed0e9b6411f48fd51c03bc1efa47f37->enter($__internal_a1e4d7d583b7805a1b1980e890bab5e4bed0e9b6411f48fd51c03bc1efa47f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a1e4d7d583b7805a1b1980e890bab5e4bed0e9b6411f48fd51c03bc1efa47f37->leave($__internal_a1e4d7d583b7805a1b1980e890bab5e4bed0e9b6411f48fd51c03bc1efa47f37_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
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
