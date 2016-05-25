<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_182f733144046c38d93805abaee7cddc5d7a88ccbfbfeef40f021696cd830e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a97e484d6c2e7405997f316c4fdc72c5831d7b609561e6229316f66854ad1296 = $this->env->getExtension("native_profiler");
        $__internal_a97e484d6c2e7405997f316c4fdc72c5831d7b609561e6229316f66854ad1296->enter($__internal_a97e484d6c2e7405997f316c4fdc72c5831d7b609561e6229316f66854ad1296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97e484d6c2e7405997f316c4fdc72c5831d7b609561e6229316f66854ad1296->leave($__internal_a97e484d6c2e7405997f316c4fdc72c5831d7b609561e6229316f66854ad1296_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82d89e51f8989227430d95ab46472c25f8cae3de7779fc50631630bff3fc45da = $this->env->getExtension("native_profiler");
        $__internal_82d89e51f8989227430d95ab46472c25f8cae3de7779fc50631630bff3fc45da->enter($__internal_82d89e51f8989227430d95ab46472c25f8cae3de7779fc50631630bff3fc45da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_82d89e51f8989227430d95ab46472c25f8cae3de7779fc50631630bff3fc45da->leave($__internal_82d89e51f8989227430d95ab46472c25f8cae3de7779fc50631630bff3fc45da_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e473a2bad3cc7e0f5935a0a9f68b431e95f4279fb775dbd7e043bdf2bcab358 = $this->env->getExtension("native_profiler");
        $__internal_8e473a2bad3cc7e0f5935a0a9f68b431e95f4279fb775dbd7e043bdf2bcab358->enter($__internal_8e473a2bad3cc7e0f5935a0a9f68b431e95f4279fb775dbd7e043bdf2bcab358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8e473a2bad3cc7e0f5935a0a9f68b431e95f4279fb775dbd7e043bdf2bcab358->leave($__internal_8e473a2bad3cc7e0f5935a0a9f68b431e95f4279fb775dbd7e043bdf2bcab358_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38ac28182182fda07a6051cb21cec11e4c3c8f139d1fdcdd1a9b174fcc6f84e4 = $this->env->getExtension("native_profiler");
        $__internal_38ac28182182fda07a6051cb21cec11e4c3c8f139d1fdcdd1a9b174fcc6f84e4->enter($__internal_38ac28182182fda07a6051cb21cec11e4c3c8f139d1fdcdd1a9b174fcc6f84e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_38ac28182182fda07a6051cb21cec11e4c3c8f139d1fdcdd1a9b174fcc6f84e4->leave($__internal_38ac28182182fda07a6051cb21cec11e4c3c8f139d1fdcdd1a9b174fcc6f84e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
