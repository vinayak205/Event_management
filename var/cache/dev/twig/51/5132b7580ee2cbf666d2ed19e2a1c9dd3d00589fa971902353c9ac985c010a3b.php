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
        $__internal_2d4a8e5bd0add6d6285ffcf89595aaa9673b544a2b85f819d652fcc42509d5c4 = $this->env->getExtension("native_profiler");
        $__internal_2d4a8e5bd0add6d6285ffcf89595aaa9673b544a2b85f819d652fcc42509d5c4->enter($__internal_2d4a8e5bd0add6d6285ffcf89595aaa9673b544a2b85f819d652fcc42509d5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2d4a8e5bd0add6d6285ffcf89595aaa9673b544a2b85f819d652fcc42509d5c4->leave($__internal_2d4a8e5bd0add6d6285ffcf89595aaa9673b544a2b85f819d652fcc42509d5c4_prof);

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
