<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9d389e8519b050e2522262e23aa5ba9bb63d5be8cac3311be14ec13b45e8b8fd extends Twig_Template
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
        $__internal_5d5174649f58ebf074b4c9263323350b6b27e663f89844b72bd3481a84d69d9f = $this->env->getExtension("native_profiler");
        $__internal_5d5174649f58ebf074b4c9263323350b6b27e663f89844b72bd3481a84d69d9f->enter($__internal_5d5174649f58ebf074b4c9263323350b6b27e663f89844b72bd3481a84d69d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5d5174649f58ebf074b4c9263323350b6b27e663f89844b72bd3481a84d69d9f->leave($__internal_5d5174649f58ebf074b4c9263323350b6b27e663f89844b72bd3481a84d69d9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
