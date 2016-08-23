<?php

/* :venue:list.html.twig */
class __TwigTemplate_aacbefd8bec15c4c7985cc68d08ec506c3dc843e2d0575fd73bb70181e91211b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":venue:list.html.twig", 1);
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
        $__internal_2d9163fe339f9d973f2d3096cafb7ad74a3f3cfbda35d0c006d1e54dafe56d70 = $this->env->getExtension("native_profiler");
        $__internal_2d9163fe339f9d973f2d3096cafb7ad74a3f3cfbda35d0c006d1e54dafe56d70->enter($__internal_2d9163fe339f9d973f2d3096cafb7ad74a3f3cfbda35d0c006d1e54dafe56d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venue:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d9163fe339f9d973f2d3096cafb7ad74a3f3cfbda35d0c006d1e54dafe56d70->leave($__internal_2d9163fe339f9d973f2d3096cafb7ad74a3f3cfbda35d0c006d1e54dafe56d70_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8819e3436111b9fe7c2bf7ec5f5761d4b9853478ccaf30471e6580699210bc52 = $this->env->getExtension("native_profiler");
        $__internal_8819e3436111b9fe7c2bf7ec5f5761d4b9853478ccaf30471e6580699210bc52->enter($__internal_8819e3436111b9fe7c2bf7ec5f5761d4b9853478ccaf30471e6580699210bc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h2 class=\"page-header\">Venues</h2>
\t<table class=\"table table-striped\">
\t\t<tbody>
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["venues"]) ? $context["venues"] : $this->getContext($context, "venues")));
        foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
            // line 7
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t<div class=\"card\">
  
  \t\t\t\t\t<div class=\"card-block\">
    \t\t\t\t\t<h4 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "name", array()), "html", null, true);
            echo "</h4>
    \t\t\t\t\t<p class=\"card-text\">Address: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "address", array()), "html", null, true);
            echo "</p>
    \t\t\t\t\t";
            // line 14
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                // line 15
                echo "    \t\t\t\t\t<a href=\"/venue/details/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">View</a>
\t\t\t\t\t\t<a href=\"/venue/edit/";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-default\">Edit</a>
\t\t\t\t\t\t<a href=\"/venue/delete/";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t";
            } elseif ((            // line 18
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_USER")) {
                // line 19
                echo "\t\t\t\t\t\t<a href=\"/venue/details/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">View</a>
\t\t\t\t\t\t";
            }
            // line 21
            echo "  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_8819e3436111b9fe7c2bf7ec5f5761d4b9853478ccaf30471e6580699210bc52->leave($__internal_8819e3436111b9fe7c2bf7ec5f5761d4b9853478ccaf30471e6580699210bc52_prof);

    }

    public function getTemplateName()
    {
        return ":venue:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  87 => 21,  81 => 19,  79 => 18,  75 => 17,  71 => 16,  66 => 15,  64 => 14,  60 => 13,  56 => 12,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	<h2 class="page-header">Venues</h2>*/
/* 	<table class="table table-striped">*/
/* 		<tbody>*/
/* 			{% for venue in venues %}*/
/* 			<tr>*/
/* 				<td>*/
/* 				<div class="card">*/
/*   */
/*   					<div class="card-block">*/
/*     					<h4 class="card-title">{{venue.name}}</h4>*/
/*     					<p class="card-text">Address: {{venue.address}}</p>*/
/*     					{% if role == 'ROLE_ADMIN' %}*/
/*     					<a href="/venue/details/{{venue.id}}" class="btn btn-success">View</a>*/
/* 						<a href="/venue/edit/{{venue.id}}" class="btn btn-default">Edit</a>*/
/* 						<a href="/venue/delete/{{venue.id}}" class="btn btn-danger">Delete</a>*/
/* 						{% elseif role == 'ROLE_USER' %}*/
/* 						<a href="/venue/details/{{venue.id}}" class="btn btn-success">View</a>*/
/* 						{% endif %}*/
/*   					</div>*/
/* 				</div>*/
/* 				</td>*/
/* 			</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* {% endblock %}*/
/* */
