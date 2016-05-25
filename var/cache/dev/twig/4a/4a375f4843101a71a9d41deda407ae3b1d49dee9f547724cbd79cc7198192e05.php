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
        $__internal_f4e737151e4c2fdab2f4f567d952651e533ee238a3361066cc799586f40175e0 = $this->env->getExtension("native_profiler");
        $__internal_f4e737151e4c2fdab2f4f567d952651e533ee238a3361066cc799586f40175e0->enter($__internal_f4e737151e4c2fdab2f4f567d952651e533ee238a3361066cc799586f40175e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f4e737151e4c2fdab2f4f567d952651e533ee238a3361066cc799586f40175e0->leave($__internal_f4e737151e4c2fdab2f4f567d952651e533ee238a3361066cc799586f40175e0_prof);

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
