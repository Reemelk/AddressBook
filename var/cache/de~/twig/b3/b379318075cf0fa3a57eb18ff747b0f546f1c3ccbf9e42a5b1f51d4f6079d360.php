<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_eba5b4b9e17fe36c0444af10d5987f18baba9f75a41a28a01fa3500e9d871b7e extends Twig_Template
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
        $__internal_773849040f488a3caf7ad13b9ab0465f217064840526e3c09c409ee1a27dac10 = $this->env->getExtension("native_profiler");
        $__internal_773849040f488a3caf7ad13b9ab0465f217064840526e3c09c409ee1a27dac10->enter($__internal_773849040f488a3caf7ad13b9ab0465f217064840526e3c09c409ee1a27dac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_773849040f488a3caf7ad13b9ab0465f217064840526e3c09c409ee1a27dac10->leave($__internal_773849040f488a3caf7ad13b9ab0465f217064840526e3c09c409ee1a27dac10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
