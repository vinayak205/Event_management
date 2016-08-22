<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_940106c5f6bc9f8a5004497bbe51a5e25efea939c4d9606787e9d00020ed9509 extends Twig_Template
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
        $__internal_191a3d57892ac5ed0299217a060320f7463ee6d1277a05e31b29a28e88a548ec = $this->env->getExtension("native_profiler");
        $__internal_191a3d57892ac5ed0299217a060320f7463ee6d1277a05e31b29a28e88a548ec->enter($__internal_191a3d57892ac5ed0299217a060320f7463ee6d1277a05e31b29a28e88a548ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_191a3d57892ac5ed0299217a060320f7463ee6d1277a05e31b29a28e88a548ec->leave($__internal_191a3d57892ac5ed0299217a060320f7463ee6d1277a05e31b29a28e88a548ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
