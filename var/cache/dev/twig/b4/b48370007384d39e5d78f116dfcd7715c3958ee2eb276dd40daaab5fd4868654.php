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
        $__internal_01c98608adab8f373aac51bfd5b2139208a91e7f051ab86397439d7d0b465933 = $this->env->getExtension("native_profiler");
        $__internal_01c98608adab8f373aac51bfd5b2139208a91e7f051ab86397439d7d0b465933->enter($__internal_01c98608adab8f373aac51bfd5b2139208a91e7f051ab86397439d7d0b465933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venue/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c98608adab8f373aac51bfd5b2139208a91e7f051ab86397439d7d0b465933->leave($__internal_01c98608adab8f373aac51bfd5b2139208a91e7f051ab86397439d7d0b465933_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd0b97bff5f4c0af0ec15d85a7829d3889b5674d5ff4b43620b2a8eddeca490c = $this->env->getExtension("native_profiler");
        $__internal_bd0b97bff5f4c0af0ec15d85a7829d3889b5674d5ff4b43620b2a8eddeca490c->enter($__internal_bd0b97bff5f4c0af0ec15d85a7829d3889b5674d5ff4b43620b2a8eddeca490c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<a class = \"btn btn-default\"href=\"/venue/list\"> Back to List</a>
<hr>

<div class=\"row\">

          \t <div class=\"col-md-12\">

                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($this->env->getExtension('asset')->getAssetUrl("asset/venueimages/") . $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "image", array())), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"caption-full\">
                        
                        <h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "name", array()), "html", null, true);
        echo "</h3>
                        <h5>Address: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "address", array()), "html", null, true);
        echo "</h5>
                        <br>
                        <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "description", array()), "html", null, true);
        echo "</p>
                        <br>
                        <h4>Events Booked: </h4>
                        <div class=\"thumbnail\">
                    \t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<th>Event name</th>
\t\t\t\t\t\t\t\t\t\t<th>Start Date</th>
\t\t\t\t\t\t\t\t\t\t<th>End Date</th>
\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endDate", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "status", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t                    
\t                \t</div>
                    </div>
                    
                </div>
             </div>
</div>   

";
        
        $__internal_bd0b97bff5f4c0af0ec15d85a7829d3889b5674d5ff4b43620b2a8eddeca490c->leave($__internal_bd0b97bff5f4c0af0ec15d85a7829d3889b5674d5ff4b43620b2a8eddeca490c_prof);

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
        return array (  109 => 38,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  85 => 31,  81 => 30,  66 => 18,  61 => 16,  57 => 15,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* <a class = "btn btn-default"href="/venue/list"> Back to List</a>*/
/* <hr>*/
/* */
/* <div class="row">*/
/* */
/*           	 <div class="col-md-12">*/
/* */
/*                 <div class="thumbnail">*/
/*                     <img class="img-responsive" src="{{asset('asset/venueimages/')~venue.image }}" alt="">*/
/*                     <div class="caption-full">*/
/*                         */
/*                         <h3>{{venue.name}}</h3>*/
/*                         <h5>Address: {{venue.address}}</h5>*/
/*                         <br>*/
/*                         <p>{{venue.description}}</p>*/
/*                         <br>*/
/*                         <h4>Events Booked: </h4>*/
/*                         <div class="thumbnail">*/
/*                     		<table class="table table-striped">*/
/* 									<thead>*/
/* 										<th>Event name</th>*/
/* 										<th>Start Date</th>*/
/* 										<th>End Date</th>*/
/* 										<th>Status</th>*/
/* 									</thead>*/
/* 									<tbody>*/
/* 									{% for event in events %}*/
/* 										<tr>*/
/* 											<td>{{event.name}}</td>*/
/* 											<td>{{event.startDate|date('m/d/Y')}}</td>*/
/* 											<td>{{event.endDate|date('m/d/Y')}}</td>*/
/* 											<td>{{event.status}}</td>*/
/* 										</tr>*/
/* 									{% endfor %}*/
/* 									</tbody>*/
/* 							</table>*/
/* 	                    */
/* 	                	</div>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*              </div>*/
/* </div>   */
/* */
/* {% endblock %}*/
/* */
