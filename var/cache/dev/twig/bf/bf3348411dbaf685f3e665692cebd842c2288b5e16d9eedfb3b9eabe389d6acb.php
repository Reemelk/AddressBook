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
        $__internal_f42a8be48fdb55eb7c517649da4710c89de4107ecf98ae8b86bc116916550630 = $this->env->getExtension("native_profiler");
        $__internal_f42a8be48fdb55eb7c517649da4710c89de4107ecf98ae8b86bc116916550630->enter($__internal_f42a8be48fdb55eb7c517649da4710c89de4107ecf98ae8b86bc116916550630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f42a8be48fdb55eb7c517649da4710c89de4107ecf98ae8b86bc116916550630->leave($__internal_f42a8be48fdb55eb7c517649da4710c89de4107ecf98ae8b86bc116916550630_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb8620c97e991a3a70f962894ce48fd4a89f1e850a185a4ecff8123bcc065797 = $this->env->getExtension("native_profiler");
        $__internal_fb8620c97e991a3a70f962894ce48fd4a89f1e850a185a4ecff8123bcc065797->enter($__internal_fb8620c97e991a3a70f962894ce48fd4a89f1e850a185a4ecff8123bcc065797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fb8620c97e991a3a70f962894ce48fd4a89f1e850a185a4ecff8123bcc065797->leave($__internal_fb8620c97e991a3a70f962894ce48fd4a89f1e850a185a4ecff8123bcc065797_prof);

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
