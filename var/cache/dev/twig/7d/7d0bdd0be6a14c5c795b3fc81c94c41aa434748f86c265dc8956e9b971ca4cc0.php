<?php

/* :events:list.html.twig */
class __TwigTemplate_7c69f9b5a753860035a1d8f887fb36dd2d1673e6af31b4ca6fcc66285f7ffdf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":events:list.html.twig", 1);
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
        $__internal_eaa0d2ea0592eda20406b83be5aadf925df4bf8ff6d8e8182a93fcdefe0f196c = $this->env->getExtension("native_profiler");
        $__internal_eaa0d2ea0592eda20406b83be5aadf925df4bf8ff6d8e8182a93fcdefe0f196c->enter($__internal_eaa0d2ea0592eda20406b83be5aadf925df4bf8ff6d8e8182a93fcdefe0f196c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":events:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa0d2ea0592eda20406b83be5aadf925df4bf8ff6d8e8182a93fcdefe0f196c->leave($__internal_eaa0d2ea0592eda20406b83be5aadf925df4bf8ff6d8e8182a93fcdefe0f196c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76383da455a1675e022287953f4da7d2b9261819161105a5274ce3adfc3c80e7 = $this->env->getExtension("native_profiler");
        $__internal_76383da455a1675e022287953f4da7d2b9261819161105a5274ce3adfc3c80e7->enter($__internal_76383da455a1675e022287953f4da7d2b9261819161105a5274ce3adfc3c80e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/asset/css/sample.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_76383da455a1675e022287953f4da7d2b9261819161105a5274ce3adfc3c80e7->leave($__internal_76383da455a1675e022287953f4da7d2b9261819161105a5274ce3adfc3c80e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1fead0e7c6ce9d4e608687f3655119928ed39eaa92927e555bffaba501728b0 = $this->env->getExtension("native_profiler");
        $__internal_e1fead0e7c6ce9d4e608687f3655119928ed39eaa92927e555bffaba501728b0->enter($__internal_e1fead0e7c6ce9d4e608687f3655119928ed39eaa92927e555bffaba501728b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            
                            ";
            // line 17
            if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_USER")) {
                // line 18
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["event"], "organizer", array()), "id", array()))) {
                    // line 19
                    echo "                                    <h2 class=\"title\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                    echo " (Organizer)</h2>
                                ";
                } else {
                    // line 21
                    echo "                                    <h2 class=\"title\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                    echo "</h2>
                                ";
                }
                // line 23
                echo "                                <p class=\"desc\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "Y-m-d"), "html", null, true);
                echo "</p>
                                <br>
                                <a href=\"/events/details/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">View</a>
                                ";
                // line 26
                if (twig_in_filter($this->getAttribute($context["event"], "id", array()), (isset($context["regEvents"]) ? $context["regEvents"] : $this->getContext($context, "regEvents")))) {
                    // line 27
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute($this->getAttribute($context["event"], "organizer", array()), "id", array()))) {
                        // line 28
                        echo "                                        <a href=\"/events/unregister/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                        echo "\" class=\"btn btn-danger\">UnRegister</a>

                                    ";
                    }
                    // line 31
                    echo "                                ";
                } else {
                    // line 32
                    echo "                                    <a href=\"/events/register/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Register</a>
                                ";
                }
                // line 34
                echo "                            ";
            } elseif (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "ROLE_ADMIN")) {
                // line 35
                echo "                                <h2 class=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</h2>
                                <p class=\"desc\">";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "Y-m-d"), "html", null, true);
                echo "</p>
                                <br>
                                <a href=\"/events/details/";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">View</a>
                            ";
            } else {
                // line 40
                echo "                                <h2 class=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</h2>
                                <p class=\"desc\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startDate", array()), "Y-m-d"), "html", null, true);
                echo "</p>
                            ";
            }
            // line 43
            echo "                        </div>
                        
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t
";
        
        $__internal_e1fead0e7c6ce9d4e608687f3655119928ed39eaa92927e555bffaba501728b0->leave($__internal_e1fead0e7c6ce9d4e608687f3655119928ed39eaa92927e555bffaba501728b0_prof);

    }

    public function getTemplateName()
    {
        return ":events:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 47,  154 => 43,  149 => 41,  144 => 40,  139 => 38,  134 => 36,  129 => 35,  126 => 34,  120 => 32,  117 => 31,  110 => 28,  107 => 27,  105 => 26,  101 => 25,  95 => 23,  89 => 21,  83 => 19,  80 => 18,  78 => 17,  72 => 14,  68 => 12,  64 => 11,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
/*                             */
/*                             {% if role == 'ROLE_USER' %}*/
/*                                 {% if app.user.id == event.organizer.id %}*/
/*                                     <h2 class="title">{{event.name}} (Organizer)</h2>*/
/*                                 {% else %}*/
/*                                     <h2 class="title">{{event.name}}</h2>*/
/*                                 {% endif %}*/
/*                                 <p class="desc">{{event.startDate|date('Y-m-d')}}</p>*/
/*                                 <br>*/
/*                                 <a href="/events/details/{{event.id}}" class="btn btn-success">View</a>*/
/*                                 {% if event.id in regEvents %}*/
/*                                     {% if app.user.id != event.organizer.id %}*/
/*                                         <a href="/events/unregister/{{event.id}}" class="btn btn-danger">UnRegister</a>*/
/* */
/*                                     {% endif %}*/
/*                                 {% else %}*/
/*                                     <a href="/events/register/{{event.id}}" class="btn btn-primary">Register</a>*/
/*                                 {% endif %}*/
/*                             {% elseif role == 'ROLE_ADMIN' %}*/
/*                                 <h2 class="title">{{event.name}}</h2>*/
/*                                 <p class="desc">{{event.startDate|date('Y-m-d')}}</p>*/
/*                                 <br>*/
/*                                 <a href="/events/details/{{event.id}}" class="btn btn-success">View</a>*/
/*                             {% else %}*/
/*                                 <h2 class="title">{{event.name}}</h2>*/
/*                                 <p class="desc">{{event.startDate|date('Y-m-d')}}</p>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         */
/*                 </li>*/
/*             {% endfor %}*/
/* 			*/
/* {% endblock %}*/
/* */
