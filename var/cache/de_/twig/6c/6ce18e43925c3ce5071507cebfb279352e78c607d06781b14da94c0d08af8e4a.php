<?php

/* @User/Profile/show_content.html.twig */
class __TwigTemplate_d47fbbfad640d2b411b72a8195a40aaf431db302c8aa53255c18b903a2ea202f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1fd66cfb69b33cbc30d936066b0cdda8d91fd0c5d84ee240b02373f97bf081e = $this->env->getExtension("native_profiler");
        $__internal_a1fd66cfb69b33cbc30d936066b0cdda8d91fd0c5d84ee240b02373f97bf081e->enter($__internal_a1fd66cfb69b33cbc30d936066b0cdda8d91fd0c5d84ee240b02373f97bf081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a1fd66cfb69b33cbc30d936066b0cdda8d91fd0c5d84ee240b02373f97bf081e->leave($__internal_a1fd66cfb69b33cbc30d936066b0cdda8d91fd0c5d84ee240b02373f97bf081e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
