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
        $__internal_ea0abd8f6cfaa1c2326c826e195724a97087c0d6c5c4a8bb5ac8d4b805cf0e06 = $this->env->getExtension("native_profiler");
        $__internal_ea0abd8f6cfaa1c2326c826e195724a97087c0d6c5c4a8bb5ac8d4b805cf0e06->enter($__internal_ea0abd8f6cfaa1c2326c826e195724a97087c0d6c5c4a8bb5ac8d4b805cf0e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0abd8f6cfaa1c2326c826e195724a97087c0d6c5c4a8bb5ac8d4b805cf0e06->leave($__internal_ea0abd8f6cfaa1c2326c826e195724a97087c0d6c5c4a8bb5ac8d4b805cf0e06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5d4fe37a877afb27c2e811d223865a7d66835f5215f767e739b77f75d92d743 = $this->env->getExtension("native_profiler");
        $__internal_c5d4fe37a877afb27c2e811d223865a7d66835f5215f767e739b77f75d92d743->enter($__internal_c5d4fe37a877afb27c2e811d223865a7d66835f5215f767e739b77f75d92d743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c5d4fe37a877afb27c2e811d223865a7d66835f5215f767e739b77f75d92d743->leave($__internal_c5d4fe37a877afb27c2e811d223865a7d66835f5215f767e739b77f75d92d743_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02d6690150505a12a908f37bba3a50f62c05eb57c1a167e3a35193f5c169a121 = $this->env->getExtension("native_profiler");
        $__internal_02d6690150505a12a908f37bba3a50f62c05eb57c1a167e3a35193f5c169a121->enter($__internal_02d6690150505a12a908f37bba3a50f62c05eb57c1a167e3a35193f5c169a121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02d6690150505a12a908f37bba3a50f62c05eb57c1a167e3a35193f5c169a121->leave($__internal_02d6690150505a12a908f37bba3a50f62c05eb57c1a167e3a35193f5c169a121_prof);

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
