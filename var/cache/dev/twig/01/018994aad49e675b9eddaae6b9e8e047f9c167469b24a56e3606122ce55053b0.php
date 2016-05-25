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
        $__internal_78ca2af41e57eecd8f38732b51398a41c798df22870f383c9b8118dc563bf62b = $this->env->getExtension("native_profiler");
        $__internal_78ca2af41e57eecd8f38732b51398a41c798df22870f383c9b8118dc563bf62b->enter($__internal_78ca2af41e57eecd8f38732b51398a41c798df22870f383c9b8118dc563bf62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 36
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
        // line 50
        if ((($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 51
            echo "                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>
                    <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("contact_list");
            echo "\">Address Book</a></li>
                 </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Log Out</a></li>
                </ul>
            ";
        } else {
            // line 60
            echo "                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\">Welcome</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Sign Up</a></li>
                    <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Log In</a></li>
                </ul>
            ";
        }
        // line 68
        echo "        </div>
    </div>
</nav>

<div class=\"container-fluid text-center\">
    <div class=\"row content\">
        <div class=\"col-sm-2 sidenav\">

        </div>
        <div class=\"col-sm-8 text-left\">
            ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "            ";
        $this->displayBlock('contactList', $context, $blocks);
        // line 80
        echo "        </div>
        <div class=\"col-sm-2 sidenav\">

        </div>
    </div>
</div>

";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "</body>
</html>
";
        
        $__internal_78ca2af41e57eecd8f38732b51398a41c798df22870f383c9b8118dc563bf62b->leave($__internal_78ca2af41e57eecd8f38732b51398a41c798df22870f383c9b8118dc563bf62b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d23af0f6aa35f1709b15380dbf1ec451dc61a4d1e1cd8c89f90ad2be774a961c = $this->env->getExtension("native_profiler");
        $__internal_d23af0f6aa35f1709b15380dbf1ec451dc61a4d1e1cd8c89f90ad2be774a961c->enter($__internal_d23af0f6aa35f1709b15380dbf1ec451dc61a4d1e1cd8c89f90ad2be774a961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 1000px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
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
        
        $__internal_d23af0f6aa35f1709b15380dbf1ec451dc61a4d1e1cd8c89f90ad2be774a961c->leave($__internal_d23af0f6aa35f1709b15380dbf1ec451dc61a4d1e1cd8c89f90ad2be774a961c_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_0edb095ad1550771b2c7fc2e766c1f9dbd4160fc1bdbc5afacc5ae58c6e1cef2 = $this->env->getExtension("native_profiler");
        $__internal_0edb095ad1550771b2c7fc2e766c1f9dbd4160fc1bdbc5afacc5ae58c6e1cef2->enter($__internal_0edb095ad1550771b2c7fc2e766c1f9dbd4160fc1bdbc5afacc5ae58c6e1cef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0edb095ad1550771b2c7fc2e766c1f9dbd4160fc1bdbc5afacc5ae58c6e1cef2->leave($__internal_0edb095ad1550771b2c7fc2e766c1f9dbd4160fc1bdbc5afacc5ae58c6e1cef2_prof);

    }

    // line 79
    public function block_contactList($context, array $blocks = array())
    {
        $__internal_89755fac5714034ec026d601af5c804ff40cd19ec67d1fa6cbf264d6bf761ca7 = $this->env->getExtension("native_profiler");
        $__internal_89755fac5714034ec026d601af5c804ff40cd19ec67d1fa6cbf264d6bf761ca7->enter($__internal_89755fac5714034ec026d601af5c804ff40cd19ec67d1fa6cbf264d6bf761ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contactList"));

        
        $__internal_89755fac5714034ec026d601af5c804ff40cd19ec67d1fa6cbf264d6bf761ca7->leave($__internal_89755fac5714034ec026d601af5c804ff40cd19ec67d1fa6cbf264d6bf761ca7_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b7643f787001fc2b8a3a820acb40ea84952383867dcc8ff3e7d05cbd33b4b7e = $this->env->getExtension("native_profiler");
        $__internal_5b7643f787001fc2b8a3a820acb40ea84952383867dcc8ff3e7d05cbd33b4b7e->enter($__internal_5b7643f787001fc2b8a3a820acb40ea84952383867dcc8ff3e7d05cbd33b4b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
";
        
        $__internal_5b7643f787001fc2b8a3a820acb40ea84952383867dcc8ff3e7d05cbd33b4b7e->leave($__internal_5b7643f787001fc2b8a3a820acb40ea84952383867dcc8ff3e7d05cbd33b4b7e_prof);

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
        return array (  195 => 88,  189 => 87,  178 => 79,  167 => 78,  133 => 8,  127 => 7,  118 => 91,  116 => 87,  107 => 80,  104 => 79,  102 => 78,  90 => 68,  84 => 65,  80 => 64,  74 => 60,  68 => 57,  62 => 54,  58 => 53,  54 => 51,  52 => 50,  36 => 36,  34 => 7,  26 => 1,);
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
/*             .row.content {height: 1000px}*/
/* */
/*             /* Set gray background color and 100% height *//* */
/*             .sidenav {*/
/*                 padding-top: 20px;*/
/*                 background-color: #f1f1f1;*/
/*                 height: 100%;*/
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
/*                     <li><a href="#">Home</a></li>*/
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
