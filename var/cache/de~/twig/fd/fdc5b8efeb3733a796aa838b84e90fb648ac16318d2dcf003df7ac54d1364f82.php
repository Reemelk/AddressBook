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
        $__internal_50a2e226861546c39080375e3e2741de13a920bd8294fb1e715b360a8ab6e7b2 = $this->env->getExtension("native_profiler");
        $__internal_50a2e226861546c39080375e3e2741de13a920bd8294fb1e715b360a8ab6e7b2->enter($__internal_50a2e226861546c39080375e3e2741de13a920bd8294fb1e715b360a8ab6e7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Contact:contactListByUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a2e226861546c39080375e3e2741de13a920bd8294fb1e715b360a8ab6e7b2->leave($__internal_50a2e226861546c39080375e3e2741de13a920bd8294fb1e715b360a8ab6e7b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9040fec3492b9d4d7edf87a9139ed3f60b2caaa228ad624cf7a76063aff472b2 = $this->env->getExtension("native_profiler");
        $__internal_9040fec3492b9d4d7edf87a9139ed3f60b2caaa228ad624cf7a76063aff472b2->enter($__internal_9040fec3492b9d4d7edf87a9139ed3f60b2caaa228ad624cf7a76063aff472b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9040fec3492b9d4d7edf87a9139ed3f60b2caaa228ad624cf7a76063aff472b2->leave($__internal_9040fec3492b9d4d7edf87a9139ed3f60b2caaa228ad624cf7a76063aff472b2_prof);

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
