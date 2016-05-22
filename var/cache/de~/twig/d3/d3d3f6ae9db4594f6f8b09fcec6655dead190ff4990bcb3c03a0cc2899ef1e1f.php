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
        $__internal_a4e1638f9806e0ce3bd207a87afb630d647fcea7ec554fc53a2513c2ac82a476 = $this->env->getExtension("native_profiler");
        $__internal_a4e1638f9806e0ce3bd207a87afb630d647fcea7ec554fc53a2513c2ac82a476->enter($__internal_a4e1638f9806e0ce3bd207a87afb630d647fcea7ec554fc53a2513c2ac82a476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a4e1638f9806e0ce3bd207a87afb630d647fcea7ec554fc53a2513c2ac82a476->leave($__internal_a4e1638f9806e0ce3bd207a87afb630d647fcea7ec554fc53a2513c2ac82a476_prof);

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
