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
        $__internal_5da2388e9ec4677a6e6bd7312d67e740f46ba0b96895cbbee75c694b35e7553a = $this->env->getExtension("native_profiler");
        $__internal_5da2388e9ec4677a6e6bd7312d67e740f46ba0b96895cbbee75c694b35e7553a->enter($__internal_5da2388e9ec4677a6e6bd7312d67e740f46ba0b96895cbbee75c694b35e7553a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5da2388e9ec4677a6e6bd7312d67e740f46ba0b96895cbbee75c694b35e7553a->leave($__internal_5da2388e9ec4677a6e6bd7312d67e740f46ba0b96895cbbee75c694b35e7553a_prof);

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