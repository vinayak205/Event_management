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
        $__internal_4be149e7465907604a2d78202ab8a296b48c8c5e891f67ea56ed7deb3e33ec50 = $this->env->getExtension("native_profiler");
        $__internal_4be149e7465907604a2d78202ab8a296b48c8c5e891f67ea56ed7deb3e33ec50->enter($__internal_4be149e7465907604a2d78202ab8a296b48c8c5e891f67ea56ed7deb3e33ec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4be149e7465907604a2d78202ab8a296b48c8c5e891f67ea56ed7deb3e33ec50->leave($__internal_4be149e7465907604a2d78202ab8a296b48c8c5e891f67ea56ed7deb3e33ec50_prof);

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
