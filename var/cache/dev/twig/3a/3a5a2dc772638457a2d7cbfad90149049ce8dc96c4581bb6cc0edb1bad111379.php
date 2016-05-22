<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_78b12ea4461dd349a03cdae9eaec6343815fe47eabec2963dfedbb5007589e81 extends Twig_Template
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
        $__internal_8edaaa96a1d29189eede74f917d542fe5e4975953034bfc49e03d4e83fe6e65f = $this->env->getExtension("native_profiler");
        $__internal_8edaaa96a1d29189eede74f917d542fe5e4975953034bfc49e03d4e83fe6e65f->enter($__internal_8edaaa96a1d29189eede74f917d542fe5e4975953034bfc49e03d4e83fe6e65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_8edaaa96a1d29189eede74f917d542fe5e4975953034bfc49e03d4e83fe6e65f->leave($__internal_8edaaa96a1d29189eede74f917d542fe5e4975953034bfc49e03d4e83fe6e65f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <?php $vars = $widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php*/
/*             // There should be no spaces between the colons and the widgets, that's why*/
/*             // this block is written in a single PHP tag*/
/*             echo $view['form']->widget($form['hour'], $vars);*/
/* */
/*             if ($with_minutes) {*/
/*                 echo ':';*/
/*                 echo $view['form']->widget($form['minute'], $vars);*/
/*             }*/
/* */
/*             if ($with_seconds) {*/
/*                 echo ':';*/
/*                 echo $view['form']->widget($form['second'], $vars);*/
/*             }*/
/*         ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
