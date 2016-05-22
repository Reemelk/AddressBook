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
        $__internal_6264f4f71098fca3bdd060d6b85a35c010f4287123afbb7b52e63d3bfc7230ff = $this->env->getExtension("native_profiler");
        $__internal_6264f4f71098fca3bdd060d6b85a35c010f4287123afbb7b52e63d3bfc7230ff->enter($__internal_6264f4f71098fca3bdd060d6b85a35c010f4287123afbb7b52e63d3bfc7230ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

<footer class=\"container-fluid text-center\">
    <p>Footer Text</p>
</footer>
";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "</body>
</html>
";
        
        $__internal_6264f4f71098fca3bdd060d6b85a35c010f4287123afbb7b52e63d3bfc7230ff->leave($__internal_6264f4f71098fca3bdd060d6b85a35c010f4287123afbb7b52e63d3bfc7230ff_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36f979c33c13349a557d73c2364feb068c5fed784eb1749c94be3725972b03db = $this->env->getExtension("native_profiler");
        $__internal_36f979c33c13349a557d73c2364feb068c5fed784eb1749c94be3725972b03db->enter($__internal_36f979c33c13349a557d73c2364feb068c5fed784eb1749c94be3725972b03db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_36f979c33c13349a557d73c2364feb068c5fed784eb1749c94be3725972b03db->leave($__internal_36f979c33c13349a557d73c2364feb068c5fed784eb1749c94be3725972b03db_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78843bd0dd2ba85a4279d93b9fe24bb373c8d3ee80e658d036f5d24f1faa3bc = $this->env->getExtension("native_profiler");
        $__internal_b78843bd0dd2ba85a4279d93b9fe24bb373c8d3ee80e658d036f5d24f1faa3bc->enter($__internal_b78843bd0dd2ba85a4279d93b9fe24bb373c8d3ee80e658d036f5d24f1faa3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b78843bd0dd2ba85a4279d93b9fe24bb373c8d3ee80e658d036f5d24f1faa3bc->leave($__internal_b78843bd0dd2ba85a4279d93b9fe24bb373c8d3ee80e658d036f5d24f1faa3bc_prof);

    }

    // line 86
    public function block_contactList($context, array $blocks = array())
    {
        $__internal_a136b5e17ebf466f26d3e481d1b033414d86dbfa7b98b6c088834476d845feb5 = $this->env->getExtension("native_profiler");
        $__internal_a136b5e17ebf466f26d3e481d1b033414d86dbfa7b98b6c088834476d845feb5->enter($__internal_a136b5e17ebf466f26d3e481d1b033414d86dbfa7b98b6c088834476d845feb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contactList"));

        
        $__internal_a136b5e17ebf466f26d3e481d1b033414d86dbfa7b98b6c088834476d845feb5->leave($__internal_a136b5e17ebf466f26d3e481d1b033414d86dbfa7b98b6c088834476d845feb5_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea005a5bea6a8ce13f42af26c9d3ad637e3842504e6a239ca80692ba2edc1e1f = $this->env->getExtension("native_profiler");
        $__internal_ea005a5bea6a8ce13f42af26c9d3ad637e3842504e6a239ca80692ba2edc1e1f->enter($__internal_ea005a5bea6a8ce13f42af26c9d3ad637e3842504e6a239ca80692ba2edc1e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
";
        
        $__internal_ea005a5bea6a8ce13f42af26c9d3ad637e3842504e6a239ca80692ba2edc1e1f->leave($__internal_ea005a5bea6a8ce13f42af26c9d3ad637e3842504e6a239ca80692ba2edc1e1f_prof);

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
        return array (  205 => 98,  199 => 97,  188 => 86,  177 => 85,  136 => 8,  130 => 7,  121 => 101,  119 => 97,  107 => 87,  104 => 86,  102 => 85,  90 => 75,  84 => 72,  80 => 71,  74 => 67,  68 => 64,  62 => 61,  58 => 60,  54 => 58,  52 => 57,  36 => 43,  34 => 7,  26 => 1,);
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
/* <footer class="container-fluid text-center">*/
/*     <p>Footer Text</p>*/
/* </footer>*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
