<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_86f71cfec549e93ebf9358a71afae4982e3487f614077dba537cbdf3dd860209 extends Twig_Template
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
        $__internal_e4eda88c7459bd19b64c0cf07d9fc53da6541d8fe43d0f9a69d117591dc71c3c = $this->env->getExtension("native_profiler");
        $__internal_e4eda88c7459bd19b64c0cf07d9fc53da6541d8fe43d0f9a69d117591dc71c3c->enter($__internal_e4eda88c7459bd19b64c0cf07d9fc53da6541d8fe43d0f9a69d117591dc71c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e4eda88c7459bd19b64c0cf07d9fc53da6541d8fe43d0f9a69d117591dc71c3c->leave($__internal_e4eda88c7459bd19b64c0cf07d9fc53da6541d8fe43d0f9a69d117591dc71c3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
