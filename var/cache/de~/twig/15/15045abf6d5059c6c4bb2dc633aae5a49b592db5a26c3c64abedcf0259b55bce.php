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
        $__internal_fbbdf450312d33ea2496050f44489f603b46b745426387ae1922142fc9f7028b = $this->env->getExtension("native_profiler");
        $__internal_fbbdf450312d33ea2496050f44489f603b46b745426387ae1922142fc9f7028b->enter($__internal_fbbdf450312d33ea2496050f44489f603b46b745426387ae1922142fc9f7028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fbbdf450312d33ea2496050f44489f603b46b745426387ae1922142fc9f7028b->leave($__internal_fbbdf450312d33ea2496050f44489f603b46b745426387ae1922142fc9f7028b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_31a50d54bd9739b7508184e91f0c632c8848e57d6b6a4c3c01ac8ddb454f0ddf = $this->env->getExtension("native_profiler");
        $__internal_31a50d54bd9739b7508184e91f0c632c8848e57d6b6a4c3c01ac8ddb454f0ddf->enter($__internal_31a50d54bd9739b7508184e91f0c632c8848e57d6b6a4c3c01ac8ddb454f0ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_31a50d54bd9739b7508184e91f0c632c8848e57d6b6a4c3c01ac8ddb454f0ddf->leave($__internal_31a50d54bd9739b7508184e91f0c632c8848e57d6b6a4c3c01ac8ddb454f0ddf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d7d5bba25d983f871ca5ea9548c338f1d24c2bcd21047ce19bde08f8f1024b4e = $this->env->getExtension("native_profiler");
        $__internal_d7d5bba25d983f871ca5ea9548c338f1d24c2bcd21047ce19bde08f8f1024b4e->enter($__internal_d7d5bba25d983f871ca5ea9548c338f1d24c2bcd21047ce19bde08f8f1024b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d7d5bba25d983f871ca5ea9548c338f1d24c2bcd21047ce19bde08f8f1024b4e->leave($__internal_d7d5bba25d983f871ca5ea9548c338f1d24c2bcd21047ce19bde08f8f1024b4e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_11a69a5dd0e3bce78f46fdcfb870774d085c6c66a76005426bb4451276a9feab = $this->env->getExtension("native_profiler");
        $__internal_11a69a5dd0e3bce78f46fdcfb870774d085c6c66a76005426bb4451276a9feab->enter($__internal_11a69a5dd0e3bce78f46fdcfb870774d085c6c66a76005426bb4451276a9feab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_11a69a5dd0e3bce78f46fdcfb870774d085c6c66a76005426bb4451276a9feab->leave($__internal_11a69a5dd0e3bce78f46fdcfb870774d085c6c66a76005426bb4451276a9feab_prof);

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
