<?php

/* @User/Contact/contactListByUser.html.twig */
class __TwigTemplate_b58342a7bdc0bb796c65f1868137d9220f89d66e913f6d6f93c717c2282143e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/Contact/contactListByUser.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b0a40fdb2f58c7a8b68463b5c52ef90586e2216f3fc9f5212ecbe9ad6822e7f = $this->env->getExtension("native_profiler");
        $__internal_7b0a40fdb2f58c7a8b68463b5c52ef90586e2216f3fc9f5212ecbe9ad6822e7f->enter($__internal_7b0a40fdb2f58c7a8b68463b5c52ef90586e2216f3fc9f5212ecbe9ad6822e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Contact/contactListByUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b0a40fdb2f58c7a8b68463b5c52ef90586e2216f3fc9f5212ecbe9ad6822e7f->leave($__internal_7b0a40fdb2f58c7a8b68463b5c52ef90586e2216f3fc9f5212ecbe9ad6822e7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c900f0dff984d84fd9e9118fc118b8f427c9235cd975a53b1e601ce50f9b4a4e = $this->env->getExtension("native_profiler");
        $__internal_c900f0dff984d84fd9e9118fc118b8f427c9235cd975a53b1e601ce50f9b4a4e->enter($__internal_c900f0dff984d84fd9e9118fc118b8f427c9235cd975a53b1e601ce50f9b4a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Website</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userdatas"]) ? $context["userdatas"] : $this->getContext($context, "userdatas")));
        foreach ($context['_seq'] as $context["_key"] => $context["userdata"]) {
            // line 17
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["userdata"], "contact", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["userdata"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["userdata"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["userdata"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["userdata"], "website", array()), "html", null, true);
            echo "</td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userdata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tr>
        </tbody>
    </table>
";
        
        $__internal_c900f0dff984d84fd9e9118fc118b8f427c9235cd975a53b1e601ce50f9b4a4e->leave($__internal_c900f0dff984d84fd9e9118fc118b8f427c9235cd975a53b1e601ce50f9b4a4e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Contact/contactListByUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <table class="table table-bordered">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Contact</th>*/
/*             <th>Email</th>*/
/*             <th>Address</th>*/
/*             <th>Telephone</th>*/
/*             <th>Website</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         <tr>*/
/*             {% for userdata in userdatas %}*/
/*                 <td>{{ userdata.contact }}</td>*/
/*                 <td>{{ userdata.email }}</td>*/
/*                 <td>{{ userdata.address }}</td>*/
/*                 <td>{{ userdata.telephone }}</td>*/
/*                 <td>{{ userdata.website }}</td>*/
/*             {% endfor %}*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
