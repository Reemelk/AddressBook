<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_ec537202888ee2d5776b8de26a27d8608167e48ba6ce5fcb3cadc9b3f2932ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_630825e64072fc99b111181bbc3578d2985abbae35a825ddf4ba09c4097cb7bb = $this->env->getExtension("native_profiler");
        $__internal_630825e64072fc99b111181bbc3578d2985abbae35a825ddf4ba09c4097cb7bb->enter($__internal_630825e64072fc99b111181bbc3578d2985abbae35a825ddf4ba09c4097cb7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630825e64072fc99b111181bbc3578d2985abbae35a825ddf4ba09c4097cb7bb->leave($__internal_630825e64072fc99b111181bbc3578d2985abbae35a825ddf4ba09c4097cb7bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0577fb8a8d99a5418ce11cc8ee55fc1bd4dd991baea6321be233b6dbddc4e1ef = $this->env->getExtension("native_profiler");
        $__internal_0577fb8a8d99a5418ce11cc8ee55fc1bd4dd991baea6321be233b6dbddc4e1ef->enter($__internal_0577fb8a8d99a5418ce11cc8ee55fc1bd4dd991baea6321be233b6dbddc4e1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0577fb8a8d99a5418ce11cc8ee55fc1bd4dd991baea6321be233b6dbddc4e1ef->leave($__internal_0577fb8a8d99a5418ce11cc8ee55fc1bd4dd991baea6321be233b6dbddc4e1ef_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
