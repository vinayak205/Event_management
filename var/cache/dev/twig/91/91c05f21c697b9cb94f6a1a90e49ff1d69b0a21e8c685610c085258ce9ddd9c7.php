<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_61db2d1a005f21b0e4894d82a7b458dea8027c23475e451dafc3761f584b8513 extends Twig_Template
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
        $__internal_e42cb76c204f1377b8e0522c44e08c05798430dd96240889ebf5bfb3fe53641f = $this->env->getExtension("native_profiler");
        $__internal_e42cb76c204f1377b8e0522c44e08c05798430dd96240889ebf5bfb3fe53641f->enter($__internal_e42cb76c204f1377b8e0522c44e08c05798430dd96240889ebf5bfb3fe53641f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e42cb76c204f1377b8e0522c44e08c05798430dd96240889ebf5bfb3fe53641f->leave($__internal_e42cb76c204f1377b8e0522c44e08c05798430dd96240889ebf5bfb3fe53641f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
