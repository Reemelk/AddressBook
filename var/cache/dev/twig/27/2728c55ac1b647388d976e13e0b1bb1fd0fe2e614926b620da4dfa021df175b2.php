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
        $__internal_4d15ce73a4e017742983bcdfcdd69af76e36f257ad9189909f542e89466e0e1e = $this->env->getExtension("native_profiler");
        $__internal_4d15ce73a4e017742983bcdfcdd69af76e36f257ad9189909f542e89466e0e1e->enter($__internal_4d15ce73a4e017742983bcdfcdd69af76e36f257ad9189909f542e89466e0e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4d15ce73a4e017742983bcdfcdd69af76e36f257ad9189909f542e89466e0e1e->leave($__internal_4d15ce73a4e017742983bcdfcdd69af76e36f257ad9189909f542e89466e0e1e_prof);

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
