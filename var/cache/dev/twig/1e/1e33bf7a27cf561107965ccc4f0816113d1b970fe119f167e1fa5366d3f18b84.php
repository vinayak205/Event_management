<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6b60a3f8d30ebe0a59dee34106904bf647e6228eab75a26a2f604a96bbd53894 extends Twig_Template
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
        $__internal_65507e33d1cc728dfc780a1ed1dbb4bd7c08ff0c8feb1db34cce62d8e9a29915 = $this->env->getExtension("native_profiler");
        $__internal_65507e33d1cc728dfc780a1ed1dbb4bd7c08ff0c8feb1db34cce62d8e9a29915->enter($__internal_65507e33d1cc728dfc780a1ed1dbb4bd7c08ff0c8feb1db34cce62d8e9a29915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_65507e33d1cc728dfc780a1ed1dbb4bd7c08ff0c8feb1db34cce62d8e9a29915->leave($__internal_65507e33d1cc728dfc780a1ed1dbb4bd7c08ff0c8feb1db34cce62d8e9a29915_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
