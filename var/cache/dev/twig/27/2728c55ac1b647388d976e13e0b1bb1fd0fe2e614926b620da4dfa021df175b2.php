<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4a6f5ee96349c98c9c03009dc778d867fd6923cf1b4c4062957bca6e420d2a6d extends Twig_Template
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
        $__internal_ceed4cf81a8751aabb63e9395dddec96b82c59589b10dfb3a5c3de605be28046 = $this->env->getExtension("native_profiler");
        $__internal_ceed4cf81a8751aabb63e9395dddec96b82c59589b10dfb3a5c3de605be28046->enter($__internal_ceed4cf81a8751aabb63e9395dddec96b82c59589b10dfb3a5c3de605be28046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ceed4cf81a8751aabb63e9395dddec96b82c59589b10dfb3a5c3de605be28046->leave($__internal_ceed4cf81a8751aabb63e9395dddec96b82c59589b10dfb3a5c3de605be28046_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
