<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6c1a3b7980383659a2cb5aba507442858c75aa9c76f22cc7df86bef73671e35c extends Twig_Template
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
        $__internal_8b5fc735eec0d36e37b7dfaa6ef9b35ea3c169e5c3442f9c00b4358dff740e89 = $this->env->getExtension("native_profiler");
        $__internal_8b5fc735eec0d36e37b7dfaa6ef9b35ea3c169e5c3442f9c00b4358dff740e89->enter($__internal_8b5fc735eec0d36e37b7dfaa6ef9b35ea3c169e5c3442f9c00b4358dff740e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8b5fc735eec0d36e37b7dfaa6ef9b35ea3c169e5c3442f9c00b4358dff740e89->leave($__internal_8b5fc735eec0d36e37b7dfaa6ef9b35ea3c169e5c3442f9c00b4358dff740e89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
