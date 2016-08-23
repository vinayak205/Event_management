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
        $__internal_c8beaf6137496594bb51779c3d6d53c8a25dd8c79b5529e4dd271aad2dbe63de = $this->env->getExtension("native_profiler");
        $__internal_c8beaf6137496594bb51779c3d6d53c8a25dd8c79b5529e4dd271aad2dbe63de->enter($__internal_c8beaf6137496594bb51779c3d6d53c8a25dd8c79b5529e4dd271aad2dbe63de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
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
          <ul class=\"nav navbar-nav\">

            ";
        // line 37
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 38
            echo "              ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_USER")) {
                // line 39
                echo "                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/add\">Add Event</a></li>
              ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 42
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_ADMIN")) {
                // line 43
                echo "                <li><a href=\"/venue/add\">Add Venue</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/pending\">Pending Events</a></li>
              ";
            }
            // line 48
            echo "            ";
        } else {
            // line 49
            echo "              <li><a href=\"/register\">Register</a></li>
            ";
        }
        // line 51
        echo "            
          </ul>
          <ul class = \"nav pull-right\">
            ";
        // line 54
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 55
            echo "            <li><a href=\"/logout\">Logout</a></li>
            ";
        } else {
            // line 57
            echo "            <li><a href=\"/login\">Login</a></li>
            ";
        }
        // line 59
        echo "          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 68
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
            </div>
        </div>

     
    </div><!-- /.container -->
    ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "  </body>
</html>

";
        
        $__internal_c8beaf6137496594bb51779c3d6d53c8a25dd8c79b5529e4dd271aad2dbe63de->leave($__internal_c8beaf6137496594bb51779c3d6d53c8a25dd8c79b5529e4dd271aad2dbe63de_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_bac159fe84f0d4de62fef826d883de1c6bb5fad5f47a4ea340102ca72a646bfb = $this->env->getExtension("native_profiler");
        $__internal_bac159fe84f0d4de62fef826d883de1c6bb5fad5f47a4ea340102ca72a646bfb->enter($__internal_bac159fe84f0d4de62fef826d883de1c6bb5fad5f47a4ea340102ca72a646bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bac159fe84f0d4de62fef826d883de1c6bb5fad5f47a4ea340102ca72a646bfb->leave($__internal_bac159fe84f0d4de62fef826d883de1c6bb5fad5f47a4ea340102ca72a646bfb_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8f2e28eb096e2706e364219467e02d1c76f5188ab973e44396a3585440f8318 = $this->env->getExtension("native_profiler");
        $__internal_a8f2e28eb096e2706e364219467e02d1c76f5188ab973e44396a3585440f8318->enter($__internal_a8f2e28eb096e2706e364219467e02d1c76f5188ab973e44396a3585440f8318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8f2e28eb096e2706e364219467e02d1c76f5188ab973e44396a3585440f8318->leave($__internal_a8f2e28eb096e2706e364219467e02d1c76f5188ab973e44396a3585440f8318_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c73a01eca6f7d35e800421eaeca68792df2c2ce1b63acc5d5c9c1737e4249b8 = $this->env->getExtension("native_profiler");
        $__internal_4c73a01eca6f7d35e800421eaeca68792df2c2ce1b63acc5d5c9c1737e4249b8->enter($__internal_4c73a01eca6f7d35e800421eaeca68792df2c2ce1b63acc5d5c9c1737e4249b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c73a01eca6f7d35e800421eaeca68792df2c2ce1b63acc5d5c9c1737e4249b8->leave($__internal_4c73a01eca6f7d35e800421eaeca68792df2c2ce1b63acc5d5c9c1737e4249b8_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2832550354a1394b4322512aae269bb242cc52eef8dfb443a1bfd8c5f672d228 = $this->env->getExtension("native_profiler");
        $__internal_2832550354a1394b4322512aae269bb242cc52eef8dfb443a1bfd8c5f672d228->enter($__internal_2832550354a1394b4322512aae269bb242cc52eef8dfb443a1bfd8c5f672d228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2832550354a1394b4322512aae269bb242cc52eef8dfb443a1bfd8c5f672d228->leave($__internal_2832550354a1394b4322512aae269bb242cc52eef8dfb443a1bfd8c5f672d228_prof);

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
        return array (  193 => 77,  182 => 70,  171 => 17,  159 => 12,  149 => 78,  147 => 77,  139 => 71,  136 => 70,  127 => 68,  123 => 67,  113 => 59,  109 => 57,  105 => 55,  103 => 54,  98 => 51,  94 => 49,  91 => 48,  84 => 43,  82 => 42,  77 => 39,  74 => 38,  72 => 37,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
/*           <a class="navbar-brand" href="/">E-Man</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/* */
/*             {% if app.user %}*/
/*               {% if app.user.userRole == 'ROLE_USER' %}*/
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
/*             */
/*           </ul>*/
/*           <ul class = "nav pull-right">*/
/*             {% if app.user %}*/
/*             <li><a href="/logout">Logout</a></li>*/
/*             {% else %}*/
/*             <li><a href="/login">Login</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                     <div class="alert alert-success">{{flash_message}}</div>*/
/*                 {% endfor %}*/
/*                 {% block body %}{% endblock %}*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*      */
/*     </div><!-- /.container -->*/
/*     {% block javascripts %}{% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
/* */
