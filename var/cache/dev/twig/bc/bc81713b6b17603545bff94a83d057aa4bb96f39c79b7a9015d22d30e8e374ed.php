<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ca1cadc75a84bf19916c3044b75f2b8c31108740d165487b4a1583d0987e46ce extends Twig_Template
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
        $__internal_79aecc5b287bad7672edf534621b1ed10274552acd34d9e6dcdc6e44ad27547d = $this->env->getExtension("native_profiler");
        $__internal_79aecc5b287bad7672edf534621b1ed10274552acd34d9e6dcdc6e44ad27547d->enter($__internal_79aecc5b287bad7672edf534621b1ed10274552acd34d9e6dcdc6e44ad27547d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_79aecc5b287bad7672edf534621b1ed10274552acd34d9e6dcdc6e44ad27547d->leave($__internal_79aecc5b287bad7672edf534621b1ed10274552acd34d9e6dcdc6e44ad27547d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
