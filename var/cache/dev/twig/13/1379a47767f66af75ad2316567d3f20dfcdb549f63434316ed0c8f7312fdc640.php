<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9f8072ed6836927763cecc99d6e4c644a6aa90c97d77195b7c96d1937a382d63 extends Twig_Template
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
        $__internal_8cd7ff0338748cef9c62a4ee23d2efe7754a1cc601dc1f38bd6ead9db87c2b61 = $this->env->getExtension("native_profiler");
        $__internal_8cd7ff0338748cef9c62a4ee23d2efe7754a1cc601dc1f38bd6ead9db87c2b61->enter($__internal_8cd7ff0338748cef9c62a4ee23d2efe7754a1cc601dc1f38bd6ead9db87c2b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8cd7ff0338748cef9c62a4ee23d2efe7754a1cc601dc1f38bd6ead9db87c2b61->leave($__internal_8cd7ff0338748cef9c62a4ee23d2efe7754a1cc601dc1f38bd6ead9db87c2b61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
