<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5950878d3f5c5839c337b858c63b385afca4aa1b525f500bbe7c5f9c540a48b9 extends Twig_Template
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
        $__internal_ac1802b11b75a60074f90e09ec4c283adc97be3e7e94a27220133f8281130687 = $this->env->getExtension("native_profiler");
        $__internal_ac1802b11b75a60074f90e09ec4c283adc97be3e7e94a27220133f8281130687->enter($__internal_ac1802b11b75a60074f90e09ec4c283adc97be3e7e94a27220133f8281130687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ac1802b11b75a60074f90e09ec4c283adc97be3e7e94a27220133f8281130687->leave($__internal_ac1802b11b75a60074f90e09ec4c283adc97be3e7e94a27220133f8281130687_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
