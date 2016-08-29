<?php

/* base.html.twig */
class __TwigTemplate_940a3184e36cc77baa22c952feee39595c5b26ab16a499c6623038668618c3c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e0b69022cfad592e29fe72fe3095b66c488a8b05ed17dbf0e39eabd47ece96c = $this->env->getExtension("native_profiler");
        $__internal_6e0b69022cfad592e29fe72fe3095b66c488a8b05ed17dbf0e39eabd47ece96c->enter($__internal_6e0b69022cfad592e29fe72fe3095b66c488a8b05ed17dbf0e39eabd47ece96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/asset/css/banner.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          
            <a class=\"navbar-brand\" href=\"/\">E-Man</a>
          
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 41
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 42
            echo "              ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_USER")) {
                // line 43
                echo "                <li><a href=\"/users/regevents\">Registered Events</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/add\">Add Event</a></li>
              ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 47
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_ADMIN")) {
                // line 48
                echo "                <li><a href=\"/venue/add\">Add Venue</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/pending\">Pending Events</a></li>
              ";
            }
            // line 53
            echo "            ";
        } else {
            // line 54
            echo "              <li><a href=\"/register\">Register</a></li>
            ";
        }
        // line 56
        echo "            ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 57
            echo "              <li><a href=\"/logout\">Logout</a></li>
            ";
        } else {
            // line 59
            echo "              <li><a href=\"/login\">Login</a></li>
            ";
        }
        // line 61
        echo "            
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header class=\"image-bg-fluid-height\" style=\"background-color: #0091be;\">
      <img class=\"img-responsive img-center\" src=\"\" alt=\"\">
      <h1>Event Management system </h1>
    </header>

    <div class=\"container\">
        <div class=\"row\">
          <br>
            <div class=\"col-md-12\">
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 78
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                

            </div>
        </div>
        ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "     
    </div><!-- /.container -->
    ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "  </body>
</html>

";
        
        $__internal_6e0b69022cfad592e29fe72fe3095b66c488a8b05ed17dbf0e39eabd47ece96c->leave($__internal_6e0b69022cfad592e29fe72fe3095b66c488a8b05ed17dbf0e39eabd47ece96c_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_17e0f0faed380a6999162ff8a233dd1d10f21c755cb84a7330626c7468d35ab3 = $this->env->getExtension("native_profiler");
        $__internal_17e0f0faed380a6999162ff8a233dd1d10f21c755cb84a7330626c7468d35ab3->enter($__internal_17e0f0faed380a6999162ff8a233dd1d10f21c755cb84a7330626c7468d35ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_17e0f0faed380a6999162ff8a233dd1d10f21c755cb84a7330626c7468d35ab3->leave($__internal_17e0f0faed380a6999162ff8a233dd1d10f21c755cb84a7330626c7468d35ab3_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a116c655a48d411daf4c1b7e0b5fc7fd7d9c8681f036e583e0526ba54f6eae2 = $this->env->getExtension("native_profiler");
        $__internal_8a116c655a48d411daf4c1b7e0b5fc7fd7d9c8681f036e583e0526ba54f6eae2->enter($__internal_8a116c655a48d411daf4c1b7e0b5fc7fd7d9c8681f036e583e0526ba54f6eae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8a116c655a48d411daf4c1b7e0b5fc7fd7d9c8681f036e583e0526ba54f6eae2->leave($__internal_8a116c655a48d411daf4c1b7e0b5fc7fd7d9c8681f036e583e0526ba54f6eae2_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc9ec684689296d811e5124953bb945e0c860dd187461c11c3cf95a3373b49b6 = $this->env->getExtension("native_profiler");
        $__internal_fc9ec684689296d811e5124953bb945e0c860dd187461c11c3cf95a3373b49b6->enter($__internal_fc9ec684689296d811e5124953bb945e0c860dd187461c11c3cf95a3373b49b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc9ec684689296d811e5124953bb945e0c860dd187461c11c3cf95a3373b49b6->leave($__internal_fc9ec684689296d811e5124953bb945e0c860dd187461c11c3cf95a3373b49b6_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de6ef8f59a899d5c6287c502f741d901e73022dfaf7cc99c2308dcaf84c06e0b = $this->env->getExtension("native_profiler");
        $__internal_de6ef8f59a899d5c6287c502f741d901e73022dfaf7cc99c2308dcaf84c06e0b->enter($__internal_de6ef8f59a899d5c6287c502f741d901e73022dfaf7cc99c2308dcaf84c06e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de6ef8f59a899d5c6287c502f741d901e73022dfaf7cc99c2308dcaf84c06e0b->leave($__internal_de6ef8f59a899d5c6287c502f741d901e73022dfaf7cc99c2308dcaf84c06e0b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 87,  195 => 84,  184 => 19,  172 => 12,  162 => 88,  160 => 87,  156 => 85,  154 => 84,  148 => 80,  139 => 78,  135 => 77,  117 => 61,  113 => 59,  109 => 57,  106 => 56,  102 => 54,  99 => 53,  92 => 48,  90 => 47,  84 => 43,  81 => 42,  79 => 41,  54 => 20,  52 => 19,  47 => 17,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <link href="{{asset('/asset/css/banner.css')}}" rel="stylesheet">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <nav class="navbar navbar-inverse">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           */
/*             <a class="navbar-brand" href="/">E-Man</a>*/
/*           */
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav navbar-right">*/
/* */
/*             {% if app.user %}*/
/*               {% if app.user.userRole == 'ROLE_USER' %}*/
/*                 <li><a href="/users/regevents">Registered Events</a></li>*/
/*                 <li><a href="/venue/list">List Venues</a></li>*/
/*                 <li><a href="/events/list">List Events</a></li>*/
/*                 <li><a href="/events/add">Add Event</a></li>*/
/*               {% elseif app.user.userRole == 'ROLE_ADMIN' %}*/
/*                 <li><a href="/venue/add">Add Venue</a></li>*/
/*                 <li><a href="/venue/list">List Venues</a></li>*/
/*                 <li><a href="/events/list">List Events</a></li>*/
/*                 <li><a href="/events/pending">Pending Events</a></li>*/
/*               {% endif %}*/
/*             {% else %}*/
/*               <li><a href="/register">Register</a></li>*/
/*             {% endif %}*/
/*             {% if app.user %}*/
/*               <li><a href="/logout">Logout</a></li>*/
/*             {% else %}*/
/*               <li><a href="/login">Login</a></li>*/
/*             {% endif %}*/
/*             */
/*           </ul>*/
/*           */
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <header class="image-bg-fluid-height" style="background-color: #0091be;">*/
/*       <img class="img-responsive img-center" src="" alt="">*/
/*       <h1>Event Management system </h1>*/
/*     </header>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*           <br>*/
/*             <div class="col-md-12">*/
/*                 {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                     <div class="alert alert-success">{{flash_message}}</div>*/
/*                 {% endfor %}*/
/*                 */
/* */
/*             </div>*/
/*         </div>*/
/*         {% block body %}{% endblock %}*/
/*      */
/*     </div><!-- /.container -->*/
/*     {% block javascripts %}{% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
/* */
