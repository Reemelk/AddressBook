<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_351191a91a1f66859b3799e114c13a22c3aa061556ca6d22b44d3a65f37eec6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_45c87aadaa96d8771ec5b7c1b5853c0a1cf628a7554aeadfe98b1d26d55d4dfd = $this->env->getExtension("native_profiler");
        $__internal_45c87aadaa96d8771ec5b7c1b5853c0a1cf628a7554aeadfe98b1d26d55d4dfd->enter($__internal_45c87aadaa96d8771ec5b7c1b5853c0a1cf628a7554aeadfe98b1d26d55d4dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45c87aadaa96d8771ec5b7c1b5853c0a1cf628a7554aeadfe98b1d26d55d4dfd->leave($__internal_45c87aadaa96d8771ec5b7c1b5853c0a1cf628a7554aeadfe98b1d26d55d4dfd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f64ed86b3bd82ce035d7054a49bee36dad3bbb1aa2b2ef1fd4c86a5b2e83fe9a = $this->env->getExtension("native_profiler");
        $__internal_f64ed86b3bd82ce035d7054a49bee36dad3bbb1aa2b2ef1fd4c86a5b2e83fe9a->enter($__internal_f64ed86b3bd82ce035d7054a49bee36dad3bbb1aa2b2ef1fd4c86a5b2e83fe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f64ed86b3bd82ce035d7054a49bee36dad3bbb1aa2b2ef1fd4c86a5b2e83fe9a->leave($__internal_f64ed86b3bd82ce035d7054a49bee36dad3bbb1aa2b2ef1fd4c86a5b2e83fe9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
