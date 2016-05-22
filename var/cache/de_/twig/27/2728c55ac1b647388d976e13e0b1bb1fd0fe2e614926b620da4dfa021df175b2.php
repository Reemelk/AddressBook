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
        $__internal_7c1f16dfc8a775ee865671da939926dedd1a2a1bf1b7015716e9edddc6b1ddd9 = $this->env->getExtension("native_profiler");
        $__internal_7c1f16dfc8a775ee865671da939926dedd1a2a1bf1b7015716e9edddc6b1ddd9->enter($__internal_7c1f16dfc8a775ee865671da939926dedd1a2a1bf1b7015716e9edddc6b1ddd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7c1f16dfc8a775ee865671da939926dedd1a2a1bf1b7015716e9edddc6b1ddd9->leave($__internal_7c1f16dfc8a775ee865671da939926dedd1a2a1bf1b7015716e9edddc6b1ddd9_prof);

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
