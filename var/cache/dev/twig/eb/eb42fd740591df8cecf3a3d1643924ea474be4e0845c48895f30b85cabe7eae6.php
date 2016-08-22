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
        $__internal_d20dba3e9d737b59856e1b506d917675b0be3803ad0df26273d1023f8961e9a9 = $this->env->getExtension("native_profiler");
        $__internal_d20dba3e9d737b59856e1b506d917675b0be3803ad0df26273d1023f8961e9a9->enter($__internal_d20dba3e9d737b59856e1b506d917675b0be3803ad0df26273d1023f8961e9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d20dba3e9d737b59856e1b506d917675b0be3803ad0df26273d1023f8961e9a9->leave($__internal_d20dba3e9d737b59856e1b506d917675b0be3803ad0df26273d1023f8961e9a9_prof);

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
