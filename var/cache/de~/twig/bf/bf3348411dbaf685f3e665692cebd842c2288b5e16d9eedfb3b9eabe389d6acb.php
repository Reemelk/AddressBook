<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d8f396c5b6197075a9e07d400b41dab4b174907c0d7164bc9d3a11d328db320b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bcf1fb663ed85009d1ee29412a8435983c7eb157b09645421344d3af3e503f2 = $this->env->getExtension("native_profiler");
        $__internal_4bcf1fb663ed85009d1ee29412a8435983c7eb157b09645421344d3af3e503f2->enter($__internal_4bcf1fb663ed85009d1ee29412a8435983c7eb157b09645421344d3af3e503f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4bcf1fb663ed85009d1ee29412a8435983c7eb157b09645421344d3af3e503f2->leave($__internal_4bcf1fb663ed85009d1ee29412a8435983c7eb157b09645421344d3af3e503f2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9df4efe0cddbd0aca727f198f809307894fbecb6446a11ac81b42d7e522936d = $this->env->getExtension("native_profiler");
        $__internal_c9df4efe0cddbd0aca727f198f809307894fbecb6446a11ac81b42d7e522936d->enter($__internal_c9df4efe0cddbd0aca727f198f809307894fbecb6446a11ac81b42d7e522936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9df4efe0cddbd0aca727f198f809307894fbecb6446a11ac81b42d7e522936d->leave($__internal_c9df4efe0cddbd0aca727f198f809307894fbecb6446a11ac81b42d7e522936d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
