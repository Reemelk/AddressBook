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
        $__internal_0d444f7ef661e80165911f276d3e45b4213d1eb290d8dbdee524c873da106f5a = $this->env->getExtension("native_profiler");
        $__internal_0d444f7ef661e80165911f276d3e45b4213d1eb290d8dbdee524c873da106f5a->enter($__internal_0d444f7ef661e80165911f276d3e45b4213d1eb290d8dbdee524c873da106f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d444f7ef661e80165911f276d3e45b4213d1eb290d8dbdee524c873da106f5a->leave($__internal_0d444f7ef661e80165911f276d3e45b4213d1eb290d8dbdee524c873da106f5a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57fb9747e9287b8be2379729f7ac1b6d428ff3d738654b3d7f8ed4b2ccf036e8 = $this->env->getExtension("native_profiler");
        $__internal_57fb9747e9287b8be2379729f7ac1b6d428ff3d738654b3d7f8ed4b2ccf036e8->enter($__internal_57fb9747e9287b8be2379729f7ac1b6d428ff3d738654b3d7f8ed4b2ccf036e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_57fb9747e9287b8be2379729f7ac1b6d428ff3d738654b3d7f8ed4b2ccf036e8->leave($__internal_57fb9747e9287b8be2379729f7ac1b6d428ff3d738654b3d7f8ed4b2ccf036e8_prof);

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
