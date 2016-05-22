<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_541dcfc26ebb6ad621139fc59ae5fdb55065be0f44b0cbe3f5f5c7ae23ce325c extends Twig_Template
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
        $__internal_6220b01217f7276b9501068df60acb5ab08c396736491ee194e3a91059abd7fc = $this->env->getExtension("native_profiler");
        $__internal_6220b01217f7276b9501068df60acb5ab08c396736491ee194e3a91059abd7fc->enter($__internal_6220b01217f7276b9501068df60acb5ab08c396736491ee194e3a91059abd7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6220b01217f7276b9501068df60acb5ab08c396736491ee194e3a91059abd7fc->leave($__internal_6220b01217f7276b9501068df60acb5ab08c396736491ee194e3a91059abd7fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
