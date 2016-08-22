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
        $__internal_dbb3ec91382ef586cd55019bb694964be3c2b778612f889a3c3f5314dd45441a = $this->env->getExtension("native_profiler");
        $__internal_dbb3ec91382ef586cd55019bb694964be3c2b778612f889a3c3f5314dd45441a->enter($__internal_dbb3ec91382ef586cd55019bb694964be3c2b778612f889a3c3f5314dd45441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 53
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
            </div>
        </div>

     
    </div><!-- /.container -->
    ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "  </body>
</html>

";
        
        $__internal_dbb3ec91382ef586cd55019bb694964be3c2b778612f889a3c3f5314dd45441a->leave($__internal_dbb3ec91382ef586cd55019bb694964be3c2b778612f889a3c3f5314dd45441a_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_a207d7995f1da747c2e3750621bf2e40960f59fa25902043c31d6f2f2d439956 = $this->env->getExtension("native_profiler");
        $__internal_a207d7995f1da747c2e3750621bf2e40960f59fa25902043c31d6f2f2d439956->enter($__internal_a207d7995f1da747c2e3750621bf2e40960f59fa25902043c31d6f2f2d439956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a207d7995f1da747c2e3750621bf2e40960f59fa25902043c31d6f2f2d439956->leave($__internal_a207d7995f1da747c2e3750621bf2e40960f59fa25902043c31d6f2f2d439956_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99d878db01fdeae7021da56a6ee8f24cd6e712cd3d88e6ec76a92b4fe3f8319e = $this->env->getExtension("native_profiler");
        $__internal_99d878db01fdeae7021da56a6ee8f24cd6e712cd3d88e6ec76a92b4fe3f8319e->enter($__internal_99d878db01fdeae7021da56a6ee8f24cd6e712cd3d88e6ec76a92b4fe3f8319e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_99d878db01fdeae7021da56a6ee8f24cd6e712cd3d88e6ec76a92b4fe3f8319e->leave($__internal_99d878db01fdeae7021da56a6ee8f24cd6e712cd3d88e6ec76a92b4fe3f8319e_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed1815f4ca5e9e0c15eb4f2f294f56ddbd682e84b750cfcc36425590ddc0351d = $this->env->getExtension("native_profiler");
        $__internal_ed1815f4ca5e9e0c15eb4f2f294f56ddbd682e84b750cfcc36425590ddc0351d->enter($__internal_ed1815f4ca5e9e0c15eb4f2f294f56ddbd682e84b750cfcc36425590ddc0351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed1815f4ca5e9e0c15eb4f2f294f56ddbd682e84b750cfcc36425590ddc0351d->leave($__internal_ed1815f4ca5e9e0c15eb4f2f294f56ddbd682e84b750cfcc36425590ddc0351d_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5706410313f52fa21eee2bdd5b8726e58cb8a32e2bd6bb711cd610ebf73d9975 = $this->env->getExtension("native_profiler");
        $__internal_5706410313f52fa21eee2bdd5b8726e58cb8a32e2bd6bb711cd610ebf73d9975->enter($__internal_5706410313f52fa21eee2bdd5b8726e58cb8a32e2bd6bb711cd610ebf73d9975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5706410313f52fa21eee2bdd5b8726e58cb8a32e2bd6bb711cd610ebf73d9975->leave($__internal_5706410313f52fa21eee2bdd5b8726e58cb8a32e2bd6bb711cd610ebf73d9975_prof);

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
        return array (  157 => 62,  146 => 55,  135 => 17,  123 => 12,  113 => 63,  111 => 62,  103 => 56,  100 => 55,  91 => 53,  87 => 52,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
