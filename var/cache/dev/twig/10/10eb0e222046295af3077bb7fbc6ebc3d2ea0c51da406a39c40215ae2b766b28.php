<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd50c3440d970755fa338a18e79a793a548a2f9337edfad877f5647423e3a02a extends Twig_Template
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
        $__internal_9d0167d02b5ae3e216d16c57f05260a49280edddbb33e144ce043acfc67c0c81 = $this->env->getExtension("native_profiler");
        $__internal_9d0167d02b5ae3e216d16c57f05260a49280edddbb33e144ce043acfc67c0c81->enter($__internal_9d0167d02b5ae3e216d16c57f05260a49280edddbb33e144ce043acfc67c0c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9d0167d02b5ae3e216d16c57f05260a49280edddbb33e144ce043acfc67c0c81->leave($__internal_9d0167d02b5ae3e216d16c57f05260a49280edddbb33e144ce043acfc67c0c81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
