<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4f9917d0779ccebae14f0735adffc48aeddb85ca682f5a9a9978532eb42beacf extends Twig_Template
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
        $__internal_390702be10e441e53b6e847d9fa5c8c801b7cabea4cfeb5acfd0b511175d822d = $this->env->getExtension("native_profiler");
        $__internal_390702be10e441e53b6e847d9fa5c8c801b7cabea4cfeb5acfd0b511175d822d->enter($__internal_390702be10e441e53b6e847d9fa5c8c801b7cabea4cfeb5acfd0b511175d822d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_390702be10e441e53b6e847d9fa5c8c801b7cabea4cfeb5acfd0b511175d822d->leave($__internal_390702be10e441e53b6e847d9fa5c8c801b7cabea4cfeb5acfd0b511175d822d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
