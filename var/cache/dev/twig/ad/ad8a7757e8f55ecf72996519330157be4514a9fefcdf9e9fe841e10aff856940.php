<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c117357efefddd258d723bc13091ae48f86d40d6e5e039ab89793a5257f14cc7 extends Twig_Template
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
        $__internal_da3bc3e53e2d7da4576b5f7e0121a01486ea8f5ee0c2e86c6e58986702f24636 = $this->env->getExtension("native_profiler");
        $__internal_da3bc3e53e2d7da4576b5f7e0121a01486ea8f5ee0c2e86c6e58986702f24636->enter($__internal_da3bc3e53e2d7da4576b5f7e0121a01486ea8f5ee0c2e86c6e58986702f24636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_da3bc3e53e2d7da4576b5f7e0121a01486ea8f5ee0c2e86c6e58986702f24636->leave($__internal_da3bc3e53e2d7da4576b5f7e0121a01486ea8f5ee0c2e86c6e58986702f24636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
