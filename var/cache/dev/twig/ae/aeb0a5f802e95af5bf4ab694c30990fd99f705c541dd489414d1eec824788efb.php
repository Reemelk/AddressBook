<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e4bac648bb43185735655579aec8b2bb7abb11671b97711f386332ea3d34fbbe extends Twig_Template
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
        $__internal_0262201b66f0d3447af8e0c90e93e11715f4dd9c2b10635b18847dab0c5198a0 = $this->env->getExtension("native_profiler");
        $__internal_0262201b66f0d3447af8e0c90e93e11715f4dd9c2b10635b18847dab0c5198a0->enter($__internal_0262201b66f0d3447af8e0c90e93e11715f4dd9c2b10635b18847dab0c5198a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0262201b66f0d3447af8e0c90e93e11715f4dd9c2b10635b18847dab0c5198a0->leave($__internal_0262201b66f0d3447af8e0c90e93e11715f4dd9c2b10635b18847dab0c5198a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
