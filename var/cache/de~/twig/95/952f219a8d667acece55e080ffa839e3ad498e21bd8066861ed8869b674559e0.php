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
        $__internal_b0308644cee9bf0240453d86bd4471e3649a1d0e8c0d163ba8fc2850d538904c = $this->env->getExtension("native_profiler");
        $__internal_b0308644cee9bf0240453d86bd4471e3649a1d0e8c0d163ba8fc2850d538904c->enter($__internal_b0308644cee9bf0240453d86bd4471e3649a1d0e8c0d163ba8fc2850d538904c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b0308644cee9bf0240453d86bd4471e3649a1d0e8c0d163ba8fc2850d538904c->leave($__internal_b0308644cee9bf0240453d86bd4471e3649a1d0e8c0d163ba8fc2850d538904c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_44a44211f0d3cd632a30731c7d202bf5be8da9561d83bedb2adf146c3cd7a447 = $this->env->getExtension("native_profiler");
        $__internal_44a44211f0d3cd632a30731c7d202bf5be8da9561d83bedb2adf146c3cd7a447->enter($__internal_44a44211f0d3cd632a30731c7d202bf5be8da9561d83bedb2adf146c3cd7a447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_44a44211f0d3cd632a30731c7d202bf5be8da9561d83bedb2adf146c3cd7a447->leave($__internal_44a44211f0d3cd632a30731c7d202bf5be8da9561d83bedb2adf146c3cd7a447_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cbe475e8b6ee69488071dd050e2c50d401ce6f0d08701ae742087f2ad21a5832 = $this->env->getExtension("native_profiler");
        $__internal_cbe475e8b6ee69488071dd050e2c50d401ce6f0d08701ae742087f2ad21a5832->enter($__internal_cbe475e8b6ee69488071dd050e2c50d401ce6f0d08701ae742087f2ad21a5832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cbe475e8b6ee69488071dd050e2c50d401ce6f0d08701ae742087f2ad21a5832->leave($__internal_cbe475e8b6ee69488071dd050e2c50d401ce6f0d08701ae742087f2ad21a5832_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_34148e0417dd256d02b35d46d1b8ef4000328b0f784b7474126e1624afc343b7 = $this->env->getExtension("native_profiler");
        $__internal_34148e0417dd256d02b35d46d1b8ef4000328b0f784b7474126e1624afc343b7->enter($__internal_34148e0417dd256d02b35d46d1b8ef4000328b0f784b7474126e1624afc343b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_34148e0417dd256d02b35d46d1b8ef4000328b0f784b7474126e1624afc343b7->leave($__internal_34148e0417dd256d02b35d46d1b8ef4000328b0f784b7474126e1624afc343b7_prof);

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
