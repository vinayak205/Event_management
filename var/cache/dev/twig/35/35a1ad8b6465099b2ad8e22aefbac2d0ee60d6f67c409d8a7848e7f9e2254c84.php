<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b22900508aa978f88cf6ba6782829372a0701e3d44f3c00d71e5c1319c202e70 extends Twig_Template
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
        $__internal_b2b4964d7caa90cde681ec62b863d48f0dff223e2086bfbec649a56bb40d63bc = $this->env->getExtension("native_profiler");
        $__internal_b2b4964d7caa90cde681ec62b863d48f0dff223e2086bfbec649a56bb40d63bc->enter($__internal_b2b4964d7caa90cde681ec62b863d48f0dff223e2086bfbec649a56bb40d63bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b2b4964d7caa90cde681ec62b863d48f0dff223e2086bfbec649a56bb40d63bc->leave($__internal_b2b4964d7caa90cde681ec62b863d48f0dff223e2086bfbec649a56bb40d63bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
