<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_86f71cfec549e93ebf9358a71afae4982e3487f614077dba537cbdf3dd860209 extends Twig_Template
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
        $__internal_314ca95e6bef552b1d2dcc10f32fc7a238fc8c3e9c219bdf7baf6db71caaabd8 = $this->env->getExtension("native_profiler");
        $__internal_314ca95e6bef552b1d2dcc10f32fc7a238fc8c3e9c219bdf7baf6db71caaabd8->enter($__internal_314ca95e6bef552b1d2dcc10f32fc7a238fc8c3e9c219bdf7baf6db71caaabd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_314ca95e6bef552b1d2dcc10f32fc7a238fc8c3e9c219bdf7baf6db71caaabd8->leave($__internal_314ca95e6bef552b1d2dcc10f32fc7a238fc8c3e9c219bdf7baf6db71caaabd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
