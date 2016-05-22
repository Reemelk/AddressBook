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
        $__internal_fe6641e13481cd058dc4aa4b68b4e424c94523667d2b4e942e1e8f3e290d330b = $this->env->getExtension("native_profiler");
        $__internal_fe6641e13481cd058dc4aa4b68b4e424c94523667d2b4e942e1e8f3e290d330b->enter($__internal_fe6641e13481cd058dc4aa4b68b4e424c94523667d2b4e942e1e8f3e290d330b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fe6641e13481cd058dc4aa4b68b4e424c94523667d2b4e942e1e8f3e290d330b->leave($__internal_fe6641e13481cd058dc4aa4b68b4e424c94523667d2b4e942e1e8f3e290d330b_prof);

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
