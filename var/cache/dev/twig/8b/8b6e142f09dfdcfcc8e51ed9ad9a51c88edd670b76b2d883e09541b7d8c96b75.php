<?php

/* UserBundle:Contact:deleteContact.html.twig */
class __TwigTemplate_b0f8194fc89419052a93c82aab4aef3b9f598905615bf03937b0dbae7076bf7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Contact:deleteContact.html.twig", 1);
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
        $__internal_9926ede3d391cb408cc511542ae62670e4ac832153d4a17e589ecacd6afd9551 = $this->env->getExtension("native_profiler");
        $__internal_9926ede3d391cb408cc511542ae62670e4ac832153d4a17e589ecacd6afd9551->enter($__internal_9926ede3d391cb408cc511542ae62670e4ac832153d4a17e589ecacd6afd9551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Contact:deleteContact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9926ede3d391cb408cc511542ae62670e4ac832153d4a17e589ecacd6afd9551->leave($__internal_9926ede3d391cb408cc511542ae62670e4ac832153d4a17e589ecacd6afd9551_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1f3ec10acfb4f2b9755221f47991f6710931421c56d71cf9a83a3dc198bcba3 = $this->env->getExtension("native_profiler");
        $__internal_e1f3ec10acfb4f2b9755221f47991f6710931421c56d71cf9a83a3dc198bcba3->enter($__internal_e1f3ec10acfb4f2b9755221f47991f6710931421c56d71cf9a83a3dc198bcba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"alert alert-warning\" role=\"alert\" style=\"margin-top: 10px\"><p class=\"text-center\">Contact has been correctly removed !</p></div>
";
        
        $__internal_e1f3ec10acfb4f2b9755221f47991f6710931421c56d71cf9a83a3dc198bcba3->leave($__internal_e1f3ec10acfb4f2b9755221f47991f6710931421c56d71cf9a83a3dc198bcba3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Contact:deleteContact.html.twig";
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
