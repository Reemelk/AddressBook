<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cdf0ddab5cfe55cfb4cae2aabfc8f589d6a36b7d0cb6b5aa7a4354912458bdd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_8d4258ccc95feb83b0d8d5aa29c4122392b3ad7d49022e4a56f750d687f2c00f = $this->env->getExtension("native_profiler");
        $__internal_8d4258ccc95feb83b0d8d5aa29c4122392b3ad7d49022e4a56f750d687f2c00f->enter($__internal_8d4258ccc95feb83b0d8d5aa29c4122392b3ad7d49022e4a56f750d687f2c00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4258ccc95feb83b0d8d5aa29c4122392b3ad7d49022e4a56f750d687f2c00f->leave($__internal_8d4258ccc95feb83b0d8d5aa29c4122392b3ad7d49022e4a56f750d687f2c00f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c959f98077742094cd731d0308e6dab0f59049227cce24ef81840b65f5930ec = $this->env->getExtension("native_profiler");
        $__internal_8c959f98077742094cd731d0308e6dab0f59049227cce24ef81840b65f5930ec->enter($__internal_8c959f98077742094cd731d0308e6dab0f59049227cce24ef81840b65f5930ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8c959f98077742094cd731d0308e6dab0f59049227cce24ef81840b65f5930ec->leave($__internal_8c959f98077742094cd731d0308e6dab0f59049227cce24ef81840b65f5930ec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ddac3afbf56d51709972aacd81b8da15de73240e59a0e9478ac1fdc74b88829 = $this->env->getExtension("native_profiler");
        $__internal_4ddac3afbf56d51709972aacd81b8da15de73240e59a0e9478ac1fdc74b88829->enter($__internal_4ddac3afbf56d51709972aacd81b8da15de73240e59a0e9478ac1fdc74b88829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ddac3afbf56d51709972aacd81b8da15de73240e59a0e9478ac1fdc74b88829->leave($__internal_4ddac3afbf56d51709972aacd81b8da15de73240e59a0e9478ac1fdc74b88829_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
