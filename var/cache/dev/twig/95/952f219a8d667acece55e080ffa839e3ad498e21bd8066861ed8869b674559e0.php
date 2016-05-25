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
        $__internal_b7376fed6ff5fd7f37fd34571a6cce1ac4588a7d21a327a7da07f4e006b14a61 = $this->env->getExtension("native_profiler");
        $__internal_b7376fed6ff5fd7f37fd34571a6cce1ac4588a7d21a327a7da07f4e006b14a61->enter($__internal_b7376fed6ff5fd7f37fd34571a6cce1ac4588a7d21a327a7da07f4e006b14a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b7376fed6ff5fd7f37fd34571a6cce1ac4588a7d21a327a7da07f4e006b14a61->leave($__internal_b7376fed6ff5fd7f37fd34571a6cce1ac4588a7d21a327a7da07f4e006b14a61_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_80495698f66e28ac2bccd6614d9c7e3c95c77cf727acc5cf5f9f902ba83b183d = $this->env->getExtension("native_profiler");
        $__internal_80495698f66e28ac2bccd6614d9c7e3c95c77cf727acc5cf5f9f902ba83b183d->enter($__internal_80495698f66e28ac2bccd6614d9c7e3c95c77cf727acc5cf5f9f902ba83b183d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_80495698f66e28ac2bccd6614d9c7e3c95c77cf727acc5cf5f9f902ba83b183d->leave($__internal_80495698f66e28ac2bccd6614d9c7e3c95c77cf727acc5cf5f9f902ba83b183d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3146b992600a8ec3b69bf79391b5c15ffe38756b85b94367aba63c9259515ac6 = $this->env->getExtension("native_profiler");
        $__internal_3146b992600a8ec3b69bf79391b5c15ffe38756b85b94367aba63c9259515ac6->enter($__internal_3146b992600a8ec3b69bf79391b5c15ffe38756b85b94367aba63c9259515ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3146b992600a8ec3b69bf79391b5c15ffe38756b85b94367aba63c9259515ac6->leave($__internal_3146b992600a8ec3b69bf79391b5c15ffe38756b85b94367aba63c9259515ac6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_844fea87319f5b562cba025109b87a5aeac742c23d2844c70f2b31fd9c4d61a0 = $this->env->getExtension("native_profiler");
        $__internal_844fea87319f5b562cba025109b87a5aeac742c23d2844c70f2b31fd9c4d61a0->enter($__internal_844fea87319f5b562cba025109b87a5aeac742c23d2844c70f2b31fd9c4d61a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_844fea87319f5b562cba025109b87a5aeac742c23d2844c70f2b31fd9c4d61a0->leave($__internal_844fea87319f5b562cba025109b87a5aeac742c23d2844c70f2b31fd9c4d61a0_prof);

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
