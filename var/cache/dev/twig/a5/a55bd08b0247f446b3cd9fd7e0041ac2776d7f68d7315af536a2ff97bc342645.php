<?php

/* events/pendingdetails.html.twig */
class __TwigTemplate_dd547169cef585309f16bbfc974b836ad98f0df4e145c50710b8202411cc99d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/pendingdetails.html.twig", 1);
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
        $__internal_ebea0fba41271095b30e91f8eb74e0bc69383db2a159d2de93a7a3a1a2260039 = $this->env->getExtension("native_profiler");
        $__internal_ebea0fba41271095b30e91f8eb74e0bc69383db2a159d2de93a7a3a1a2260039->enter($__internal_ebea0fba41271095b30e91f8eb74e0bc69383db2a159d2de93a7a3a1a2260039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/pendingdetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebea0fba41271095b30e91f8eb74e0bc69383db2a159d2de93a7a3a1a2260039->leave($__internal_ebea0fba41271095b30e91f8eb74e0bc69383db2a159d2de93a7a3a1a2260039_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_10adc0baae1e6817a53e0384d8df28c48b62be4468ae46c9ae07a9b7cdcc3b78 = $this->env->getExtension("native_profiler");
        $__internal_10adc0baae1e6817a53e0384d8df28c48b62be4468ae46c9ae07a9b7cdcc3b78->enter($__internal_10adc0baae1e6817a53e0384d8df28c48b62be4468ae46c9ae07a9b7cdcc3b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<a class = \"btn btn-default \"href=\"/events/pending\"> Back to List</a>
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
        
        $__internal_10adc0baae1e6817a53e0384d8df28c48b62be4468ae46c9ae07a9b7cdcc3b78->leave($__internal_10adc0baae1e6817a53e0384d8df28c48b62be4468ae46c9ae07a9b7cdcc3b78_prof);

    }

    public function getTemplateName()
    {
        return "events/pendingdetails.html.twig";
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
/* 	<a class = "btn btn-default "href="/events/pending"> Back to List</a>*/
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
