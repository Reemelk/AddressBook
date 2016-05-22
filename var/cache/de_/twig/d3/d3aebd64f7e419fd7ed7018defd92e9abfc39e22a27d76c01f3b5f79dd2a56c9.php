<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_794fec862f6f979ad7b3fd94b0e47224d337211fc5ee6dcd325ecaffb5ced623 extends Twig_Template
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
        $__internal_4c4ddadbc0448d55e8a070305f423e022d34ccb4d99ba4a9fad0ef4fda152c7b = $this->env->getExtension("native_profiler");
        $__internal_4c4ddadbc0448d55e8a070305f423e022d34ccb4d99ba4a9fad0ef4fda152c7b->enter($__internal_4c4ddadbc0448d55e8a070305f423e022d34ccb4d99ba4a9fad0ef4fda152c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4c4ddadbc0448d55e8a070305f423e022d34ccb4d99ba4a9fad0ef4fda152c7b->leave($__internal_4c4ddadbc0448d55e8a070305f423e022d34ccb4d99ba4a9fad0ef4fda152c7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
