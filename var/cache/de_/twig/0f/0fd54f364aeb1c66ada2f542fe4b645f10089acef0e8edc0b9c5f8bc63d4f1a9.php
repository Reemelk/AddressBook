<?php

/* @User/layout.html.twig */
class __TwigTemplate_efdcbbafcf53be80c63997a302fb04c099d9d3dc0b787545c88ac2ee666c2bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c873857e369c3ce836c93eb32d5d34e2f34f2b54895298d93e7dd4cc21e94f3a = $this->env->getExtension("native_profiler");
        $__internal_c873857e369c3ce836c93eb32d5d34e2f34f2b54895298d93e7dd4cc21e94f3a->enter($__internal_c873857e369c3ce836c93eb32d5d34e2f34f2b54895298d93e7dd4cc21e94f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c873857e369c3ce836c93eb32d5d34e2f34f2b54895298d93e7dd4cc21e94f3a->leave($__internal_c873857e369c3ce836c93eb32d5d34e2f34f2b54895298d93e7dd4cc21e94f3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b48744dd1da249dce986d75d752128d67a853d15fe82f1f9a45f4b16b2c2b2e = $this->env->getExtension("native_profiler");
        $__internal_5b48744dd1da249dce986d75d752128d67a853d15fe82f1f9a45f4b16b2c2b2e->enter($__internal_5b48744dd1da249dce986d75d752128d67a853d15fe82f1f9a45f4b16b2c2b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
        
        $__internal_5b48744dd1da249dce986d75d752128d67a853d15fe82f1f9a45f4b16b2c2b2e->leave($__internal_5b48744dd1da249dce986d75d752128d67a853d15fe82f1f9a45f4b16b2c2b2e_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout.html.twig";
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
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{  block('fos_user_content') }}*/
/* {% endblock %}*/
