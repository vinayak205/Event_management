<?php

/* events/pendingdetails.html.twig */
class __TwigTemplate_dd547169cef585309f16bbfc974b836ad98f0df4e145c50710b8202411cc99d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/pendingdetails.html.twig", 1);
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
        $__internal_530ba358cfb51b3ccff800aebd2ab48755ff53ad6205b95d8f0968f21ba7359b = $this->env->getExtension("native_profiler");
        $__internal_530ba358cfb51b3ccff800aebd2ab48755ff53ad6205b95d8f0968f21ba7359b->enter($__internal_530ba358cfb51b3ccff800aebd2ab48755ff53ad6205b95d8f0968f21ba7359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/pendingdetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_530ba358cfb51b3ccff800aebd2ab48755ff53ad6205b95d8f0968f21ba7359b->leave($__internal_530ba358cfb51b3ccff800aebd2ab48755ff53ad6205b95d8f0968f21ba7359b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_70dae2fd1e0b995615ce887295948d8a3cae0b0212a09e5b24282dc00130a34e = $this->env->getExtension("native_profiler");
        $__internal_70dae2fd1e0b995615ce887295948d8a3cae0b0212a09e5b24282dc00130a34e->enter($__internal_70dae2fd1e0b995615ce887295948d8a3cae0b0212a09e5b24282dc00130a34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<a class = \"btn btn-default\"href=\"/events/pending\"> Back to List</a>
<hr>

<div class=\"row\">

          \t <div class=\"col-md-12\">

                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($this->env->getExtension('asset')->getAssetUrl("asset/eventimages/") . $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image", array())), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"caption-full\">
                        
                        <h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h3>
                        <h5>Start Time: ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate", array()), "Y-m-d H:i"), "html", null, true);
        echo "</h5>
                        <h5>End Time: ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate", array()), "Y-m-d H:i"), "html", null, true);
        echo "</h5>
                        <h5>Host: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "host", array()), "html", null, true);
        echo "</h5>
                        <h5>Organizer: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "organizer", array()), "username", array()), "html", null, true);
        echo "</h5>
                        <h5>Category: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category", array()), "html", null, true);
        echo "</h5>
                        <br>
                        <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</p>
                        <h3>Venue Details: </h3>
                        <div class=\"thumbnail\">
                    \t\t<img class=\"img-responsive\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($this->env->getExtension('asset')->getAssetUrl("asset/venueimages/") . $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "venue", array()), "image", array())), "html", null, true);
        echo "\" alt=\"\">
\t                    \t<div class=\"caption-full\">
\t                        
\t                        \t<h3>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "venue", array()), "name", array()), "html", null, true);
        echo "</h3>
\t                        \t<h5>Address: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "venue", array()), "address", array()), "html", null, true);
        echo "</h5>
\t                        \t<p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "venue", array()), "description", array()), "html", null, true);
        echo "</p>
\t                        \t<br>
\t                        \t
\t                        \t
\t                    \t</div>
\t                    
\t                \t</div>
                    </div>
                    
                </div>
             </div>
</div>   

";
        
        $__internal_70dae2fd1e0b995615ce887295948d8a3cae0b0212a09e5b24282dc00130a34e->leave($__internal_70dae2fd1e0b995615ce887295948d8a3cae0b0212a09e5b24282dc00130a34e_prof);

    }

    public function getTemplateName()
    {
        return "events/pendingdetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  98 => 29,  94 => 28,  88 => 25,  82 => 22,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* <a class = "btn btn-default"href="/events/pending"> Back to List</a>*/
/* <hr>*/
/* */
/* <div class="row">*/
/* */
/*           	 <div class="col-md-12">*/
/* */
/*                 <div class="thumbnail">*/
/*                     <img class="img-responsive" src="{{asset('asset/eventimages/')~event.image }}" alt="">*/
/*                     <div class="caption-full">*/
/*                         */
/*                         <h3>{{event.name}}</h3>*/
/*                         <h5>Start Time: {{event.startDate|date('Y-m-d H:i')}}</h5>*/
/*                         <h5>End Time: {{event.endDate|date('Y-m-d H:i')}}</h5>*/
/*                         <h5>Host: {{event.host}}</h5>*/
/*                         <h5>Organizer: {{event.organizer.username}}</h5>*/
/*                         <h5>Category: {{event.category}}</h5>*/
/*                         <br>*/
/*                         <p>{{event.description}}</p>*/
/*                         <h3>Venue Details: </h3>*/
/*                         <div class="thumbnail">*/
/*                     		<img class="img-responsive" src="{{asset('asset/venueimages/')~event.venue.image }}" alt="">*/
/* 	                    	<div class="caption-full">*/
/* 	                        */
/* 	                        	<h3>{{event.venue.name}}</h3>*/
/* 	                        	<h5>Address: {{event.venue.address}}</h5>*/
/* 	                        	<p>{{event.venue.description}}</p>*/
/* 	                        	<br>*/
/* 	                        	*/
/* 	                        	*/
/* 	                    	</div>*/
/* 	                    */
/* 	                	</div>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*              </div>*/
/* </div>   */
/* */
/* {% endblock %}*/
