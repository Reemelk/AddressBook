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
        $__internal_4ec8fb550f07f558282ea8b67526ee9ab6c9b61de164cd035f77e695a883c4e4 = $this->env->getExtension("native_profiler");
        $__internal_4ec8fb550f07f558282ea8b67526ee9ab6c9b61de164cd035f77e695a883c4e4->enter($__internal_4ec8fb550f07f558282ea8b67526ee9ab6c9b61de164cd035f77e695a883c4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4ec8fb550f07f558282ea8b67526ee9ab6c9b61de164cd035f77e695a883c4e4->leave($__internal_4ec8fb550f07f558282ea8b67526ee9ab6c9b61de164cd035f77e695a883c4e4_prof);

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
