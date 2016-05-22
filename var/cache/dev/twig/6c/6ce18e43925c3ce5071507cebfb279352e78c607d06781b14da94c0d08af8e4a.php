<?php

/* @User/Profile/show_content.html.twig */
class __TwigTemplate_d47fbbfad640d2b411b72a8195a40aaf431db302c8aa53255c18b903a2ea202f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_215bfa29e158df36af75f3e7c60ef3e19eb1451b0990e7448d61ca35e2682754 = $this->env->getExtension("native_profiler");
        $__internal_215bfa29e158df36af75f3e7c60ef3e19eb1451b0990e7448d61ca35e2682754->enter($__internal_215bfa29e158df36af75f3e7c60ef3e19eb1451b0990e7448d61ca35e2682754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_215bfa29e158df36af75f3e7c60ef3e19eb1451b0990e7448d61ca35e2682754->leave($__internal_215bfa29e158df36af75f3e7c60ef3e19eb1451b0990e7448d61ca35e2682754_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd6416c308e87764130d2f1804c7f9e90eac2dbe87d5780df7bbd95dcb91352 = $this->env->getExtension("native_profiler");
        $__internal_2fd6416c308e87764130d2f1804c7f9e90eac2dbe87d5780df7bbd95dcb91352->enter($__internal_2fd6416c308e87764130d2f1804c7f9e90eac2dbe87d5780df7bbd95dcb91352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"fos_user_user_show\" style=\"margin-top: 10px;text-align: center\">
            <div class=\"col-md-8\">
                <table class=\"table table-bordered\" style=\"margin-top: 10px\">
                    <thead>
                    <tr>
                        <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                        <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                        <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                    </tr>
                    </tbody>
                </table>
                <button type=\"button\" class=\"btn\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">UPDATE PROFILE</a></button>
            </div>
        </div>
";
        
        $__internal_2fd6416c308e87764130d2f1804c7f9e90eac2dbe87d5780df7bbd95dcb91352->leave($__internal_2fd6416c308e87764130d2f1804c7f9e90eac2dbe87d5780df7bbd95dcb91352_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  65 => 16,  61 => 15,  53 => 10,  49 => 9,  42 => 4,  36 => 3,  28 => 24,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/*         <div class="fos_user_user_show" style="margin-top: 10px;text-align: center">*/
/*             <div class="col-md-8">*/
/*                 <table class="table table-bordered" style="margin-top: 10px">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>{{ 'profile.show.username'|trans }}</th>*/
/*                         <td>{{ user.username }}</td>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <th>{{ 'profile.show.email'|trans }}</th>*/
/*                         <td>{{ user.email }}</td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <button type="button" class="btn"><a href="{{ path('fos_user_profile_edit') }}">UPDATE PROFILE</a></button>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* */
