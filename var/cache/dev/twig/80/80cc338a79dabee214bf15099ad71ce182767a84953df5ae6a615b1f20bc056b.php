<?php

/* events/create.html.twig */
class __TwigTemplate_85ac00bcba63c6c31411fb1166c0a0cf08b74b74159e2fd28e3d4f4588af2c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/create.html.twig", 1);
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
        $__internal_1ba3379ecd8eba5ce70fde135f18f74963c69a65add38af6bec571f693c2ba2b = $this->env->getExtension("native_profiler");
        $__internal_1ba3379ecd8eba5ce70fde135f18f74963c69a65add38af6bec571f693c2ba2b->enter($__internal_1ba3379ecd8eba5ce70fde135f18f74963c69a65add38af6bec571f693c2ba2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ba3379ecd8eba5ce70fde135f18f74963c69a65add38af6bec571f693c2ba2b->leave($__internal_1ba3379ecd8eba5ce70fde135f18f74963c69a65add38af6bec571f693c2ba2b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f2a801aed671073b229706dc3e1b1e4e1b3b6d49cf8f85d3a42a37caf9fac54 = $this->env->getExtension("native_profiler");
        $__internal_5f2a801aed671073b229706dc3e1b1e4e1b3b6d49cf8f85d3a42a37caf9fac54->enter($__internal_5f2a801aed671073b229706dc3e1b1e4e1b3b6d49cf8f85d3a42a37caf9fac54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f2a801aed671073b229706dc3e1b1e4e1b3b6d49cf8f85d3a42a37caf9fac54->leave($__internal_5f2a801aed671073b229706dc3e1b1e4e1b3b6d49cf8f85d3a42a37caf9fac54_prof);

    }

    public function getTemplateName()
    {
        return "events/create.html.twig";
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
