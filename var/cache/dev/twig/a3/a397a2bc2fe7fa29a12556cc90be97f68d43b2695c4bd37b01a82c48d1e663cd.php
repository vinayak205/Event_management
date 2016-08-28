<?php

/* :users:registeredEvents.html.twig */
class __TwigTemplate_4bd026b2a91cecb59f4cec0a245686d77220d6616b75a623881a7e294391aa1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:registeredEvents.html.twig", 1);
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
        $__internal_28aa590ba5ff1225b4a94c84b48af19d124910ad95a61cc9e0ebc9b3f1803de3 = $this->env->getExtension("native_profiler");
        $__internal_28aa590ba5ff1225b4a94c84b48af19d124910ad95a61cc9e0ebc9b3f1803de3->enter($__internal_28aa590ba5ff1225b4a94c84b48af19d124910ad95a61cc9e0ebc9b3f1803de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:registeredEvents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28aa590ba5ff1225b4a94c84b48af19d124910ad95a61cc9e0ebc9b3f1803de3->leave($__internal_28aa590ba5ff1225b4a94c84b48af19d124910ad95a61cc9e0ebc9b3f1803de3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc28882c5a5fa192c143eb19ff74db5ea04902c246819b89bc995c3e832547f9 = $this->env->getExtension("native_profiler");
        $__internal_cc28882c5a5fa192c143eb19ff74db5ea04902c246819b89bc995c3e832547f9->enter($__internal_cc28882c5a5fa192c143eb19ff74db5ea04902c246819b89bc995c3e832547f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t
\t\t<h2 class=\"page-header\">Registered Events</h4>
\t\t<table class=\"table table-striped\">
\t\t<thead>
\t\t\t<th>Event name</th>
\t\t\t<th>Start Date</th>
\t\t\t<th>End Date</th>
\t\t\t<th>Venue</th>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regEvents"]) ? $context["regEvents"] : $this->getContext($context, "regEvents")));
        foreach ($context['_seq'] as $context["_key"] => $context["regEvent"]) {
            // line 14
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["regEvent"], "event", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["regEvent"], "event", array()), "startDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["regEvent"], "event", array()), "endDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["regEvent"], "event", array()), "venue", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</tbody>
\t
";
        
        $__internal_cc28882c5a5fa192c143eb19ff74db5ea04902c246819b89bc995c3e832547f9->leave($__internal_cc28882c5a5fa192c143eb19ff74db5ea04902c246819b89bc995c3e832547f9_prof);

    }

    public function getTemplateName()
    {
        return ":users:registeredEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	*/
/* 		<h2 class="page-header">Registered Events</h4>*/
/* 		<table class="table table-striped">*/
/* 		<thead>*/
/* 			<th>Event name</th>*/
/* 			<th>Start Date</th>*/
/* 			<th>End Date</th>*/
/* 			<th>Venue</th>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		{% for regEvent in regEvents %}*/
/* 			<tr>*/
/* 				<td>{{regEvent.event.name}}</td>*/
/* 				<td>{{regEvent.event.startDate|date('m/d/Y')}}</td>*/
/* 				<td>{{regEvent.event.endDate|date('m/d/Y')}}</td>*/
/* 				<td>{{regEvent.event.venue.name}}</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 		</tbody>*/
/* 	*/
/* {% endblock %}*/
/* */
