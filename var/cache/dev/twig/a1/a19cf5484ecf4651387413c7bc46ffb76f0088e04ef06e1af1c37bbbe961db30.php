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
        $__internal_e206df59dfd8a966f7594fa079e772df90963c2006de3e60e14dd62b685bd671 = $this->env->getExtension("native_profiler");
        $__internal_e206df59dfd8a966f7594fa079e772df90963c2006de3e60e14dd62b685bd671->enter($__internal_e206df59dfd8a966f7594fa079e772df90963c2006de3e60e14dd62b685bd671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e206df59dfd8a966f7594fa079e772df90963c2006de3e60e14dd62b685bd671->leave($__internal_e206df59dfd8a966f7594fa079e772df90963c2006de3e60e14dd62b685bd671_prof);

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
