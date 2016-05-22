<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1134d102ca6984884a874d519cc23a11b9a8ab074b05779a9a5e7deccd38b54f extends Twig_Template
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
        $__internal_8a9a195cdc53f3eac33b49e67a242ea473716504f9ed36fa9db96e648eef3940 = $this->env->getExtension("native_profiler");
        $__internal_8a9a195cdc53f3eac33b49e67a242ea473716504f9ed36fa9db96e648eef3940->enter($__internal_8a9a195cdc53f3eac33b49e67a242ea473716504f9ed36fa9db96e648eef3940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8a9a195cdc53f3eac33b49e67a242ea473716504f9ed36fa9db96e648eef3940->leave($__internal_8a9a195cdc53f3eac33b49e67a242ea473716504f9ed36fa9db96e648eef3940_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
