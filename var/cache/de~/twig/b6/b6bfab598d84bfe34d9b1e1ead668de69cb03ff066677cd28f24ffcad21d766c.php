<?php

/* @User/Registration/email.txt.twig */
class __TwigTemplate_90c5a7ca81cbde7720c93d91282c7e6407ca266a62907e1a4ded00b727510fba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e22641596ecef1a939eeab1fbe9e92afc7654a9a3c6148b7338354891128d885 = $this->env->getExtension("native_profiler");
        $__internal_e22641596ecef1a939eeab1fbe9e92afc7654a9a3c6148b7338354891128d885->enter($__internal_e22641596ecef1a939eeab1fbe9e92afc7654a9a3c6148b7338354891128d885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e22641596ecef1a939eeab1fbe9e92afc7654a9a3c6148b7338354891128d885->leave($__internal_e22641596ecef1a939eeab1fbe9e92afc7654a9a3c6148b7338354891128d885_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cb8bfca37a16f0a62db19db20d97878b40fa2bb68a0f1dca39f6e84b6e313775 = $this->env->getExtension("native_profiler");
        $__internal_cb8bfca37a16f0a62db19db20d97878b40fa2bb68a0f1dca39f6e84b6e313775->enter($__internal_cb8bfca37a16f0a62db19db20d97878b40fa2bb68a0f1dca39f6e84b6e313775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cb8bfca37a16f0a62db19db20d97878b40fa2bb68a0f1dca39f6e84b6e313775->leave($__internal_cb8bfca37a16f0a62db19db20d97878b40fa2bb68a0f1dca39f6e84b6e313775_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bed03ef57c9d5b91aaecc8e41e5c1edeb0325620c37ea415ca23708728b09e46 = $this->env->getExtension("native_profiler");
        $__internal_bed03ef57c9d5b91aaecc8e41e5c1edeb0325620c37ea415ca23708728b09e46->enter($__internal_bed03ef57c9d5b91aaecc8e41e5c1edeb0325620c37ea415ca23708728b09e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bed03ef57c9d5b91aaecc8e41e5c1edeb0325620c37ea415ca23708728b09e46->leave($__internal_bed03ef57c9d5b91aaecc8e41e5c1edeb0325620c37ea415ca23708728b09e46_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_73fd8014746cbba35c2fe116ff13a0a1aaed7f4b1f79af693d07f9451ff1b76f = $this->env->getExtension("native_profiler");
        $__internal_73fd8014746cbba35c2fe116ff13a0a1aaed7f4b1f79af693d07f9451ff1b76f->enter($__internal_73fd8014746cbba35c2fe116ff13a0a1aaed7f4b1f79af693d07f9451ff1b76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_73fd8014746cbba35c2fe116ff13a0a1aaed7f4b1f79af693d07f9451ff1b76f->leave($__internal_73fd8014746cbba35c2fe116ff13a0a1aaed7f4b1f79af693d07f9451ff1b76f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
