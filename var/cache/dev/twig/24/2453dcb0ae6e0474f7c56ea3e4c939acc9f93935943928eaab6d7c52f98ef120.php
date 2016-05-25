<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2e257c134994a17028ef7456621a9088bf001993d0eb3c49c0ce6a3cc1aae7e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_06f5c020ceec153dee0c04c467cba0e65f8da844cc93619f06fce6326b145abe = $this->env->getExtension("native_profiler");
        $__internal_06f5c020ceec153dee0c04c467cba0e65f8da844cc93619f06fce6326b145abe->enter($__internal_06f5c020ceec153dee0c04c467cba0e65f8da844cc93619f06fce6326b145abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f5c020ceec153dee0c04c467cba0e65f8da844cc93619f06fce6326b145abe->leave($__internal_06f5c020ceec153dee0c04c467cba0e65f8da844cc93619f06fce6326b145abe_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36daab17e7fa255e02cd0952c1aa2948e04f2eda5b917a4d9d7151c649f6872a = $this->env->getExtension("native_profiler");
        $__internal_36daab17e7fa255e02cd0952c1aa2948e04f2eda5b917a4d9d7151c649f6872a->enter($__internal_36daab17e7fa255e02cd0952c1aa2948e04f2eda5b917a4d9d7151c649f6872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_36daab17e7fa255e02cd0952c1aa2948e04f2eda5b917a4d9d7151c649f6872a->leave($__internal_36daab17e7fa255e02cd0952c1aa2948e04f2eda5b917a4d9d7151c649f6872a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
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
