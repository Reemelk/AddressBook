<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0df0698326f678fb5eaa448904168fc4cae690e88d14ec05613907c837f2fc13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d94479ef43e59bda2ce3427aa45d44cb618776fd57e1a16d5f39597d0948fbfe = $this->env->getExtension("native_profiler");
        $__internal_d94479ef43e59bda2ce3427aa45d44cb618776fd57e1a16d5f39597d0948fbfe->enter($__internal_d94479ef43e59bda2ce3427aa45d44cb618776fd57e1a16d5f39597d0948fbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94479ef43e59bda2ce3427aa45d44cb618776fd57e1a16d5f39597d0948fbfe->leave($__internal_d94479ef43e59bda2ce3427aa45d44cb618776fd57e1a16d5f39597d0948fbfe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_325d89ffdc9006d971094702cf45445e415e33c3261d1de94c918e5f51b6c657 = $this->env->getExtension("native_profiler");
        $__internal_325d89ffdc9006d971094702cf45445e415e33c3261d1de94c918e5f51b6c657->enter($__internal_325d89ffdc9006d971094702cf45445e415e33c3261d1de94c918e5f51b6c657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_325d89ffdc9006d971094702cf45445e415e33c3261d1de94c918e5f51b6c657->leave($__internal_325d89ffdc9006d971094702cf45445e415e33c3261d1de94c918e5f51b6c657_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b698285b5a3330e2d429bc4cd9938ff00999c556a004811b04bd16446505acca = $this->env->getExtension("native_profiler");
        $__internal_b698285b5a3330e2d429bc4cd9938ff00999c556a004811b04bd16446505acca->enter($__internal_b698285b5a3330e2d429bc4cd9938ff00999c556a004811b04bd16446505acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b698285b5a3330e2d429bc4cd9938ff00999c556a004811b04bd16446505acca->leave($__internal_b698285b5a3330e2d429bc4cd9938ff00999c556a004811b04bd16446505acca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
