<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cac28e586664196118aa73f4d6c31302000c3d5f9401335dced22804e0aec01c extends Twig_Template
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
        $__internal_4b851c6a54d99f32732c8e0ad816761852408eaf220435b6b926efd44ff01477 = $this->env->getExtension("native_profiler");
        $__internal_4b851c6a54d99f32732c8e0ad816761852408eaf220435b6b926efd44ff01477->enter($__internal_4b851c6a54d99f32732c8e0ad816761852408eaf220435b6b926efd44ff01477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4b851c6a54d99f32732c8e0ad816761852408eaf220435b6b926efd44ff01477->leave($__internal_4b851c6a54d99f32732c8e0ad816761852408eaf220435b6b926efd44ff01477_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
