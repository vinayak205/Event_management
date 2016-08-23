<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7e5d75a4027072c073ce79bf52f333856f62583c0982ba7dcea4e040bde4da20 extends Twig_Template
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
        $__internal_bedd68f194fd75b90ccd365e7b964f9e0fd8b8c0989d4bc5d2648078312b8c29 = $this->env->getExtension("native_profiler");
        $__internal_bedd68f194fd75b90ccd365e7b964f9e0fd8b8c0989d4bc5d2648078312b8c29->enter($__internal_bedd68f194fd75b90ccd365e7b964f9e0fd8b8c0989d4bc5d2648078312b8c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bedd68f194fd75b90ccd365e7b964f9e0fd8b8c0989d4bc5d2648078312b8c29->leave($__internal_bedd68f194fd75b90ccd365e7b964f9e0fd8b8c0989d4bc5d2648078312b8c29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
