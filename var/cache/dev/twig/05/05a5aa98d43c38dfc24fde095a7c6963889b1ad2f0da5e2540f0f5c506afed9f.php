<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b88b9ba4ade439cdb54cd99ac1903d5a8265913cde8a4b72f429d38dc6d0bc12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_b7f04fb61f77fe6fa2152b100bd57d6c0de73254705f9ec724e0b9b498a8c56b = $this->env->getExtension("native_profiler");
        $__internal_b7f04fb61f77fe6fa2152b100bd57d6c0de73254705f9ec724e0b9b498a8c56b->enter($__internal_b7f04fb61f77fe6fa2152b100bd57d6c0de73254705f9ec724e0b9b498a8c56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f04fb61f77fe6fa2152b100bd57d6c0de73254705f9ec724e0b9b498a8c56b->leave($__internal_b7f04fb61f77fe6fa2152b100bd57d6c0de73254705f9ec724e0b9b498a8c56b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8afa6b7368b8c619d25f7d1e5fe64caae70abd8741bd708619abf4731dbe8821 = $this->env->getExtension("native_profiler");
        $__internal_8afa6b7368b8c619d25f7d1e5fe64caae70abd8741bd708619abf4731dbe8821->enter($__internal_8afa6b7368b8c619d25f7d1e5fe64caae70abd8741bd708619abf4731dbe8821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8afa6b7368b8c619d25f7d1e5fe64caae70abd8741bd708619abf4731dbe8821->leave($__internal_8afa6b7368b8c619d25f7d1e5fe64caae70abd8741bd708619abf4731dbe8821_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8775f0291dabc0c193e6e2bc191a1edd0de2fb03f4e3a9feb4ba425c761b6af = $this->env->getExtension("native_profiler");
        $__internal_c8775f0291dabc0c193e6e2bc191a1edd0de2fb03f4e3a9feb4ba425c761b6af->enter($__internal_c8775f0291dabc0c193e6e2bc191a1edd0de2fb03f4e3a9feb4ba425c761b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8775f0291dabc0c193e6e2bc191a1edd0de2fb03f4e3a9feb4ba425c761b6af->leave($__internal_c8775f0291dabc0c193e6e2bc191a1edd0de2fb03f4e3a9feb4ba425c761b6af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d4b252e3881540da8923a1fd8118a620c84edc7800d12bf8e7d52390b61e64f = $this->env->getExtension("native_profiler");
        $__internal_2d4b252e3881540da8923a1fd8118a620c84edc7800d12bf8e7d52390b61e64f->enter($__internal_2d4b252e3881540da8923a1fd8118a620c84edc7800d12bf8e7d52390b61e64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2d4b252e3881540da8923a1fd8118a620c84edc7800d12bf8e7d52390b61e64f->leave($__internal_2d4b252e3881540da8923a1fd8118a620c84edc7800d12bf8e7d52390b61e64f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
