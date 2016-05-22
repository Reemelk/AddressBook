<?php

/* base.html.twig */
class __TwigTemplate_d1c55fb8fdddfee1380fab53a2b132f592a688d5adfafd40ecdde4f6cf4f4fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contactList' => array($this, 'block_contactList'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9146a5172dd2efa095f9118016e9e8f43061f25718d586b29ef1a2e53831652f = $this->env->getExtension("native_profiler");
        $__internal_9146a5172dd2efa095f9118016e9e8f43061f25718d586b29ef1a2e53831652f->enter($__internal_9146a5172dd2efa095f9118016e9e8f43061f25718d586b29ef1a2e53831652f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Welcome</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "</head>
<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Logo</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
            ";
        // line 57
        if ((($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 58
            echo "                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Home</a></li>
                    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>
                    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("contact_list");
            echo "\">Address Book</a></li>
                 </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Log Out</a></li>
                </ul>
            ";
        } else {
            // line 67
            echo "                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Welcome</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Sign Up</a></li>
                    <li><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Log In</a></li>
                </ul>
            ";
        }
        // line 75
        echo "        </div>
    </div>
</nav>

<div class=\"container-fluid text-center\">
    <div class=\"row content\">
        <div class=\"col-sm-2 sidenav\">

        </div>
        <div class=\"col-sm-8 text-left\">
            ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "            ";
        $this->displayBlock('contactList', $context, $blocks);
        // line 87
        echo "        </div>
        <div class=\"col-sm-2 sidenav\">

        </div>
    </div>
</div>

";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "</body>
</html>
";
        
        $__internal_9146a5172dd2efa095f9118016e9e8f43061f25718d586b29ef1a2e53831652f->leave($__internal_9146a5172dd2efa095f9118016e9e8f43061f25718d586b29ef1a2e53831652f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_256d3be62be00faf5f1e67a458e1967a87f111e8280df6fe281e3920762ba4cc = $this->env->getExtension("native_profiler");
        $__internal_256d3be62be00faf5f1e67a458e1967a87f111e8280df6fe281e3920762ba4cc->enter($__internal_256d3be62be00faf5f1e67a458e1967a87f111e8280df6fe281e3920762ba4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;}
            }
        </style>
    ";
        
        $__internal_256d3be62be00faf5f1e67a458e1967a87f111e8280df6fe281e3920762ba4cc->leave($__internal_256d3be62be00faf5f1e67a458e1967a87f111e8280df6fe281e3920762ba4cc_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6b70f84f0517b7013d556852f9ab470a647b68f9d6e5a7e329a49c08793e3c0 = $this->env->getExtension("native_profiler");
        $__internal_e6b70f84f0517b7013d556852f9ab470a647b68f9d6e5a7e329a49c08793e3c0->enter($__internal_e6b70f84f0517b7013d556852f9ab470a647b68f9d6e5a7e329a49c08793e3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6b70f84f0517b7013d556852f9ab470a647b68f9d6e5a7e329a49c08793e3c0->leave($__internal_e6b70f84f0517b7013d556852f9ab470a647b68f9d6e5a7e329a49c08793e3c0_prof);

    }

    // line 86
    public function block_contactList($context, array $blocks = array())
    {
        $__internal_4af1e6a08836df0d1949176c8c25a50322a2cd67015922b41cad6a74aa304c8a = $this->env->getExtension("native_profiler");
        $__internal_4af1e6a08836df0d1949176c8c25a50322a2cd67015922b41cad6a74aa304c8a->enter($__internal_4af1e6a08836df0d1949176c8c25a50322a2cd67015922b41cad6a74aa304c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contactList"));

        
        $__internal_4af1e6a08836df0d1949176c8c25a50322a2cd67015922b41cad6a74aa304c8a->leave($__internal_4af1e6a08836df0d1949176c8c25a50322a2cd67015922b41cad6a74aa304c8a_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be488ef2f86203ac4958fa83079f7fc0910f6f318df32157b9511cbd1dda7bf9 = $this->env->getExtension("native_profiler");
        $__internal_be488ef2f86203ac4958fa83079f7fc0910f6f318df32157b9511cbd1dda7bf9->enter($__internal_be488ef2f86203ac4958fa83079f7fc0910f6f318df32157b9511cbd1dda7bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
";
        
        $__internal_be488ef2f86203ac4958fa83079f7fc0910f6f318df32157b9511cbd1dda7bf9->leave($__internal_be488ef2f86203ac4958fa83079f7fc0910f6f318df32157b9511cbd1dda7bf9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 95,  196 => 94,  185 => 86,  174 => 85,  133 => 8,  127 => 7,  118 => 98,  116 => 94,  107 => 87,  104 => 86,  102 => 85,  90 => 75,  84 => 72,  80 => 71,  74 => 67,  68 => 64,  62 => 61,  58 => 60,  54 => 58,  52 => 57,  36 => 43,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Welcome</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <style>*/
/*             /* Remove the navbar's default margin-bottom and rounded borders *//* */
/*             .navbar {*/
/*                 margin-bottom: 0;*/
/*                 border-radius: 0;*/
/*             }*/
/* */
/*             /* Set height of the grid so .sidenav can be 100% (adjust as needed) *//* */
/*             .row.content {height: 450px}*/
/* */
/*             /* Set gray background color and 100% height *//* */
/*             .sidenav {*/
/*                 padding-top: 20px;*/
/*                 background-color: #f1f1f1;*/
/*                 height: 100%;*/
/*             }*/
/* */
/*             /* Set black background color, white text and some padding *//* */
/*             footer {*/
/*                 background-color: #555;*/
/*                 color: white;*/
/*                 padding: 15px;*/
/*             }*/
/* */
/*             /* On small screens, set height to 'auto' for sidenav and grid *//* */
/*             @media screen and (max-width: 767px) {*/
/*                 .sidenav {*/
/*                     height: auto;*/
/*                     padding: 15px;*/
/*                 }*/
/*                 .row.content {height:auto;}*/
/*             }*/
/*         </style>*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">Logo</a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse" id="myNavbar">*/
/*             {% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN') or is_granted('ROLE_SUPER_ADMIN') %}*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="#">Home</a></li>*/
/*                     <li><a href="{{ path('fos_user_profile_show') }}">Profile</a></li>*/
/*                     <li><a href="{{ path('contact_list') }}">Address Book</a></li>*/
/*                  </ul>*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="{{ path('fos_user_security_logout') }}">Log Out</a></li>*/
/*                 </ul>*/
/*             {% else %}*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="#">Welcome</a></li>*/
/*                 </ul>*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="{{ path('fos_user_registration_register') }}">Sign Up</a></li>*/
/*                     <li><a href="{{ path('fos_user_security_login') }}">Log In</a></li>*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
/* <div class="container-fluid text-center">*/
/*     <div class="row content">*/
/*         <div class="col-sm-2 sidenav">*/
/* */
/*         </div>*/
/*         <div class="col-sm-8 text-left">*/
/*             {% block body %}{% endblock %}*/
/*             {% block contactList %}{% endblock %}*/
/*         </div>*/
/*         <div class="col-sm-2 sidenav">*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
