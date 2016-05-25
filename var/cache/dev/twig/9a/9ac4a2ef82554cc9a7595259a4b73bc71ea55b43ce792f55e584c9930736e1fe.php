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
        $__internal_0b4829aa9ce9ce0a1c55dc41958834071517482716720366704227bfde1d62a1 = $this->env->getExtension("native_profiler");
        $__internal_0b4829aa9ce9ce0a1c55dc41958834071517482716720366704227bfde1d62a1->enter($__internal_0b4829aa9ce9ce0a1c55dc41958834071517482716720366704227bfde1d62a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4829aa9ce9ce0a1c55dc41958834071517482716720366704227bfde1d62a1->leave($__internal_0b4829aa9ce9ce0a1c55dc41958834071517482716720366704227bfde1d62a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e60b031674267bb90329838de348b6a834237d513ef0e66d9c75594538f1df46 = $this->env->getExtension("native_profiler");
        $__internal_e60b031674267bb90329838de348b6a834237d513ef0e66d9c75594538f1df46->enter($__internal_e60b031674267bb90329838de348b6a834237d513ef0e66d9c75594538f1df46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e60b031674267bb90329838de348b6a834237d513ef0e66d9c75594538f1df46->leave($__internal_e60b031674267bb90329838de348b6a834237d513ef0e66d9c75594538f1df46_prof);

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
