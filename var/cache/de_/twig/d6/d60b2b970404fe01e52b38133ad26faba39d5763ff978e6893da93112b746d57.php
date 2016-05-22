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
        $__internal_a790ac1fd15bc84b3213ffc897843db67e0f191ba277e3ea00fa61cac82d6c7a = $this->env->getExtension("native_profiler");
        $__internal_a790ac1fd15bc84b3213ffc897843db67e0f191ba277e3ea00fa61cac82d6c7a->enter($__internal_a790ac1fd15bc84b3213ffc897843db67e0f191ba277e3ea00fa61cac82d6c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a790ac1fd15bc84b3213ffc897843db67e0f191ba277e3ea00fa61cac82d6c7a->leave($__internal_a790ac1fd15bc84b3213ffc897843db67e0f191ba277e3ea00fa61cac82d6c7a_prof);

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
