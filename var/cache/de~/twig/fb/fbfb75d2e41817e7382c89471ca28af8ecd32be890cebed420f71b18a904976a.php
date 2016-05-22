<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f7cb078d89b851a8bb433315e30925801ab2589fd96dcba2e2d8a7eeac0c57c4 extends Twig_Template
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
        $__internal_35fe6aef58d5a7b27a033f16466a795093dfa5b8cd604b1770c2cf5c1c85a112 = $this->env->getExtension("native_profiler");
        $__internal_35fe6aef58d5a7b27a033f16466a795093dfa5b8cd604b1770c2cf5c1c85a112->enter($__internal_35fe6aef58d5a7b27a033f16466a795093dfa5b8cd604b1770c2cf5c1c85a112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_35fe6aef58d5a7b27a033f16466a795093dfa5b8cd604b1770c2cf5c1c85a112->leave($__internal_35fe6aef58d5a7b27a033f16466a795093dfa5b8cd604b1770c2cf5c1c85a112_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_badb4403b7ea3590f26c60161ca969218100efa5f443c1e42039965d1dc6d7ee = $this->env->getExtension("native_profiler");
        $__internal_badb4403b7ea3590f26c60161ca969218100efa5f443c1e42039965d1dc6d7ee->enter($__internal_badb4403b7ea3590f26c60161ca969218100efa5f443c1e42039965d1dc6d7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_badb4403b7ea3590f26c60161ca969218100efa5f443c1e42039965d1dc6d7ee->leave($__internal_badb4403b7ea3590f26c60161ca969218100efa5f443c1e42039965d1dc6d7ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
