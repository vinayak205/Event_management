<?php

/* venue/list.html.twig */
class __TwigTemplate_aacbefd8bec15c4c7985cc68d08ec506c3dc843e2d0575fd73bb70181e91211b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venue/list.html.twig", 1);
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
        $__internal_ffb954a26057496d3db5f58fc83a21ab9e68975b4ec978daa631dee8c1c2876e = $this->env->getExtension("native_profiler");
        $__internal_ffb954a26057496d3db5f58fc83a21ab9e68975b4ec978daa631dee8c1c2876e->enter($__internal_ffb954a26057496d3db5f58fc83a21ab9e68975b4ec978daa631dee8c1c2876e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venue/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb954a26057496d3db5f58fc83a21ab9e68975b4ec978daa631dee8c1c2876e->leave($__internal_ffb954a26057496d3db5f58fc83a21ab9e68975b4ec978daa631dee8c1c2876e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a941a057c0f163f9234852f0a3d6c5d8718cfb30aecbff83140bbc376851ab00 = $this->env->getExtension("native_profiler");
        $__internal_a941a057c0f163f9234852f0a3d6c5d8718cfb30aecbff83140bbc376851ab00->enter($__internal_a941a057c0f163f9234852f0a3d6c5d8718cfb30aecbff83140bbc376851ab00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    \t\t\t\t\t<a href=\"/venue/details/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
\t\t\t\t\t\t<a href=\"/venue/edit/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
\t\t\t\t\t\t<a href=\"/venue/delete/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["venue"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>\t
  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_a941a057c0f163f9234852f0a3d6c5d8718cfb30aecbff83140bbc376851ab00->leave($__internal_a941a057c0f163f9234852f0a3d6c5d8718cfb30aecbff83140bbc376851ab00_prof);

    }

    public function getTemplateName()
    {
        return "venue/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
/*     					<a href="/venue/details/{{venue.id}}" class="btn btn-success">View</a>*/
/* 						<a href="/venue/edit/{{venue.id}}" class="btn btn-default">Edit</a>*/
/* 						<a href="/venue/delete/{{venue.id}}" class="btn btn-danger">Delete</a>	*/
/*   					</div>*/
/* 				</div>*/
/* 				</td>*/
/* 			</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* {% endblock %}*/
/* */
