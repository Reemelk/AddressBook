<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c2cbb32f64d86693e56e9649240b3d9a1b3ab38b5be64976b61a71c9152de806 extends Twig_Template
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
        $__internal_a708beca975a3cc71af9f9ee60e689c1d19e90e7d2dba132d65dba55fcc21657 = $this->env->getExtension("native_profiler");
        $__internal_a708beca975a3cc71af9f9ee60e689c1d19e90e7d2dba132d65dba55fcc21657->enter($__internal_a708beca975a3cc71af9f9ee60e689c1d19e90e7d2dba132d65dba55fcc21657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a708beca975a3cc71af9f9ee60e689c1d19e90e7d2dba132d65dba55fcc21657->leave($__internal_a708beca975a3cc71af9f9ee60e689c1d19e90e7d2dba132d65dba55fcc21657_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
