<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_2d1b1976bfa410045fcc1734d782e4451bbd1830d1d5f48b205308f4d7708e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7a09b5d4ab6a167f75ebc07c4c5337faf7d00573fc38bc875c2384959f4c2171 = $this->env->getExtension("native_profiler");
        $__internal_7a09b5d4ab6a167f75ebc07c4c5337faf7d00573fc38bc875c2384959f4c2171->enter($__internal_7a09b5d4ab6a167f75ebc07c4c5337faf7d00573fc38bc875c2384959f4c2171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a09b5d4ab6a167f75ebc07c4c5337faf7d00573fc38bc875c2384959f4c2171->leave($__internal_7a09b5d4ab6a167f75ebc07c4c5337faf7d00573fc38bc875c2384959f4c2171_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b036191117924bdf70c05a33909be1473e50b1fed74037dd6c469e59e8d8252f = $this->env->getExtension("native_profiler");
        $__internal_b036191117924bdf70c05a33909be1473e50b1fed74037dd6c469e59e8d8252f->enter($__internal_b036191117924bdf70c05a33909be1473e50b1fed74037dd6c469e59e8d8252f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b036191117924bdf70c05a33909be1473e50b1fed74037dd6c469e59e8d8252f->leave($__internal_b036191117924bdf70c05a33909be1473e50b1fed74037dd6c469e59e8d8252f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
