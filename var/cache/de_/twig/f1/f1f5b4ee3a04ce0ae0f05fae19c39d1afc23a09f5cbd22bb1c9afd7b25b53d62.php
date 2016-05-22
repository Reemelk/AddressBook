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
        $__internal_7fd91c701c59ea92a2b72251a2dae749bfe5332838743dc17cc8232a684352c3 = $this->env->getExtension("native_profiler");
        $__internal_7fd91c701c59ea92a2b72251a2dae749bfe5332838743dc17cc8232a684352c3->enter($__internal_7fd91c701c59ea92a2b72251a2dae749bfe5332838743dc17cc8232a684352c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd91c701c59ea92a2b72251a2dae749bfe5332838743dc17cc8232a684352c3->leave($__internal_7fd91c701c59ea92a2b72251a2dae749bfe5332838743dc17cc8232a684352c3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5051992497efc0ae32018cf1af67b44d5e1b5e0b22b538ba45aa132a4c78cfd = $this->env->getExtension("native_profiler");
        $__internal_c5051992497efc0ae32018cf1af67b44d5e1b5e0b22b538ba45aa132a4c78cfd->enter($__internal_c5051992497efc0ae32018cf1af67b44d5e1b5e0b22b538ba45aa132a4c78cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c5051992497efc0ae32018cf1af67b44d5e1b5e0b22b538ba45aa132a4c78cfd->leave($__internal_c5051992497efc0ae32018cf1af67b44d5e1b5e0b22b538ba45aa132a4c78cfd_prof);

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
