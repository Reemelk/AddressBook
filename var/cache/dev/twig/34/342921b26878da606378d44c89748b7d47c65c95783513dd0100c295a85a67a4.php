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
        $__internal_ba732ae2a037c742cd93210773bd108b9e0c538ec58bfbce33a01e28f89ec211 = $this->env->getExtension("native_profiler");
        $__internal_ba732ae2a037c742cd93210773bd108b9e0c538ec58bfbce33a01e28f89ec211->enter($__internal_ba732ae2a037c742cd93210773bd108b9e0c538ec58bfbce33a01e28f89ec211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ba732ae2a037c742cd93210773bd108b9e0c538ec58bfbce33a01e28f89ec211->leave($__internal_ba732ae2a037c742cd93210773bd108b9e0c538ec58bfbce33a01e28f89ec211_prof);

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
