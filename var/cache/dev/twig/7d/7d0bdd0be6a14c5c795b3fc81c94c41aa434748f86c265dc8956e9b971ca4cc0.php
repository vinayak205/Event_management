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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_718c006f1babe2b9692527ee8ad5ef4e15686783100e4ae6e44fda6c86cf5bfe = $this->env->getExtension("native_profiler");
        $__internal_718c006f1babe2b9692527ee8ad5ef4e15686783100e4ae6e44fda6c86cf5bfe->enter($__internal_718c006f1babe2b9692527ee8ad5ef4e15686783100e4ae6e44fda6c86cf5bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718c006f1babe2b9692527ee8ad5ef4e15686783100e4ae6e44fda6c86cf5bfe->leave($__internal_718c006f1babe2b9692527ee8ad5ef4e15686783100e4ae6e44fda6c86cf5bfe_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66baa7882346f5aab356e63599ca0bcea5456919e6bdd95236ec8710543fa35f = $this->env->getExtension("native_profiler");
        $__internal_66baa7882346f5aab356e63599ca0bcea5456919e6bdd95236ec8710543fa35f->enter($__internal_66baa7882346f5aab356e63599ca0bcea5456919e6bdd95236ec8710543fa35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/asset/css/sample.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_66baa7882346f5aab356e63599ca0bcea5456919e6bdd95236ec8710543fa35f->leave($__internal_66baa7882346f5aab356e63599ca0bcea5456919e6bdd95236ec8710543fa35f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e41b9178ebb93af04ca77142bf644bec4eb4d42cf8a822d31a93c4f18479726f = $this->env->getExtension("native_profiler");
        $__internal_e41b9178ebb93af04ca77142bf644bec4eb4d42cf8a822d31a93c4f18479726f->enter($__internal_e41b9178ebb93af04ca77142bf644bec4eb4d42cf8a822d31a93c4f18479726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <h2 class=\"page-header\">Events</h2>
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"[ col-xs-12 col-sm-offset-2 col-sm-8 ]\">
                <ul class=\"event-list\">
\t\t\t     ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 12
            echo "                        <li>
                        
                        <img alt=\"Independence Day\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, ($this->env->getExtension('asset')->getAssetUrl("asset/eventimages/") . $this->getAttribute($context["event"], "image", array())), "html", null, true);
            echo "\" />
                        <div class=\"info\">
                            <h2 class=\"title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</h4>
                            <p class=\"desc\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "Y-m-d"), "html", null, true);
            echo "</p>
                            <br>
                            ";
            // line 19
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_USER")) {
                // line 20
                echo "                                <a href=\"/events/details/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">View</a>
                            ";
                // line 21
                if (twig_in_filter($this->getAttribute($context["event"], "id", array()), (isset($context["regEvents"]) ? $context["regEvents"] : $this->getContext($context, "regEvents")))) {
                    // line 22
                    echo "                                ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute($this->getAttribute($context["event"], "organizer", array()), "id", array()))) {
                        // line 23
                        echo "                                    <a href=\"/events/unregister/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                        echo "\" class=\"btn btn-danger\">UnRegister</a>

                                ";
                    }
                    // line 26
                    echo "                            ";
                } else {
                    // line 27
                    echo "                                <a href=\"/events/register/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Register</a>
                            ";
                }
                // line 29
                echo "                        ";
            } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                // line 30
                echo "                            <a href=\"/events/details/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">View</a>
                        ";
            }
            // line 32
            echo "                        </div>
                        
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t
";
        
        $__internal_e41b9178ebb93af04ca77142bf644bec4eb4d42cf8a822d31a93c4f18479726f->leave($__internal_e41b9178ebb93af04ca77142bf644bec4eb4d42cf8a822d31a93c4f18479726f_prof);

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
        return array (  132 => 36,  123 => 32,  117 => 30,  114 => 29,  108 => 27,  105 => 26,  98 => 23,  95 => 22,  93 => 21,  88 => 20,  86 => 19,  81 => 17,  77 => 16,  72 => 14,  68 => 12,  64 => 11,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/* <link href="{{asset('/asset/css/sample.css')}}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/*         <h2 class="page-header">Events</h2>*/
/*         <div class="container">*/
/*         <div class="row">*/
/*             <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">*/
/*                 <ul class="event-list">*/
/* 			     {% for event in events %}*/
/*                         <li>*/
/*                         */
/*                         <img alt="Independence Day" src="{{asset('asset/eventimages/')~event.image }}" />*/
/*                         <div class="info">*/
/*                             <h2 class="title">{{event.name}}</h4>*/
/*                             <p class="desc">{{event.startDate|date('Y-m-d')}}</p>*/
/*                             <br>*/
/*                             {% if role == 'ROLE_USER' %}*/
/*                                 <a href="/events/details/{{event.id}}" class="btn btn-success">View</a>*/
/*                             {% if event.id in regEvents %}*/
/*                                 {% if app.user.id != event.organizer.id %}*/
/*                                     <a href="/events/unregister/{{event.id}}" class="btn btn-danger">UnRegister</a>*/
/* */
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 <a href="/events/register/{{event.id}}" class="btn btn-primary">Register</a>*/
/*                             {% endif %}*/
/*                         {% elseif role == 'ROLE_ADMIN' %}*/
/*                             <a href="/events/details/{{event.id}}" class="btn btn-success">View</a>*/
/*                         {% endif %}*/
/*                         </div>*/
/*                         */
/*                 </li>*/
/*             {% endfor %}*/
/* 			*/
/* {% endblock %}*/
/* */
