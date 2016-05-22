<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_9054f557df67c906717c66ef6de16887f21d286f40d1582aa9e7ff46aa7f8674 extends Twig_Template
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
        $__internal_fbcec9723a7e464027885395906ae80bfcbd890e8321587827e6939b85e9d135 = $this->env->getExtension("native_profiler");
        $__internal_fbcec9723a7e464027885395906ae80bfcbd890e8321587827e6939b85e9d135->enter($__internal_fbcec9723a7e464027885395906ae80bfcbd890e8321587827e6939b85e9d135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fbcec9723a7e464027885395906ae80bfcbd890e8321587827e6939b85e9d135->leave($__internal_fbcec9723a7e464027885395906ae80bfcbd890e8321587827e6939b85e9d135_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7aff2ac6f7d4d980b7a9cd463733e3acef701d15d2973cbfb325a6a4bb21c801 = $this->env->getExtension("native_profiler");
        $__internal_7aff2ac6f7d4d980b7a9cd463733e3acef701d15d2973cbfb325a6a4bb21c801->enter($__internal_7aff2ac6f7d4d980b7a9cd463733e3acef701d15d2973cbfb325a6a4bb21c801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7aff2ac6f7d4d980b7a9cd463733e3acef701d15d2973cbfb325a6a4bb21c801->leave($__internal_7aff2ac6f7d4d980b7a9cd463733e3acef701d15d2973cbfb325a6a4bb21c801_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a488d8c689e783417db7e7cac8b5008c66ca7610f148ff085d38385019053815 = $this->env->getExtension("native_profiler");
        $__internal_a488d8c689e783417db7e7cac8b5008c66ca7610f148ff085d38385019053815->enter($__internal_a488d8c689e783417db7e7cac8b5008c66ca7610f148ff085d38385019053815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a488d8c689e783417db7e7cac8b5008c66ca7610f148ff085d38385019053815->leave($__internal_a488d8c689e783417db7e7cac8b5008c66ca7610f148ff085d38385019053815_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cf335d43d8af0a4e49b0d9e694086f822e4707b8f736d27a1581abf794e2da36 = $this->env->getExtension("native_profiler");
        $__internal_cf335d43d8af0a4e49b0d9e694086f822e4707b8f736d27a1581abf794e2da36->enter($__internal_cf335d43d8af0a4e49b0d9e694086f822e4707b8f736d27a1581abf794e2da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cf335d43d8af0a4e49b0d9e694086f822e4707b8f736d27a1581abf794e2da36->leave($__internal_cf335d43d8af0a4e49b0d9e694086f822e4707b8f736d27a1581abf794e2da36_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
