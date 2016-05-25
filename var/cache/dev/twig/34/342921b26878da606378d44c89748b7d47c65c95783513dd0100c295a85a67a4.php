<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2d807f92e4ff7f54baeefcff746dbfb3b7e3a9436d5561d5634d941a745a40c9 extends Twig_Template
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
        $__internal_7c133cd793730a6d3ad76f0b22e4c20fb2af6062e37306610545a1e32eee4210 = $this->env->getExtension("native_profiler");
        $__internal_7c133cd793730a6d3ad76f0b22e4c20fb2af6062e37306610545a1e32eee4210->enter($__internal_7c133cd793730a6d3ad76f0b22e4c20fb2af6062e37306610545a1e32eee4210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7c133cd793730a6d3ad76f0b22e4c20fb2af6062e37306610545a1e32eee4210->leave($__internal_7c133cd793730a6d3ad76f0b22e4c20fb2af6062e37306610545a1e32eee4210_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
