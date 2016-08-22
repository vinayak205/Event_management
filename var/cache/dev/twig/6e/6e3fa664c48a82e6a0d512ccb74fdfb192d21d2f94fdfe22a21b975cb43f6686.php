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
        $__internal_26f467723c0fbf22ece87b8e0e36182fa51d7264ca687e7ced9b919709b2c5e6 = $this->env->getExtension("native_profiler");
        $__internal_26f467723c0fbf22ece87b8e0e36182fa51d7264ca687e7ced9b919709b2c5e6->enter($__internal_26f467723c0fbf22ece87b8e0e36182fa51d7264ca687e7ced9b919709b2c5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <li><a href=\"/events/add\">Add Event</a></li>
            <li><a href=\"/events/list\">List Events</a></li>
            <li><a href=\"/events/pending\">List Pending Events</a></li>
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
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 55
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
            </div>
        </div>

     
    </div><!-- /.container -->
    ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "  </body>
</html>

";
        
        $__internal_26f467723c0fbf22ece87b8e0e36182fa51d7264ca687e7ced9b919709b2c5e6->leave($__internal_26f467723c0fbf22ece87b8e0e36182fa51d7264ca687e7ced9b919709b2c5e6_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_64aa48b68ec1ce5f90c2552586556118291949d9bf5c02c8eb195aa35f375d4e = $this->env->getExtension("native_profiler");
        $__internal_64aa48b68ec1ce5f90c2552586556118291949d9bf5c02c8eb195aa35f375d4e->enter($__internal_64aa48b68ec1ce5f90c2552586556118291949d9bf5c02c8eb195aa35f375d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_64aa48b68ec1ce5f90c2552586556118291949d9bf5c02c8eb195aa35f375d4e->leave($__internal_64aa48b68ec1ce5f90c2552586556118291949d9bf5c02c8eb195aa35f375d4e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23d155acdd4d20be66dcbb7493befa9b59f831d025034a11828a9ca6599546fb = $this->env->getExtension("native_profiler");
        $__internal_23d155acdd4d20be66dcbb7493befa9b59f831d025034a11828a9ca6599546fb->enter($__internal_23d155acdd4d20be66dcbb7493befa9b59f831d025034a11828a9ca6599546fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_23d155acdd4d20be66dcbb7493befa9b59f831d025034a11828a9ca6599546fb->leave($__internal_23d155acdd4d20be66dcbb7493befa9b59f831d025034a11828a9ca6599546fb_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_29ef9c44d7e408b5f56d545984fd451a93dd067c613697844e497f20de8aa4fa = $this->env->getExtension("native_profiler");
        $__internal_29ef9c44d7e408b5f56d545984fd451a93dd067c613697844e497f20de8aa4fa->enter($__internal_29ef9c44d7e408b5f56d545984fd451a93dd067c613697844e497f20de8aa4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_29ef9c44d7e408b5f56d545984fd451a93dd067c613697844e497f20de8aa4fa->leave($__internal_29ef9c44d7e408b5f56d545984fd451a93dd067c613697844e497f20de8aa4fa_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2f5e61298085ddb5acc7b0eb651390af2a4699d694e9f8ceb53109eab921aa3 = $this->env->getExtension("native_profiler");
        $__internal_f2f5e61298085ddb5acc7b0eb651390af2a4699d694e9f8ceb53109eab921aa3->enter($__internal_f2f5e61298085ddb5acc7b0eb651390af2a4699d694e9f8ceb53109eab921aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f2f5e61298085ddb5acc7b0eb651390af2a4699d694e9f8ceb53109eab921aa3->leave($__internal_f2f5e61298085ddb5acc7b0eb651390af2a4699d694e9f8ceb53109eab921aa3_prof);

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
        return array (  159 => 64,  148 => 57,  137 => 17,  125 => 12,  115 => 65,  113 => 64,  105 => 58,  102 => 57,  93 => 55,  89 => 54,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
/*             <li><a href="/events/add">Add Event</a></li>*/
/*             <li><a href="/events/list">List Events</a></li>*/
/*             <li><a href="/events/pending">List Pending Events</a></li>*/
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
