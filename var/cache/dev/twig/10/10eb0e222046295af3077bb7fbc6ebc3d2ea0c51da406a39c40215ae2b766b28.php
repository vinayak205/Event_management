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
        $__internal_26d0036f5eac520042785869d8e59c33a17963e0c9237a8541bcc4fd771349ba = $this->env->getExtension("native_profiler");
        $__internal_26d0036f5eac520042785869d8e59c33a17963e0c9237a8541bcc4fd771349ba->enter($__internal_26d0036f5eac520042785869d8e59c33a17963e0c9237a8541bcc4fd771349ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_26d0036f5eac520042785869d8e59c33a17963e0c9237a8541bcc4fd771349ba->leave($__internal_26d0036f5eac520042785869d8e59c33a17963e0c9237a8541bcc4fd771349ba_prof);

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
