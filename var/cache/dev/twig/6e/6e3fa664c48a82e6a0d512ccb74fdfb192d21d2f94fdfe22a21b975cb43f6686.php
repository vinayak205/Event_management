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
        $__internal_f275be90e073e3ef49e6976d8664fbd9e8db1e652d18ff11542371b8ae14a190 = $this->env->getExtension("native_profiler");
        $__internal_f275be90e073e3ef49e6976d8664fbd9e8db1e652d18ff11542371b8ae14a190->enter($__internal_f275be90e073e3ef49e6976d8664fbd9e8db1e652d18ff11542371b8ae14a190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f275be90e073e3ef49e6976d8664fbd9e8db1e652d18ff11542371b8ae14a190->leave($__internal_f275be90e073e3ef49e6976d8664fbd9e8db1e652d18ff11542371b8ae14a190_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf8055f92882fcf6ec7b5615c5dfcc2cb9d3143d0d0cdc4489dfd89bac2f76e1 = $this->env->getExtension("native_profiler");
        $__internal_cf8055f92882fcf6ec7b5615c5dfcc2cb9d3143d0d0cdc4489dfd89bac2f76e1->enter($__internal_cf8055f92882fcf6ec7b5615c5dfcc2cb9d3143d0d0cdc4489dfd89bac2f76e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cf8055f92882fcf6ec7b5615c5dfcc2cb9d3143d0d0cdc4489dfd89bac2f76e1->leave($__internal_cf8055f92882fcf6ec7b5615c5dfcc2cb9d3143d0d0cdc4489dfd89bac2f76e1_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_804a9c91213f042e66018c28af8ebb9724b023c582fb34a73e0fcd077391dcb8 = $this->env->getExtension("native_profiler");
        $__internal_804a9c91213f042e66018c28af8ebb9724b023c582fb34a73e0fcd077391dcb8->enter($__internal_804a9c91213f042e66018c28af8ebb9724b023c582fb34a73e0fcd077391dcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_804a9c91213f042e66018c28af8ebb9724b023c582fb34a73e0fcd077391dcb8->leave($__internal_804a9c91213f042e66018c28af8ebb9724b023c582fb34a73e0fcd077391dcb8_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_84d7ccfe07eff6474d9557674b6565ea82c098c34d2c974a6104a285bd9081bc = $this->env->getExtension("native_profiler");
        $__internal_84d7ccfe07eff6474d9557674b6565ea82c098c34d2c974a6104a285bd9081bc->enter($__internal_84d7ccfe07eff6474d9557674b6565ea82c098c34d2c974a6104a285bd9081bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84d7ccfe07eff6474d9557674b6565ea82c098c34d2c974a6104a285bd9081bc->leave($__internal_84d7ccfe07eff6474d9557674b6565ea82c098c34d2c974a6104a285bd9081bc_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b97c5f05189883d603099b77013a050fb7807dde619507efde2f1460b32e5541 = $this->env->getExtension("native_profiler");
        $__internal_b97c5f05189883d603099b77013a050fb7807dde619507efde2f1460b32e5541->enter($__internal_b97c5f05189883d603099b77013a050fb7807dde619507efde2f1460b32e5541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b97c5f05189883d603099b77013a050fb7807dde619507efde2f1460b32e5541->leave($__internal_b97c5f05189883d603099b77013a050fb7807dde619507efde2f1460b32e5541_prof);

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
/*             <li><a href="/events/list">List Events</a></li>*/
/*             <li><a href="/events/add">Add Event</a></li>*/
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
