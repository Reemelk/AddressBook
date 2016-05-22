<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_6d94f92959c42424cc4c6b2a166806905d7d39ffae5d33842a55b541306e7887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa9912555115a762c8ad4458f98c5d1b403bf500f655e8f5cfab76106ec41ec1 = $this->env->getExtension("native_profiler");
        $__internal_aa9912555115a762c8ad4458f98c5d1b403bf500f655e8f5cfab76106ec41ec1->enter($__internal_aa9912555115a762c8ad4458f98c5d1b403bf500f655e8f5cfab76106ec41ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aa9912555115a762c8ad4458f98c5d1b403bf500f655e8f5cfab76106ec41ec1->leave($__internal_aa9912555115a762c8ad4458f98c5d1b403bf500f655e8f5cfab76106ec41ec1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8d139827e1b409f4e56f906b31a4d093ae742d08231364311db0a41529e27b11 = $this->env->getExtension("native_profiler");
        $__internal_8d139827e1b409f4e56f906b31a4d093ae742d08231364311db0a41529e27b11->enter($__internal_8d139827e1b409f4e56f906b31a4d093ae742d08231364311db0a41529e27b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8d139827e1b409f4e56f906b31a4d093ae742d08231364311db0a41529e27b11->leave($__internal_8d139827e1b409f4e56f906b31a4d093ae742d08231364311db0a41529e27b11_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b94afd89cef16d091858c87cbb591a59ec8b20fe5219c8d3e2a81a9f872b8203 = $this->env->getExtension("native_profiler");
        $__internal_b94afd89cef16d091858c87cbb591a59ec8b20fe5219c8d3e2a81a9f872b8203->enter($__internal_b94afd89cef16d091858c87cbb591a59ec8b20fe5219c8d3e2a81a9f872b8203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b94afd89cef16d091858c87cbb591a59ec8b20fe5219c8d3e2a81a9f872b8203->leave($__internal_b94afd89cef16d091858c87cbb591a59ec8b20fe5219c8d3e2a81a9f872b8203_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dd795245b59d9a010b73bfac4d2056fdf843e2cadba7eb80588e14e309022839 = $this->env->getExtension("native_profiler");
        $__internal_dd795245b59d9a010b73bfac4d2056fdf843e2cadba7eb80588e14e309022839->enter($__internal_dd795245b59d9a010b73bfac4d2056fdf843e2cadba7eb80588e14e309022839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd795245b59d9a010b73bfac4d2056fdf843e2cadba7eb80588e14e309022839->leave($__internal_dd795245b59d9a010b73bfac4d2056fdf843e2cadba7eb80588e14e309022839_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
