<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e00ad3498388b49c108d4e7aabc17bbbdbdd5b5400c051d92baab02902cdb781 extends Twig_Template
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
        $__internal_994365d84972c9fd2b724fa90d62d463e58e7a9f4f05d9badb8ac7e6ccbe665e = $this->env->getExtension("native_profiler");
        $__internal_994365d84972c9fd2b724fa90d62d463e58e7a9f4f05d9badb8ac7e6ccbe665e->enter($__internal_994365d84972c9fd2b724fa90d62d463e58e7a9f4f05d9badb8ac7e6ccbe665e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_994365d84972c9fd2b724fa90d62d463e58e7a9f4f05d9badb8ac7e6ccbe665e->leave($__internal_994365d84972c9fd2b724fa90d62d463e58e7a9f4f05d9badb8ac7e6ccbe665e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
