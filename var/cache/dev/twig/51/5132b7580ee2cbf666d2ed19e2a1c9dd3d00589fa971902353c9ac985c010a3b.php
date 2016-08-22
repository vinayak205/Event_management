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
        $__internal_ed7a2d82dc32c63a99bd1b9aaab3c56f3f63dfdbff938c3d9cb5bc064b55d555 = $this->env->getExtension("native_profiler");
        $__internal_ed7a2d82dc32c63a99bd1b9aaab3c56f3f63dfdbff938c3d9cb5bc064b55d555->enter($__internal_ed7a2d82dc32c63a99bd1b9aaab3c56f3f63dfdbff938c3d9cb5bc064b55d555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ed7a2d82dc32c63a99bd1b9aaab3c56f3f63dfdbff938c3d9cb5bc064b55d555->leave($__internal_ed7a2d82dc32c63a99bd1b9aaab3c56f3f63dfdbff938c3d9cb5bc064b55d555_prof);

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
