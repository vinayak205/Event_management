<?php

/* venue/create.html.twig */
class __TwigTemplate_9bf074bb837e7942896e59fee84a5fea4a36cc7b76e5c2771131544d59ef9358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venue/create.html.twig", 1);
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
        $__internal_8da8f337eef38cf8b76f5cf384ba473a41b3bf1b3e8a0631fdf7a6abe29219ff = $this->env->getExtension("native_profiler");
        $__internal_8da8f337eef38cf8b76f5cf384ba473a41b3bf1b3e8a0631fdf7a6abe29219ff->enter($__internal_8da8f337eef38cf8b76f5cf384ba473a41b3bf1b3e8a0631fdf7a6abe29219ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venue/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da8f337eef38cf8b76f5cf384ba473a41b3bf1b3e8a0631fdf7a6abe29219ff->leave($__internal_8da8f337eef38cf8b76f5cf384ba473a41b3bf1b3e8a0631fdf7a6abe29219ff_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_db4ea42fc45256d495ebbfc82cb08cddc05e22ebb40591e3941fc0a5c85a5847 = $this->env->getExtension("native_profiler");
        $__internal_db4ea42fc45256d495ebbfc82cb08cddc05e22ebb40591e3941fc0a5c85a5847->enter($__internal_db4ea42fc45256d495ebbfc82cb08cddc05e22ebb40591e3941fc0a5c85a5847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h2 class=\"page-header\">Add Venue</h2>
\t";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\" class=\"btn btn-success\" value=\"Save\" />
\t<a href=\"/\" class=\"btn btn-danger\">Cancel</a>\t
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_db4ea42fc45256d495ebbfc82cb08cddc05e22ebb40591e3941fc0a5c85a5847->leave($__internal_db4ea42fc45256d495ebbfc82cb08cddc05e22ebb40591e3941fc0a5c85a5847_prof);

    }

    public function getTemplateName()
    {
        return "venue/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	<h2 class="page-header">Add Venue</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	<input type="submit" class="btn btn-success" value="Save" />*/
/* 	<a href="/" class="btn btn-danger">Cancel</a>	*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
/* */
