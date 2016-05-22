<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0e8f2364fac37cbfe112e1d4e44ab6611a059b81e69544b94b4e0f4e59604a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_711ebd267b0b23cad237aac49baeac6b4149e9b25ad294cf0195aa805426fda1 = $this->env->getExtension("native_profiler");
        $__internal_711ebd267b0b23cad237aac49baeac6b4149e9b25ad294cf0195aa805426fda1->enter($__internal_711ebd267b0b23cad237aac49baeac6b4149e9b25ad294cf0195aa805426fda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711ebd267b0b23cad237aac49baeac6b4149e9b25ad294cf0195aa805426fda1->leave($__internal_711ebd267b0b23cad237aac49baeac6b4149e9b25ad294cf0195aa805426fda1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b49753fb4b71c20d8a0b7aec5f003ae6c953b5b28c0fdeb8c47607499530d517 = $this->env->getExtension("native_profiler");
        $__internal_b49753fb4b71c20d8a0b7aec5f003ae6c953b5b28c0fdeb8c47607499530d517->enter($__internal_b49753fb4b71c20d8a0b7aec5f003ae6c953b5b28c0fdeb8c47607499530d517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b49753fb4b71c20d8a0b7aec5f003ae6c953b5b28c0fdeb8c47607499530d517->leave($__internal_b49753fb4b71c20d8a0b7aec5f003ae6c953b5b28c0fdeb8c47607499530d517_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3b6ab1acd7b0919887c125ea47efcb6e11d99e6d8b4dca94bbe6e76bc27ceb2 = $this->env->getExtension("native_profiler");
        $__internal_b3b6ab1acd7b0919887c125ea47efcb6e11d99e6d8b4dca94bbe6e76bc27ceb2->enter($__internal_b3b6ab1acd7b0919887c125ea47efcb6e11d99e6d8b4dca94bbe6e76bc27ceb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b3b6ab1acd7b0919887c125ea47efcb6e11d99e6d8b4dca94bbe6e76bc27ceb2->leave($__internal_b3b6ab1acd7b0919887c125ea47efcb6e11d99e6d8b4dca94bbe6e76bc27ceb2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ca8f5d8598f325cde1f31bd6726987a578b5271d569d65f929c7aa8d7345573 = $this->env->getExtension("native_profiler");
        $__internal_4ca8f5d8598f325cde1f31bd6726987a578b5271d569d65f929c7aa8d7345573->enter($__internal_4ca8f5d8598f325cde1f31bd6726987a578b5271d569d65f929c7aa8d7345573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4ca8f5d8598f325cde1f31bd6726987a578b5271d569d65f929c7aa8d7345573->leave($__internal_4ca8f5d8598f325cde1f31bd6726987a578b5271d569d65f929c7aa8d7345573_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
