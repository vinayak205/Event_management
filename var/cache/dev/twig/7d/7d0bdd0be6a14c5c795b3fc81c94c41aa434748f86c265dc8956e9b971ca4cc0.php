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
        $__internal_93c61ff0c8e381a3452c6987725dde72f4d18c80b67addd1b3dd7daf1dcbb62e = $this->env->getExtension("native_profiler");
        $__internal_93c61ff0c8e381a3452c6987725dde72f4d18c80b67addd1b3dd7daf1dcbb62e->enter($__internal_93c61ff0c8e381a3452c6987725dde72f4d18c80b67addd1b3dd7daf1dcbb62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c61ff0c8e381a3452c6987725dde72f4d18c80b67addd1b3dd7daf1dcbb62e->leave($__internal_93c61ff0c8e381a3452c6987725dde72f4d18c80b67addd1b3dd7daf1dcbb62e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe7b5fd9d9a778c4214387e1bcd95ebe8acd7ef2479f123a56b21e41735ae541 = $this->env->getExtension("native_profiler");
        $__internal_fe7b5fd9d9a778c4214387e1bcd95ebe8acd7ef2479f123a56b21e41735ae541->enter($__internal_fe7b5fd9d9a778c4214387e1bcd95ebe8acd7ef2479f123a56b21e41735ae541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    \t\t\t\t\t";
            // line 15
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_USER")) {
                // line 16
                echo "    \t\t\t\t\t<a href=\"/events/details/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">View</a>
    \t\t\t\t\t\t";
                // line 17
                if (twig_in_filter($this->getAttribute($context["event"], "id", array()), (isset($context["regEvents"]) ? $context["regEvents"] : $this->getContext($context, "regEvents")))) {
                    // line 18
                    echo "    \t\t\t\t\t\t\t<a href=\"/events/unregister/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-danger\">UnRegister</a>
    \t\t\t\t\t\t";
                } else {
                    // line 20
                    echo "    \t\t\t\t\t\t\t<a href=\"/events/register/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Register</a>
    \t\t\t\t\t\t";
                }
                // line 22
                echo "    \t\t\t\t\t";
            } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                // line 23
                echo "    \t\t\t\t\t<a href=\"/events/details/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">View</a>
    \t\t\t\t\t";
            }
            // line 25
            echo "  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_fe7b5fd9d9a778c4214387e1bcd95ebe8acd7ef2479f123a56b21e41735ae541->leave($__internal_fe7b5fd9d9a778c4214387e1bcd95ebe8acd7ef2479f123a56b21e41735ae541_prof);

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
        return array (  108 => 30,  98 => 25,  92 => 23,  89 => 22,  83 => 20,  77 => 18,  75 => 17,  70 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
/*     					{% if role == 'ROLE_USER' %}*/
/*     					<a href="/events/details/{{event.id}}" class="btn btn-success">View</a>*/
/*     						{% if event.id in regEvents %}*/
/*     							<a href="/events/unregister/{{event.id}}" class="btn btn-danger">UnRegister</a>*/
/*     						{% else %}*/
/*     							<a href="/events/register/{{event.id}}" class="btn btn-primary">Register</a>*/
/*     						{% endif %}*/
/*     					{% elseif role == 'ROLE_ADMIN' %}*/
/*     					<a href="/events/details/{{event.id}}" class="btn btn-success">View</a>*/
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
