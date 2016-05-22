<?php

/* @User/Contact/contactList.html.twig */
class __TwigTemplate_86b65732da8cdc193bfcc24b1949c4cf2b241a2d7d91b5f3b8b0e08b6b198e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/Contact/contactList.html.twig", 1);
        $this->blocks = array(
            'contactList' => array($this, 'block_contactList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82c7bc71c42de4129978e1d22dd3c49b840446e6f0d66695bacec609295e2db8 = $this->env->getExtension("native_profiler");
        $__internal_82c7bc71c42de4129978e1d22dd3c49b840446e6f0d66695bacec609295e2db8->enter($__internal_82c7bc71c42de4129978e1d22dd3c49b840446e6f0d66695bacec609295e2db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Contact/contactList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c7bc71c42de4129978e1d22dd3c49b840446e6f0d66695bacec609295e2db8->leave($__internal_82c7bc71c42de4129978e1d22dd3c49b840446e6f0d66695bacec609295e2db8_prof);

    }

    // line 3
    public function block_contactList($context, array $blocks = array())
    {
        $__internal_5f5bd11dd2d6bb6d0dee4477cd704ab0349d9ed577f2899109f1e34d72345034 = $this->env->getExtension("native_profiler");
        $__internal_5f5bd11dd2d6bb6d0dee4477cd704ab0349d9ed577f2899109f1e34d72345034->enter($__internal_5f5bd11dd2d6bb6d0dee4477cd704ab0349d9ed577f2899109f1e34d72345034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contactList"));

        // line 4
        echo "    <div class=\"col-md-10\">
        <ul class=\"list-group\" style=\"margin-top: 10px\">
            <li class=\"list-group-item list-group-item-success\"><p class=\"text-center\">YOUR CONTACT LIST</p></li>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 8
            echo "                <li class=\"list-group-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_info", array("id" => $this->getAttribute($context["data"], "id", array()))), "html", null, true);
            echo "\"><p class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "contact", array()), "html", null, true);
            echo "</p></a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ul>
        <button type=\"button\" class=\"center-block btn\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("new_contact");
        echo "\">ADD A NEW CONTACT</a></button>
    </div>
";
        
        $__internal_5f5bd11dd2d6bb6d0dee4477cd704ab0349d9ed577f2899109f1e34d72345034->leave($__internal_5f5bd11dd2d6bb6d0dee4477cd704ab0349d9ed577f2899109f1e34d72345034_prof);

    }

    public function getTemplateName()
    {
        return "@User/Contact/contactList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  60 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block contactList %}*/
/*     <div class="col-md-10">*/
/*         <ul class="list-group" style="margin-top: 10px">*/
/*             <li class="list-group-item list-group-item-success"><p class="text-center">YOUR CONTACT LIST</p></li>*/
/*             {% for data in datas %}*/
/*                 <li class="list-group-item"><a href="{{ path('show_info', { 'id': data.id }) }}"><p class="text-center">{{ data.contact }}</p></a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         <button type="button" class="center-block btn"><a href="{{ path('new_contact') }}">ADD A NEW CONTACT</a></button>*/
/*     </div>*/
/* {% endblock %}*/
