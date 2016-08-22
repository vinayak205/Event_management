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
        $__internal_4961984f42d1430f3e4a7a6dcdb2e03f1150de6bfd3111d2a58cb202f9058f7a = $this->env->getExtension("native_profiler");
        $__internal_4961984f42d1430f3e4a7a6dcdb2e03f1150de6bfd3111d2a58cb202f9058f7a->enter($__internal_4961984f42d1430f3e4a7a6dcdb2e03f1150de6bfd3111d2a58cb202f9058f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4961984f42d1430f3e4a7a6dcdb2e03f1150de6bfd3111d2a58cb202f9058f7a->leave($__internal_4961984f42d1430f3e4a7a6dcdb2e03f1150de6bfd3111d2a58cb202f9058f7a_prof);

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
