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
        $__internal_9fe6a7178d23a54b1f2114b26f11a68e9f335ba3d31a3783b8a5f70266517f8b = $this->env->getExtension("native_profiler");
        $__internal_9fe6a7178d23a54b1f2114b26f11a68e9f335ba3d31a3783b8a5f70266517f8b->enter($__internal_9fe6a7178d23a54b1f2114b26f11a68e9f335ba3d31a3783b8a5f70266517f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9fe6a7178d23a54b1f2114b26f11a68e9f335ba3d31a3783b8a5f70266517f8b->leave($__internal_9fe6a7178d23a54b1f2114b26f11a68e9f335ba3d31a3783b8a5f70266517f8b_prof);

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
