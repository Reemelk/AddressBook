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
        $__internal_0ff7850a4d4dd01c128e021bea7751356adb5844fe4e3713ee91e99efec20293 = $this->env->getExtension("native_profiler");
        $__internal_0ff7850a4d4dd01c128e021bea7751356adb5844fe4e3713ee91e99efec20293->enter($__internal_0ff7850a4d4dd01c128e021bea7751356adb5844fe4e3713ee91e99efec20293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ff7850a4d4dd01c128e021bea7751356adb5844fe4e3713ee91e99efec20293->leave($__internal_0ff7850a4d4dd01c128e021bea7751356adb5844fe4e3713ee91e99efec20293_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a39e8e292b97e80ec18803006711c2010b3dba0b1400e6b2aa249de370e7e64 = $this->env->getExtension("native_profiler");
        $__internal_5a39e8e292b97e80ec18803006711c2010b3dba0b1400e6b2aa249de370e7e64->enter($__internal_5a39e8e292b97e80ec18803006711c2010b3dba0b1400e6b2aa249de370e7e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5a39e8e292b97e80ec18803006711c2010b3dba0b1400e6b2aa249de370e7e64->leave($__internal_5a39e8e292b97e80ec18803006711c2010b3dba0b1400e6b2aa249de370e7e64_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b95194ee337b1dc895acf764f195663a4f25d88e52612516109cd89e86be4d7 = $this->env->getExtension("native_profiler");
        $__internal_6b95194ee337b1dc895acf764f195663a4f25d88e52612516109cd89e86be4d7->enter($__internal_6b95194ee337b1dc895acf764f195663a4f25d88e52612516109cd89e86be4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b95194ee337b1dc895acf764f195663a4f25d88e52612516109cd89e86be4d7->leave($__internal_6b95194ee337b1dc895acf764f195663a4f25d88e52612516109cd89e86be4d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ae9cd96c36978636bb9a829d43e0beb19d085707df4bee77335c1fc3c506dc8 = $this->env->getExtension("native_profiler");
        $__internal_2ae9cd96c36978636bb9a829d43e0beb19d085707df4bee77335c1fc3c506dc8->enter($__internal_2ae9cd96c36978636bb9a829d43e0beb19d085707df4bee77335c1fc3c506dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2ae9cd96c36978636bb9a829d43e0beb19d085707df4bee77335c1fc3c506dc8->leave($__internal_2ae9cd96c36978636bb9a829d43e0beb19d085707df4bee77335c1fc3c506dc8_prof);

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
