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
        $__internal_cc6a485530e482ad97ecf5e11834ff2f26bed9109166884173dcf390c0f4b43a = $this->env->getExtension("native_profiler");
        $__internal_cc6a485530e482ad97ecf5e11834ff2f26bed9109166884173dcf390c0f4b43a->enter($__internal_cc6a485530e482ad97ecf5e11834ff2f26bed9109166884173dcf390c0f4b43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cc6a485530e482ad97ecf5e11834ff2f26bed9109166884173dcf390c0f4b43a->leave($__internal_cc6a485530e482ad97ecf5e11834ff2f26bed9109166884173dcf390c0f4b43a_prof);

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
