<?php

/* :venue:details.html.twig */
class __TwigTemplate_f0be3fddca9b5a293d5b7e2189367b33654b5cd4cfef7b9df64b9aede15f6553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":venue:details.html.twig", 1);
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
        $__internal_d023418f0587272d7e6852d9d4b8899774b129ee79352c240482cdcab0abb906 = $this->env->getExtension("native_profiler");
        $__internal_d023418f0587272d7e6852d9d4b8899774b129ee79352c240482cdcab0abb906->enter($__internal_d023418f0587272d7e6852d9d4b8899774b129ee79352c240482cdcab0abb906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venue:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d023418f0587272d7e6852d9d4b8899774b129ee79352c240482cdcab0abb906->leave($__internal_d023418f0587272d7e6852d9d4b8899774b129ee79352c240482cdcab0abb906_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3711216f1dd5ebccbcc328f92c7e5df3fc66f9174242668a98b254e191f608f = $this->env->getExtension("native_profiler");
        $__internal_d3711216f1dd5ebccbcc328f92c7e5df3fc66f9174242668a98b254e191f608f->enter($__internal_d3711216f1dd5ebccbcc328f92c7e5df3fc66f9174242668a98b254e191f608f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<a class = \"btn btn-default\"href=\"/venue/list\"> Back to List</a>
\t<hr>
\t<h2 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "name", array()), "html", null, true);
        echo "</h2>
\t<li class=\"list-group\">
\t\t<ul class=\"list-group-itme\">Description: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "description", array()), "html", null, true);
        echo "</ul>
\t\t<ul class=\"list-group-itme\">Address: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["venue"]) ? $context["venue"] : $this->getContext($context, "venue")), "address", array()), "html", null, true);
        echo "</ul>
\t</li>
";
        
        $__internal_d3711216f1dd5ebccbcc328f92c7e5df3fc66f9174242668a98b254e191f608f->leave($__internal_d3711216f1dd5ebccbcc328f92c7e5df3fc66f9174242668a98b254e191f608f_prof);

    }

    public function getTemplateName()
    {
        return ":venue:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	<a class = "btn btn-default"href="/venue/list"> Back to List</a>*/
/* 	<hr>*/
/* 	<h2 class="page-header">{{venue.name}}</h2>*/
/* 	<li class="list-group">*/
/* 		<ul class="list-group-itme">Description: {{venue.description}}</ul>*/
/* 		<ul class="list-group-itme">Address: {{venue.address}}</ul>*/
/* 	</li>*/
/* {% endblock %}*/
/* */
