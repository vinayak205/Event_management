<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6bc9666e4de0b6bc2a67d9188222c9a1ab37c06693074ff00aa116e498c9f4cb extends Twig_Template
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
        $__internal_26515df2c9f36ac8add772c7ad030217198139dd9fd5a5ba18bdedaadeb16919 = $this->env->getExtension("native_profiler");
        $__internal_26515df2c9f36ac8add772c7ad030217198139dd9fd5a5ba18bdedaadeb16919->enter($__internal_26515df2c9f36ac8add772c7ad030217198139dd9fd5a5ba18bdedaadeb16919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_26515df2c9f36ac8add772c7ad030217198139dd9fd5a5ba18bdedaadeb16919->leave($__internal_26515df2c9f36ac8add772c7ad030217198139dd9fd5a5ba18bdedaadeb16919_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
