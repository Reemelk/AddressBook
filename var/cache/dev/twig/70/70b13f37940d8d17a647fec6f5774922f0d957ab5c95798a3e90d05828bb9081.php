<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_74a7e1066daeda06b8d5ca2bddae8959e7eccdac9b086ecb799f9f93c37f735a extends Twig_Template
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
        $__internal_120f206d22c2c09a4cc499bf0958514cbfa9c1725c8387cb23d6fd195a026636 = $this->env->getExtension("native_profiler");
        $__internal_120f206d22c2c09a4cc499bf0958514cbfa9c1725c8387cb23d6fd195a026636->enter($__internal_120f206d22c2c09a4cc499bf0958514cbfa9c1725c8387cb23d6fd195a026636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_120f206d22c2c09a4cc499bf0958514cbfa9c1725c8387cb23d6fd195a026636->leave($__internal_120f206d22c2c09a4cc499bf0958514cbfa9c1725c8387cb23d6fd195a026636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
