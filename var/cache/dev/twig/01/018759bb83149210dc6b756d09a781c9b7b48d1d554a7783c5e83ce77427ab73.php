<?php

/* :events:edit.html.twig */
class __TwigTemplate_55b78a12f98a446562ff09c6a81da3704506c825f3ac7312287b0df4d71f3a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":events:edit.html.twig", 1);
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
        $__internal_141ef900eef1928ff32017e703c2e8870e89033ce8890a2fb1fc6cae6d24b173 = $this->env->getExtension("native_profiler");
        $__internal_141ef900eef1928ff32017e703c2e8870e89033ce8890a2fb1fc6cae6d24b173->enter($__internal_141ef900eef1928ff32017e703c2e8870e89033ce8890a2fb1fc6cae6d24b173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":events:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141ef900eef1928ff32017e703c2e8870e89033ce8890a2fb1fc6cae6d24b173->leave($__internal_141ef900eef1928ff32017e703c2e8870e89033ce8890a2fb1fc6cae6d24b173_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7d818afe0113e801aab9fcbc10c69f69e35f525da9802a77bdb96419cc7e94c = $this->env->getExtension("native_profiler");
        $__internal_f7d818afe0113e801aab9fcbc10c69f69e35f525da9802a77bdb96419cc7e94c->enter($__internal_f7d818afe0113e801aab9fcbc10c69f69e35f525da9802a77bdb96419cc7e94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f7d818afe0113e801aab9fcbc10c69f69e35f525da9802a77bdb96419cc7e94c->leave($__internal_f7d818afe0113e801aab9fcbc10c69f69e35f525da9802a77bdb96419cc7e94c_prof);

    }

    public function getTemplateName()
    {
        return ":events:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
/* */
