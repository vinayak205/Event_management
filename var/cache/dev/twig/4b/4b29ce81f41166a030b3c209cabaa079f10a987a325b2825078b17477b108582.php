<?php

/* events/details.html.twig */
class __TwigTemplate_7aa3f5779f75a8f57a674d51c043ff565c602edb1768d38f8f24ecfef27a2a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/details.html.twig", 1);
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
        $__internal_875eb916d71e713bfa3c65c035cd386622f135eff95629fd9dd474f0056387f7 = $this->env->getExtension("native_profiler");
        $__internal_875eb916d71e713bfa3c65c035cd386622f135eff95629fd9dd474f0056387f7->enter($__internal_875eb916d71e713bfa3c65c035cd386622f135eff95629fd9dd474f0056387f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_875eb916d71e713bfa3c65c035cd386622f135eff95629fd9dd474f0056387f7->leave($__internal_875eb916d71e713bfa3c65c035cd386622f135eff95629fd9dd474f0056387f7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b856bba6374d232bda9974995b8c561b660deafcc1c5e1ff725529b5c168d16a = $this->env->getExtension("native_profiler");
        $__internal_b856bba6374d232bda9974995b8c561b660deafcc1c5e1ff725529b5c168d16a->enter($__internal_b856bba6374d232bda9974995b8c561b660deafcc1c5e1ff725529b5c168d16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<a class = \"btn btn-default\"href=\"/events/list\"> Back to List</a>
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
                        <h5>Registrations: ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["noOfUsers"]) ? $context["noOfUsers"] : $this->getContext($context, "noOfUsers")), "html", null, true);
        echo "</h5>
                        <br>
                        <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "</p>
                        <h3>Venue Details: </h3>
                        <div class=\"thumbnail\">
                    \t\t<img class=\"img-responsive\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, ($this->env->getExtension('asset')->getAssetUrl("asset/venueimages/") . $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "venue", array()), "image", array())), "html", null, true);
        echo "\" alt=\"\">
\t                    \t<div class=\"caption-full\">
\t                        
\t                        \t<h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "venue", array()), "name", array()), "html", null, true);
        echo "</h3>
\t                        \t<h5>Address: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "venue", array()), "address", array()), "html", null, true);
        echo "</h5>
\t                        \t<p>";
        // line 31
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
        
        $__internal_b856bba6374d232bda9974995b8c561b660deafcc1c5e1ff725529b5c168d16a->leave($__internal_b856bba6374d232bda9974995b8c561b660deafcc1c5e1ff725529b5c168d16a_prof);

    }

    public function getTemplateName()
    {
        return "events/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  102 => 30,  98 => 29,  92 => 26,  86 => 23,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* <a class = "btn btn-default"href="/events/list"> Back to List</a>*/
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
/*                         <h5>Registrations: {{noOfUsers}}</h5>*/
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
