<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_6d94f92959c42424cc4c6b2a166806905d7d39ffae5d33842a55b541306e7887 extends Twig_Template
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
        $__internal_b3c893124da4e511935c12a2154d5adc72a162226599fe8bb6e3c56ea6ef7fd6 = $this->env->getExtension("native_profiler");
        $__internal_b3c893124da4e511935c12a2154d5adc72a162226599fe8bb6e3c56ea6ef7fd6->enter($__internal_b3c893124da4e511935c12a2154d5adc72a162226599fe8bb6e3c56ea6ef7fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b3c893124da4e511935c12a2154d5adc72a162226599fe8bb6e3c56ea6ef7fd6->leave($__internal_b3c893124da4e511935c12a2154d5adc72a162226599fe8bb6e3c56ea6ef7fd6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2229dc4ee3920c6e0799cddccdd3174c7fb7ffdef1eec253b9052cdfcd0915a2 = $this->env->getExtension("native_profiler");
        $__internal_2229dc4ee3920c6e0799cddccdd3174c7fb7ffdef1eec253b9052cdfcd0915a2->enter($__internal_2229dc4ee3920c6e0799cddccdd3174c7fb7ffdef1eec253b9052cdfcd0915a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2229dc4ee3920c6e0799cddccdd3174c7fb7ffdef1eec253b9052cdfcd0915a2->leave($__internal_2229dc4ee3920c6e0799cddccdd3174c7fb7ffdef1eec253b9052cdfcd0915a2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_108f1fda78bb65e1d92cd3a5bb445a9ab0fd1b6fd9ee838987adcd30aa4c93bc = $this->env->getExtension("native_profiler");
        $__internal_108f1fda78bb65e1d92cd3a5bb445a9ab0fd1b6fd9ee838987adcd30aa4c93bc->enter($__internal_108f1fda78bb65e1d92cd3a5bb445a9ab0fd1b6fd9ee838987adcd30aa4c93bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_108f1fda78bb65e1d92cd3a5bb445a9ab0fd1b6fd9ee838987adcd30aa4c93bc->leave($__internal_108f1fda78bb65e1d92cd3a5bb445a9ab0fd1b6fd9ee838987adcd30aa4c93bc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c6579e5b87c049166f9b6f2ca212fedf980299b8b9dab257932bbe02b9bb8dea = $this->env->getExtension("native_profiler");
        $__internal_c6579e5b87c049166f9b6f2ca212fedf980299b8b9dab257932bbe02b9bb8dea->enter($__internal_c6579e5b87c049166f9b6f2ca212fedf980299b8b9dab257932bbe02b9bb8dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c6579e5b87c049166f9b6f2ca212fedf980299b8b9dab257932bbe02b9bb8dea->leave($__internal_c6579e5b87c049166f9b6f2ca212fedf980299b8b9dab257932bbe02b9bb8dea_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
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
