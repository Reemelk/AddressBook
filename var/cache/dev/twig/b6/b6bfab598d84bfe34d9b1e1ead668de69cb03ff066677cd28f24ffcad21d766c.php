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
        $__internal_4c9619040ab333139060eb7fba6f310c17a837bd0a0306a91ebc9f181dba07e7 = $this->env->getExtension("native_profiler");
        $__internal_4c9619040ab333139060eb7fba6f310c17a837bd0a0306a91ebc9f181dba07e7->enter($__internal_4c9619040ab333139060eb7fba6f310c17a837bd0a0306a91ebc9f181dba07e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4c9619040ab333139060eb7fba6f310c17a837bd0a0306a91ebc9f181dba07e7->leave($__internal_4c9619040ab333139060eb7fba6f310c17a837bd0a0306a91ebc9f181dba07e7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_79dd63c24555aaef7acf77f2aed6e7fee0be9dbd0afd752d34f6492318db92c9 = $this->env->getExtension("native_profiler");
        $__internal_79dd63c24555aaef7acf77f2aed6e7fee0be9dbd0afd752d34f6492318db92c9->enter($__internal_79dd63c24555aaef7acf77f2aed6e7fee0be9dbd0afd752d34f6492318db92c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_79dd63c24555aaef7acf77f2aed6e7fee0be9dbd0afd752d34f6492318db92c9->leave($__internal_79dd63c24555aaef7acf77f2aed6e7fee0be9dbd0afd752d34f6492318db92c9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_10f1474dc94370a089e3fe51d674dc25b23a0a9b30bb11af993939a94d52323b = $this->env->getExtension("native_profiler");
        $__internal_10f1474dc94370a089e3fe51d674dc25b23a0a9b30bb11af993939a94d52323b->enter($__internal_10f1474dc94370a089e3fe51d674dc25b23a0a9b30bb11af993939a94d52323b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_10f1474dc94370a089e3fe51d674dc25b23a0a9b30bb11af993939a94d52323b->leave($__internal_10f1474dc94370a089e3fe51d674dc25b23a0a9b30bb11af993939a94d52323b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1136e87de419209998c0834cf1ec0e621c91d24237c9db9a93dff69778d8d00b = $this->env->getExtension("native_profiler");
        $__internal_1136e87de419209998c0834cf1ec0e621c91d24237c9db9a93dff69778d8d00b->enter($__internal_1136e87de419209998c0834cf1ec0e621c91d24237c9db9a93dff69778d8d00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1136e87de419209998c0834cf1ec0e621c91d24237c9db9a93dff69778d8d00b->leave($__internal_1136e87de419209998c0834cf1ec0e621c91d24237c9db9a93dff69778d8d00b_prof);

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
