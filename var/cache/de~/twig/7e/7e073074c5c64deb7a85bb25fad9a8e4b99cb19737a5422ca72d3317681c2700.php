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
        $__internal_128fd7ae58cbe008b78ec55c0246996903a8eb0810838771456e242cb86fde3a = $this->env->getExtension("native_profiler");
        $__internal_128fd7ae58cbe008b78ec55c0246996903a8eb0810838771456e242cb86fde3a->enter($__internal_128fd7ae58cbe008b78ec55c0246996903a8eb0810838771456e242cb86fde3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_128fd7ae58cbe008b78ec55c0246996903a8eb0810838771456e242cb86fde3a->leave($__internal_128fd7ae58cbe008b78ec55c0246996903a8eb0810838771456e242cb86fde3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b97d8882af398f2f52a79433419d608deae23c8c54ceb00d56a0f9ea6aa6a18e = $this->env->getExtension("native_profiler");
        $__internal_b97d8882af398f2f52a79433419d608deae23c8c54ceb00d56a0f9ea6aa6a18e->enter($__internal_b97d8882af398f2f52a79433419d608deae23c8c54ceb00d56a0f9ea6aa6a18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b97d8882af398f2f52a79433419d608deae23c8c54ceb00d56a0f9ea6aa6a18e->leave($__internal_b97d8882af398f2f52a79433419d608deae23c8c54ceb00d56a0f9ea6aa6a18e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_621b15859cb016698cd65e20706fe024662509899ae73a6cc5fbd5da891d0e8b = $this->env->getExtension("native_profiler");
        $__internal_621b15859cb016698cd65e20706fe024662509899ae73a6cc5fbd5da891d0e8b->enter($__internal_621b15859cb016698cd65e20706fe024662509899ae73a6cc5fbd5da891d0e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_621b15859cb016698cd65e20706fe024662509899ae73a6cc5fbd5da891d0e8b->leave($__internal_621b15859cb016698cd65e20706fe024662509899ae73a6cc5fbd5da891d0e8b_prof);

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
