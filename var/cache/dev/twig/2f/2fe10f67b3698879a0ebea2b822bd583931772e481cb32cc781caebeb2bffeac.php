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
        $__internal_a8743019f583c18574a432a8f648cf2841f5e9a1c6587d3f2d4b81b1212d9a40 = $this->env->getExtension("native_profiler");
        $__internal_a8743019f583c18574a432a8f648cf2841f5e9a1c6587d3f2d4b81b1212d9a40->enter($__internal_a8743019f583c18574a432a8f648cf2841f5e9a1c6587d3f2d4b81b1212d9a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a8743019f583c18574a432a8f648cf2841f5e9a1c6587d3f2d4b81b1212d9a40->leave($__internal_a8743019f583c18574a432a8f648cf2841f5e9a1c6587d3f2d4b81b1212d9a40_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_526b7e3a10c79a0234985cc0204b2d9226a31511b56c91b75c9b67ec424e8966 = $this->env->getExtension("native_profiler");
        $__internal_526b7e3a10c79a0234985cc0204b2d9226a31511b56c91b75c9b67ec424e8966->enter($__internal_526b7e3a10c79a0234985cc0204b2d9226a31511b56c91b75c9b67ec424e8966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_526b7e3a10c79a0234985cc0204b2d9226a31511b56c91b75c9b67ec424e8966->leave($__internal_526b7e3a10c79a0234985cc0204b2d9226a31511b56c91b75c9b67ec424e8966_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4f0f35b807a34a0c3428f05845a5a1823625d389bded46fdf9d084b56945c5bf = $this->env->getExtension("native_profiler");
        $__internal_4f0f35b807a34a0c3428f05845a5a1823625d389bded46fdf9d084b56945c5bf->enter($__internal_4f0f35b807a34a0c3428f05845a5a1823625d389bded46fdf9d084b56945c5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f0f35b807a34a0c3428f05845a5a1823625d389bded46fdf9d084b56945c5bf->leave($__internal_4f0f35b807a34a0c3428f05845a5a1823625d389bded46fdf9d084b56945c5bf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_88493fee7e0dd7e8768441b53c01feb28bb0d543170e68e03e5d5b331ae673a3 = $this->env->getExtension("native_profiler");
        $__internal_88493fee7e0dd7e8768441b53c01feb28bb0d543170e68e03e5d5b331ae673a3->enter($__internal_88493fee7e0dd7e8768441b53c01feb28bb0d543170e68e03e5d5b331ae673a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_88493fee7e0dd7e8768441b53c01feb28bb0d543170e68e03e5d5b331ae673a3->leave($__internal_88493fee7e0dd7e8768441b53c01feb28bb0d543170e68e03e5d5b331ae673a3_prof);

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
