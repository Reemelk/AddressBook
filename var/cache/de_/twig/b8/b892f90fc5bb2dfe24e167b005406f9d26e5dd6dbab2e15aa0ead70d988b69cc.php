<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_444dd55963faf6d4df55a5f06306c85a01f65a4eff524550183731f8c7d90baa extends Twig_Template
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
        $__internal_64db1eba2b7271cc21e252aaf75ad44280d72a1be070c84556e08f38161798e9 = $this->env->getExtension("native_profiler");
        $__internal_64db1eba2b7271cc21e252aaf75ad44280d72a1be070c84556e08f38161798e9->enter($__internal_64db1eba2b7271cc21e252aaf75ad44280d72a1be070c84556e08f38161798e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_64db1eba2b7271cc21e252aaf75ad44280d72a1be070c84556e08f38161798e9->leave($__internal_64db1eba2b7271cc21e252aaf75ad44280d72a1be070c84556e08f38161798e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
