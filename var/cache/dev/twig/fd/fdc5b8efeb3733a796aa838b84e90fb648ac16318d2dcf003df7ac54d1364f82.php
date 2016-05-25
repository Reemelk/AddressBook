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
        $__internal_29f70c009768ae37cda86aea0fec97f1f42d235ff248896bd7caa42fa9c4faac = $this->env->getExtension("native_profiler");
        $__internal_29f70c009768ae37cda86aea0fec97f1f42d235ff248896bd7caa42fa9c4faac->enter($__internal_29f70c009768ae37cda86aea0fec97f1f42d235ff248896bd7caa42fa9c4faac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Contact:contactListByUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29f70c009768ae37cda86aea0fec97f1f42d235ff248896bd7caa42fa9c4faac->leave($__internal_29f70c009768ae37cda86aea0fec97f1f42d235ff248896bd7caa42fa9c4faac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c36e61466e8c35465db494325d31b5b94b3260a6800430e197cf6a4237a8bf38 = $this->env->getExtension("native_profiler");
        $__internal_c36e61466e8c35465db494325d31b5b94b3260a6800430e197cf6a4237a8bf38->enter($__internal_c36e61466e8c35465db494325d31b5b94b3260a6800430e197cf6a4237a8bf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userdatas"]) ? $context["userdatas"] : $this->getContext($context, "userdatas")));
        foreach ($context['_seq'] as $context["_key"] => $context["userdata"]) {
            // line 27
            echo "        <button type=\"button\" class=\"center-block btn\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_removed", array("id" => $this->getAttribute($context["userdata"], "id", array()))), "html", null, true);
            echo "\">DELETE THIS CONTACT</a></button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userdata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c36e61466e8c35465db494325d31b5b94b3260a6800430e197cf6a4237a8bf38->leave($__internal_c36e61466e8c35465db494325d31b5b94b3260a6800430e197cf6a4237a8bf38_prof);

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
        return array (  92 => 27,  88 => 26,  83 => 23,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
/*     {% for userdata in userdatas %}*/
/*         <button type="button" class="center-block btn"><a href="{{ path('contact_removed', {'id': userdata.id}) }}">DELETE THIS CONTACT</a></button>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
