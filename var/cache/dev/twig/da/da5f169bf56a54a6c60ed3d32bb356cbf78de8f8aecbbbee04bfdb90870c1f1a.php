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
        $__internal_f5ea8159c091268df0c98765d1cd8993c64f1747c690a3e03586385730819950 = $this->env->getExtension("native_profiler");
        $__internal_f5ea8159c091268df0c98765d1cd8993c64f1747c690a3e03586385730819950->enter($__internal_f5ea8159c091268df0c98765d1cd8993c64f1747c690a3e03586385730819950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f5ea8159c091268df0c98765d1cd8993c64f1747c690a3e03586385730819950->leave($__internal_f5ea8159c091268df0c98765d1cd8993c64f1747c690a3e03586385730819950_prof);

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
