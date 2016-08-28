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
        $__internal_206914e8d1f1fc8fcad23f8052df7362dadc9b675306a4f9504d7f89ed3c829f = $this->env->getExtension("native_profiler");
        $__internal_206914e8d1f1fc8fcad23f8052df7362dadc9b675306a4f9504d7f89ed3c829f->enter($__internal_206914e8d1f1fc8fcad23f8052df7362dadc9b675306a4f9504d7f89ed3c829f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_206914e8d1f1fc8fcad23f8052df7362dadc9b675306a4f9504d7f89ed3c829f->leave($__internal_206914e8d1f1fc8fcad23f8052df7362dadc9b675306a4f9504d7f89ed3c829f_prof);

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
