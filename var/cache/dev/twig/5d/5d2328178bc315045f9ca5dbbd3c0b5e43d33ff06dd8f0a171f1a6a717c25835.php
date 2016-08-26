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
        $__internal_f23ef90afb8de6fc476a211485710b74427fe9c590fc1ce120753745ba0b83fd = $this->env->getExtension("native_profiler");
        $__internal_f23ef90afb8de6fc476a211485710b74427fe9c590fc1ce120753745ba0b83fd->enter($__internal_f23ef90afb8de6fc476a211485710b74427fe9c590fc1ce120753745ba0b83fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f23ef90afb8de6fc476a211485710b74427fe9c590fc1ce120753745ba0b83fd->leave($__internal_f23ef90afb8de6fc476a211485710b74427fe9c590fc1ce120753745ba0b83fd_prof);

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
