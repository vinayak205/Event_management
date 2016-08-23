<?php

/* events/details.html.twig */
class __TwigTemplate_7aa3f5779f75a8f57a674d51c043ff565c602edb1768d38f8f24ecfef27a2a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/details.html.twig", 1);
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
        $__internal_9cf237936cc54fd471fd3d1d76c98207a34b386f27668aeb3f2701242a65fa58 = $this->env->getExtension("native_profiler");
        $__internal_9cf237936cc54fd471fd3d1d76c98207a34b386f27668aeb3f2701242a65fa58->enter($__internal_9cf237936cc54fd471fd3d1d76c98207a34b386f27668aeb3f2701242a65fa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf237936cc54fd471fd3d1d76c98207a34b386f27668aeb3f2701242a65fa58->leave($__internal_9cf237936cc54fd471fd3d1d76c98207a34b386f27668aeb3f2701242a65fa58_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f56bfeb572147d07ed60fdeec98a20a6def9b7f6549cead0b9acfb960074d056 = $this->env->getExtension("native_profiler");
        $__internal_f56bfeb572147d07ed60fdeec98a20a6def9b7f6549cead0b9acfb960074d056->enter($__internal_f56bfeb572147d07ed60fdeec98a20a6def9b7f6549cead0b9acfb960074d056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<a class = \"btn btn-default \"href=\"/events/list\"> Back to List</a>
\t<hr>
\t<h2 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h2>
\t<li class=\"list-group\">
\t\t<ul class=\"list-group-item\">Category: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array()), "html", null, true);
        echo "</ul>
\t\t<ul class=\"list-group-item\">Description: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</ul>
\t\t<ul class=\"list-group-item\">Start Date: ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate", array()), "m/d/Y"), "html", null, true);
        echo "</ul>
\t\t<ul class=\"list-group-item\">End Date: ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate", array()), "m/d/Y"), "html", null, true);
        echo "</ul>
\t\t<ul class=\"list-group-item\">Host: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "host", array()), "html", null, true);
        echo "</ul>
\t</li>
";
        
        $__internal_f56bfeb572147d07ed60fdeec98a20a6def9b7f6549cead0b9acfb960074d056->leave($__internal_f56bfeb572147d07ed60fdeec98a20a6def9b7f6549cead0b9acfb960074d056_prof);

    }

    public function getTemplateName()
    {
        return "events/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	<a class = "btn btn-default "href="/events/list"> Back to List</a>*/
/* 	<hr>*/
/* 	<h2 class="page-header">{{event.name}}</h2>*/
/* 	<li class="list-group">*/
/* 		<ul class="list-group-item">Category: {{event.category}}</ul>*/
/* 		<ul class="list-group-item">Description: {{event.description}}</ul>*/
/* 		<ul class="list-group-item">Start Date: {{event.startDate|date('m/d/Y')}}</ul>*/
/* 		<ul class="list-group-item">End Date: {{event.endDate|date('m/d/Y')}}</ul>*/
/* 		<ul class="list-group-item">Host: {{event.host}}</ul>*/
/* 	</li>*/
/* {% endblock %}*/
/* */
