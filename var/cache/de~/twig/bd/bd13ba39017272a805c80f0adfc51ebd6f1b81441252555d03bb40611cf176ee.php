<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9876bec510fe83834111658f6fb188c6fd493eb450dbca7e2044582bad1a067c extends Twig_Template
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
        $__internal_0f7b48487d4a7bfc22b4ac63938b3acfe45d3bcaf91fa9c87e3028424db2bf1b = $this->env->getExtension("native_profiler");
        $__internal_0f7b48487d4a7bfc22b4ac63938b3acfe45d3bcaf91fa9c87e3028424db2bf1b->enter($__internal_0f7b48487d4a7bfc22b4ac63938b3acfe45d3bcaf91fa9c87e3028424db2bf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0f7b48487d4a7bfc22b4ac63938b3acfe45d3bcaf91fa9c87e3028424db2bf1b->leave($__internal_0f7b48487d4a7bfc22b4ac63938b3acfe45d3bcaf91fa9c87e3028424db2bf1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
