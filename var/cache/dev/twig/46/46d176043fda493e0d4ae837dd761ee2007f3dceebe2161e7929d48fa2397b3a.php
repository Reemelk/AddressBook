<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_33e8daa15fbb28f1494d4b21d0ed6edcd2dcb4b139a4382d642f321c13845ecd extends Twig_Template
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
        $__internal_26db19a819248eff7d3caef14e0dc831fd2871eb1ff3fef9425a763d65d7a9e7 = $this->env->getExtension("native_profiler");
        $__internal_26db19a819248eff7d3caef14e0dc831fd2871eb1ff3fef9425a763d65d7a9e7->enter($__internal_26db19a819248eff7d3caef14e0dc831fd2871eb1ff3fef9425a763d65d7a9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_26db19a819248eff7d3caef14e0dc831fd2871eb1ff3fef9425a763d65d7a9e7->leave($__internal_26db19a819248eff7d3caef14e0dc831fd2871eb1ff3fef9425a763d65d7a9e7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e3d06e3b98125b6954faf84ab17e9b8fef46b2049ae37cc26a4606f5d0f3903a = $this->env->getExtension("native_profiler");
        $__internal_e3d06e3b98125b6954faf84ab17e9b8fef46b2049ae37cc26a4606f5d0f3903a->enter($__internal_e3d06e3b98125b6954faf84ab17e9b8fef46b2049ae37cc26a4606f5d0f3903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e3d06e3b98125b6954faf84ab17e9b8fef46b2049ae37cc26a4606f5d0f3903a->leave($__internal_e3d06e3b98125b6954faf84ab17e9b8fef46b2049ae37cc26a4606f5d0f3903a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_564db1a307eb6a31b077397b9b6ddda6259fabf82e4fe0010950c02d4832e4d4 = $this->env->getExtension("native_profiler");
        $__internal_564db1a307eb6a31b077397b9b6ddda6259fabf82e4fe0010950c02d4832e4d4->enter($__internal_564db1a307eb6a31b077397b9b6ddda6259fabf82e4fe0010950c02d4832e4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_564db1a307eb6a31b077397b9b6ddda6259fabf82e4fe0010950c02d4832e4d4->leave($__internal_564db1a307eb6a31b077397b9b6ddda6259fabf82e4fe0010950c02d4832e4d4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8eb490f24997187b493799f2ed00867a30717bc3b2c8f1afbfb9a642e53bc3f8 = $this->env->getExtension("native_profiler");
        $__internal_8eb490f24997187b493799f2ed00867a30717bc3b2c8f1afbfb9a642e53bc3f8->enter($__internal_8eb490f24997187b493799f2ed00867a30717bc3b2c8f1afbfb9a642e53bc3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8eb490f24997187b493799f2ed00867a30717bc3b2c8f1afbfb9a642e53bc3f8->leave($__internal_8eb490f24997187b493799f2ed00867a30717bc3b2c8f1afbfb9a642e53bc3f8_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
