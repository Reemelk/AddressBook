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
        $__internal_a3a9adad3bd3c958a50bd69076cb21e4f5464ef73e30b580000d480992a663fe = $this->env->getExtension("native_profiler");
        $__internal_a3a9adad3bd3c958a50bd69076cb21e4f5464ef73e30b580000d480992a663fe->enter($__internal_a3a9adad3bd3c958a50bd69076cb21e4f5464ef73e30b580000d480992a663fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a3a9adad3bd3c958a50bd69076cb21e4f5464ef73e30b580000d480992a663fe->leave($__internal_a3a9adad3bd3c958a50bd69076cb21e4f5464ef73e30b580000d480992a663fe_prof);

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
