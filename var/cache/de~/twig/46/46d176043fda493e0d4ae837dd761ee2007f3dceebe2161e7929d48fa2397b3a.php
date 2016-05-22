<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_33e8daa15fbb28f1494d4b21d0ed6edcd2dcb4b139a4382d642f321c13845ecd extends Twig_Template
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
        $__internal_5bdddb9daaab12cb7c908cb76c452f7878f02e608a20a75d9d4339d95783e442 = $this->env->getExtension("native_profiler");
        $__internal_5bdddb9daaab12cb7c908cb76c452f7878f02e608a20a75d9d4339d95783e442->enter($__internal_5bdddb9daaab12cb7c908cb76c452f7878f02e608a20a75d9d4339d95783e442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5bdddb9daaab12cb7c908cb76c452f7878f02e608a20a75d9d4339d95783e442->leave($__internal_5bdddb9daaab12cb7c908cb76c452f7878f02e608a20a75d9d4339d95783e442_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1f5668acd22e2e87237812e1770d143537dc7f6b7f804e3efac929e479e7fc8c = $this->env->getExtension("native_profiler");
        $__internal_1f5668acd22e2e87237812e1770d143537dc7f6b7f804e3efac929e479e7fc8c->enter($__internal_1f5668acd22e2e87237812e1770d143537dc7f6b7f804e3efac929e479e7fc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1f5668acd22e2e87237812e1770d143537dc7f6b7f804e3efac929e479e7fc8c->leave($__internal_1f5668acd22e2e87237812e1770d143537dc7f6b7f804e3efac929e479e7fc8c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f73e51c583cb4af8726dfbe5bcaadc79e4d5714903e698d7a9050585b1d5e078 = $this->env->getExtension("native_profiler");
        $__internal_f73e51c583cb4af8726dfbe5bcaadc79e4d5714903e698d7a9050585b1d5e078->enter($__internal_f73e51c583cb4af8726dfbe5bcaadc79e4d5714903e698d7a9050585b1d5e078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f73e51c583cb4af8726dfbe5bcaadc79e4d5714903e698d7a9050585b1d5e078->leave($__internal_f73e51c583cb4af8726dfbe5bcaadc79e4d5714903e698d7a9050585b1d5e078_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9395a201425dde5d7b736f7e5223407010bf59fc7bc7b06f7f7b14b306047c07 = $this->env->getExtension("native_profiler");
        $__internal_9395a201425dde5d7b736f7e5223407010bf59fc7bc7b06f7f7b14b306047c07->enter($__internal_9395a201425dde5d7b736f7e5223407010bf59fc7bc7b06f7f7b14b306047c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9395a201425dde5d7b736f7e5223407010bf59fc7bc7b06f7f7b14b306047c07->leave($__internal_9395a201425dde5d7b736f7e5223407010bf59fc7bc7b06f7f7b14b306047c07_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/email.txt.twig";
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
