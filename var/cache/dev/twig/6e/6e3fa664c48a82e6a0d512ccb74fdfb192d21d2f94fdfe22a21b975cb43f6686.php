<?php

/* ::base.html.twig */
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
        $__internal_3f31c95cf71bfc93b63c67922c89dfbeb2ee0a2b1e326a722a78f27412907d09 = $this->env->getExtension("native_profiler");
        $__internal_3f31c95cf71bfc93b63c67922c89dfbeb2ee0a2b1e326a722a78f27412907d09->enter($__internal_3f31c95cf71bfc93b63c67922c89dfbeb2ee0a2b1e326a722a78f27412907d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 39
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 40
            echo "              ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_USER")) {
                // line 41
                echo "                <li><a href=\"/users/regevents\">Registered Events</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/add\">Add Event</a></li>
              ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 45
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_ADMIN")) {
                // line 46
                echo "                <li><a href=\"/venue/add\">Add Venue</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/pending\">Pending Events</a></li>
              ";
            }
            // line 51
            echo "            ";
        } else {
            // line 52
            echo "              <li><a href=\"/register\">Register</a></li>
            ";
        }
        // line 54
        echo "            ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 55
            echo "              <li><a href=\"/logout\">Logout</a></li>
            ";
        } else {
            // line 57
            echo "              <li><a href=\"/login\">Login</a></li>
            ";
        }
        // line 59
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 76
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                

            </div>
        </div>
        ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "     
    </div><!-- /.container -->
    ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "  </body>
</html>

";
        
        $__internal_3f31c95cf71bfc93b63c67922c89dfbeb2ee0a2b1e326a722a78f27412907d09->leave($__internal_3f31c95cf71bfc93b63c67922c89dfbeb2ee0a2b1e326a722a78f27412907d09_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd74571a818e54035e2c08cb60900213b5dfdfb2b1bdabc4bceb831c8007ad52 = $this->env->getExtension("native_profiler");
        $__internal_bd74571a818e54035e2c08cb60900213b5dfdfb2b1bdabc4bceb831c8007ad52->enter($__internal_bd74571a818e54035e2c08cb60900213b5dfdfb2b1bdabc4bceb831c8007ad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd74571a818e54035e2c08cb60900213b5dfdfb2b1bdabc4bceb831c8007ad52->leave($__internal_bd74571a818e54035e2c08cb60900213b5dfdfb2b1bdabc4bceb831c8007ad52_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc96f5df8a7387ef94ce53b18e0fdf4fa384bb61556a3f172e654fd387a2ee5e = $this->env->getExtension("native_profiler");
        $__internal_cc96f5df8a7387ef94ce53b18e0fdf4fa384bb61556a3f172e654fd387a2ee5e->enter($__internal_cc96f5df8a7387ef94ce53b18e0fdf4fa384bb61556a3f172e654fd387a2ee5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc96f5df8a7387ef94ce53b18e0fdf4fa384bb61556a3f172e654fd387a2ee5e->leave($__internal_cc96f5df8a7387ef94ce53b18e0fdf4fa384bb61556a3f172e654fd387a2ee5e_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5556bcb6a0bf21dadc19a551010a2808b18ea3d86dee8b3b9bb93a047676136 = $this->env->getExtension("native_profiler");
        $__internal_f5556bcb6a0bf21dadc19a551010a2808b18ea3d86dee8b3b9bb93a047676136->enter($__internal_f5556bcb6a0bf21dadc19a551010a2808b18ea3d86dee8b3b9bb93a047676136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5556bcb6a0bf21dadc19a551010a2808b18ea3d86dee8b3b9bb93a047676136->leave($__internal_f5556bcb6a0bf21dadc19a551010a2808b18ea3d86dee8b3b9bb93a047676136_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a01addb6bbae4f575ae69d3b1e4455029932aae65da7ce708329510e15dcfd84 = $this->env->getExtension("native_profiler");
        $__internal_a01addb6bbae4f575ae69d3b1e4455029932aae65da7ce708329510e15dcfd84->enter($__internal_a01addb6bbae4f575ae69d3b1e4455029932aae65da7ce708329510e15dcfd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a01addb6bbae4f575ae69d3b1e4455029932aae65da7ce708329510e15dcfd84->leave($__internal_a01addb6bbae4f575ae69d3b1e4455029932aae65da7ce708329510e15dcfd84_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 85,  193 => 82,  182 => 19,  170 => 12,  160 => 86,  158 => 85,  154 => 83,  152 => 82,  146 => 78,  137 => 76,  133 => 75,  115 => 59,  111 => 57,  107 => 55,  104 => 54,  100 => 52,  97 => 51,  90 => 46,  88 => 45,  82 => 41,  79 => 40,  77 => 39,  54 => 20,  52 => 19,  47 => 17,  39 => 12,  26 => 1,);
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
/*           <a class="navbar-brand" href="/">E-Man</a>*/
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
