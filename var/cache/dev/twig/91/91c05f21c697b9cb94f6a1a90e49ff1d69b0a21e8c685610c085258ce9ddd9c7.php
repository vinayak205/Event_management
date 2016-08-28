<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_61db2d1a005f21b0e4894d82a7b458dea8027c23475e451dafc3761f584b8513 extends Twig_Template
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
        $__internal_2e4b45ac394ff4fa6417b061c4985702c031754d14deb1697766a17a35b68129 = $this->env->getExtension("native_profiler");
        $__internal_2e4b45ac394ff4fa6417b061c4985702c031754d14deb1697766a17a35b68129->enter($__internal_2e4b45ac394ff4fa6417b061c4985702c031754d14deb1697766a17a35b68129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2e4b45ac394ff4fa6417b061c4985702c031754d14deb1697766a17a35b68129->leave($__internal_2e4b45ac394ff4fa6417b061c4985702c031754d14deb1697766a17a35b68129_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
