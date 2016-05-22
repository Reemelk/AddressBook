<?php

/* @User/Form/form.html.twig */
class __TwigTemplate_ffdebaa28e00938c7992c86a6645b79d5134a6ea9e6bccc432f3bf36fb5d02a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/Form/form.html.twig", 1);
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
        $__internal_3fd6d0436c87ffa261077c112ecb7a4953b2e0385640a8449cc9a85d91afcca3 = $this->env->getExtension("native_profiler");
        $__internal_3fd6d0436c87ffa261077c112ecb7a4953b2e0385640a8449cc9a85d91afcca3->enter($__internal_3fd6d0436c87ffa261077c112ecb7a4953b2e0385640a8449cc9a85d91afcca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Form/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd6d0436c87ffa261077c112ecb7a4953b2e0385640a8449cc9a85d91afcca3->leave($__internal_3fd6d0436c87ffa261077c112ecb7a4953b2e0385640a8449cc9a85d91afcca3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67500e66ef56c22e6e787b4449d2a0e47b0c78b0eb417f23fbdb3ba24f81a031 = $this->env->getExtension("native_profiler");
        $__internal_67500e66ef56c22e6e787b4449d2a0e47b0c78b0eb417f23fbdb3ba24f81a031->enter($__internal_67500e66ef56c22e6e787b4449d2a0e47b0c78b0eb417f23fbdb3ba24f81a031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67500e66ef56c22e6e787b4449d2a0e47b0c78b0eb417f23fbdb3ba24f81a031->leave($__internal_67500e66ef56c22e6e787b4449d2a0e47b0c78b0eb417f23fbdb3ba24f81a031_prof);

    }

    public function getTemplateName()
    {
        return "@User/Form/form.html.twig";
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
