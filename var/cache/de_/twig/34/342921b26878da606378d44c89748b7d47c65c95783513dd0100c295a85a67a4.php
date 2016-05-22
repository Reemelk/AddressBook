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
        $__internal_0039e087344ad330c1daf65c8b7552523417674f1b70eac5c71e5c8ba9a2766e = $this->env->getExtension("native_profiler");
        $__internal_0039e087344ad330c1daf65c8b7552523417674f1b70eac5c71e5c8ba9a2766e->enter($__internal_0039e087344ad330c1daf65c8b7552523417674f1b70eac5c71e5c8ba9a2766e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0039e087344ad330c1daf65c8b7552523417674f1b70eac5c71e5c8ba9a2766e->leave($__internal_0039e087344ad330c1daf65c8b7552523417674f1b70eac5c71e5c8ba9a2766e_prof);

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
