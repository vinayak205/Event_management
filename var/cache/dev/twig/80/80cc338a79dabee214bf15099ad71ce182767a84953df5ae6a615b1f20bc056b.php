<?php

/* :events:create.html.twig */
class __TwigTemplate_85ac00bcba63c6c31411fb1166c0a0cf08b74b74159e2fd28e3d4f4588af2c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":events:create.html.twig", 1);
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
        $__internal_fcaa1b768158652eed5ebd9637049e495cd3d07f2538dc7fcbfb5c3bfb1ac400 = $this->env->getExtension("native_profiler");
        $__internal_fcaa1b768158652eed5ebd9637049e495cd3d07f2538dc7fcbfb5c3bfb1ac400->enter($__internal_fcaa1b768158652eed5ebd9637049e495cd3d07f2538dc7fcbfb5c3bfb1ac400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":events:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcaa1b768158652eed5ebd9637049e495cd3d07f2538dc7fcbfb5c3bfb1ac400->leave($__internal_fcaa1b768158652eed5ebd9637049e495cd3d07f2538dc7fcbfb5c3bfb1ac400_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b290ebb67bd4771a04f9aa29b188c83630d38430d663465b30a504b0734c235 = $this->env->getExtension("native_profiler");
        $__internal_3b290ebb67bd4771a04f9aa29b188c83630d38430d663465b30a504b0734c235->enter($__internal_3b290ebb67bd4771a04f9aa29b188c83630d38430d663465b30a504b0734c235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h2 class=\"page-header\">Add Event</h2>
\t";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<button type=\"sbumit\" class=\"btn btn-primary\">Create Event</button>
\t<a href=\"/events/list\" class=\"btn btn-danger\">Cancel</a>\t
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3b290ebb67bd4771a04f9aa29b188c83630d38430d663465b30a504b0734c235->leave($__internal_3b290ebb67bd4771a04f9aa29b188c83630d38430d663465b30a504b0734c235_prof);

    }

    public function getTemplateName()
    {
        return ":events:create.html.twig";
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
/* 	<h2 class="page-header">Add Event</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	<button type="sbumit" class="btn btn-primary">Create Event</button>*/
/* 	<a href="/events/list" class="btn btn-danger">Cancel</a>	*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
/* */