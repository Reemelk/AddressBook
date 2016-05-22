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
        $__internal_db4f17722f24c861666e403433456c49e4af26c69931167b3525d7bcdde28ace = $this->env->getExtension("native_profiler");
        $__internal_db4f17722f24c861666e403433456c49e4af26c69931167b3525d7bcdde28ace->enter($__internal_db4f17722f24c861666e403433456c49e4af26c69931167b3525d7bcdde28ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db4f17722f24c861666e403433456c49e4af26c69931167b3525d7bcdde28ace->leave($__internal_db4f17722f24c861666e403433456c49e4af26c69931167b3525d7bcdde28ace_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1014df516acf63140292a98231bf447af871e59bce0ee7f9d17213b8936baeac = $this->env->getExtension("native_profiler");
        $__internal_1014df516acf63140292a98231bf447af871e59bce0ee7f9d17213b8936baeac->enter($__internal_1014df516acf63140292a98231bf447af871e59bce0ee7f9d17213b8936baeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1014df516acf63140292a98231bf447af871e59bce0ee7f9d17213b8936baeac->leave($__internal_1014df516acf63140292a98231bf447af871e59bce0ee7f9d17213b8936baeac_prof);

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
