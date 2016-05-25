<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5cdc2bf67cb0439c2e7933b638434947db8924f8bfaf2101dc013ac735900945 extends Twig_Template
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
        $__internal_b1813a598fe1a8c558916632391622e53f7e08477ea72b06a955f450a28da483 = $this->env->getExtension("native_profiler");
        $__internal_b1813a598fe1a8c558916632391622e53f7e08477ea72b06a955f450a28da483->enter($__internal_b1813a598fe1a8c558916632391622e53f7e08477ea72b06a955f450a28da483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b1813a598fe1a8c558916632391622e53f7e08477ea72b06a955f450a28da483->leave($__internal_b1813a598fe1a8c558916632391622e53f7e08477ea72b06a955f450a28da483_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
