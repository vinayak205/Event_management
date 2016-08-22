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
        $__internal_8fdfd463f70636083e8c763e2e532f61f1cc070104e9a7dd7ebe63db581530da = $this->env->getExtension("native_profiler");
        $__internal_8fdfd463f70636083e8c763e2e532f61f1cc070104e9a7dd7ebe63db581530da->enter($__internal_8fdfd463f70636083e8c763e2e532f61f1cc070104e9a7dd7ebe63db581530da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8fdfd463f70636083e8c763e2e532f61f1cc070104e9a7dd7ebe63db581530da->leave($__internal_8fdfd463f70636083e8c763e2e532f61f1cc070104e9a7dd7ebe63db581530da_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ceec40dd6758af11ecfa9ea059c1e28e85575a646862d8f6b0f9aaea8a9b4b8 = $this->env->getExtension("native_profiler");
        $__internal_3ceec40dd6758af11ecfa9ea059c1e28e85575a646862d8f6b0f9aaea8a9b4b8->enter($__internal_3ceec40dd6758af11ecfa9ea059c1e28e85575a646862d8f6b0f9aaea8a9b4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ceec40dd6758af11ecfa9ea059c1e28e85575a646862d8f6b0f9aaea8a9b4b8->leave($__internal_3ceec40dd6758af11ecfa9ea059c1e28e85575a646862d8f6b0f9aaea8a9b4b8_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc4592a9ba65d39157b45338da859dd38b9f505f6cf01c5963676012d82407e4 = $this->env->getExtension("native_profiler");
        $__internal_cc4592a9ba65d39157b45338da859dd38b9f505f6cf01c5963676012d82407e4->enter($__internal_cc4592a9ba65d39157b45338da859dd38b9f505f6cf01c5963676012d82407e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc4592a9ba65d39157b45338da859dd38b9f505f6cf01c5963676012d82407e4->leave($__internal_cc4592a9ba65d39157b45338da859dd38b9f505f6cf01c5963676012d82407e4_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4a67f35a7bde60f15185cdd3ef8ef1c096d55be0a328e57bd147aab53599f7d = $this->env->getExtension("native_profiler");
        $__internal_b4a67f35a7bde60f15185cdd3ef8ef1c096d55be0a328e57bd147aab53599f7d->enter($__internal_b4a67f35a7bde60f15185cdd3ef8ef1c096d55be0a328e57bd147aab53599f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4a67f35a7bde60f15185cdd3ef8ef1c096d55be0a328e57bd147aab53599f7d->leave($__internal_b4a67f35a7bde60f15185cdd3ef8ef1c096d55be0a328e57bd147aab53599f7d_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39b059cf857d2185f9839e856360671ee2fb264065c4430cbb72224c8220fe20 = $this->env->getExtension("native_profiler");
        $__internal_39b059cf857d2185f9839e856360671ee2fb264065c4430cbb72224c8220fe20->enter($__internal_39b059cf857d2185f9839e856360671ee2fb264065c4430cbb72224c8220fe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_39b059cf857d2185f9839e856360671ee2fb264065c4430cbb72224c8220fe20->leave($__internal_39b059cf857d2185f9839e856360671ee2fb264065c4430cbb72224c8220fe20_prof);

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
