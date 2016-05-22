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
        $__internal_e0a6ada0be05d09da14399ee752926d9126da3dc18d6245e159a1ab6ebab4c58 = $this->env->getExtension("native_profiler");
        $__internal_e0a6ada0be05d09da14399ee752926d9126da3dc18d6245e159a1ab6ebab4c58->enter($__internal_e0a6ada0be05d09da14399ee752926d9126da3dc18d6245e159a1ab6ebab4c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e0a6ada0be05d09da14399ee752926d9126da3dc18d6245e159a1ab6ebab4c58->leave($__internal_e0a6ada0be05d09da14399ee752926d9126da3dc18d6245e159a1ab6ebab4c58_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_767e90928af510684a517e9be8c4a15299c041f157001e4be7e517a5926fa2b7 = $this->env->getExtension("native_profiler");
        $__internal_767e90928af510684a517e9be8c4a15299c041f157001e4be7e517a5926fa2b7->enter($__internal_767e90928af510684a517e9be8c4a15299c041f157001e4be7e517a5926fa2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_767e90928af510684a517e9be8c4a15299c041f157001e4be7e517a5926fa2b7->leave($__internal_767e90928af510684a517e9be8c4a15299c041f157001e4be7e517a5926fa2b7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e07ae9b330aaed5fb84cba0cb6d9a57a17c259c43088ec22f58ba06a529fa0a0 = $this->env->getExtension("native_profiler");
        $__internal_e07ae9b330aaed5fb84cba0cb6d9a57a17c259c43088ec22f58ba06a529fa0a0->enter($__internal_e07ae9b330aaed5fb84cba0cb6d9a57a17c259c43088ec22f58ba06a529fa0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e07ae9b330aaed5fb84cba0cb6d9a57a17c259c43088ec22f58ba06a529fa0a0->leave($__internal_e07ae9b330aaed5fb84cba0cb6d9a57a17c259c43088ec22f58ba06a529fa0a0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_230330327775ab75a69545624f7a81106f0c1a9459a21d1041efb1b1dd2d3dc3 = $this->env->getExtension("native_profiler");
        $__internal_230330327775ab75a69545624f7a81106f0c1a9459a21d1041efb1b1dd2d3dc3->enter($__internal_230330327775ab75a69545624f7a81106f0c1a9459a21d1041efb1b1dd2d3dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_230330327775ab75a69545624f7a81106f0c1a9459a21d1041efb1b1dd2d3dc3->leave($__internal_230330327775ab75a69545624f7a81106f0c1a9459a21d1041efb1b1dd2d3dc3_prof);

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
