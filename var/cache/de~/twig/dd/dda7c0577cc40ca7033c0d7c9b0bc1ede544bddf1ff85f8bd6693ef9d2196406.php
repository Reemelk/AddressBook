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
        $__internal_f4791c41d8d73f48cef64bed3409f190d72eada4d6f052f4e44973268b7725c4 = $this->env->getExtension("native_profiler");
        $__internal_f4791c41d8d73f48cef64bed3409f190d72eada4d6f052f4e44973268b7725c4->enter($__internal_f4791c41d8d73f48cef64bed3409f190d72eada4d6f052f4e44973268b7725c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f4791c41d8d73f48cef64bed3409f190d72eada4d6f052f4e44973268b7725c4->leave($__internal_f4791c41d8d73f48cef64bed3409f190d72eada4d6f052f4e44973268b7725c4_prof);

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
