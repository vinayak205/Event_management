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
        $__internal_919ff2f806d043b1cd1e1699e9857aa523af3d7da423672d18ae2739a4c8967e = $this->env->getExtension("native_profiler");
        $__internal_919ff2f806d043b1cd1e1699e9857aa523af3d7da423672d18ae2739a4c8967e->enter($__internal_919ff2f806d043b1cd1e1699e9857aa523af3d7da423672d18ae2739a4c8967e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_919ff2f806d043b1cd1e1699e9857aa523af3d7da423672d18ae2739a4c8967e->leave($__internal_919ff2f806d043b1cd1e1699e9857aa523af3d7da423672d18ae2739a4c8967e_prof);

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
