<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_41a2d0f28e78774cf39998ee08e62e9c68fc9bc596e2a28180beacd833eaa808 extends Twig_Template
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
        $__internal_4e6176b1a3fa7bf3d2dc41113e49fd6c412133bc2718a6330c7787d94d645ccc = $this->env->getExtension("native_profiler");
        $__internal_4e6176b1a3fa7bf3d2dc41113e49fd6c412133bc2718a6330c7787d94d645ccc->enter($__internal_4e6176b1a3fa7bf3d2dc41113e49fd6c412133bc2718a6330c7787d94d645ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4e6176b1a3fa7bf3d2dc41113e49fd6c412133bc2718a6330c7787d94d645ccc->leave($__internal_4e6176b1a3fa7bf3d2dc41113e49fd6c412133bc2718a6330c7787d94d645ccc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
