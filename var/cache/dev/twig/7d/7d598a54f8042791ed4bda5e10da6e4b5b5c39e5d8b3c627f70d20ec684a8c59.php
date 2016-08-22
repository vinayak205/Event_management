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
        $__internal_84bbde68659cfee3618b191ad2814ea4ba0e048f5b78988683cd2fbf3b6a4c73 = $this->env->getExtension("native_profiler");
        $__internal_84bbde68659cfee3618b191ad2814ea4ba0e048f5b78988683cd2fbf3b6a4c73->enter($__internal_84bbde68659cfee3618b191ad2814ea4ba0e048f5b78988683cd2fbf3b6a4c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84bbde68659cfee3618b191ad2814ea4ba0e048f5b78988683cd2fbf3b6a4c73->leave($__internal_84bbde68659cfee3618b191ad2814ea4ba0e048f5b78988683cd2fbf3b6a4c73_prof);

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
