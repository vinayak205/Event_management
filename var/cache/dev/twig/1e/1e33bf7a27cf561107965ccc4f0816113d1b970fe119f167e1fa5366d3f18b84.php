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
        $__internal_2b7559969f11a852bf56a56e00bae0d9ada82b55fcdf4ed820bd4a4c17042ba3 = $this->env->getExtension("native_profiler");
        $__internal_2b7559969f11a852bf56a56e00bae0d9ada82b55fcdf4ed820bd4a4c17042ba3->enter($__internal_2b7559969f11a852bf56a56e00bae0d9ada82b55fcdf4ed820bd4a4c17042ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2b7559969f11a852bf56a56e00bae0d9ada82b55fcdf4ed820bd4a4c17042ba3->leave($__internal_2b7559969f11a852bf56a56e00bae0d9ada82b55fcdf4ed820bd4a4c17042ba3_prof);

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
