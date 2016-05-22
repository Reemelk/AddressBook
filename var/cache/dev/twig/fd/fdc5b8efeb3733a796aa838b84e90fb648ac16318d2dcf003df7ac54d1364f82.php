<?php

/* UserBundle:Contact:contactListByUser.html.twig */
class __TwigTemplate_b8c497ca1067482de828ae3f99186bb955d1676e2c5dc5ec2698daf7d78e0d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Contact:contactListByUser.html.twig", 1);
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
        $__internal_db113080c2f166d8de31bd078fd40c702d13c2f50d70c194b431e7b6b9f37ac7 = $this->env->getExtension("native_profiler");
        $__internal_db113080c2f166d8de31bd078fd40c702d13c2f50d70c194b431e7b6b9f37ac7->enter($__internal_db113080c2f166d8de31bd078fd40c702d13c2f50d70c194b431e7b6b9f37ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Contact:contactListByUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db113080c2f166d8de31bd078fd40c702d13c2f50d70c194b431e7b6b9f37ac7->leave($__internal_db113080c2f166d8de31bd078fd40c702d13c2f50d70c194b431e7b6b9f37ac7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ff6a6fc7967422dc6c6cacb4facd50b72d936d35ea21658e5a83fdc81e2c2b2 = $this->env->getExtension("native_profiler");
        $__internal_4ff6a6fc7967422dc6c6cacb4facd50b72d936d35ea21658e5a83fdc81e2c2b2->enter($__internal_4ff6a6fc7967422dc6c6cacb4facd50b72d936d35ea21658e5a83fdc81e2c2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table table-bordered\" style=\"margin-top: 10px\">
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
        
        $__internal_4ff6a6fc7967422dc6c6cacb4facd50b72d936d35ea21658e5a83fdc81e2c2b2->leave($__internal_4ff6a6fc7967422dc6c6cacb4facd50b72d936d35ea21658e5a83fdc81e2c2b2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Contact:contactListByUser.html.twig";
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
/*     <table class="table table-bordered" style="margin-top: 10px">*/
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
