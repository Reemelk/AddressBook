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
        $__internal_2149ae9ec32bfc58b119532426256c26c113307fc5255e39198e9db41830a2bf = $this->env->getExtension("native_profiler");
        $__internal_2149ae9ec32bfc58b119532426256c26c113307fc5255e39198e9db41830a2bf->enter($__internal_2149ae9ec32bfc58b119532426256c26c113307fc5255e39198e9db41830a2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2149ae9ec32bfc58b119532426256c26c113307fc5255e39198e9db41830a2bf->leave($__internal_2149ae9ec32bfc58b119532426256c26c113307fc5255e39198e9db41830a2bf_prof);

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
