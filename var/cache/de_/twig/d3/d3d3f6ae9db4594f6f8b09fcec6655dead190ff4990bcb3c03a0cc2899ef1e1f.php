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
        $__internal_65078debeb5cc49690a46c6e59b6b8bd3a7d11c95a0fba2448795db28b4680fc = $this->env->getExtension("native_profiler");
        $__internal_65078debeb5cc49690a46c6e59b6b8bd3a7d11c95a0fba2448795db28b4680fc->enter($__internal_65078debeb5cc49690a46c6e59b6b8bd3a7d11c95a0fba2448795db28b4680fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_65078debeb5cc49690a46c6e59b6b8bd3a7d11c95a0fba2448795db28b4680fc->leave($__internal_65078debeb5cc49690a46c6e59b6b8bd3a7d11c95a0fba2448795db28b4680fc_prof);

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
