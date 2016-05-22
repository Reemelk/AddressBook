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
        $__internal_cfff9ec2631352f2493357aec4f4e577222790e4e70a07e903c0ba3f2a80c32d = $this->env->getExtension("native_profiler");
        $__internal_cfff9ec2631352f2493357aec4f4e577222790e4e70a07e903c0ba3f2a80c32d->enter($__internal_cfff9ec2631352f2493357aec4f4e577222790e4e70a07e903c0ba3f2a80c32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfff9ec2631352f2493357aec4f4e577222790e4e70a07e903c0ba3f2a80c32d->leave($__internal_cfff9ec2631352f2493357aec4f4e577222790e4e70a07e903c0ba3f2a80c32d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cec7e89b2a077d6ac5d6d787d5ae2f0de0220385dda254d7ff3faf401b3e389 = $this->env->getExtension("native_profiler");
        $__internal_6cec7e89b2a077d6ac5d6d787d5ae2f0de0220385dda254d7ff3faf401b3e389->enter($__internal_6cec7e89b2a077d6ac5d6d787d5ae2f0de0220385dda254d7ff3faf401b3e389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6cec7e89b2a077d6ac5d6d787d5ae2f0de0220385dda254d7ff3faf401b3e389->leave($__internal_6cec7e89b2a077d6ac5d6d787d5ae2f0de0220385dda254d7ff3faf401b3e389_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_458dc665a9dce7846b9b84f8a52a18547e123e8a168278871c587d9e97d1d1ee = $this->env->getExtension("native_profiler");
        $__internal_458dc665a9dce7846b9b84f8a52a18547e123e8a168278871c587d9e97d1d1ee->enter($__internal_458dc665a9dce7846b9b84f8a52a18547e123e8a168278871c587d9e97d1d1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_458dc665a9dce7846b9b84f8a52a18547e123e8a168278871c587d9e97d1d1ee->leave($__internal_458dc665a9dce7846b9b84f8a52a18547e123e8a168278871c587d9e97d1d1ee_prof);

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
