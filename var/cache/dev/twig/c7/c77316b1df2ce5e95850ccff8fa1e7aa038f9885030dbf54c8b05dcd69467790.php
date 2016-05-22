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
        $__internal_5d1add80d35adbba0205fc3479a4be9e6edbb6626ceaed7c8bb2eb79621bf9fa = $this->env->getExtension("native_profiler");
        $__internal_5d1add80d35adbba0205fc3479a4be9e6edbb6626ceaed7c8bb2eb79621bf9fa->enter($__internal_5d1add80d35adbba0205fc3479a4be9e6edbb6626ceaed7c8bb2eb79621bf9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5d1add80d35adbba0205fc3479a4be9e6edbb6626ceaed7c8bb2eb79621bf9fa->leave($__internal_5d1add80d35adbba0205fc3479a4be9e6edbb6626ceaed7c8bb2eb79621bf9fa_prof);

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
