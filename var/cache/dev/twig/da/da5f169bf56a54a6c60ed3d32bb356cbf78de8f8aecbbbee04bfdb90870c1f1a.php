<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_96f5d594ba43198036ff012205f38692d9dc36296098fdc7d4724c5ed6b5a7db extends Twig_Template
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
        $__internal_8f768145bff8af590e1febe43e6620572804d75149618c0f7b1dd602d92275ca = $this->env->getExtension("native_profiler");
        $__internal_8f768145bff8af590e1febe43e6620572804d75149618c0f7b1dd602d92275ca->enter($__internal_8f768145bff8af590e1febe43e6620572804d75149618c0f7b1dd602d92275ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8f768145bff8af590e1febe43e6620572804d75149618c0f7b1dd602d92275ca->leave($__internal_8f768145bff8af590e1febe43e6620572804d75149618c0f7b1dd602d92275ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
