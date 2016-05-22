<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1201c42719d2fe7ab811a5543ff21fc02ce4bfd0cdb1161cd7a5e168999204e2 extends Twig_Template
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
        $__internal_9b38ea4900ab472c0e19d607846c823982159fae1b15bc1f48cd0615d5b0dbf6 = $this->env->getExtension("native_profiler");
        $__internal_9b38ea4900ab472c0e19d607846c823982159fae1b15bc1f48cd0615d5b0dbf6->enter($__internal_9b38ea4900ab472c0e19d607846c823982159fae1b15bc1f48cd0615d5b0dbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9b38ea4900ab472c0e19d607846c823982159fae1b15bc1f48cd0615d5b0dbf6->leave($__internal_9b38ea4900ab472c0e19d607846c823982159fae1b15bc1f48cd0615d5b0dbf6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e08f9c283205aae8f21a8548fe151cd1ac1b4f3bbdb388276c7f8e2282d439bf = $this->env->getExtension("native_profiler");
        $__internal_e08f9c283205aae8f21a8548fe151cd1ac1b4f3bbdb388276c7f8e2282d439bf->enter($__internal_e08f9c283205aae8f21a8548fe151cd1ac1b4f3bbdb388276c7f8e2282d439bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e08f9c283205aae8f21a8548fe151cd1ac1b4f3bbdb388276c7f8e2282d439bf->leave($__internal_e08f9c283205aae8f21a8548fe151cd1ac1b4f3bbdb388276c7f8e2282d439bf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0140a247524c75c5ae9d6c789f4e95ad4985f4381a1119871a95f125f7a35b8c = $this->env->getExtension("native_profiler");
        $__internal_0140a247524c75c5ae9d6c789f4e95ad4985f4381a1119871a95f125f7a35b8c->enter($__internal_0140a247524c75c5ae9d6c789f4e95ad4985f4381a1119871a95f125f7a35b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0140a247524c75c5ae9d6c789f4e95ad4985f4381a1119871a95f125f7a35b8c->leave($__internal_0140a247524c75c5ae9d6c789f4e95ad4985f4381a1119871a95f125f7a35b8c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e65b6b1ccb8f17e570d43a38a4b1374dd7f450eda0fc2eca6e1d4e5c8947081e = $this->env->getExtension("native_profiler");
        $__internal_e65b6b1ccb8f17e570d43a38a4b1374dd7f450eda0fc2eca6e1d4e5c8947081e->enter($__internal_e65b6b1ccb8f17e570d43a38a4b1374dd7f450eda0fc2eca6e1d4e5c8947081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e65b6b1ccb8f17e570d43a38a4b1374dd7f450eda0fc2eca6e1d4e5c8947081e->leave($__internal_e65b6b1ccb8f17e570d43a38a4b1374dd7f450eda0fc2eca6e1d4e5c8947081e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
