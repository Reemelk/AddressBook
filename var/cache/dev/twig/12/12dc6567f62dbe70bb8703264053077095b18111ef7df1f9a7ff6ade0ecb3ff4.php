<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_d313ef72285ed2898f91436270abbc0b15c4e6c260ff21f7d6b276bcc4f886a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_26da5898586be52de704f035a8f7b18f7ee10b38c9b140a49ba17d581ec8017f = $this->env->getExtension("native_profiler");
        $__internal_26da5898586be52de704f035a8f7b18f7ee10b38c9b140a49ba17d581ec8017f->enter($__internal_26da5898586be52de704f035a8f7b18f7ee10b38c9b140a49ba17d581ec8017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26da5898586be52de704f035a8f7b18f7ee10b38c9b140a49ba17d581ec8017f->leave($__internal_26da5898586be52de704f035a8f7b18f7ee10b38c9b140a49ba17d581ec8017f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f638af0436a047fe667a6ad5547cbefcfeea527182b1fed9e2ffdf16b23e68ba = $this->env->getExtension("native_profiler");
        $__internal_f638af0436a047fe667a6ad5547cbefcfeea527182b1fed9e2ffdf16b23e68ba->enter($__internal_f638af0436a047fe667a6ad5547cbefcfeea527182b1fed9e2ffdf16b23e68ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f638af0436a047fe667a6ad5547cbefcfeea527182b1fed9e2ffdf16b23e68ba->leave($__internal_f638af0436a047fe667a6ad5547cbefcfeea527182b1fed9e2ffdf16b23e68ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
