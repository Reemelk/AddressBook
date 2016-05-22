<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e47c455abf7c88f985763629ffb3a1d66603d69523408dfc51ab1b7be7444345 extends Twig_Template
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
        $__internal_53474dc990734e8c3aec6e08309a331da248010c079eb12d57e4a4be847a5f38 = $this->env->getExtension("native_profiler");
        $__internal_53474dc990734e8c3aec6e08309a331da248010c079eb12d57e4a4be847a5f38->enter($__internal_53474dc990734e8c3aec6e08309a331da248010c079eb12d57e4a4be847a5f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_53474dc990734e8c3aec6e08309a331da248010c079eb12d57e4a4be847a5f38->leave($__internal_53474dc990734e8c3aec6e08309a331da248010c079eb12d57e4a4be847a5f38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
