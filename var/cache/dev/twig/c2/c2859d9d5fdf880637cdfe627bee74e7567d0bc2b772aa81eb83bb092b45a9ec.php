<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_21467ead88ed73b5fbcc7255b1e56f27852f46b2ea207d68e7564dce4d431491 extends Twig_Template
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
        $__internal_55f7ffa80c4b6b63e7f6adbe6f750e12368325d21364712db6bdfa864d617e5a = $this->env->getExtension("native_profiler");
        $__internal_55f7ffa80c4b6b63e7f6adbe6f750e12368325d21364712db6bdfa864d617e5a->enter($__internal_55f7ffa80c4b6b63e7f6adbe6f750e12368325d21364712db6bdfa864d617e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_55f7ffa80c4b6b63e7f6adbe6f750e12368325d21364712db6bdfa864d617e5a->leave($__internal_55f7ffa80c4b6b63e7f6adbe6f750e12368325d21364712db6bdfa864d617e5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php $method = strtoupper($method) ?>*/
/* <?php $form_method = $method === 'GET' || $method === 'POST' ? $method : 'POST' ?>*/
/* <form name="<?php echo $name ?>" method="<?php echo strtolower($form_method) ?>"<?php if ($action !== ''): ?> action="<?php echo $action ?>"<?php endif ?><?php foreach ($attr as $k => $v) { printf(' %s="%s"', $view->escape($k), $view->escape($v)); } ?><?php if ($multipart): ?> enctype="multipart/form-data"<?php endif ?>>*/
/* <?php if ($form_method !== $method): ?>*/
/*     <input type="hidden" name="_method" value="<?php echo $method ?>" />*/
/* <?php endif ?>*/
/* */
