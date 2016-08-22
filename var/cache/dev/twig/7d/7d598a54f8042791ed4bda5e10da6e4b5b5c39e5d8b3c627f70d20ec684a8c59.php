<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_86f71cfec549e93ebf9358a71afae4982e3487f614077dba537cbdf3dd860209 extends Twig_Template
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
        $__internal_6db03e4eb213f845238b51105ed67738e749f174188793a80c4c26c2371b64cd = $this->env->getExtension("native_profiler");
        $__internal_6db03e4eb213f845238b51105ed67738e749f174188793a80c4c26c2371b64cd->enter($__internal_6db03e4eb213f845238b51105ed67738e749f174188793a80c4c26c2371b64cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6db03e4eb213f845238b51105ed67738e749f174188793a80c4c26c2371b64cd->leave($__internal_6db03e4eb213f845238b51105ed67738e749f174188793a80c4c26c2371b64cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
