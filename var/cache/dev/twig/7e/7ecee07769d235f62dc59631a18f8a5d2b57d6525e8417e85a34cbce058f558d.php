<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e7a64e471414b25cc6e578058d976568b1a270f461ca69544ef0b50f9973a56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f33bafbb3a7c816f632c799aaddad280d70e549c7620bb9a5e73f23c4e83e42 = $this->env->getExtension("native_profiler");
        $__internal_0f33bafbb3a7c816f632c799aaddad280d70e549c7620bb9a5e73f23c4e83e42->enter($__internal_0f33bafbb3a7c816f632c799aaddad280d70e549c7620bb9a5e73f23c4e83e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0f33bafbb3a7c816f632c799aaddad280d70e549c7620bb9a5e73f23c4e83e42->leave($__internal_0f33bafbb3a7c816f632c799aaddad280d70e549c7620bb9a5e73f23c4e83e42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
