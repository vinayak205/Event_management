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
        $__internal_e7f85a68353064f3db1194f826386dd7e5c4fa5d4c5479a10cf9ebcfa60e814a = $this->env->getExtension("native_profiler");
        $__internal_e7f85a68353064f3db1194f826386dd7e5c4fa5d4c5479a10cf9ebcfa60e814a->enter($__internal_e7f85a68353064f3db1194f826386dd7e5c4fa5d4c5479a10cf9ebcfa60e814a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e7f85a68353064f3db1194f826386dd7e5c4fa5d4c5479a10cf9ebcfa60e814a->leave($__internal_e7f85a68353064f3db1194f826386dd7e5c4fa5d4c5479a10cf9ebcfa60e814a_prof);

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
