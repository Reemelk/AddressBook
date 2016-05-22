<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_45ec59eed5dad6352b94d01ac6418f4ff3777565e67775300f98f4b9534355ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d67c1871d5be3903906e9bb0d62fe1a419b9ebf09948b9f1338ae3093750c654 = $this->env->getExtension("native_profiler");
        $__internal_d67c1871d5be3903906e9bb0d62fe1a419b9ebf09948b9f1338ae3093750c654->enter($__internal_d67c1871d5be3903906e9bb0d62fe1a419b9ebf09948b9f1338ae3093750c654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d67c1871d5be3903906e9bb0d62fe1a419b9ebf09948b9f1338ae3093750c654->leave($__internal_d67c1871d5be3903906e9bb0d62fe1a419b9ebf09948b9f1338ae3093750c654_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_76239bfa11358c094ce63ee5f07dce8494e1bfc6b927aad984d6a9159957857e = $this->env->getExtension("native_profiler");
        $__internal_76239bfa11358c094ce63ee5f07dce8494e1bfc6b927aad984d6a9159957857e->enter($__internal_76239bfa11358c094ce63ee5f07dce8494e1bfc6b927aad984d6a9159957857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_76239bfa11358c094ce63ee5f07dce8494e1bfc6b927aad984d6a9159957857e->leave($__internal_76239bfa11358c094ce63ee5f07dce8494e1bfc6b927aad984d6a9159957857e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a4ce5b08accb47038216da0837971a4484eaea2d87f3bfb90b38e948794a5cb = $this->env->getExtension("native_profiler");
        $__internal_9a4ce5b08accb47038216da0837971a4484eaea2d87f3bfb90b38e948794a5cb->enter($__internal_9a4ce5b08accb47038216da0837971a4484eaea2d87f3bfb90b38e948794a5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a4ce5b08accb47038216da0837971a4484eaea2d87f3bfb90b38e948794a5cb->leave($__internal_9a4ce5b08accb47038216da0837971a4484eaea2d87f3bfb90b38e948794a5cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42a9007087800ffc33e5d347d5a55115ba36c67e0bc80e92ed3144cbfa636436 = $this->env->getExtension("native_profiler");
        $__internal_42a9007087800ffc33e5d347d5a55115ba36c67e0bc80e92ed3144cbfa636436->enter($__internal_42a9007087800ffc33e5d347d5a55115ba36c67e0bc80e92ed3144cbfa636436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42a9007087800ffc33e5d347d5a55115ba36c67e0bc80e92ed3144cbfa636436->leave($__internal_42a9007087800ffc33e5d347d5a55115ba36c67e0bc80e92ed3144cbfa636436_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
