<?php

/* UserBundle:Profile:show_content.html.twig */
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
        $__internal_70a67bee2cbf4b3e161998a07c2ad10ea987c97f86eb5d052dffd958a69a976b = $this->env->getExtension("native_profiler");
        $__internal_70a67bee2cbf4b3e161998a07c2ad10ea987c97f86eb5d052dffd958a69a976b->enter($__internal_70a67bee2cbf4b3e161998a07c2ad10ea987c97f86eb5d052dffd958a69a976b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "
";
        
        $__internal_70a67bee2cbf4b3e161998a07c2ad10ea987c97f86eb5d052dffd958a69a976b->leave($__internal_70a67bee2cbf4b3e161998a07c2ad10ea987c97f86eb5d052dffd958a69a976b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6919dfae447455fe39b8fbf7e263299172c6789aa9da574c66b0e70905c47633 = $this->env->getExtension("native_profiler");
        $__internal_6919dfae447455fe39b8fbf7e263299172c6789aa9da574c66b0e70905c47633->enter($__internal_6919dfae447455fe39b8fbf7e263299172c6789aa9da574c66b0e70905c47633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"fos_user_user_show\" style=\"margin-top: 10px;text-align: center\">
            <table class=\"table table-bordered\" style=\"margin-top: 10px\">
                <thead>
                <tr>
                    <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</th>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
            <button type=\"button\" class=\"btn\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">UPDATE PROFILE</a></button>
        </div>
";
        
        $__internal_6919dfae447455fe39b8fbf7e263299172c6789aa9da574c66b0e70905c47633->leave($__internal_6919dfae447455fe39b8fbf7e263299172c6789aa9da574c66b0e70905c47633_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  64 => 15,  60 => 14,  52 => 9,  48 => 8,  42 => 4,  36 => 3,  28 => 22,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/*         <div class="fos_user_user_show" style="margin-top: 10px;text-align: center">*/
/*             <table class="table table-bordered" style="margin-top: 10px">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>{{ 'profile.show.username'|trans }}</th>*/
/*                     <td>{{ user.username }}</td>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <th>{{ 'profile.show.email'|trans }}</th>*/
/*                     <td>{{ user.email }}</td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*             <button type="button" class="btn"><a href="{{ path('fos_user_profile_edit') }}">UPDATE PROFILE</a></button>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* */
