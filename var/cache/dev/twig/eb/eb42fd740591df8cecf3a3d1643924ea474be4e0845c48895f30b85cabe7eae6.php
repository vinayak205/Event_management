<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b06e7257cb9da09578dc284b5ec880f6890183d6032a97c5857675004ed541fd extends Twig_Template
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
        $__internal_d2700988fdd6eb0e9441758a7a595923cf6286fe849c4d94b40934f8f411f009 = $this->env->getExtension("native_profiler");
        $__internal_d2700988fdd6eb0e9441758a7a595923cf6286fe849c4d94b40934f8f411f009->enter($__internal_d2700988fdd6eb0e9441758a7a595923cf6286fe849c4d94b40934f8f411f009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d2700988fdd6eb0e9441758a7a595923cf6286fe849c4d94b40934f8f411f009->leave($__internal_d2700988fdd6eb0e9441758a7a595923cf6286fe849c4d94b40934f8f411f009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
