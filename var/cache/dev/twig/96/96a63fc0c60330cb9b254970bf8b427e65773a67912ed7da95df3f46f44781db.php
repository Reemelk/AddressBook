<?php

/* @User/Registration/checkEmail.html.twig */
class __TwigTemplate_d7c6d102277c6ec85b85c372479b46d218a774a66ddf4686ec28c0fed13b7592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/checkEmail.html.twig", 1);
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
        $__internal_cebf9a786939f47f4869a0a04d80d4d72cef33159a79780e6ffc766aee9ac092 = $this->env->getExtension("native_profiler");
        $__internal_cebf9a786939f47f4869a0a04d80d4d72cef33159a79780e6ffc766aee9ac092->enter($__internal_cebf9a786939f47f4869a0a04d80d4d72cef33159a79780e6ffc766aee9ac092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebf9a786939f47f4869a0a04d80d4d72cef33159a79780e6ffc766aee9ac092->leave($__internal_cebf9a786939f47f4869a0a04d80d4d72cef33159a79780e6ffc766aee9ac092_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0d74245ffe5d68ff5195003ad2c7acacdbc5f30be3de039e1e879e5ed88606f = $this->env->getExtension("native_profiler");
        $__internal_c0d74245ffe5d68ff5195003ad2c7acacdbc5f30be3de039e1e879e5ed88606f->enter($__internal_c0d74245ffe5d68ff5195003ad2c7acacdbc5f30be3de039e1e879e5ed88606f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c0d74245ffe5d68ff5195003ad2c7acacdbc5f30be3de039e1e879e5ed88606f->leave($__internal_c0d74245ffe5d68ff5195003ad2c7acacdbc5f30be3de039e1e879e5ed88606f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/checkEmail.html.twig";
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
