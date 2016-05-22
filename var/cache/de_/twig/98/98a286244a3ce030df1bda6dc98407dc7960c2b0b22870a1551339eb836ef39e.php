<?php

/* @User/Resetting/checkEmail.html.twig */
class __TwigTemplate_6c745aca3a5e7e97e6e0c4afdde30bd9390ff70eb430c37e8e199f7900d7c533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/checkEmail.html.twig", 1);
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
        $__internal_2efaa11ede24bf55fd1a5cd334b57dd4dc9c0755cdba4f6cd6c7443b2532ec91 = $this->env->getExtension("native_profiler");
        $__internal_2efaa11ede24bf55fd1a5cd334b57dd4dc9c0755cdba4f6cd6c7443b2532ec91->enter($__internal_2efaa11ede24bf55fd1a5cd334b57dd4dc9c0755cdba4f6cd6c7443b2532ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2efaa11ede24bf55fd1a5cd334b57dd4dc9c0755cdba4f6cd6c7443b2532ec91->leave($__internal_2efaa11ede24bf55fd1a5cd334b57dd4dc9c0755cdba4f6cd6c7443b2532ec91_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3da6069f1b3cd4db8b8f538c26693517af07f4b40528fdb90765e1caf7a41d8 = $this->env->getExtension("native_profiler");
        $__internal_b3da6069f1b3cd4db8b8f538c26693517af07f4b40528fdb90765e1caf7a41d8->enter($__internal_b3da6069f1b3cd4db8b8f538c26693517af07f4b40528fdb90765e1caf7a41d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b3da6069f1b3cd4db8b8f538c26693517af07f4b40528fdb90765e1caf7a41d8->leave($__internal_b3da6069f1b3cd4db8b8f538c26693517af07f4b40528fdb90765e1caf7a41d8_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
