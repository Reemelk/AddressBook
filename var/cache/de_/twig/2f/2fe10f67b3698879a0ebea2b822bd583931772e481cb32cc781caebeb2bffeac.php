<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1201c42719d2fe7ab811a5543ff21fc02ce4bfd0cdb1161cd7a5e168999204e2 extends Twig_Template
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
        $__internal_dced8a41cf5703951509377da3ae1a3ac126ccf02ef570af56e2910ee9972967 = $this->env->getExtension("native_profiler");
        $__internal_dced8a41cf5703951509377da3ae1a3ac126ccf02ef570af56e2910ee9972967->enter($__internal_dced8a41cf5703951509377da3ae1a3ac126ccf02ef570af56e2910ee9972967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dced8a41cf5703951509377da3ae1a3ac126ccf02ef570af56e2910ee9972967->leave($__internal_dced8a41cf5703951509377da3ae1a3ac126ccf02ef570af56e2910ee9972967_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3bb72d447d503c6916c2154833ba42ee13984909c0359c31f1d1421e3414f9e2 = $this->env->getExtension("native_profiler");
        $__internal_3bb72d447d503c6916c2154833ba42ee13984909c0359c31f1d1421e3414f9e2->enter($__internal_3bb72d447d503c6916c2154833ba42ee13984909c0359c31f1d1421e3414f9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3bb72d447d503c6916c2154833ba42ee13984909c0359c31f1d1421e3414f9e2->leave($__internal_3bb72d447d503c6916c2154833ba42ee13984909c0359c31f1d1421e3414f9e2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a7f9848199f70db3d586832fae4cf5b7ee39fc3598fc7788d3cc51c08cd3941b = $this->env->getExtension("native_profiler");
        $__internal_a7f9848199f70db3d586832fae4cf5b7ee39fc3598fc7788d3cc51c08cd3941b->enter($__internal_a7f9848199f70db3d586832fae4cf5b7ee39fc3598fc7788d3cc51c08cd3941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a7f9848199f70db3d586832fae4cf5b7ee39fc3598fc7788d3cc51c08cd3941b->leave($__internal_a7f9848199f70db3d586832fae4cf5b7ee39fc3598fc7788d3cc51c08cd3941b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e5cbd3766e356bfc352c03a3df54812e416a19fcafced09aa5652dc52c4d5e08 = $this->env->getExtension("native_profiler");
        $__internal_e5cbd3766e356bfc352c03a3df54812e416a19fcafced09aa5652dc52c4d5e08->enter($__internal_e5cbd3766e356bfc352c03a3df54812e416a19fcafced09aa5652dc52c4d5e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e5cbd3766e356bfc352c03a3df54812e416a19fcafced09aa5652dc52c4d5e08->leave($__internal_e5cbd3766e356bfc352c03a3df54812e416a19fcafced09aa5652dc52c4d5e08_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
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
