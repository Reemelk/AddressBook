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
        $__internal_a92aa3978f19e4d13098d1246cb99d245e095d72b87edeabe0983a546373d63b = $this->env->getExtension("native_profiler");
        $__internal_a92aa3978f19e4d13098d1246cb99d245e095d72b87edeabe0983a546373d63b->enter($__internal_a92aa3978f19e4d13098d1246cb99d245e095d72b87edeabe0983a546373d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92aa3978f19e4d13098d1246cb99d245e095d72b87edeabe0983a546373d63b->leave($__internal_a92aa3978f19e4d13098d1246cb99d245e095d72b87edeabe0983a546373d63b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b23aeda7d9cde5830647b1f8f0363e1a849a79030663029e778b3d19afd3722f = $this->env->getExtension("native_profiler");
        $__internal_b23aeda7d9cde5830647b1f8f0363e1a849a79030663029e778b3d19afd3722f->enter($__internal_b23aeda7d9cde5830647b1f8f0363e1a849a79030663029e778b3d19afd3722f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b23aeda7d9cde5830647b1f8f0363e1a849a79030663029e778b3d19afd3722f->leave($__internal_b23aeda7d9cde5830647b1f8f0363e1a849a79030663029e778b3d19afd3722f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6153bf2fdf09f602b0b1532d50af5033d9f288dccbf3171ec14d9e04ac3bf046 = $this->env->getExtension("native_profiler");
        $__internal_6153bf2fdf09f602b0b1532d50af5033d9f288dccbf3171ec14d9e04ac3bf046->enter($__internal_6153bf2fdf09f602b0b1532d50af5033d9f288dccbf3171ec14d9e04ac3bf046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6153bf2fdf09f602b0b1532d50af5033d9f288dccbf3171ec14d9e04ac3bf046->leave($__internal_6153bf2fdf09f602b0b1532d50af5033d9f288dccbf3171ec14d9e04ac3bf046_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47154b55efcc6b5c5769302fc8ed0cd7d1987ba181c58cb2de9aed9907bcdfab = $this->env->getExtension("native_profiler");
        $__internal_47154b55efcc6b5c5769302fc8ed0cd7d1987ba181c58cb2de9aed9907bcdfab->enter($__internal_47154b55efcc6b5c5769302fc8ed0cd7d1987ba181c58cb2de9aed9907bcdfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_47154b55efcc6b5c5769302fc8ed0cd7d1987ba181c58cb2de9aed9907bcdfab->leave($__internal_47154b55efcc6b5c5769302fc8ed0cd7d1987ba181c58cb2de9aed9907bcdfab_prof);

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
