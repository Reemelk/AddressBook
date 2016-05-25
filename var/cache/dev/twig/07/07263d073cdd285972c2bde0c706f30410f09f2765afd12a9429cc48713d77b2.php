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
        $__internal_8d45b43acb6b9b8e7c92d1a459e943d206b94648d243686c4f314694bf30da32 = $this->env->getExtension("native_profiler");
        $__internal_8d45b43acb6b9b8e7c92d1a459e943d206b94648d243686c4f314694bf30da32->enter($__internal_8d45b43acb6b9b8e7c92d1a459e943d206b94648d243686c4f314694bf30da32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d45b43acb6b9b8e7c92d1a459e943d206b94648d243686c4f314694bf30da32->leave($__internal_8d45b43acb6b9b8e7c92d1a459e943d206b94648d243686c4f314694bf30da32_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a284a0722ca67512edb39371361ba4e5bd5538a9721130583c404cd271d0b51d = $this->env->getExtension("native_profiler");
        $__internal_a284a0722ca67512edb39371361ba4e5bd5538a9721130583c404cd271d0b51d->enter($__internal_a284a0722ca67512edb39371361ba4e5bd5538a9721130583c404cd271d0b51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a284a0722ca67512edb39371361ba4e5bd5538a9721130583c404cd271d0b51d->leave($__internal_a284a0722ca67512edb39371361ba4e5bd5538a9721130583c404cd271d0b51d_prof);

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
