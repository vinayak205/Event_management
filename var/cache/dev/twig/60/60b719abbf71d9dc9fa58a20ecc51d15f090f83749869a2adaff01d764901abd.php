<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_13ecfa8684e48260d1672d58ce3ecd74e3d4d41bd484973aa977811155115af2 extends Twig_Template
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
        $__internal_2449231d07f4c9ffc2705a213e39ecabac84c83f96ce0db2808cdd48cd7edd1e = $this->env->getExtension("native_profiler");
        $__internal_2449231d07f4c9ffc2705a213e39ecabac84c83f96ce0db2808cdd48cd7edd1e->enter($__internal_2449231d07f4c9ffc2705a213e39ecabac84c83f96ce0db2808cdd48cd7edd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2449231d07f4c9ffc2705a213e39ecabac84c83f96ce0db2808cdd48cd7edd1e->leave($__internal_2449231d07f4c9ffc2705a213e39ecabac84c83f96ce0db2808cdd48cd7edd1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
