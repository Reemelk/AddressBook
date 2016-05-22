<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_62d2248fe25df8d1a0dd30f4cc58beaf261c9df5318fcc1bfb1013473f1e0bb6 extends Twig_Template
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
        $__internal_e8d68a920559dfcce28afde36d2ea09e265c15af2331fee812298e1f5b570f61 = $this->env->getExtension("native_profiler");
        $__internal_e8d68a920559dfcce28afde36d2ea09e265c15af2331fee812298e1f5b570f61->enter($__internal_e8d68a920559dfcce28afde36d2ea09e265c15af2331fee812298e1f5b570f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "
";
        
        $__internal_e8d68a920559dfcce28afde36d2ea09e265c15af2331fee812298e1f5b570f61->leave($__internal_e8d68a920559dfcce28afde36d2ea09e265c15af2331fee812298e1f5b570f61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48eefecd772d91afb4ca97ac77d2e8e13d1d67943a5a46b18566f14a51499e75 = $this->env->getExtension("native_profiler");
        $__internal_48eefecd772d91afb4ca97ac77d2e8e13d1d67943a5a46b18566f14a51499e75->enter($__internal_48eefecd772d91afb4ca97ac77d2e8e13d1d67943a5a46b18566f14a51499e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48eefecd772d91afb4ca97ac77d2e8e13d1d67943a5a46b18566f14a51499e75->leave($__internal_48eefecd772d91afb4ca97ac77d2e8e13d1d67943a5a46b18566f14a51499e75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
