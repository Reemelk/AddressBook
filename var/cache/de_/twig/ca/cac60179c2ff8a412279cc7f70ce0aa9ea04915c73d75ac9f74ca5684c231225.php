<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a1bad5c126272404a7be44732b5f991a3d52912c7eda3427855e2e0999bee5c8 extends Twig_Template
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
        $__internal_c78b1d383324b3db6b9fcd4da8597ce973791140332cf6ff9ba3a92ffd483e88 = $this->env->getExtension("native_profiler");
        $__internal_c78b1d383324b3db6b9fcd4da8597ce973791140332cf6ff9ba3a92ffd483e88->enter($__internal_c78b1d383324b3db6b9fcd4da8597ce973791140332cf6ff9ba3a92ffd483e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c78b1d383324b3db6b9fcd4da8597ce973791140332cf6ff9ba3a92ffd483e88->leave($__internal_c78b1d383324b3db6b9fcd4da8597ce973791140332cf6ff9ba3a92ffd483e88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
