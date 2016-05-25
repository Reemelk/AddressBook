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
        $__internal_e4b333dc49276c4af845ea0f129fa388a97bdc7e01eb503539f6cb33fddff55d = $this->env->getExtension("native_profiler");
        $__internal_e4b333dc49276c4af845ea0f129fa388a97bdc7e01eb503539f6cb33fddff55d->enter($__internal_e4b333dc49276c4af845ea0f129fa388a97bdc7e01eb503539f6cb33fddff55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Contact/contactListByUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b333dc49276c4af845ea0f129fa388a97bdc7e01eb503539f6cb33fddff55d->leave($__internal_e4b333dc49276c4af845ea0f129fa388a97bdc7e01eb503539f6cb33fddff55d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_573637b5d0474ec7eef97f2658744d262803d7752a47d55dd0f5c21cc3578e76 = $this->env->getExtension("native_profiler");
        $__internal_573637b5d0474ec7eef97f2658744d262803d7752a47d55dd0f5c21cc3578e76->enter($__internal_573637b5d0474ec7eef97f2658744d262803d7752a47d55dd0f5c21cc3578e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_573637b5d0474ec7eef97f2658744d262803d7752a47d55dd0f5c21cc3578e76->leave($__internal_573637b5d0474ec7eef97f2658744d262803d7752a47d55dd0f5c21cc3578e76_prof);

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
