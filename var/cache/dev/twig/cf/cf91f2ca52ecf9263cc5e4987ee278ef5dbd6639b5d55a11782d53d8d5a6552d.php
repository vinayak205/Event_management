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
        $__internal_407014866dfa83214468798ec2be4ca40bd6140f75c2c634b0afadbc453bfcef = $this->env->getExtension("native_profiler");
        $__internal_407014866dfa83214468798ec2be4ca40bd6140f75c2c634b0afadbc453bfcef->enter($__internal_407014866dfa83214468798ec2be4ca40bd6140f75c2c634b0afadbc453bfcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_407014866dfa83214468798ec2be4ca40bd6140f75c2c634b0afadbc453bfcef->leave($__internal_407014866dfa83214468798ec2be4ca40bd6140f75c2c634b0afadbc453bfcef_prof);

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
