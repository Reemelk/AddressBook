<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_7f914977245a652de76d6060a270f59b98ab7672a7e5120c92667e22bb95d78e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_ebf4de3d93770f4496965394032389f52ec4276d6d84166d4a974b7642ab9470 = $this->env->getExtension("native_profiler");
        $__internal_ebf4de3d93770f4496965394032389f52ec4276d6d84166d4a974b7642ab9470->enter($__internal_ebf4de3d93770f4496965394032389f52ec4276d6d84166d4a974b7642ab9470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf4de3d93770f4496965394032389f52ec4276d6d84166d4a974b7642ab9470->leave($__internal_ebf4de3d93770f4496965394032389f52ec4276d6d84166d4a974b7642ab9470_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f992da1297e06d095a0a34a3e4ac5e72b4b2b448514a08f5b3d0e230f65ad69 = $this->env->getExtension("native_profiler");
        $__internal_5f992da1297e06d095a0a34a3e4ac5e72b4b2b448514a08f5b3d0e230f65ad69->enter($__internal_5f992da1297e06d095a0a34a3e4ac5e72b4b2b448514a08f5b3d0e230f65ad69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5f992da1297e06d095a0a34a3e4ac5e72b4b2b448514a08f5b3d0e230f65ad69->leave($__internal_5f992da1297e06d095a0a34a3e4ac5e72b4b2b448514a08f5b3d0e230f65ad69_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
