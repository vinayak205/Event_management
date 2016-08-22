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
        $__internal_56300b95fef1d8ae06c8fb04e9fd6a974f67b4eb19ff4870cf7fc72ee85892c7 = $this->env->getExtension("native_profiler");
        $__internal_56300b95fef1d8ae06c8fb04e9fd6a974f67b4eb19ff4870cf7fc72ee85892c7->enter($__internal_56300b95fef1d8ae06c8fb04e9fd6a974f67b4eb19ff4870cf7fc72ee85892c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_56300b95fef1d8ae06c8fb04e9fd6a974f67b4eb19ff4870cf7fc72ee85892c7->leave($__internal_56300b95fef1d8ae06c8fb04e9fd6a974f67b4eb19ff4870cf7fc72ee85892c7_prof);

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
