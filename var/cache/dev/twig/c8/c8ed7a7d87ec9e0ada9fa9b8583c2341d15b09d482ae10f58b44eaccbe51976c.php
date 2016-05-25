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
        $__internal_060724a004cba3fd3a211f56b3c8d2562678dca32656e8b8a1440488fd2b9144 = $this->env->getExtension("native_profiler");
        $__internal_060724a004cba3fd3a211f56b3c8d2562678dca32656e8b8a1440488fd2b9144->enter($__internal_060724a004cba3fd3a211f56b3c8d2562678dca32656e8b8a1440488fd2b9144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060724a004cba3fd3a211f56b3c8d2562678dca32656e8b8a1440488fd2b9144->leave($__internal_060724a004cba3fd3a211f56b3c8d2562678dca32656e8b8a1440488fd2b9144_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59fbda7a89dc7c543ed77bfefe26714f71214d78a4a51cbaf5378f780bb45d25 = $this->env->getExtension("native_profiler");
        $__internal_59fbda7a89dc7c543ed77bfefe26714f71214d78a4a51cbaf5378f780bb45d25->enter($__internal_59fbda7a89dc7c543ed77bfefe26714f71214d78a4a51cbaf5378f780bb45d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_59fbda7a89dc7c543ed77bfefe26714f71214d78a4a51cbaf5378f780bb45d25->leave($__internal_59fbda7a89dc7c543ed77bfefe26714f71214d78a4a51cbaf5378f780bb45d25_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0a6d6d9b77dda8c7bf5dc0a678fbf6fd833477c555df5b18f4e1d4b75e5b5b5 = $this->env->getExtension("native_profiler");
        $__internal_c0a6d6d9b77dda8c7bf5dc0a678fbf6fd833477c555df5b18f4e1d4b75e5b5b5->enter($__internal_c0a6d6d9b77dda8c7bf5dc0a678fbf6fd833477c555df5b18f4e1d4b75e5b5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0a6d6d9b77dda8c7bf5dc0a678fbf6fd833477c555df5b18f4e1d4b75e5b5b5->leave($__internal_c0a6d6d9b77dda8c7bf5dc0a678fbf6fd833477c555df5b18f4e1d4b75e5b5b5_prof);

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
