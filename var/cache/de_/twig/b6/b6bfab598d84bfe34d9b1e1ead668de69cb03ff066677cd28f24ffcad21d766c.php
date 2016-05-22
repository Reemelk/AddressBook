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
        $__internal_1979977bdaf09b634e6e64abf9f23a93292d071109892199950a665550f1b7ff = $this->env->getExtension("native_profiler");
        $__internal_1979977bdaf09b634e6e64abf9f23a93292d071109892199950a665550f1b7ff->enter($__internal_1979977bdaf09b634e6e64abf9f23a93292d071109892199950a665550f1b7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1979977bdaf09b634e6e64abf9f23a93292d071109892199950a665550f1b7ff->leave($__internal_1979977bdaf09b634e6e64abf9f23a93292d071109892199950a665550f1b7ff_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_adcce8e7458c84fc35fa7e31a367a4a7767689924aa0e3e86174b6d860090f2f = $this->env->getExtension("native_profiler");
        $__internal_adcce8e7458c84fc35fa7e31a367a4a7767689924aa0e3e86174b6d860090f2f->enter($__internal_adcce8e7458c84fc35fa7e31a367a4a7767689924aa0e3e86174b6d860090f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_adcce8e7458c84fc35fa7e31a367a4a7767689924aa0e3e86174b6d860090f2f->leave($__internal_adcce8e7458c84fc35fa7e31a367a4a7767689924aa0e3e86174b6d860090f2f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_64458c82d9b5b0c3191d838135d7c02d78c5498d7e3106abbd3d64f857a82994 = $this->env->getExtension("native_profiler");
        $__internal_64458c82d9b5b0c3191d838135d7c02d78c5498d7e3106abbd3d64f857a82994->enter($__internal_64458c82d9b5b0c3191d838135d7c02d78c5498d7e3106abbd3d64f857a82994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_64458c82d9b5b0c3191d838135d7c02d78c5498d7e3106abbd3d64f857a82994->leave($__internal_64458c82d9b5b0c3191d838135d7c02d78c5498d7e3106abbd3d64f857a82994_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3441e08dc40a87588275c8c3988fd1c7aaf865b6929e34d0c1dcd7a93d442b29 = $this->env->getExtension("native_profiler");
        $__internal_3441e08dc40a87588275c8c3988fd1c7aaf865b6929e34d0c1dcd7a93d442b29->enter($__internal_3441e08dc40a87588275c8c3988fd1c7aaf865b6929e34d0c1dcd7a93d442b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3441e08dc40a87588275c8c3988fd1c7aaf865b6929e34d0c1dcd7a93d442b29->leave($__internal_3441e08dc40a87588275c8c3988fd1c7aaf865b6929e34d0c1dcd7a93d442b29_prof);

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
