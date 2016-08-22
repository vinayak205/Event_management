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
        $__internal_d1f8d0ba8f6b55ae443efad48dd80ae66b093b3e749d591db4c4d3c10b72d892 = $this->env->getExtension("native_profiler");
        $__internal_d1f8d0ba8f6b55ae443efad48dd80ae66b093b3e749d591db4c4d3c10b72d892->enter($__internal_d1f8d0ba8f6b55ae443efad48dd80ae66b093b3e749d591db4c4d3c10b72d892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d1f8d0ba8f6b55ae443efad48dd80ae66b093b3e749d591db4c4d3c10b72d892->leave($__internal_d1f8d0ba8f6b55ae443efad48dd80ae66b093b3e749d591db4c4d3c10b72d892_prof);

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
