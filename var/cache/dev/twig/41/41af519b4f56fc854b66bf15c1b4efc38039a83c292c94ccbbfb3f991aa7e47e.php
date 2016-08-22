<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0880d474cdfb2f68bbdb38fbecbca4e42d975260962b923e96b884dc5c6993fd extends Twig_Template
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
        $__internal_40a9bcafae14cd22e66a1ce5871af28b14e9f788798bdd6718b34d02d670a17a = $this->env->getExtension("native_profiler");
        $__internal_40a9bcafae14cd22e66a1ce5871af28b14e9f788798bdd6718b34d02d670a17a->enter($__internal_40a9bcafae14cd22e66a1ce5871af28b14e9f788798bdd6718b34d02d670a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_40a9bcafae14cd22e66a1ce5871af28b14e9f788798bdd6718b34d02d670a17a->leave($__internal_40a9bcafae14cd22e66a1ce5871af28b14e9f788798bdd6718b34d02d670a17a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
