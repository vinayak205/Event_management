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
        $__internal_2fa7a74ba107632b1e3ff68c503a0f92637b90feecca433959a9acd8588efbea = $this->env->getExtension("native_profiler");
        $__internal_2fa7a74ba107632b1e3ff68c503a0f92637b90feecca433959a9acd8588efbea->enter($__internal_2fa7a74ba107632b1e3ff68c503a0f92637b90feecca433959a9acd8588efbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":events:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa7a74ba107632b1e3ff68c503a0f92637b90feecca433959a9acd8588efbea->leave($__internal_2fa7a74ba107632b1e3ff68c503a0f92637b90feecca433959a9acd8588efbea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_89d7debff5361140aafbefc2d70c60d1a430bfb72de0fc7901783a086fb8063e = $this->env->getExtension("native_profiler");
        $__internal_89d7debff5361140aafbefc2d70c60d1a430bfb72de0fc7901783a086fb8063e->enter($__internal_89d7debff5361140aafbefc2d70c60d1a430bfb72de0fc7901783a086fb8063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89d7debff5361140aafbefc2d70c60d1a430bfb72de0fc7901783a086fb8063e->leave($__internal_89d7debff5361140aafbefc2d70c60d1a430bfb72de0fc7901783a086fb8063e_prof);

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
