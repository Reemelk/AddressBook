<?php

/* UserBundle:Form:form.html.twig */
class __TwigTemplate_3403a46429927e78e2ea87df42d54e6bc2501cd158260715264f498f403c5c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Form:form.html.twig", 1);
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
        $__internal_a852ce50e12eee95744d4f5a4d07b483342243670f1d8041af822d756440dd10 = $this->env->getExtension("native_profiler");
        $__internal_a852ce50e12eee95744d4f5a4d07b483342243670f1d8041af822d756440dd10->enter($__internal_a852ce50e12eee95744d4f5a4d07b483342243670f1d8041af822d756440dd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Form:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a852ce50e12eee95744d4f5a4d07b483342243670f1d8041af822d756440dd10->leave($__internal_a852ce50e12eee95744d4f5a4d07b483342243670f1d8041af822d756440dd10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e0d5962238ac3013fabd267a42a93b25ee8cc66eeed5da3a169f4e8810f1bd8 = $this->env->getExtension("native_profiler");
        $__internal_8e0d5962238ac3013fabd267a42a93b25ee8cc66eeed5da3a169f4e8810f1bd8->enter($__internal_8e0d5962238ac3013fabd267a42a93b25ee8cc66eeed5da3a169f4e8810f1bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"alert alert-info\" role=\"alert\" style=\"margin-top: 10px\"><p class=\"text-center\">ADDING A NEW CONTACT</p></div>
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
        <button type=\"submit\" class=\"center-block\" style=\"margin-bottom: 10px\">Add contact!</button>
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8e0d5962238ac3013fabd267a42a93b25ee8cc66eeed5da3a169f4e8810f1bd8->leave($__internal_8e0d5962238ac3013fabd267a42a93b25ee8cc66eeed5da3a169f4e8810f1bd8_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Form:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*         <div class="alert alert-info" role="alert" style="margin-top: 10px"><p class="text-center">ADDING A NEW CONTACT</p></div>*/
/*         {{ form_row(form.contact) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.address) }}*/
/*         {{ form_row(form.telephone) }}*/
/*         {{ form_row(form.website) }}*/
/*         <button type="submit" class="center-block" style="margin-bottom: 10px">Add contact!</button>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
