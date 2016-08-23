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
        $__internal_ce5f49171efeb77bc1b44e194f0801ee7bb1e517e93e368f6b9583972d1fbb20 = $this->env->getExtension("native_profiler");
        $__internal_ce5f49171efeb77bc1b44e194f0801ee7bb1e517e93e368f6b9583972d1fbb20->enter($__internal_ce5f49171efeb77bc1b44e194f0801ee7bb1e517e93e368f6b9583972d1fbb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venue/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce5f49171efeb77bc1b44e194f0801ee7bb1e517e93e368f6b9583972d1fbb20->leave($__internal_ce5f49171efeb77bc1b44e194f0801ee7bb1e517e93e368f6b9583972d1fbb20_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a619c77a6af6dd533ee0a4d80189e8f37a28b31814509753a8599c8ccf995ee = $this->env->getExtension("native_profiler");
        $__internal_9a619c77a6af6dd533ee0a4d80189e8f37a28b31814509753a8599c8ccf995ee->enter($__internal_9a619c77a6af6dd533ee0a4d80189e8f37a28b31814509753a8599c8ccf995ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 20
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t</tbody>
\t</div>
";
        
        $__internal_9a619c77a6af6dd533ee0a4d80189e8f37a28b31814509753a8599c8ccf995ee->leave($__internal_9a619c77a6af6dd533ee0a4d80189e8f37a28b31814509753a8599c8ccf995ee_prof);

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
        return array (  91 => 26,  82 => 23,  78 => 22,  74 => 21,  71 => 20,  67 => 19,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
/* 		</thead>*/
/* 		<tbody>*/
/* 		{% for event in events %}*/
/* 			<tr>*/
/* 				<td>{{event.name}}</td>*/
/* 				<td>{{event.startDate|date('m/d/Y')}}</td>*/
/* 				<td>{{event.endDate|date('m/d/Y')}}</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 		</tbody>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
