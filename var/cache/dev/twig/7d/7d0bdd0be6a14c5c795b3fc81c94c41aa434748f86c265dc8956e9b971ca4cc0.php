<?php

/* events/list.html.twig */
class __TwigTemplate_7c69f9b5a753860035a1d8f887fb36dd2d1673e6af31b4ca6fcc66285f7ffdf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/list.html.twig", 1);
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
        $__internal_503fc3ca9f795fcb7a7ea476f97d59022fb38af604c504ec8763c7f781e7db1a = $this->env->getExtension("native_profiler");
        $__internal_503fc3ca9f795fcb7a7ea476f97d59022fb38af604c504ec8763c7f781e7db1a->enter($__internal_503fc3ca9f795fcb7a7ea476f97d59022fb38af604c504ec8763c7f781e7db1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_503fc3ca9f795fcb7a7ea476f97d59022fb38af604c504ec8763c7f781e7db1a->leave($__internal_503fc3ca9f795fcb7a7ea476f97d59022fb38af604c504ec8763c7f781e7db1a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f22c5ef022b98070347879af469e219fe9772b5803ba095eb5c574368f4620a5 = $this->env->getExtension("native_profiler");
        $__internal_f22c5ef022b98070347879af469e219fe9772b5803ba095eb5c574368f4620a5->enter($__internal_f22c5ef022b98070347879af469e219fe9772b5803ba095eb5c574368f4620a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h2 class=\"page-header\">Events</h2>
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
    \t\t\t\t\t<a href=\"/events/details/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
    \t\t\t\t\t";
            // line 16
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_USER")) {
                // line 17
                echo "    \t\t\t\t\t<a href=\"/events/register/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-default\">Register</a>
    \t\t\t\t\t<a href=\"/events/unregister/";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger\">UnRegister</a>
    \t\t\t\t\t";
            }
            // line 20
            echo "  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_f22c5ef022b98070347879af469e219fe9772b5803ba095eb5c574368f4620a5->leave($__internal_f22c5ef022b98070347879af469e219fe9772b5803ba095eb5c574368f4620a5_prof);

    }

    public function getTemplateName()
    {
        return "events/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  84 => 20,  79 => 18,  74 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	<h2 class="page-header">Events</h2>*/
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
/*     					<a href="/events/details/{{event.id}}" class="btn btn-success">View</a>*/
/*     					{% if role == 'ROLE_USER' %}*/
/*     					<a href="/events/register/{{event.id}}" class="btn btn-default">Register</a>*/
/*     					<a href="/events/unregister/{{event.id}}" class="btn btn-danger">UnRegister</a>*/
/*     					{% endif %}*/
/*   					</div>*/
/* 				</div>*/
/* 				</td>*/
/* 			</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* {% endblock %}*/
/* */
