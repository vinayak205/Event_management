<?php

/* events/pending.html.twig */
class __TwigTemplate_2b27c280854e9d6b2e79324541a1abb4b6ea82f1db8964f6419b11f1e8252a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/pending.html.twig", 1);
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
        $__internal_d01181102029e331e9a8a675762317b4ac1f28f71d767b923b2242d0ff157462 = $this->env->getExtension("native_profiler");
        $__internal_d01181102029e331e9a8a675762317b4ac1f28f71d767b923b2242d0ff157462->enter($__internal_d01181102029e331e9a8a675762317b4ac1f28f71d767b923b2242d0ff157462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/pending.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01181102029e331e9a8a675762317b4ac1f28f71d767b923b2242d0ff157462->leave($__internal_d01181102029e331e9a8a675762317b4ac1f28f71d767b923b2242d0ff157462_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_99052d6df6da6773cd3d4c4cba845150a0376d150ef2bcf1997bf306d15a8fa0 = $this->env->getExtension("native_profiler");
        $__internal_99052d6df6da6773cd3d4c4cba845150a0376d150ef2bcf1997bf306d15a8fa0->enter($__internal_99052d6df6da6773cd3d4c4cba845150a0376d150ef2bcf1997bf306d15a8fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h2 class=\"page-header\">Pending Events</h2>
\t<table class=\"table table-striped\">
\t\t<tbody>
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 7
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<div class=\"card\">
  
  \t\t\t\t\t<div class=\"card-block\">
    \t\t\t\t\t<h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</h4>
    \t\t\t\t\t<p class=\"card-text\">Description: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "shortDescription", array()), "html", null, true);
            echo "</p>
    \t\t\t\t\t<p class=\"card-text\">Start Date: ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "m/d/Y"), "html", null, true);
            echo "</p>
    \t\t\t\t\t<a href=\"/events/pending/details/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
\t\t\t\t\t\t<a href=\"/events/approve/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Approve</a>
\t\t\t\t\t\t<a href=\"/events/reject/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Reject</a>\t
  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_99052d6df6da6773cd3d4c4cba845150a0376d150ef2bcf1997bf306d15a8fa0->leave($__internal_99052d6df6da6773cd3d4c4cba845150a0376d150ef2bcf1997bf306d15a8fa0_prof);

    }

    public function getTemplateName()
    {
        return "events/pending.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	<h2 class="page-header">Pending Events</h2>*/
/* 	<table class="table table-striped">*/
/* 		<tbody>*/
/* 			{% for event in events %}*/
/* 			<tr>*/
/* 				<td>*/
/* 				<div class="card">*/
/*   */
/*   					<div class="card-block">*/
/*     					<h4 class="card-title">{{event.name}}</h4>*/
/*     					<p class="card-text">Description: {{event.shortDescription}}</p>*/
/*     					<p class="card-text">Start Date: {{event.startDate|date("m/d/Y")}}</p>*/
/*     					<a href="/events/pending/details/{{event.id}}" class="btn btn-success">View</a>*/
/* 						<a href="/events/approve/{{event.id}}" class="btn btn-default">Approve</a>*/
/* 						<a href="/events/reject/{{event.id}}" class="btn btn-danger">Reject</a>	*/
/*   					</div>*/
/* 				</div>*/
/* 				</td>*/
/* 			</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* {% endblock %}*/
/* */
