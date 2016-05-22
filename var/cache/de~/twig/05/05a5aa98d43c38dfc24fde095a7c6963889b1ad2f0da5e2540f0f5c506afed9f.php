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
        $__internal_978d4c0237293c87f2b527dd379661ee797b78ceb606ff92df315f1e26c88ba3 = $this->env->getExtension("native_profiler");
        $__internal_978d4c0237293c87f2b527dd379661ee797b78ceb606ff92df315f1e26c88ba3->enter($__internal_978d4c0237293c87f2b527dd379661ee797b78ceb606ff92df315f1e26c88ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_978d4c0237293c87f2b527dd379661ee797b78ceb606ff92df315f1e26c88ba3->leave($__internal_978d4c0237293c87f2b527dd379661ee797b78ceb606ff92df315f1e26c88ba3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c5498afd87116fa374ce95b0ccc43ba65dbf6ca2aa71d5d3c8e825218fe496f = $this->env->getExtension("native_profiler");
        $__internal_2c5498afd87116fa374ce95b0ccc43ba65dbf6ca2aa71d5d3c8e825218fe496f->enter($__internal_2c5498afd87116fa374ce95b0ccc43ba65dbf6ca2aa71d5d3c8e825218fe496f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2c5498afd87116fa374ce95b0ccc43ba65dbf6ca2aa71d5d3c8e825218fe496f->leave($__internal_2c5498afd87116fa374ce95b0ccc43ba65dbf6ca2aa71d5d3c8e825218fe496f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9bac96526b6638a9090afea98dfb0e6a98b522f08371d06bdd7afe99e2df55f = $this->env->getExtension("native_profiler");
        $__internal_b9bac96526b6638a9090afea98dfb0e6a98b522f08371d06bdd7afe99e2df55f->enter($__internal_b9bac96526b6638a9090afea98dfb0e6a98b522f08371d06bdd7afe99e2df55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9bac96526b6638a9090afea98dfb0e6a98b522f08371d06bdd7afe99e2df55f->leave($__internal_b9bac96526b6638a9090afea98dfb0e6a98b522f08371d06bdd7afe99e2df55f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d115350fb48494f1aa38b4e878f25f4a4910dc57a099c5d367510c206651103 = $this->env->getExtension("native_profiler");
        $__internal_7d115350fb48494f1aa38b4e878f25f4a4910dc57a099c5d367510c206651103->enter($__internal_7d115350fb48494f1aa38b4e878f25f4a4910dc57a099c5d367510c206651103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7d115350fb48494f1aa38b4e878f25f4a4910dc57a099c5d367510c206651103->leave($__internal_7d115350fb48494f1aa38b4e878f25f4a4910dc57a099c5d367510c206651103_prof);

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
