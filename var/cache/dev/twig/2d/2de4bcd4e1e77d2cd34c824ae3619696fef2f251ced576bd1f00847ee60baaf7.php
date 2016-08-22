<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c43caf9e975155b6e1cd00295a560a3eea2534532b51d6959723bedf9cc8f519 extends Twig_Template
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
        $__internal_97311974f84367089df7533d5830d9ae03ad5c41cfd443ca8ed3bb23b2166e2e = $this->env->getExtension("native_profiler");
        $__internal_97311974f84367089df7533d5830d9ae03ad5c41cfd443ca8ed3bb23b2166e2e->enter($__internal_97311974f84367089df7533d5830d9ae03ad5c41cfd443ca8ed3bb23b2166e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_97311974f84367089df7533d5830d9ae03ad5c41cfd443ca8ed3bb23b2166e2e->leave($__internal_97311974f84367089df7533d5830d9ae03ad5c41cfd443ca8ed3bb23b2166e2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
