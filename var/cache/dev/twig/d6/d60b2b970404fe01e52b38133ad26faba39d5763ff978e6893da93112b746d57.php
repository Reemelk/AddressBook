<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_238a91c948e3963992cf19bce9fe02318d4421422315d6b1263767cf63da1553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0a2b64665ab3707c42ad3081e43cb0654df5ad9a4992856528b2a761d520956 = $this->env->getExtension("native_profiler");
        $__internal_e0a2b64665ab3707c42ad3081e43cb0654df5ad9a4992856528b2a761d520956->enter($__internal_e0a2b64665ab3707c42ad3081e43cb0654df5ad9a4992856528b2a761d520956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e0a2b64665ab3707c42ad3081e43cb0654df5ad9a4992856528b2a761d520956->leave($__internal_e0a2b64665ab3707c42ad3081e43cb0654df5ad9a4992856528b2a761d520956_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
