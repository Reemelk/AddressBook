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
        $__internal_f7f90b137635bdd128ba946596f641f9ae354dafe377f928c39acb02331f5253 = $this->env->getExtension("native_profiler");
        $__internal_f7f90b137635bdd128ba946596f641f9ae354dafe377f928c39acb02331f5253->enter($__internal_f7f90b137635bdd128ba946596f641f9ae354dafe377f928c39acb02331f5253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f90b137635bdd128ba946596f641f9ae354dafe377f928c39acb02331f5253->leave($__internal_f7f90b137635bdd128ba946596f641f9ae354dafe377f928c39acb02331f5253_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae0e52642dd9280e504da43eadec32fa6d6460d532262b95efc91eb95b7ed49e = $this->env->getExtension("native_profiler");
        $__internal_ae0e52642dd9280e504da43eadec32fa6d6460d532262b95efc91eb95b7ed49e->enter($__internal_ae0e52642dd9280e504da43eadec32fa6d6460d532262b95efc91eb95b7ed49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ae0e52642dd9280e504da43eadec32fa6d6460d532262b95efc91eb95b7ed49e->leave($__internal_ae0e52642dd9280e504da43eadec32fa6d6460d532262b95efc91eb95b7ed49e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_871521ba81dfa9145eea65814296e95a83848896d02d898e6338828bbaefae37 = $this->env->getExtension("native_profiler");
        $__internal_871521ba81dfa9145eea65814296e95a83848896d02d898e6338828bbaefae37->enter($__internal_871521ba81dfa9145eea65814296e95a83848896d02d898e6338828bbaefae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_871521ba81dfa9145eea65814296e95a83848896d02d898e6338828bbaefae37->leave($__internal_871521ba81dfa9145eea65814296e95a83848896d02d898e6338828bbaefae37_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cecdb5c2f200ac2d2837ee5e834f9b277f7f3f67010bb80263b7b45abcea864 = $this->env->getExtension("native_profiler");
        $__internal_4cecdb5c2f200ac2d2837ee5e834f9b277f7f3f67010bb80263b7b45abcea864->enter($__internal_4cecdb5c2f200ac2d2837ee5e834f9b277f7f3f67010bb80263b7b45abcea864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4cecdb5c2f200ac2d2837ee5e834f9b277f7f3f67010bb80263b7b45abcea864->leave($__internal_4cecdb5c2f200ac2d2837ee5e834f9b277f7f3f67010bb80263b7b45abcea864_prof);

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
