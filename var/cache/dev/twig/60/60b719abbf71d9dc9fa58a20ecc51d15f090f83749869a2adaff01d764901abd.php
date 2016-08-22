<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_13ecfa8684e48260d1672d58ce3ecd74e3d4d41bd484973aa977811155115af2 extends Twig_Template
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
        $__internal_1e70c91cbbf83afda67b76379935d5ab0ee60f70a4d8f74fd4c37111eca87a70 = $this->env->getExtension("native_profiler");
        $__internal_1e70c91cbbf83afda67b76379935d5ab0ee60f70a4d8f74fd4c37111eca87a70->enter($__internal_1e70c91cbbf83afda67b76379935d5ab0ee60f70a4d8f74fd4c37111eca87a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1e70c91cbbf83afda67b76379935d5ab0ee60f70a4d8f74fd4c37111eca87a70->leave($__internal_1e70c91cbbf83afda67b76379935d5ab0ee60f70a4d8f74fd4c37111eca87a70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
