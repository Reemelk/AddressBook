<?php

/* UserBundle:Contact:contactList.html.twig */
class __TwigTemplate_e9dbdb2387a5181ee5de9ebd1bdaa2c3d3fc470e676f79726aade6ebf1cebd2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Contact:contactList.html.twig", 1);
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
        $__internal_56b7a78c70cd20a8da14162bffb2545b46b69c2d9d5fe6e26165d60995f2d784 = $this->env->getExtension("native_profiler");
        $__internal_56b7a78c70cd20a8da14162bffb2545b46b69c2d9d5fe6e26165d60995f2d784->enter($__internal_56b7a78c70cd20a8da14162bffb2545b46b69c2d9d5fe6e26165d60995f2d784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Contact:contactList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b7a78c70cd20a8da14162bffb2545b46b69c2d9d5fe6e26165d60995f2d784->leave($__internal_56b7a78c70cd20a8da14162bffb2545b46b69c2d9d5fe6e26165d60995f2d784_prof);

    }

    // line 3
    public function block_contactList($context, array $blocks = array())
    {
        $__internal_f49e05669c818fe97bfaff0068402236854c4d3c658065fccb451006b1481a73 = $this->env->getExtension("native_profiler");
        $__internal_f49e05669c818fe97bfaff0068402236854c4d3c658065fccb451006b1481a73->enter($__internal_f49e05669c818fe97bfaff0068402236854c4d3c658065fccb451006b1481a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contactList"));

        // line 4
        echo "    <div class=\"col-md-12\">
        <ul class=\"list-group\" style=\"margin-top: 10px\">
            <li class=\"list-group-item list-group-item-success\"><p class=\"text-center\">YOUR CONTACT LIST</p></li>
            ";
        // line 7
        if ((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas"))) {
            // line 8
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) ? $context["datas"] : $this->getContext($context, "datas")));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 9
                echo "                    <li class=\"list-group-item\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_info", array("id" => $this->getAttribute($context["data"], "id", array()))), "html", null, true);
                echo "\"><p class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "contact", array()), "html", null, true);
                echo "</p></a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            ";
        } else {
            // line 12
            echo "                <div class=\"alert alert-info\" role=\"alert\" style=\"margin-top: 10px\"><p class=\"text-center\">You don't have any contact</p></div>
            ";
        }
        // line 14
        echo "        </ul>
        <button type=\"button\" class=\"center-block btn\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("new_contact");
        echo "\">ADD A NEW CONTACT</a></button>
    </div>
";
        
        $__internal_f49e05669c818fe97bfaff0068402236854c4d3c658065fccb451006b1481a73->leave($__internal_f49e05669c818fe97bfaff0068402236854c4d3c658065fccb451006b1481a73_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Contact:contactList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  70 => 14,  66 => 12,  63 => 11,  52 => 9,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block contactList %}*/
/*     <div class="col-md-12">*/
/*         <ul class="list-group" style="margin-top: 10px">*/
/*             <li class="list-group-item list-group-item-success"><p class="text-center">YOUR CONTACT LIST</p></li>*/
/*             {% if datas %}*/
/*                 {% for data in datas %}*/
/*                     <li class="list-group-item"><a href="{{ path('show_info', { 'id': data.id }) }}"><p class="text-center">{{ data.contact }}</p></a></li>*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 <div class="alert alert-info" role="alert" style="margin-top: 10px"><p class="text-center">You don't have any contact</p></div>*/
/*             {% endif %}*/
/*         </ul>*/
/*         <button type="button" class="center-block btn"><a href="{{ path('new_contact') }}">ADD A NEW CONTACT</a></button>*/
/*     </div>*/
/* {% endblock %}*/
