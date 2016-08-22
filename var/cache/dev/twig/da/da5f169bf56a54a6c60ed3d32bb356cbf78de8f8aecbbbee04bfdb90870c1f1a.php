<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_96f5d594ba43198036ff012205f38692d9dc36296098fdc7d4724c5ed6b5a7db extends Twig_Template
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
        $__internal_1d67cf23e0c5624129cd4f806fafda69f5a9f4321c02bf218a2b3695279a4b22 = $this->env->getExtension("native_profiler");
        $__internal_1d67cf23e0c5624129cd4f806fafda69f5a9f4321c02bf218a2b3695279a4b22->enter($__internal_1d67cf23e0c5624129cd4f806fafda69f5a9f4321c02bf218a2b3695279a4b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1d67cf23e0c5624129cd4f806fafda69f5a9f4321c02bf218a2b3695279a4b22->leave($__internal_1d67cf23e0c5624129cd4f806fafda69f5a9f4321c02bf218a2b3695279a4b22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
