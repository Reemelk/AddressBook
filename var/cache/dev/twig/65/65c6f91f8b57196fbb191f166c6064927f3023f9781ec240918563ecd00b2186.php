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
        $__internal_384e7407448c6d74149d8f2a8239f19cade8608b6907309dee44ddab5a4e6479 = $this->env->getExtension("native_profiler");
        $__internal_384e7407448c6d74149d8f2a8239f19cade8608b6907309dee44ddab5a4e6479->enter($__internal_384e7407448c6d74149d8f2a8239f19cade8608b6907309dee44ddab5a4e6479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_384e7407448c6d74149d8f2a8239f19cade8608b6907309dee44ddab5a4e6479->leave($__internal_384e7407448c6d74149d8f2a8239f19cade8608b6907309dee44ddab5a4e6479_prof);

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
