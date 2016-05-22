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
        $__internal_dd3fb5bea03af573189d1d237d5ebf3fd0c49433b4c5fa389db99b8a8736e53c = $this->env->getExtension("native_profiler");
        $__internal_dd3fb5bea03af573189d1d237d5ebf3fd0c49433b4c5fa389db99b8a8736e53c->enter($__internal_dd3fb5bea03af573189d1d237d5ebf3fd0c49433b4c5fa389db99b8a8736e53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Contact/contactListByUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd3fb5bea03af573189d1d237d5ebf3fd0c49433b4c5fa389db99b8a8736e53c->leave($__internal_dd3fb5bea03af573189d1d237d5ebf3fd0c49433b4c5fa389db99b8a8736e53c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f09db7014e82d2ec56ad5ad7a997a0eef9e47b33979fa639cba0834636424481 = $this->env->getExtension("native_profiler");
        $__internal_f09db7014e82d2ec56ad5ad7a997a0eef9e47b33979fa639cba0834636424481->enter($__internal_f09db7014e82d2ec56ad5ad7a997a0eef9e47b33979fa639cba0834636424481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f09db7014e82d2ec56ad5ad7a997a0eef9e47b33979fa639cba0834636424481->leave($__internal_f09db7014e82d2ec56ad5ad7a997a0eef9e47b33979fa639cba0834636424481_prof);

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
