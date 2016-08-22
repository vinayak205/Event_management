<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3924a9df3b739ef2ead9ddc3eb3b8a250378661a35dfb99abed3d12c02ff83c4 extends Twig_Template
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
        $__internal_f261f3232f358da450727dd49138c57e8cd6c211e80a509157967a25be83ceef = $this->env->getExtension("native_profiler");
        $__internal_f261f3232f358da450727dd49138c57e8cd6c211e80a509157967a25be83ceef->enter($__internal_f261f3232f358da450727dd49138c57e8cd6c211e80a509157967a25be83ceef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f261f3232f358da450727dd49138c57e8cd6c211e80a509157967a25be83ceef->leave($__internal_f261f3232f358da450727dd49138c57e8cd6c211e80a509157967a25be83ceef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
