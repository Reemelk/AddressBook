<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_920fa55e9409d20c50e6849bae591dcce185eca59132f98aa976dccbe3ec3caa extends Twig_Template
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
        $__internal_ac3d20265218c653e0588ee28a9bac8cd0a2e3f78e95fd19284151fd68d938a2 = $this->env->getExtension("native_profiler");
        $__internal_ac3d20265218c653e0588ee28a9bac8cd0a2e3f78e95fd19284151fd68d938a2->enter($__internal_ac3d20265218c653e0588ee28a9bac8cd0a2e3f78e95fd19284151fd68d938a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ac3d20265218c653e0588ee28a9bac8cd0a2e3f78e95fd19284151fd68d938a2->leave($__internal_ac3d20265218c653e0588ee28a9bac8cd0a2e3f78e95fd19284151fd68d938a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
