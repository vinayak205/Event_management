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
        $__internal_6e1c64cdf48f0be74eb35443c8777e5d889f8802f53e8f83c3f0ec3095217427 = $this->env->getExtension("native_profiler");
        $__internal_6e1c64cdf48f0be74eb35443c8777e5d889f8802f53e8f83c3f0ec3095217427->enter($__internal_6e1c64cdf48f0be74eb35443c8777e5d889f8802f53e8f83c3f0ec3095217427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6e1c64cdf48f0be74eb35443c8777e5d889f8802f53e8f83c3f0ec3095217427->leave($__internal_6e1c64cdf48f0be74eb35443c8777e5d889f8802f53e8f83c3f0ec3095217427_prof);

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
