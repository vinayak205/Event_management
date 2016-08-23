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
        $__internal_71f2af6bad7ccc67a14b6c08035d9cfaae5ff52a3c7d6ebc06c0a861d55ae3cb = $this->env->getExtension("native_profiler");
        $__internal_71f2af6bad7ccc67a14b6c08035d9cfaae5ff52a3c7d6ebc06c0a861d55ae3cb->enter($__internal_71f2af6bad7ccc67a14b6c08035d9cfaae5ff52a3c7d6ebc06c0a861d55ae3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_71f2af6bad7ccc67a14b6c08035d9cfaae5ff52a3c7d6ebc06c0a861d55ae3cb->leave($__internal_71f2af6bad7ccc67a14b6c08035d9cfaae5ff52a3c7d6ebc06c0a861d55ae3cb_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_b06a317e7c392f0dd2e2c1eb19dfea6f4171dcb1576c889243a6575786ee366f = $this->env->getExtension("native_profiler");
        $__internal_b06a317e7c392f0dd2e2c1eb19dfea6f4171dcb1576c889243a6575786ee366f->enter($__internal_b06a317e7c392f0dd2e2c1eb19dfea6f4171dcb1576c889243a6575786ee366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b06a317e7c392f0dd2e2c1eb19dfea6f4171dcb1576c889243a6575786ee366f->leave($__internal_b06a317e7c392f0dd2e2c1eb19dfea6f4171dcb1576c889243a6575786ee366f_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e50cfa4fb67ae982fbc4ea198593647ce6ac563b0a4e44c7e3a671d421b71fa = $this->env->getExtension("native_profiler");
        $__internal_0e50cfa4fb67ae982fbc4ea198593647ce6ac563b0a4e44c7e3a671d421b71fa->enter($__internal_0e50cfa4fb67ae982fbc4ea198593647ce6ac563b0a4e44c7e3a671d421b71fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e50cfa4fb67ae982fbc4ea198593647ce6ac563b0a4e44c7e3a671d421b71fa->leave($__internal_0e50cfa4fb67ae982fbc4ea198593647ce6ac563b0a4e44c7e3a671d421b71fa_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8f8777fcef9d56491ab86aab750e344e904a3647e1a8324d7c175b7a0cab675 = $this->env->getExtension("native_profiler");
        $__internal_b8f8777fcef9d56491ab86aab750e344e904a3647e1a8324d7c175b7a0cab675->enter($__internal_b8f8777fcef9d56491ab86aab750e344e904a3647e1a8324d7c175b7a0cab675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8f8777fcef9d56491ab86aab750e344e904a3647e1a8324d7c175b7a0cab675->leave($__internal_b8f8777fcef9d56491ab86aab750e344e904a3647e1a8324d7c175b7a0cab675_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4503142857d4668479bf114bd04925d2f529a728f28fdffe4680c611d0d31a53 = $this->env->getExtension("native_profiler");
        $__internal_4503142857d4668479bf114bd04925d2f529a728f28fdffe4680c611d0d31a53->enter($__internal_4503142857d4668479bf114bd04925d2f529a728f28fdffe4680c611d0d31a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4503142857d4668479bf114bd04925d2f529a728f28fdffe4680c611d0d31a53->leave($__internal_4503142857d4668479bf114bd04925d2f529a728f28fdffe4680c611d0d31a53_prof);

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
