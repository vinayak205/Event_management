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
        $__internal_73252f5ee1b154f9e5f4b7d2c71df5b176903b2ab5d3a9cce5b934d7494df8fb = $this->env->getExtension("native_profiler");
        $__internal_73252f5ee1b154f9e5f4b7d2c71df5b176903b2ab5d3a9cce5b934d7494df8fb->enter($__internal_73252f5ee1b154f9e5f4b7d2c71df5b176903b2ab5d3a9cce5b934d7494df8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venue/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73252f5ee1b154f9e5f4b7d2c71df5b176903b2ab5d3a9cce5b934d7494df8fb->leave($__internal_73252f5ee1b154f9e5f4b7d2c71df5b176903b2ab5d3a9cce5b934d7494df8fb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9049022aee0a1d07aebd8873a200a282eb63d7db78fc3734a804aae8fcb051da = $this->env->getExtension("native_profiler");
        $__internal_9049022aee0a1d07aebd8873a200a282eb63d7db78fc3734a804aae8fcb051da->enter($__internal_9049022aee0a1d07aebd8873a200a282eb63d7db78fc3734a804aae8fcb051da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9049022aee0a1d07aebd8873a200a282eb63d7db78fc3734a804aae8fcb051da->leave($__internal_9049022aee0a1d07aebd8873a200a282eb63d7db78fc3734a804aae8fcb051da_prof);

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
