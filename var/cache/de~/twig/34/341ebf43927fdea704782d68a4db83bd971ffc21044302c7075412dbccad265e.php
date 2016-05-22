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
        $__internal_af1796e5fcfd5e9d2ca504389d17ad9db1468660856451881c4a3d0d1ade137d = $this->env->getExtension("native_profiler");
        $__internal_af1796e5fcfd5e9d2ca504389d17ad9db1468660856451881c4a3d0d1ade137d->enter($__internal_af1796e5fcfd5e9d2ca504389d17ad9db1468660856451881c4a3d0d1ade137d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_af1796e5fcfd5e9d2ca504389d17ad9db1468660856451881c4a3d0d1ade137d->leave($__internal_af1796e5fcfd5e9d2ca504389d17ad9db1468660856451881c4a3d0d1ade137d_prof);

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
