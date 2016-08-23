<?php

/* venue/details.html.twig */
class __TwigTemplate_f0be3fddca9b5a293d5b7e2189367b33654b5cd4cfef7b9df64b9aede15f6553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venue/details.html.twig", 1);
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
        $__internal_ccd6d5370705508d58301fbbac1719643a63a87d2d44942dd8e709ca6b4b02c3 = $this->env->getExtension("native_profiler");
        $__internal_ccd6d5370705508d58301fbbac1719643a63a87d2d44942dd8e709ca6b4b02c3->enter($__internal_ccd6d5370705508d58301fbbac1719643a63a87d2d44942dd8e709ca6b4b02c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venue/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd6d5370705508d58301fbbac1719643a63a87d2d44942dd8e709ca6b4b02c3->leave($__internal_ccd6d5370705508d58301fbbac1719643a63a87d2d44942dd8e709ca6b4b02c3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e54c58e84df584e5349dc88cdb4b9612081cebda2b0d393d684b730de222312 = $this->env->getExtension("native_profiler");
        $__internal_7e54c58e84df584e5349dc88cdb4b9612081cebda2b0d393d684b730de222312->enter($__internal_7e54c58e84df584e5349dc88cdb4b9612081cebda2b0d393d684b730de222312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<a class = \"btn btn-default\"href=\"/venue/list\"> Back to List</a>
\t<hr>
\t<h2 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "name", array()), "html", null, true);
        echo "</h2>
\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item\">Description: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "description", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Address: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "address", array()), "html", null, true);
        echo "</li>
\t</ul>
\t<div class=\"container\">
\t\t<h4>Booked Events</h4>
\t\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<th>Event name</th>
\t\t\t<th>Start Date</th>
\t\t\t<th>End Date</th>
\t\t\t<th>Status</th>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 21
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "status", array()), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t</tbody>
\t</div>
";
        
        $__internal_7e54c58e84df584e5349dc88cdb4b9612081cebda2b0d393d684b730de222312->leave($__internal_7e54c58e84df584e5349dc88cdb4b9612081cebda2b0d393d684b730de222312_prof);

    }

    public function getTemplateName()
    {
        return "venue/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  72 => 21,  68 => 20,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	<a class = "btn btn-default"href="/venue/list"> Back to List</a>*/
/* 	<hr>*/
/* 	<h2 class="page-header">{{venue.name}}</h2>*/
/* 	<ul class="list-group">*/
/* 		<li class="list-group-item">Description: {{venue.description}}</li>*/
/* 		<li class="list-group-item">Address: {{venue.address}}</li>*/
/* 	</ul>*/
/* 	<div class="container">*/
/* 		<h4>Booked Events</h4>*/
/* 		<table class="table table-striped">*/
/* 		<thead>*/
/* 			<th>Event name</th>*/
/* 			<th>Start Date</th>*/
/* 			<th>End Date</th>*/
/* 			<th>Status</th>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		{% for event in events %}*/
/* 			<tr>*/
/* 				<td>{{event.name}}</td>*/
/* 				<td>{{event.startDate|date('m/d/Y')}}</td>*/
/* 				<td>{{event.endDate|date('m/d/Y')}}</td>*/
/* 				<td>{{event.status}}</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 		</tbody>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
