<?php

/* default/register.html.twig */
class __TwigTemplate_c8587fa00032b567f2dfa3529e93515a36bf3774533d6d307ea0482d9f082929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59876c289be94a8b6c7089e003ccbf0a2eb5625375e57bf0e8780194a8ae160c = $this->env->getExtension("native_profiler");
        $__internal_59876c289be94a8b6c7089e003ccbf0a2eb5625375e57bf0e8780194a8ae160c->enter($__internal_59876c289be94a8b6c7089e003ccbf0a2eb5625375e57bf0e8780194a8ae160c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59876c289be94a8b6c7089e003ccbf0a2eb5625375e57bf0e8780194a8ae160c->leave($__internal_59876c289be94a8b6c7089e003ccbf0a2eb5625375e57bf0e8780194a8ae160c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffff1593ee6d402dd6dd75c294962669a6a312cb563cbab7e2f7b5001d4ed7e5 = $this->env->getExtension("native_profiler");
        $__internal_ffff1593ee6d402dd6dd75c294962669a6a312cb563cbab7e2f7b5001d4ed7e5->enter($__internal_ffff1593ee6d402dd6dd75c294962669a6a312cb563cbab7e2f7b5001d4ed7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2 class=\"page-header\">Register</h2>
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<button type=\"submit\" class=\"btn btn-success\">Register</button>
<a href=\"/\" class=\"btn btn-danger\">Cancel</a>\t
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ffff1593ee6d402dd6dd75c294962669a6a312cb563cbab7e2f7b5001d4ed7e5->leave($__internal_ffff1593ee6d402dd6dd75c294962669a6a312cb563cbab7e2f7b5001d4ed7e5_prof);

    }

    public function getTemplateName()
    {
        return "default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h2 class="page-header">Register</h2>*/
/* {{form_start(form)}}*/
/* {{form_widget(form)}}*/
/* */
/* <button type="submit" class="btn btn-success">Register</button>*/
/* <a href="/" class="btn btn-danger">Cancel</a>	*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
