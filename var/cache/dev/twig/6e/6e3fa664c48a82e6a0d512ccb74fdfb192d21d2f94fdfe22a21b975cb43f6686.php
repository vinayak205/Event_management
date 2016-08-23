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
        $__internal_e4e0928c7ba7a1bd22a23a58d8989869bce21bbbb47ca159d8b828c197d26678 = $this->env->getExtension("native_profiler");
        $__internal_e4e0928c7ba7a1bd22a23a58d8989869bce21bbbb47ca159d8b828c197d26678->enter($__internal_e4e0928c7ba7a1bd22a23a58d8989869bce21bbbb47ca159d8b828c197d26678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e4e0928c7ba7a1bd22a23a58d8989869bce21bbbb47ca159d8b828c197d26678->leave($__internal_e4e0928c7ba7a1bd22a23a58d8989869bce21bbbb47ca159d8b828c197d26678_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_1be08866dc831c138c444242b8012501020253ca1854bd6336ef839c3aa221ce = $this->env->getExtension("native_profiler");
        $__internal_1be08866dc831c138c444242b8012501020253ca1854bd6336ef839c3aa221ce->enter($__internal_1be08866dc831c138c444242b8012501020253ca1854bd6336ef839c3aa221ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1be08866dc831c138c444242b8012501020253ca1854bd6336ef839c3aa221ce->leave($__internal_1be08866dc831c138c444242b8012501020253ca1854bd6336ef839c3aa221ce_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0aa2436e503392f084976ce84f747a0bf7eef3d5a0732f054da6cf0b4ec7bf7f = $this->env->getExtension("native_profiler");
        $__internal_0aa2436e503392f084976ce84f747a0bf7eef3d5a0732f054da6cf0b4ec7bf7f->enter($__internal_0aa2436e503392f084976ce84f747a0bf7eef3d5a0732f054da6cf0b4ec7bf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0aa2436e503392f084976ce84f747a0bf7eef3d5a0732f054da6cf0b4ec7bf7f->leave($__internal_0aa2436e503392f084976ce84f747a0bf7eef3d5a0732f054da6cf0b4ec7bf7f_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_490ec0c9be4d0335a3a727d00c9735339c0e14a75bfec3e0675b5e574410d406 = $this->env->getExtension("native_profiler");
        $__internal_490ec0c9be4d0335a3a727d00c9735339c0e14a75bfec3e0675b5e574410d406->enter($__internal_490ec0c9be4d0335a3a727d00c9735339c0e14a75bfec3e0675b5e574410d406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_490ec0c9be4d0335a3a727d00c9735339c0e14a75bfec3e0675b5e574410d406->leave($__internal_490ec0c9be4d0335a3a727d00c9735339c0e14a75bfec3e0675b5e574410d406_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57290f25799fa609748b78b2f03d72f818b504e6d27f8d7077307696d44a2ddf = $this->env->getExtension("native_profiler");
        $__internal_57290f25799fa609748b78b2f03d72f818b504e6d27f8d7077307696d44a2ddf->enter($__internal_57290f25799fa609748b78b2f03d72f818b504e6d27f8d7077307696d44a2ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_57290f25799fa609748b78b2f03d72f818b504e6d27f8d7077307696d44a2ddf->leave($__internal_57290f25799fa609748b78b2f03d72f818b504e6d27f8d7077307696d44a2ddf_prof);

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
