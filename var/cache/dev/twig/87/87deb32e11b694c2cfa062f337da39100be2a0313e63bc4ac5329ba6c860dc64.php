<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c615a52fca6eff9bf3a02ad05c08252eb484b2ebf9e430f68b110f3bebfa8912 extends Twig_Template
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
        $__internal_3dd7a779e529c387dd8c9ed1d383230424163a2fe4e579da29977c3a99557907 = $this->env->getExtension("native_profiler");
        $__internal_3dd7a779e529c387dd8c9ed1d383230424163a2fe4e579da29977c3a99557907->enter($__internal_3dd7a779e529c387dd8c9ed1d383230424163a2fe4e579da29977c3a99557907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3dd7a779e529c387dd8c9ed1d383230424163a2fe4e579da29977c3a99557907->leave($__internal_3dd7a779e529c387dd8c9ed1d383230424163a2fe4e579da29977c3a99557907_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
