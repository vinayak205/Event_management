<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e0a18145bcb62a90d3fa855e3899811f427c9c6281744920b6d2a7bbde6cd14e extends Twig_Template
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
        $__internal_056e2ab2f4e4e59a082b9d0d8aba6995c5ab2e6cf470af64c4ea07eba36cff44 = $this->env->getExtension("native_profiler");
        $__internal_056e2ab2f4e4e59a082b9d0d8aba6995c5ab2e6cf470af64c4ea07eba36cff44->enter($__internal_056e2ab2f4e4e59a082b9d0d8aba6995c5ab2e6cf470af64c4ea07eba36cff44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_056e2ab2f4e4e59a082b9d0d8aba6995c5ab2e6cf470af64c4ea07eba36cff44->leave($__internal_056e2ab2f4e4e59a082b9d0d8aba6995c5ab2e6cf470af64c4ea07eba36cff44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!empty($id)): ?>id="<?php echo $view->escape($id) ?>" <?php endif ?>*/
/* <?php foreach ($attr as $k => $v): ?>*/
/* <?php if (in_array($v, array('placeholder', 'title'), true)): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>*/
/* <?php elseif ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
