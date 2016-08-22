<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_087dd95a3451616d85bcad0fcd87ecc3bbab4ef119035d559ae72166b40b76f2 extends Twig_Template
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
        $__internal_30ce4a37e7cfbfd0635aae1b36aa3ae186ea0d19a77543d3452e9d1128cda97c = $this->env->getExtension("native_profiler");
        $__internal_30ce4a37e7cfbfd0635aae1b36aa3ae186ea0d19a77543d3452e9d1128cda97c->enter($__internal_30ce4a37e7cfbfd0635aae1b36aa3ae186ea0d19a77543d3452e9d1128cda97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_30ce4a37e7cfbfd0635aae1b36aa3ae186ea0d19a77543d3452e9d1128cda97c->leave($__internal_30ce4a37e7cfbfd0635aae1b36aa3ae186ea0d19a77543d3452e9d1128cda97c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
