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
        $__internal_1e27332acfd150b80a7e78da689646bee43d237fe59fd9dbe9651e92e19c405c = $this->env->getExtension("native_profiler");
        $__internal_1e27332acfd150b80a7e78da689646bee43d237fe59fd9dbe9651e92e19c405c->enter($__internal_1e27332acfd150b80a7e78da689646bee43d237fe59fd9dbe9651e92e19c405c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            
            <li><a href=\"/register\">Register</a></li>
            <li><a href=\"/venue/add\">Add Venue</a></li>
            <li><a href=\"/venue/list\">List Venues</a></li>
            <li><a href=\"/events/list\">List Events</a></li>
            <li><a href=\"/events/add\">Add Event</a></li>
            <li><a href=\"/events/pending\">Pending Events</a></li>
            
          </ul>
          <ul class = \"nav pull-right\">
            <li><a href=\"/login\">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 56
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "
            </div>
        </div>

     
    </div><!-- /.container -->
    ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "  </body>
</html>

";
        
        $__internal_1e27332acfd150b80a7e78da689646bee43d237fe59fd9dbe9651e92e19c405c->leave($__internal_1e27332acfd150b80a7e78da689646bee43d237fe59fd9dbe9651e92e19c405c_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb8957381432931d0d9a59b8d4591390942a7b5874fa0b172787c1fae518c88f = $this->env->getExtension("native_profiler");
        $__internal_bb8957381432931d0d9a59b8d4591390942a7b5874fa0b172787c1fae518c88f->enter($__internal_bb8957381432931d0d9a59b8d4591390942a7b5874fa0b172787c1fae518c88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb8957381432931d0d9a59b8d4591390942a7b5874fa0b172787c1fae518c88f->leave($__internal_bb8957381432931d0d9a59b8d4591390942a7b5874fa0b172787c1fae518c88f_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_524207d91bc28bad6f23a4aaecaf4c86fb891a729af65fb6a1c76b9ebbdf02c3 = $this->env->getExtension("native_profiler");
        $__internal_524207d91bc28bad6f23a4aaecaf4c86fb891a729af65fb6a1c76b9ebbdf02c3->enter($__internal_524207d91bc28bad6f23a4aaecaf4c86fb891a729af65fb6a1c76b9ebbdf02c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_524207d91bc28bad6f23a4aaecaf4c86fb891a729af65fb6a1c76b9ebbdf02c3->leave($__internal_524207d91bc28bad6f23a4aaecaf4c86fb891a729af65fb6a1c76b9ebbdf02c3_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b5bbc3c26a1ad790c22bc2c48a6b8838337984976f4f09594e6c06100d13fa1 = $this->env->getExtension("native_profiler");
        $__internal_1b5bbc3c26a1ad790c22bc2c48a6b8838337984976f4f09594e6c06100d13fa1->enter($__internal_1b5bbc3c26a1ad790c22bc2c48a6b8838337984976f4f09594e6c06100d13fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b5bbc3c26a1ad790c22bc2c48a6b8838337984976f4f09594e6c06100d13fa1->leave($__internal_1b5bbc3c26a1ad790c22bc2c48a6b8838337984976f4f09594e6c06100d13fa1_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21e8a395fdf1cefe9e6a56d714c5407b53e69545d5b10a7f9a5b33b335a7b5be = $this->env->getExtension("native_profiler");
        $__internal_21e8a395fdf1cefe9e6a56d714c5407b53e69545d5b10a7f9a5b33b335a7b5be->enter($__internal_21e8a395fdf1cefe9e6a56d714c5407b53e69545d5b10a7f9a5b33b335a7b5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_21e8a395fdf1cefe9e6a56d714c5407b53e69545d5b10a7f9a5b33b335a7b5be->leave($__internal_21e8a395fdf1cefe9e6a56d714c5407b53e69545d5b10a7f9a5b33b335a7b5be_prof);

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
        return array (  160 => 65,  149 => 58,  138 => 17,  126 => 12,  116 => 66,  114 => 65,  106 => 59,  103 => 58,  94 => 56,  90 => 55,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
/*             */
/*             <li><a href="/register">Register</a></li>*/
/*             <li><a href="/venue/add">Add Venue</a></li>*/
/*             <li><a href="/venue/list">List Venues</a></li>*/
/*             <li><a href="/events/list">List Events</a></li>*/
/*             <li><a href="/events/add">Add Event</a></li>*/
/*             <li><a href="/events/pending">Pending Events</a></li>*/
/*             */
/*           </ul>*/
/*           <ul class = "nav pull-right">*/
/*             <li><a href="/login">Login</a></li>*/
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
