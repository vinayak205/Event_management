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
        $__internal_cd4ac39eeffd2870bf3a055cd39d6ad66b8678ee75fddf46f014e8b70ff0c379 = $this->env->getExtension("native_profiler");
        $__internal_cd4ac39eeffd2870bf3a055cd39d6ad66b8678ee75fddf46f014e8b70ff0c379->enter($__internal_cd4ac39eeffd2870bf3a055cd39d6ad66b8678ee75fddf46f014e8b70ff0c379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_cd4ac39eeffd2870bf3a055cd39d6ad66b8678ee75fddf46f014e8b70ff0c379->leave($__internal_cd4ac39eeffd2870bf3a055cd39d6ad66b8678ee75fddf46f014e8b70ff0c379_prof);

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
