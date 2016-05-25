<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f4d9fc155346a3f04b1dbf41baec5e45d21ea5f88c8f836bd7d7859c484b429a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fe3a8f3421507ec15af8c1398c3b9991ff83d0079e9aa4ec9396f01ec87602fd = $this->env->getExtension("native_profiler");
        $__internal_fe3a8f3421507ec15af8c1398c3b9991ff83d0079e9aa4ec9396f01ec87602fd->enter($__internal_fe3a8f3421507ec15af8c1398c3b9991ff83d0079e9aa4ec9396f01ec87602fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe3a8f3421507ec15af8c1398c3b9991ff83d0079e9aa4ec9396f01ec87602fd->leave($__internal_fe3a8f3421507ec15af8c1398c3b9991ff83d0079e9aa4ec9396f01ec87602fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83210215dd150158e09d824fb9f72d40131ebe7125f7fb3bed690a88a9468a2a = $this->env->getExtension("native_profiler");
        $__internal_83210215dd150158e09d824fb9f72d40131ebe7125f7fb3bed690a88a9468a2a->enter($__internal_83210215dd150158e09d824fb9f72d40131ebe7125f7fb3bed690a88a9468a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83210215dd150158e09d824fb9f72d40131ebe7125f7fb3bed690a88a9468a2a->leave($__internal_83210215dd150158e09d824fb9f72d40131ebe7125f7fb3bed690a88a9468a2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5284ade42539e8de3003b92a0d86b0ccbdb6d939cd3bd65b15f64b75b9d8d489 = $this->env->getExtension("native_profiler");
        $__internal_5284ade42539e8de3003b92a0d86b0ccbdb6d939cd3bd65b15f64b75b9d8d489->enter($__internal_5284ade42539e8de3003b92a0d86b0ccbdb6d939cd3bd65b15f64b75b9d8d489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5284ade42539e8de3003b92a0d86b0ccbdb6d939cd3bd65b15f64b75b9d8d489->leave($__internal_5284ade42539e8de3003b92a0d86b0ccbdb6d939cd3bd65b15f64b75b9d8d489_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94f93fa88345922378436989b25986a73ac8e4b00fde717e05da644238e88f43 = $this->env->getExtension("native_profiler");
        $__internal_94f93fa88345922378436989b25986a73ac8e4b00fde717e05da644238e88f43->enter($__internal_94f93fa88345922378436989b25986a73ac8e4b00fde717e05da644238e88f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_94f93fa88345922378436989b25986a73ac8e4b00fde717e05da644238e88f43->leave($__internal_94f93fa88345922378436989b25986a73ac8e4b00fde717e05da644238e88f43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
