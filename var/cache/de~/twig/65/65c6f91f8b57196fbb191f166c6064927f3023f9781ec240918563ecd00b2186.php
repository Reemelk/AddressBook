<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d1a6bb1362f68de61230aa8b2f046a61ce4c113705f163b5c917d70cefa3626a extends Twig_Template
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
        $__internal_1af876817bd8533161ac5144109e7a8edfa9664e4038b9b28a443dcc34563a42 = $this->env->getExtension("native_profiler");
        $__internal_1af876817bd8533161ac5144109e7a8edfa9664e4038b9b28a443dcc34563a42->enter($__internal_1af876817bd8533161ac5144109e7a8edfa9664e4038b9b28a443dcc34563a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1af876817bd8533161ac5144109e7a8edfa9664e4038b9b28a443dcc34563a42->leave($__internal_1af876817bd8533161ac5144109e7a8edfa9664e4038b9b28a443dcc34563a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
