<?php

/* @User/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_7aec8fc27efd5111de8af14bf8f1045b004777d7929423a29eff6ff975f7c4dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_203518ca0580863298deab424682d856a6d75a6ba6c714beb7d0aeba2eef857f = $this->env->getExtension("native_profiler");
        $__internal_203518ca0580863298deab424682d856a6d75a6ba6c714beb7d0aeba2eef857f->enter($__internal_203518ca0580863298deab424682d856a6d75a6ba6c714beb7d0aeba2eef857f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_203518ca0580863298deab424682d856a6d75a6ba6c714beb7d0aeba2eef857f->leave($__internal_203518ca0580863298deab424682d856a6d75a6ba6c714beb7d0aeba2eef857f_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
