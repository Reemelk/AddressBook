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
        $__internal_49000337552e599b70fcc441634e20d6e20fe4fe3e35f0227b62c90c912ff336 = $this->env->getExtension("native_profiler");
        $__internal_49000337552e599b70fcc441634e20d6e20fe4fe3e35f0227b62c90c912ff336->enter($__internal_49000337552e599b70fcc441634e20d6e20fe4fe3e35f0227b62c90c912ff336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_49000337552e599b70fcc441634e20d6e20fe4fe3e35f0227b62c90c912ff336->leave($__internal_49000337552e599b70fcc441634e20d6e20fe4fe3e35f0227b62c90c912ff336_prof);

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
