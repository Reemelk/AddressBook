<?php

/* @User/Reception/index.html.twig */
class __TwigTemplate_f7e220fbfb8e56a52d8202e6b47ce0807e1c255813685cd1626c0610fca96a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/Reception/index.html.twig", 1);
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
        $__internal_85df7d7b4f62068147b057fdf8ded3dd661ad84e16db154932fac14975ce581d = $this->env->getExtension("native_profiler");
        $__internal_85df7d7b4f62068147b057fdf8ded3dd661ad84e16db154932fac14975ce581d->enter($__internal_85df7d7b4f62068147b057fdf8ded3dd661ad84e16db154932fac14975ce581d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Reception/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85df7d7b4f62068147b057fdf8ded3dd661ad84e16db154932fac14975ce581d->leave($__internal_85df7d7b4f62068147b057fdf8ded3dd661ad84e16db154932fac14975ce581d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d81f8fcc7304b1b238a8b8832aeb083dd21ec2281999268d32d46b4e07b85368 = $this->env->getExtension("native_profiler");
        $__internal_d81f8fcc7304b1b238a8b8832aeb083dd21ec2281999268d32d46b4e07b85368->enter($__internal_d81f8fcc7304b1b238a8b8832aeb083dd21ec2281999268d32d46b4e07b85368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Welcome !</h1>
            <p>Developed with Symfony 3</p>
            <p>By Julien Lesieur.</p>
        </div>
    </div>
";
        
        $__internal_d81f8fcc7304b1b238a8b8832aeb083dd21ec2281999268d32d46b4e07b85368->leave($__internal_d81f8fcc7304b1b238a8b8832aeb083dd21ec2281999268d32d46b4e07b85368_prof);

    }

    public function getTemplateName()
    {
        return "@User/Reception/index.html.twig";
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
