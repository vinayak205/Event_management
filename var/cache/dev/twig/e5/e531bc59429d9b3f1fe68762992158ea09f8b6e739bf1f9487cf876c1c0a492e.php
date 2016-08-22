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
        $__internal_c14e7b8bedc3addca8ac53756ccc1ca5aea181969a5c41afbb0d93df9dba916f = $this->env->getExtension("native_profiler");
        $__internal_c14e7b8bedc3addca8ac53756ccc1ca5aea181969a5c41afbb0d93df9dba916f->enter($__internal_c14e7b8bedc3addca8ac53756ccc1ca5aea181969a5c41afbb0d93df9dba916f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c14e7b8bedc3addca8ac53756ccc1ca5aea181969a5c41afbb0d93df9dba916f->leave($__internal_c14e7b8bedc3addca8ac53756ccc1ca5aea181969a5c41afbb0d93df9dba916f_prof);

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
