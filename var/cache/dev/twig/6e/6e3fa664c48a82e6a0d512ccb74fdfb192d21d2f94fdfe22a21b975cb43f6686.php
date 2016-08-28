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
        $__internal_4700b5e31bd5e502b790fe7a65928507c1a4547f039157c3ddbf533d4cc1d319 = $this->env->getExtension("native_profiler");
        $__internal_4700b5e31bd5e502b790fe7a65928507c1a4547f039157c3ddbf533d4cc1d319->enter($__internal_4700b5e31bd5e502b790fe7a65928507c1a4547f039157c3ddbf533d4cc1d319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
          ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 35
            echo "            <a class=\"navbar-brand\" href=\"/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
          ";
        } else {
            // line 37
            echo "            <a class=\"navbar-brand\" href=\"/\">E-Man</a>
          ";
        }
        // line 39
        echo "        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">

            ";
        // line 43
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 44
            echo "              ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_USER")) {
                // line 45
                echo "                <li><a href=\"/users/regevents\">Registered Events</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/add\">Add Event</a></li>
              ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 49
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_ADMIN")) {
                // line 50
                echo "                <li><a href=\"/venue/add\">Add Venue</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/pending\">Pending Events</a></li>
              ";
            }
            // line 55
            echo "            ";
        } else {
            // line 56
            echo "              <li><a href=\"/register\">Register</a></li>
            ";
        }
        // line 58
        echo "            ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 59
            echo "              <li><a href=\"/logout\">Logout</a></li>
            ";
        } else {
            // line 61
            echo "              <li><a href=\"/login\">Login</a></li>
            ";
        }
        // line 63
        echo "            
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header class=\"image-bg-fluid-height\" style=\"background-color: #000000;\">
      <img class=\"img-responsive img-center\" src=\"\" alt=\"\">
      <h1>Event Management system </h1>
    </header>

    <div class=\"container\">
        <div class=\"row\">
          <br>
            <div class=\"col-md-12\">
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 80
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                

            </div>
        </div>
        ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "     
    </div><!-- /.container -->
    ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "  </body>
</html>

";
        
        $__internal_4700b5e31bd5e502b790fe7a65928507c1a4547f039157c3ddbf533d4cc1d319->leave($__internal_4700b5e31bd5e502b790fe7a65928507c1a4547f039157c3ddbf533d4cc1d319_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_1532a59b276ef58337d0497cf37ffaff2522b994779d6b0767a446f3c9009785 = $this->env->getExtension("native_profiler");
        $__internal_1532a59b276ef58337d0497cf37ffaff2522b994779d6b0767a446f3c9009785->enter($__internal_1532a59b276ef58337d0497cf37ffaff2522b994779d6b0767a446f3c9009785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1532a59b276ef58337d0497cf37ffaff2522b994779d6b0767a446f3c9009785->leave($__internal_1532a59b276ef58337d0497cf37ffaff2522b994779d6b0767a446f3c9009785_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4518bd6de8164413d5831e7ed3d98bc5a23acd69a98bde82dea81dbb6cb583a7 = $this->env->getExtension("native_profiler");
        $__internal_4518bd6de8164413d5831e7ed3d98bc5a23acd69a98bde82dea81dbb6cb583a7->enter($__internal_4518bd6de8164413d5831e7ed3d98bc5a23acd69a98bde82dea81dbb6cb583a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4518bd6de8164413d5831e7ed3d98bc5a23acd69a98bde82dea81dbb6cb583a7->leave($__internal_4518bd6de8164413d5831e7ed3d98bc5a23acd69a98bde82dea81dbb6cb583a7_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_73e40a0e3530976a1594dd7e006dfbce9e3903f61dbd7b9b981416f97e44af58 = $this->env->getExtension("native_profiler");
        $__internal_73e40a0e3530976a1594dd7e006dfbce9e3903f61dbd7b9b981416f97e44af58->enter($__internal_73e40a0e3530976a1594dd7e006dfbce9e3903f61dbd7b9b981416f97e44af58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73e40a0e3530976a1594dd7e006dfbce9e3903f61dbd7b9b981416f97e44af58->leave($__internal_73e40a0e3530976a1594dd7e006dfbce9e3903f61dbd7b9b981416f97e44af58_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d46bf0377d20848c2b62f21d0d8c5ad26b4827559e1fdcd03320034f93b9d5b = $this->env->getExtension("native_profiler");
        $__internal_9d46bf0377d20848c2b62f21d0d8c5ad26b4827559e1fdcd03320034f93b9d5b->enter($__internal_9d46bf0377d20848c2b62f21d0d8c5ad26b4827559e1fdcd03320034f93b9d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9d46bf0377d20848c2b62f21d0d8c5ad26b4827559e1fdcd03320034f93b9d5b->leave($__internal_9d46bf0377d20848c2b62f21d0d8c5ad26b4827559e1fdcd03320034f93b9d5b_prof);

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
        return array (  217 => 89,  206 => 86,  195 => 19,  183 => 12,  173 => 90,  171 => 89,  167 => 87,  165 => 86,  159 => 82,  150 => 80,  146 => 79,  128 => 63,  124 => 61,  120 => 59,  117 => 58,  113 => 56,  110 => 55,  103 => 50,  101 => 49,  95 => 45,  92 => 44,  90 => 43,  84 => 39,  80 => 37,  74 => 35,  72 => 34,  54 => 20,  52 => 19,  47 => 17,  39 => 12,  26 => 1,);
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
/*           {% if app.user %}*/
/*             <a class="navbar-brand" href="/">{{app.user.username}}</a>*/
/*           {% else %}*/
/*             <a class="navbar-brand" href="/">E-Man</a>*/
/*           {% endif %}*/
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
/*     <header class="image-bg-fluid-height" style="background-color: #000000;">*/
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
