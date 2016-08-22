<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a252d968102ee140df16824bc6dfa60ebfa7c4e09476cd2252d9fcf981eea0e3 extends Twig_Template
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
        $__internal_4222e50bd59b5bcaaf959bec77829689077fd570e0b06dea96955044471e19b9 = $this->env->getExtension("native_profiler");
        $__internal_4222e50bd59b5bcaaf959bec77829689077fd570e0b06dea96955044471e19b9->enter($__internal_4222e50bd59b5bcaaf959bec77829689077fd570e0b06dea96955044471e19b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4222e50bd59b5bcaaf959bec77829689077fd570e0b06dea96955044471e19b9->leave($__internal_4222e50bd59b5bcaaf959bec77829689077fd570e0b06dea96955044471e19b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
