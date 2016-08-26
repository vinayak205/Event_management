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
        $__internal_0edd4de8d3a0696bdea2e26d451084da9a04b40f17c605bfeaf67ca0038ba36c = $this->env->getExtension("native_profiler");
        $__internal_0edd4de8d3a0696bdea2e26d451084da9a04b40f17c605bfeaf67ca0038ba36c->enter($__internal_0edd4de8d3a0696bdea2e26d451084da9a04b40f17c605bfeaf67ca0038ba36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0edd4de8d3a0696bdea2e26d451084da9a04b40f17c605bfeaf67ca0038ba36c->leave($__internal_0edd4de8d3a0696bdea2e26d451084da9a04b40f17c605bfeaf67ca0038ba36c_prof);

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
