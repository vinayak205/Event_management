<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a86a394388f249745fc23e1037692232083724914f17d4e1a431e3303c9c29ff extends Twig_Template
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
        $__internal_74f8f3f76d3a6814712f85efca12ccca19f88a1b63bace7fa8e843b7e1879990 = $this->env->getExtension("native_profiler");
        $__internal_74f8f3f76d3a6814712f85efca12ccca19f88a1b63bace7fa8e843b7e1879990->enter($__internal_74f8f3f76d3a6814712f85efca12ccca19f88a1b63bace7fa8e843b7e1879990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_74f8f3f76d3a6814712f85efca12ccca19f88a1b63bace7fa8e843b7e1879990->leave($__internal_74f8f3f76d3a6814712f85efca12ccca19f88a1b63bace7fa8e843b7e1879990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
