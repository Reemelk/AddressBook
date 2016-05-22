<?php

/* @User/Registration/email.txt.twig */
class __TwigTemplate_90c5a7ca81cbde7720c93d91282c7e6407ca266a62907e1a4ded00b727510fba extends Twig_Template
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
        $__internal_f50b6054dd57fdbe7449781c4a55c4ec0c40c8d488f8259e2039987945f3575d = $this->env->getExtension("native_profiler");
        $__internal_f50b6054dd57fdbe7449781c4a55c4ec0c40c8d488f8259e2039987945f3575d->enter($__internal_f50b6054dd57fdbe7449781c4a55c4ec0c40c8d488f8259e2039987945f3575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f50b6054dd57fdbe7449781c4a55c4ec0c40c8d488f8259e2039987945f3575d->leave($__internal_f50b6054dd57fdbe7449781c4a55c4ec0c40c8d488f8259e2039987945f3575d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3eb74e718de996a99f50f48fd0a967a9d1b3b803f557a7d863607fe57a296396 = $this->env->getExtension("native_profiler");
        $__internal_3eb74e718de996a99f50f48fd0a967a9d1b3b803f557a7d863607fe57a296396->enter($__internal_3eb74e718de996a99f50f48fd0a967a9d1b3b803f557a7d863607fe57a296396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3eb74e718de996a99f50f48fd0a967a9d1b3b803f557a7d863607fe57a296396->leave($__internal_3eb74e718de996a99f50f48fd0a967a9d1b3b803f557a7d863607fe57a296396_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4f4bbd8257da6e13ddb905976d5f8d2c2732d5100d40032562d1b1ed244c3968 = $this->env->getExtension("native_profiler");
        $__internal_4f4bbd8257da6e13ddb905976d5f8d2c2732d5100d40032562d1b1ed244c3968->enter($__internal_4f4bbd8257da6e13ddb905976d5f8d2c2732d5100d40032562d1b1ed244c3968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f4bbd8257da6e13ddb905976d5f8d2c2732d5100d40032562d1b1ed244c3968->leave($__internal_4f4bbd8257da6e13ddb905976d5f8d2c2732d5100d40032562d1b1ed244c3968_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c8aa4fd80f008a9c9e20e93f971cc73369ba9d1a251181044db4712fe0c962a7 = $this->env->getExtension("native_profiler");
        $__internal_c8aa4fd80f008a9c9e20e93f971cc73369ba9d1a251181044db4712fe0c962a7->enter($__internal_c8aa4fd80f008a9c9e20e93f971cc73369ba9d1a251181044db4712fe0c962a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c8aa4fd80f008a9c9e20e93f971cc73369ba9d1a251181044db4712fe0c962a7->leave($__internal_c8aa4fd80f008a9c9e20e93f971cc73369ba9d1a251181044db4712fe0c962a7_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/email.txt.twig";
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
