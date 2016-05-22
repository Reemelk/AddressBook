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
        $__internal_ccc1d5417f1a332ba6f3ee7a80dd118f2916b0384aee27904b8b02b7bb0a577f = $this->env->getExtension("native_profiler");
        $__internal_ccc1d5417f1a332ba6f3ee7a80dd118f2916b0384aee27904b8b02b7bb0a577f->enter($__internal_ccc1d5417f1a332ba6f3ee7a80dd118f2916b0384aee27904b8b02b7bb0a577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ccc1d5417f1a332ba6f3ee7a80dd118f2916b0384aee27904b8b02b7bb0a577f->leave($__internal_ccc1d5417f1a332ba6f3ee7a80dd118f2916b0384aee27904b8b02b7bb0a577f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9f8e752e7e86e5086c7bcfae822bf4d030200e589b66560ba81c2aff51175c9b = $this->env->getExtension("native_profiler");
        $__internal_9f8e752e7e86e5086c7bcfae822bf4d030200e589b66560ba81c2aff51175c9b->enter($__internal_9f8e752e7e86e5086c7bcfae822bf4d030200e589b66560ba81c2aff51175c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9f8e752e7e86e5086c7bcfae822bf4d030200e589b66560ba81c2aff51175c9b->leave($__internal_9f8e752e7e86e5086c7bcfae822bf4d030200e589b66560ba81c2aff51175c9b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1ca83c36f343ead8058d3f7f11ecdf3737582058d08eb8c103848d45ea69201c = $this->env->getExtension("native_profiler");
        $__internal_1ca83c36f343ead8058d3f7f11ecdf3737582058d08eb8c103848d45ea69201c->enter($__internal_1ca83c36f343ead8058d3f7f11ecdf3737582058d08eb8c103848d45ea69201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1ca83c36f343ead8058d3f7f11ecdf3737582058d08eb8c103848d45ea69201c->leave($__internal_1ca83c36f343ead8058d3f7f11ecdf3737582058d08eb8c103848d45ea69201c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7c2abdeb94fc54b0da3bd2f4e466deceb7630c3a23767aa470135f2e454242d5 = $this->env->getExtension("native_profiler");
        $__internal_7c2abdeb94fc54b0da3bd2f4e466deceb7630c3a23767aa470135f2e454242d5->enter($__internal_7c2abdeb94fc54b0da3bd2f4e466deceb7630c3a23767aa470135f2e454242d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7c2abdeb94fc54b0da3bd2f4e466deceb7630c3a23767aa470135f2e454242d5->leave($__internal_7c2abdeb94fc54b0da3bd2f4e466deceb7630c3a23767aa470135f2e454242d5_prof);

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
