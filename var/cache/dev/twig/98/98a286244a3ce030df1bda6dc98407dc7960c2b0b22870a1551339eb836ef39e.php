<?php

/* @User/Resetting/checkEmail.html.twig */
class __TwigTemplate_6c745aca3a5e7e97e6e0c4afdde30bd9390ff70eb430c37e8e199f7900d7c533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/checkEmail.html.twig", 1);
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
        $__internal_13710dcec832dffe41ebf9bcf15ed40f424326842ebbb4d5cc97752cbe34d229 = $this->env->getExtension("native_profiler");
        $__internal_13710dcec832dffe41ebf9bcf15ed40f424326842ebbb4d5cc97752cbe34d229->enter($__internal_13710dcec832dffe41ebf9bcf15ed40f424326842ebbb4d5cc97752cbe34d229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13710dcec832dffe41ebf9bcf15ed40f424326842ebbb4d5cc97752cbe34d229->leave($__internal_13710dcec832dffe41ebf9bcf15ed40f424326842ebbb4d5cc97752cbe34d229_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25f67c64e09f35579283d642a2365a03f1bccc87232378831ad653b0386bb04a = $this->env->getExtension("native_profiler");
        $__internal_25f67c64e09f35579283d642a2365a03f1bccc87232378831ad653b0386bb04a->enter($__internal_25f67c64e09f35579283d642a2365a03f1bccc87232378831ad653b0386bb04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_25f67c64e09f35579283d642a2365a03f1bccc87232378831ad653b0386bb04a->leave($__internal_25f67c64e09f35579283d642a2365a03f1bccc87232378831ad653b0386bb04a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
