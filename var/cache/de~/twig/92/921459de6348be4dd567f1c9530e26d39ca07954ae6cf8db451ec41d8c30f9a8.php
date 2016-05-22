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
        $__internal_5dceb034ae51d2062b66547cd1671579a1e68f218ee758190a8944c16cae7fc9 = $this->env->getExtension("native_profiler");
        $__internal_5dceb034ae51d2062b66547cd1671579a1e68f218ee758190a8944c16cae7fc9->enter($__internal_5dceb034ae51d2062b66547cd1671579a1e68f218ee758190a8944c16cae7fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5dceb034ae51d2062b66547cd1671579a1e68f218ee758190a8944c16cae7fc9->leave($__internal_5dceb034ae51d2062b66547cd1671579a1e68f218ee758190a8944c16cae7fc9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ec9fa693a716576e35f9dc17585a5bca83ea37536a09017abb426aa4204eb566 = $this->env->getExtension("native_profiler");
        $__internal_ec9fa693a716576e35f9dc17585a5bca83ea37536a09017abb426aa4204eb566->enter($__internal_ec9fa693a716576e35f9dc17585a5bca83ea37536a09017abb426aa4204eb566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ec9fa693a716576e35f9dc17585a5bca83ea37536a09017abb426aa4204eb566->leave($__internal_ec9fa693a716576e35f9dc17585a5bca83ea37536a09017abb426aa4204eb566_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_22d08cb24f6eaf3cfe9d32e1839e3ed117d97af6e49bc73c97449503e6314306 = $this->env->getExtension("native_profiler");
        $__internal_22d08cb24f6eaf3cfe9d32e1839e3ed117d97af6e49bc73c97449503e6314306->enter($__internal_22d08cb24f6eaf3cfe9d32e1839e3ed117d97af6e49bc73c97449503e6314306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_22d08cb24f6eaf3cfe9d32e1839e3ed117d97af6e49bc73c97449503e6314306->leave($__internal_22d08cb24f6eaf3cfe9d32e1839e3ed117d97af6e49bc73c97449503e6314306_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ac9072effc9c8a9e69a25e53cf61615aeb040d43a5c0cb5e0b7eda29afbb578b = $this->env->getExtension("native_profiler");
        $__internal_ac9072effc9c8a9e69a25e53cf61615aeb040d43a5c0cb5e0b7eda29afbb578b->enter($__internal_ac9072effc9c8a9e69a25e53cf61615aeb040d43a5c0cb5e0b7eda29afbb578b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ac9072effc9c8a9e69a25e53cf61615aeb040d43a5c0cb5e0b7eda29afbb578b->leave($__internal_ac9072effc9c8a9e69a25e53cf61615aeb040d43a5c0cb5e0b7eda29afbb578b_prof);

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
