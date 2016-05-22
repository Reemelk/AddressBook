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
        $__internal_44611d44011c86207f9263b0ab03a330fbe0549c515e0cdccd94bf9b5cd5d2a1 = $this->env->getExtension("native_profiler");
        $__internal_44611d44011c86207f9263b0ab03a330fbe0549c515e0cdccd94bf9b5cd5d2a1->enter($__internal_44611d44011c86207f9263b0ab03a330fbe0549c515e0cdccd94bf9b5cd5d2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44611d44011c86207f9263b0ab03a330fbe0549c515e0cdccd94bf9b5cd5d2a1->leave($__internal_44611d44011c86207f9263b0ab03a330fbe0549c515e0cdccd94bf9b5cd5d2a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1629522c8ca787991d37b2c00ea9c55b6549f58e9ef93c6994e9a2e97a81c5b = $this->env->getExtension("native_profiler");
        $__internal_b1629522c8ca787991d37b2c00ea9c55b6549f58e9ef93c6994e9a2e97a81c5b->enter($__internal_b1629522c8ca787991d37b2c00ea9c55b6549f58e9ef93c6994e9a2e97a81c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b1629522c8ca787991d37b2c00ea9c55b6549f58e9ef93c6994e9a2e97a81c5b->leave($__internal_b1629522c8ca787991d37b2c00ea9c55b6549f58e9ef93c6994e9a2e97a81c5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_80929f6e09043b2531f330fe5e4330c2accaecb5bc2eca6a847066a64e2c6127 = $this->env->getExtension("native_profiler");
        $__internal_80929f6e09043b2531f330fe5e4330c2accaecb5bc2eca6a847066a64e2c6127->enter($__internal_80929f6e09043b2531f330fe5e4330c2accaecb5bc2eca6a847066a64e2c6127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_80929f6e09043b2531f330fe5e4330c2accaecb5bc2eca6a847066a64e2c6127->leave($__internal_80929f6e09043b2531f330fe5e4330c2accaecb5bc2eca6a847066a64e2c6127_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e436553306c4513e8c777a7dc46f16af1e43499114e3f78207838a54c92a5ebd = $this->env->getExtension("native_profiler");
        $__internal_e436553306c4513e8c777a7dc46f16af1e43499114e3f78207838a54c92a5ebd->enter($__internal_e436553306c4513e8c777a7dc46f16af1e43499114e3f78207838a54c92a5ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e436553306c4513e8c777a7dc46f16af1e43499114e3f78207838a54c92a5ebd->leave($__internal_e436553306c4513e8c777a7dc46f16af1e43499114e3f78207838a54c92a5ebd_prof);

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
