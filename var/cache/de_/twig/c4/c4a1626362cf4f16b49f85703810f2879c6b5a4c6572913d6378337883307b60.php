<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_eb7ff193d4c9eb21e3c2d9dc62b95da4b511ef1c89c79832cb8ef19533b1c119 extends Twig_Template
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
        $__internal_2131c648c44908749b49dfe6436ff2625917011661e46f405da0f65e5375ec62 = $this->env->getExtension("native_profiler");
        $__internal_2131c648c44908749b49dfe6436ff2625917011661e46f405da0f65e5375ec62->enter($__internal_2131c648c44908749b49dfe6436ff2625917011661e46f405da0f65e5375ec62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2131c648c44908749b49dfe6436ff2625917011661e46f405da0f65e5375ec62->leave($__internal_2131c648c44908749b49dfe6436ff2625917011661e46f405da0f65e5375ec62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
