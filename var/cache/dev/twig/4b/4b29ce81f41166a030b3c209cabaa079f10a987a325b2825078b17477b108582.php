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
        $__internal_bebde0bb28bbe34f88b665576a03ee0515feefaefe5a37e8c85a522edebf04be = $this->env->getExtension("native_profiler");
        $__internal_bebde0bb28bbe34f88b665576a03ee0515feefaefe5a37e8c85a522edebf04be->enter($__internal_bebde0bb28bbe34f88b665576a03ee0515feefaefe5a37e8c85a522edebf04be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bebde0bb28bbe34f88b665576a03ee0515feefaefe5a37e8c85a522edebf04be->leave($__internal_bebde0bb28bbe34f88b665576a03ee0515feefaefe5a37e8c85a522edebf04be_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c90e77c2ce887946d4fa74259a268c569db8311365fa5c4a4c86eaab781f03d2 = $this->env->getExtension("native_profiler");
        $__internal_c90e77c2ce887946d4fa74259a268c569db8311365fa5c4a4c86eaab781f03d2->enter($__internal_c90e77c2ce887946d4fa74259a268c569db8311365fa5c4a4c86eaab781f03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c90e77c2ce887946d4fa74259a268c569db8311365fa5c4a4c86eaab781f03d2->leave($__internal_c90e77c2ce887946d4fa74259a268c569db8311365fa5c4a4c86eaab781f03d2_prof);

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
