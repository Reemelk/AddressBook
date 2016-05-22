<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_e034b6983a415560fd6a3c4f19801003b2230bf6ac6f1065d9a441c22aa40928 extends Twig_Template
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
        $__internal_04bb847c6a425009a31d9073940430d24b25078512df8d783c7c7eb6682c4f0b = $this->env->getExtension("native_profiler");
        $__internal_04bb847c6a425009a31d9073940430d24b25078512df8d783c7c7eb6682c4f0b->enter($__internal_04bb847c6a425009a31d9073940430d24b25078512df8d783c7c7eb6682c4f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_04bb847c6a425009a31d9073940430d24b25078512df8d783c7c7eb6682c4f0b->leave($__internal_04bb847c6a425009a31d9073940430d24b25078512df8d783c7c7eb6682c4f0b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
