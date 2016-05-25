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
        $__internal_843d5df32420aa2773f0273853bc86f097ed36f4a0f4e96f9914ce630c548730 = $this->env->getExtension("native_profiler");
        $__internal_843d5df32420aa2773f0273853bc86f097ed36f4a0f4e96f9914ce630c548730->enter($__internal_843d5df32420aa2773f0273853bc86f097ed36f4a0f4e96f9914ce630c548730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_843d5df32420aa2773f0273853bc86f097ed36f4a0f4e96f9914ce630c548730->leave($__internal_843d5df32420aa2773f0273853bc86f097ed36f4a0f4e96f9914ce630c548730_prof);

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
