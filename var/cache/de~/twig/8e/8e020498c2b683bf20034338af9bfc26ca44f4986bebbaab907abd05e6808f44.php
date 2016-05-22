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
        $__internal_56f040bc5d9b07d5562c3f95577e6c72329726d4c2a3fc5f299da617794ec5e2 = $this->env->getExtension("native_profiler");
        $__internal_56f040bc5d9b07d5562c3f95577e6c72329726d4c2a3fc5f299da617794ec5e2->enter($__internal_56f040bc5d9b07d5562c3f95577e6c72329726d4c2a3fc5f299da617794ec5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Reception:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f040bc5d9b07d5562c3f95577e6c72329726d4c2a3fc5f299da617794ec5e2->leave($__internal_56f040bc5d9b07d5562c3f95577e6c72329726d4c2a3fc5f299da617794ec5e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b8ea50aedddd9e0202fb391ae7eaa45eae7f38cacc5d05e3360d7d40c1e6cb = $this->env->getExtension("native_profiler");
        $__internal_b1b8ea50aedddd9e0202fb391ae7eaa45eae7f38cacc5d05e3360d7d40c1e6cb->enter($__internal_b1b8ea50aedddd9e0202fb391ae7eaa45eae7f38cacc5d05e3360d7d40c1e6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Welcome !</h1>
            <p>Developed with Symfony 3</p>
            <p>By Julien Lesieur.</p>
        </div>
    </div>
";
        
        $__internal_b1b8ea50aedddd9e0202fb391ae7eaa45eae7f38cacc5d05e3360d7d40c1e6cb->leave($__internal_b1b8ea50aedddd9e0202fb391ae7eaa45eae7f38cacc5d05e3360d7d40c1e6cb_prof);

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
