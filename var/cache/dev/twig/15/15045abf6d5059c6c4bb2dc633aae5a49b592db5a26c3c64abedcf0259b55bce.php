<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_de853702fb0191d78388eaab864177c9c611c947ce5eb02d752edb3b1918bc40 extends Twig_Template
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
        $__internal_4109c0c777defc4d11a2b9d4fffe97d6215b0222d0561da44e4a38c9ae8e4235 = $this->env->getExtension("native_profiler");
        $__internal_4109c0c777defc4d11a2b9d4fffe97d6215b0222d0561da44e4a38c9ae8e4235->enter($__internal_4109c0c777defc4d11a2b9d4fffe97d6215b0222d0561da44e4a38c9ae8e4235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4109c0c777defc4d11a2b9d4fffe97d6215b0222d0561da44e4a38c9ae8e4235->leave($__internal_4109c0c777defc4d11a2b9d4fffe97d6215b0222d0561da44e4a38c9ae8e4235_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eefdf95682a528f2786166716b0d489a0372ab0062e35ef6c21dce749a438cc2 = $this->env->getExtension("native_profiler");
        $__internal_eefdf95682a528f2786166716b0d489a0372ab0062e35ef6c21dce749a438cc2->enter($__internal_eefdf95682a528f2786166716b0d489a0372ab0062e35ef6c21dce749a438cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_eefdf95682a528f2786166716b0d489a0372ab0062e35ef6c21dce749a438cc2->leave($__internal_eefdf95682a528f2786166716b0d489a0372ab0062e35ef6c21dce749a438cc2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_361766d583f7611438d05ff724e474088779a46797643382ef5701033c0c6288 = $this->env->getExtension("native_profiler");
        $__internal_361766d583f7611438d05ff724e474088779a46797643382ef5701033c0c6288->enter($__internal_361766d583f7611438d05ff724e474088779a46797643382ef5701033c0c6288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_361766d583f7611438d05ff724e474088779a46797643382ef5701033c0c6288->leave($__internal_361766d583f7611438d05ff724e474088779a46797643382ef5701033c0c6288_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_43f7d1a01a83ea57c2250809ea6978b803a9206df9f96239801e6166e49120c6 = $this->env->getExtension("native_profiler");
        $__internal_43f7d1a01a83ea57c2250809ea6978b803a9206df9f96239801e6166e49120c6->enter($__internal_43f7d1a01a83ea57c2250809ea6978b803a9206df9f96239801e6166e49120c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_43f7d1a01a83ea57c2250809ea6978b803a9206df9f96239801e6166e49120c6->leave($__internal_43f7d1a01a83ea57c2250809ea6978b803a9206df9f96239801e6166e49120c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
