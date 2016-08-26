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
        $__internal_76b800f3b14d6db70be5b7014791cee742fc93e1510946cbbdb5a91d9fc569b7 = $this->env->getExtension("native_profiler");
        $__internal_76b800f3b14d6db70be5b7014791cee742fc93e1510946cbbdb5a91d9fc569b7->enter($__internal_76b800f3b14d6db70be5b7014791cee742fc93e1510946cbbdb5a91d9fc569b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                echo "                <li><a href=\"/users/regevents\">Registered Events</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/add\">Add Event</a></li>
              ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 43
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userRole", array()) == "ROLE_ADMIN")) {
                // line 44
                echo "                <li><a href=\"/venue/add\">Add Venue</a></li>
                <li><a href=\"/venue/list\">List Venues</a></li>
                <li><a href=\"/events/list\">List Events</a></li>
                <li><a href=\"/events/pending\">Pending Events</a></li>
              ";
            }
            // line 49
            echo "            ";
        } else {
            // line 50
            echo "              <li><a href=\"/register\">Register</a></li>
            ";
        }
        // line 52
        echo "            
          </ul>
          <ul class = \"nav pull-right\">
            ";
        // line 55
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 56
            echo "            <li><a href=\"/logout\">Logout</a></li>
            ";
        } else {
            // line 58
            echo "            <li><a href=\"/login\">Login</a></li>
            ";
        }
        // line 60
        echo "          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 69
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                

            </div>
        </div>
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "     
    </div><!-- /.container -->
    ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "  </body>
</html>

";
        
        $__internal_76b800f3b14d6db70be5b7014791cee742fc93e1510946cbbdb5a91d9fc569b7->leave($__internal_76b800f3b14d6db70be5b7014791cee742fc93e1510946cbbdb5a91d9fc569b7_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bf576a765eedb9b8217d1408412dbbad80ad607f5ca9c9b6b251f5136a9d8a8 = $this->env->getExtension("native_profiler");
        $__internal_8bf576a765eedb9b8217d1408412dbbad80ad607f5ca9c9b6b251f5136a9d8a8->enter($__internal_8bf576a765eedb9b8217d1408412dbbad80ad607f5ca9c9b6b251f5136a9d8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8bf576a765eedb9b8217d1408412dbbad80ad607f5ca9c9b6b251f5136a9d8a8->leave($__internal_8bf576a765eedb9b8217d1408412dbbad80ad607f5ca9c9b6b251f5136a9d8a8_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07a42c6add833796b881a58f929532591fffc07d941f1a0371ca26821471b043 = $this->env->getExtension("native_profiler");
        $__internal_07a42c6add833796b881a58f929532591fffc07d941f1a0371ca26821471b043->enter($__internal_07a42c6add833796b881a58f929532591fffc07d941f1a0371ca26821471b043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07a42c6add833796b881a58f929532591fffc07d941f1a0371ca26821471b043->leave($__internal_07a42c6add833796b881a58f929532591fffc07d941f1a0371ca26821471b043_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2f04e89e93a5a9faf93fc7ebf87761769621fb1da4c1a5b1fb88630b90281b5 = $this->env->getExtension("native_profiler");
        $__internal_f2f04e89e93a5a9faf93fc7ebf87761769621fb1da4c1a5b1fb88630b90281b5->enter($__internal_f2f04e89e93a5a9faf93fc7ebf87761769621fb1da4c1a5b1fb88630b90281b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f2f04e89e93a5a9faf93fc7ebf87761769621fb1da4c1a5b1fb88630b90281b5->leave($__internal_f2f04e89e93a5a9faf93fc7ebf87761769621fb1da4c1a5b1fb88630b90281b5_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8038bdb577b7da859bb98a3e4f9699bee7c75b126b1e9c07b3456f1625957555 = $this->env->getExtension("native_profiler");
        $__internal_8038bdb577b7da859bb98a3e4f9699bee7c75b126b1e9c07b3456f1625957555->enter($__internal_8038bdb577b7da859bb98a3e4f9699bee7c75b126b1e9c07b3456f1625957555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8038bdb577b7da859bb98a3e4f9699bee7c75b126b1e9c07b3456f1625957555->leave($__internal_8038bdb577b7da859bb98a3e4f9699bee7c75b126b1e9c07b3456f1625957555_prof);

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
        return array (  195 => 78,  184 => 75,  173 => 17,  161 => 12,  151 => 79,  149 => 78,  145 => 76,  143 => 75,  137 => 71,  128 => 69,  124 => 68,  114 => 60,  110 => 58,  106 => 56,  104 => 55,  99 => 52,  95 => 50,  92 => 49,  85 => 44,  83 => 43,  77 => 39,  74 => 38,  72 => 37,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
