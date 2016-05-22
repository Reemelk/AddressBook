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
        $__internal_d41e17c0ff1f256388a2e4fd11ad57e58fecad256f49592fef9cdae60740b617 = $this->env->getExtension("native_profiler");
        $__internal_d41e17c0ff1f256388a2e4fd11ad57e58fecad256f49592fef9cdae60740b617->enter($__internal_d41e17c0ff1f256388a2e4fd11ad57e58fecad256f49592fef9cdae60740b617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d41e17c0ff1f256388a2e4fd11ad57e58fecad256f49592fef9cdae60740b617->leave($__internal_d41e17c0ff1f256388a2e4fd11ad57e58fecad256f49592fef9cdae60740b617_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_47258a95e57a5a5b7930fdfcc974bab43bcc1ac2a9cfb39729dac902f550a482 = $this->env->getExtension("native_profiler");
        $__internal_47258a95e57a5a5b7930fdfcc974bab43bcc1ac2a9cfb39729dac902f550a482->enter($__internal_47258a95e57a5a5b7930fdfcc974bab43bcc1ac2a9cfb39729dac902f550a482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_47258a95e57a5a5b7930fdfcc974bab43bcc1ac2a9cfb39729dac902f550a482->leave($__internal_47258a95e57a5a5b7930fdfcc974bab43bcc1ac2a9cfb39729dac902f550a482_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a102713a589d3b7a4a853bbe7f5680600c824016355b5d09ffb56c353d1d8ffc = $this->env->getExtension("native_profiler");
        $__internal_a102713a589d3b7a4a853bbe7f5680600c824016355b5d09ffb56c353d1d8ffc->enter($__internal_a102713a589d3b7a4a853bbe7f5680600c824016355b5d09ffb56c353d1d8ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a102713a589d3b7a4a853bbe7f5680600c824016355b5d09ffb56c353d1d8ffc->leave($__internal_a102713a589d3b7a4a853bbe7f5680600c824016355b5d09ffb56c353d1d8ffc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4952b7930a467b765c5c497876cc3d2dfa969c28432a8e50c10f2b7cce184b36 = $this->env->getExtension("native_profiler");
        $__internal_4952b7930a467b765c5c497876cc3d2dfa969c28432a8e50c10f2b7cce184b36->enter($__internal_4952b7930a467b765c5c497876cc3d2dfa969c28432a8e50c10f2b7cce184b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4952b7930a467b765c5c497876cc3d2dfa969c28432a8e50c10f2b7cce184b36->leave($__internal_4952b7930a467b765c5c497876cc3d2dfa969c28432a8e50c10f2b7cce184b36_prof);

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
