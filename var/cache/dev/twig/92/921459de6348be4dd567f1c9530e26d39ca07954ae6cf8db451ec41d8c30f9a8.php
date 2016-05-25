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
        $__internal_f3fc80215e1e89daed249695d796f93b77191cbc51d1acac065bd3c499ae7ae6 = $this->env->getExtension("native_profiler");
        $__internal_f3fc80215e1e89daed249695d796f93b77191cbc51d1acac065bd3c499ae7ae6->enter($__internal_f3fc80215e1e89daed249695d796f93b77191cbc51d1acac065bd3c499ae7ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3fc80215e1e89daed249695d796f93b77191cbc51d1acac065bd3c499ae7ae6->leave($__internal_f3fc80215e1e89daed249695d796f93b77191cbc51d1acac065bd3c499ae7ae6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a8ace42504184b41e469fd1bd03c076e361c37707fc63f9a360eeedfe5f2b2b1 = $this->env->getExtension("native_profiler");
        $__internal_a8ace42504184b41e469fd1bd03c076e361c37707fc63f9a360eeedfe5f2b2b1->enter($__internal_a8ace42504184b41e469fd1bd03c076e361c37707fc63f9a360eeedfe5f2b2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a8ace42504184b41e469fd1bd03c076e361c37707fc63f9a360eeedfe5f2b2b1->leave($__internal_a8ace42504184b41e469fd1bd03c076e361c37707fc63f9a360eeedfe5f2b2b1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d011a5b6b2633d8c474252f4b25022f59bb9b5131e772a67dcec263779eed6b1 = $this->env->getExtension("native_profiler");
        $__internal_d011a5b6b2633d8c474252f4b25022f59bb9b5131e772a67dcec263779eed6b1->enter($__internal_d011a5b6b2633d8c474252f4b25022f59bb9b5131e772a67dcec263779eed6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d011a5b6b2633d8c474252f4b25022f59bb9b5131e772a67dcec263779eed6b1->leave($__internal_d011a5b6b2633d8c474252f4b25022f59bb9b5131e772a67dcec263779eed6b1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9a1b5ee7210edf60bc3e4986e61f3e2e58f327ab0d167af121dfde671c041eaf = $this->env->getExtension("native_profiler");
        $__internal_9a1b5ee7210edf60bc3e4986e61f3e2e58f327ab0d167af121dfde671c041eaf->enter($__internal_9a1b5ee7210edf60bc3e4986e61f3e2e58f327ab0d167af121dfde671c041eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9a1b5ee7210edf60bc3e4986e61f3e2e58f327ab0d167af121dfde671c041eaf->leave($__internal_9a1b5ee7210edf60bc3e4986e61f3e2e58f327ab0d167af121dfde671c041eaf_prof);

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
