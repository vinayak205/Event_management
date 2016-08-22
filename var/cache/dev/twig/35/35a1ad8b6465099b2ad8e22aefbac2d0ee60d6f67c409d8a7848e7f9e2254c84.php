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
        $__internal_61734c51779f034c4e71173c3124cb70711d5f267f7720e3af6e30ae78766b78 = $this->env->getExtension("native_profiler");
        $__internal_61734c51779f034c4e71173c3124cb70711d5f267f7720e3af6e30ae78766b78->enter($__internal_61734c51779f034c4e71173c3124cb70711d5f267f7720e3af6e30ae78766b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_61734c51779f034c4e71173c3124cb70711d5f267f7720e3af6e30ae78766b78->leave($__internal_61734c51779f034c4e71173c3124cb70711d5f267f7720e3af6e30ae78766b78_prof);

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
