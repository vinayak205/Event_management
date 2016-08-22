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
        $__internal_66597699f90efea1daf17d76f62e58d507591ae1e8f6df8bb418149c7e6daf9e = $this->env->getExtension("native_profiler");
        $__internal_66597699f90efea1daf17d76f62e58d507591ae1e8f6df8bb418149c7e6daf9e->enter($__internal_66597699f90efea1daf17d76f62e58d507591ae1e8f6df8bb418149c7e6daf9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_66597699f90efea1daf17d76f62e58d507591ae1e8f6df8bb418149c7e6daf9e->leave($__internal_66597699f90efea1daf17d76f62e58d507591ae1e8f6df8bb418149c7e6daf9e_prof);

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
