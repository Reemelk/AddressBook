<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_51f33141d2895e82d107650d7a548d8c221bf284e4ebf2ed6f090d42f756cad8 extends Twig_Template
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
        $__internal_4b79df4340f808efe6e73831d69466e3b2473f17c488e69a5b1cea2a4c022320 = $this->env->getExtension("native_profiler");
        $__internal_4b79df4340f808efe6e73831d69466e3b2473f17c488e69a5b1cea2a4c022320->enter($__internal_4b79df4340f808efe6e73831d69466e3b2473f17c488e69a5b1cea2a4c022320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4b79df4340f808efe6e73831d69466e3b2473f17c488e69a5b1cea2a4c022320->leave($__internal_4b79df4340f808efe6e73831d69466e3b2473f17c488e69a5b1cea2a4c022320_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
