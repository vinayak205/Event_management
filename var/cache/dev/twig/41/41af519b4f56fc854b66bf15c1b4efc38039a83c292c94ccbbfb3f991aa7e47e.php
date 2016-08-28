<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0880d474cdfb2f68bbdb38fbecbca4e42d975260962b923e96b884dc5c6993fd extends Twig_Template
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
        $__internal_5146b2621429aa7db55249a929e01486cfd3e098dad9ef44f5da4067c9e7db42 = $this->env->getExtension("native_profiler");
        $__internal_5146b2621429aa7db55249a929e01486cfd3e098dad9ef44f5da4067c9e7db42->enter($__internal_5146b2621429aa7db55249a929e01486cfd3e098dad9ef44f5da4067c9e7db42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5146b2621429aa7db55249a929e01486cfd3e098dad9ef44f5da4067c9e7db42->leave($__internal_5146b2621429aa7db55249a929e01486cfd3e098dad9ef44f5da4067c9e7db42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
