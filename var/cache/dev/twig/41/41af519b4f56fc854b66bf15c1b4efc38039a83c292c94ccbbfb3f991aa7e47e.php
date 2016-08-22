<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0880d474cdfb2f68bbdb38fbecbca4e42d975260962b923e96b884dc5c6993fd extends Twig_Template
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
        $__internal_a93b9375b149c11b8f3844c9b1f9ff9d9e03ab5e94381580b9e2266802e590d3 = $this->env->getExtension("native_profiler");
        $__internal_a93b9375b149c11b8f3844c9b1f9ff9d9e03ab5e94381580b9e2266802e590d3->enter($__internal_a93b9375b149c11b8f3844c9b1f9ff9d9e03ab5e94381580b9e2266802e590d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a93b9375b149c11b8f3844c9b1f9ff9d9e03ab5e94381580b9e2266802e590d3->leave($__internal_a93b9375b149c11b8f3844c9b1f9ff9d9e03ab5e94381580b9e2266802e590d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
