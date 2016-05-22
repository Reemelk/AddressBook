<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6522de5d4599cc74485be4f37bf558385c0993cac4554c57491d86005c98fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a262aaea35aa0fa26cee704a3624b5fa348e9b1c52df8527108a682fa2905a26 = $this->env->getExtension("native_profiler");
        $__internal_a262aaea35aa0fa26cee704a3624b5fa348e9b1c52df8527108a682fa2905a26->enter($__internal_a262aaea35aa0fa26cee704a3624b5fa348e9b1c52df8527108a682fa2905a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a262aaea35aa0fa26cee704a3624b5fa348e9b1c52df8527108a682fa2905a26->leave($__internal_a262aaea35aa0fa26cee704a3624b5fa348e9b1c52df8527108a682fa2905a26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19d4fafd2effc425439411d376b3c2635d213f71de1cec0706af084e7b670bef = $this->env->getExtension("native_profiler");
        $__internal_19d4fafd2effc425439411d376b3c2635d213f71de1cec0706af084e7b670bef->enter($__internal_19d4fafd2effc425439411d376b3c2635d213f71de1cec0706af084e7b670bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19d4fafd2effc425439411d376b3c2635d213f71de1cec0706af084e7b670bef->leave($__internal_19d4fafd2effc425439411d376b3c2635d213f71de1cec0706af084e7b670bef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_112da5691100e831606ce97120575cd1a3f62837b758e514fdafbe88c6f20381 = $this->env->getExtension("native_profiler");
        $__internal_112da5691100e831606ce97120575cd1a3f62837b758e514fdafbe88c6f20381->enter($__internal_112da5691100e831606ce97120575cd1a3f62837b758e514fdafbe88c6f20381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_112da5691100e831606ce97120575cd1a3f62837b758e514fdafbe88c6f20381->leave($__internal_112da5691100e831606ce97120575cd1a3f62837b758e514fdafbe88c6f20381_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73a2b0354aac51a2d830a19c196ce6afd77f144c2294ea1c20360c0875a86b52 = $this->env->getExtension("native_profiler");
        $__internal_73a2b0354aac51a2d830a19c196ce6afd77f144c2294ea1c20360c0875a86b52->enter($__internal_73a2b0354aac51a2d830a19c196ce6afd77f144c2294ea1c20360c0875a86b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73a2b0354aac51a2d830a19c196ce6afd77f144c2294ea1c20360c0875a86b52->leave($__internal_73a2b0354aac51a2d830a19c196ce6afd77f144c2294ea1c20360c0875a86b52_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
