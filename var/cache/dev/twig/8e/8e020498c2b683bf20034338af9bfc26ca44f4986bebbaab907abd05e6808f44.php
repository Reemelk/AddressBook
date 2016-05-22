<?php

/* UserBundle:Reception:index.html.twig */
class __TwigTemplate_7eeddb50b27ba00466152ab76a48cc9f8e4076ea2d6fb1a6661013a1d7e47a92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Reception:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccbd6720fdb7120756f4650425f48bc113447b03ff5df72613fef3386d2bc1e6 = $this->env->getExtension("native_profiler");
        $__internal_ccbd6720fdb7120756f4650425f48bc113447b03ff5df72613fef3386d2bc1e6->enter($__internal_ccbd6720fdb7120756f4650425f48bc113447b03ff5df72613fef3386d2bc1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Reception:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccbd6720fdb7120756f4650425f48bc113447b03ff5df72613fef3386d2bc1e6->leave($__internal_ccbd6720fdb7120756f4650425f48bc113447b03ff5df72613fef3386d2bc1e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10225137b7da5128a4e37225cc9b4bedf278d3e397d63fa506f45bc1183f7ac7 = $this->env->getExtension("native_profiler");
        $__internal_10225137b7da5128a4e37225cc9b4bedf278d3e397d63fa506f45bc1183f7ac7->enter($__internal_10225137b7da5128a4e37225cc9b4bedf278d3e397d63fa506f45bc1183f7ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Welcome !</h1>
            <p>Developed with Symfony 3</p>
            <p>By Julien Lesieur.</p>
        </div>
    </div>
";
        
        $__internal_10225137b7da5128a4e37225cc9b4bedf278d3e397d63fa506f45bc1183f7ac7->leave($__internal_10225137b7da5128a4e37225cc9b4bedf278d3e397d63fa506f45bc1183f7ac7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Reception:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Welcome !</h1>*/
/*             <p>Developed with Symfony 3</p>*/
/*             <p>By Julien Lesieur.</p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
