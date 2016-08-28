<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_59b0822b19b8acf2e3842c5ea3dfeece573827d35486c5d37085e27986659bd4 extends Twig_Template
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
        $__internal_e873c39dd119e8c4ef922d2f537d911554f824b98b9e6b14738ebf01a007b110 = $this->env->getExtension("native_profiler");
        $__internal_e873c39dd119e8c4ef922d2f537d911554f824b98b9e6b14738ebf01a007b110->enter($__internal_e873c39dd119e8c4ef922d2f537d911554f824b98b9e6b14738ebf01a007b110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e873c39dd119e8c4ef922d2f537d911554f824b98b9e6b14738ebf01a007b110->leave($__internal_e873c39dd119e8c4ef922d2f537d911554f824b98b9e6b14738ebf01a007b110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
