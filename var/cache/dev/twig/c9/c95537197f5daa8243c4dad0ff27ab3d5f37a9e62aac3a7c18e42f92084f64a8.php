<?php

/* @User/Contact/deleteContact.html.twig */
class __TwigTemplate_113b2450714053e337d36f8eb0d510c271b9811b5e91e31ba55d6c93def33ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/Contact/deleteContact.html.twig", 1);
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
        $__internal_e5942983340ac6cd73ea32b3ea8aed5d1f38ceb856f2ecc1595ab029d1cf32e7 = $this->env->getExtension("native_profiler");
        $__internal_e5942983340ac6cd73ea32b3ea8aed5d1f38ceb856f2ecc1595ab029d1cf32e7->enter($__internal_e5942983340ac6cd73ea32b3ea8aed5d1f38ceb856f2ecc1595ab029d1cf32e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Contact/deleteContact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5942983340ac6cd73ea32b3ea8aed5d1f38ceb856f2ecc1595ab029d1cf32e7->leave($__internal_e5942983340ac6cd73ea32b3ea8aed5d1f38ceb856f2ecc1595ab029d1cf32e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fdb0110ca6fc263086347d6a8e2ffedf5912bc3e5551b8ea6fd785a5b28538a = $this->env->getExtension("native_profiler");
        $__internal_8fdb0110ca6fc263086347d6a8e2ffedf5912bc3e5551b8ea6fd785a5b28538a->enter($__internal_8fdb0110ca6fc263086347d6a8e2ffedf5912bc3e5551b8ea6fd785a5b28538a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"alert alert-warning\" role=\"alert\" style=\"margin-top: 10px\"><p class=\"text-center\">Contact has been correctly removed !</p></div>
";
        
        $__internal_8fdb0110ca6fc263086347d6a8e2ffedf5912bc3e5551b8ea6fd785a5b28538a->leave($__internal_8fdb0110ca6fc263086347d6a8e2ffedf5912bc3e5551b8ea6fd785a5b28538a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Contact/deleteContact.html.twig";
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
/*     <div class="alert alert-warning" role="alert" style="margin-top: 10px"><p class="text-center">Contact has been correctly removed !</p></div>*/
/* {% endblock %}*/
