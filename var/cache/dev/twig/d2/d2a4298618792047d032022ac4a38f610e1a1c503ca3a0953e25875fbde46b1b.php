<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7f0a381f3790ef4022a3fe5a8c861da6c3885fd307696e2c08a8ede44e6625ad extends Twig_Template
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
        $__internal_741e313d04cc3bea08b4935cdd7708cf5c28a3b9cbbb907a99de3e1352be8643 = $this->env->getExtension("native_profiler");
        $__internal_741e313d04cc3bea08b4935cdd7708cf5c28a3b9cbbb907a99de3e1352be8643->enter($__internal_741e313d04cc3bea08b4935cdd7708cf5c28a3b9cbbb907a99de3e1352be8643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_741e313d04cc3bea08b4935cdd7708cf5c28a3b9cbbb907a99de3e1352be8643->leave($__internal_741e313d04cc3bea08b4935cdd7708cf5c28a3b9cbbb907a99de3e1352be8643_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
