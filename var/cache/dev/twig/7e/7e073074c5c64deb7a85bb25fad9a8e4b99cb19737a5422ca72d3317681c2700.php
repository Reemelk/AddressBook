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
        $__internal_0f1b090551562da3f682c52bc5ec689379a16e8dbc132604a3e6118d06a82582 = $this->env->getExtension("native_profiler");
        $__internal_0f1b090551562da3f682c52bc5ec689379a16e8dbc132604a3e6118d06a82582->enter($__internal_0f1b090551562da3f682c52bc5ec689379a16e8dbc132604a3e6118d06a82582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1b090551562da3f682c52bc5ec689379a16e8dbc132604a3e6118d06a82582->leave($__internal_0f1b090551562da3f682c52bc5ec689379a16e8dbc132604a3e6118d06a82582_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db9d3ee4eba07a554492f9aec991961c18d2ff89d4d0816cf13f385bb5411411 = $this->env->getExtension("native_profiler");
        $__internal_db9d3ee4eba07a554492f9aec991961c18d2ff89d4d0816cf13f385bb5411411->enter($__internal_db9d3ee4eba07a554492f9aec991961c18d2ff89d4d0816cf13f385bb5411411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_db9d3ee4eba07a554492f9aec991961c18d2ff89d4d0816cf13f385bb5411411->leave($__internal_db9d3ee4eba07a554492f9aec991961c18d2ff89d4d0816cf13f385bb5411411_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8119f6d965d31c52d5955af8b3a41a2a4d26c9745886a0cbb13fdcd5737daf40 = $this->env->getExtension("native_profiler");
        $__internal_8119f6d965d31c52d5955af8b3a41a2a4d26c9745886a0cbb13fdcd5737daf40->enter($__internal_8119f6d965d31c52d5955af8b3a41a2a4d26c9745886a0cbb13fdcd5737daf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8119f6d965d31c52d5955af8b3a41a2a4d26c9745886a0cbb13fdcd5737daf40->leave($__internal_8119f6d965d31c52d5955af8b3a41a2a4d26c9745886a0cbb13fdcd5737daf40_prof);

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
