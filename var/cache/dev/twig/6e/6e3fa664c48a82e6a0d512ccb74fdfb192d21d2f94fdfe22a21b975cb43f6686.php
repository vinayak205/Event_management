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
        $__internal_4ec99e74ccc34695c50dddb9f160dfef0ed7f2bda3261bbdd42417eff7faf8d5 = $this->env->getExtension("native_profiler");
        $__internal_4ec99e74ccc34695c50dddb9f160dfef0ed7f2bda3261bbdd42417eff7faf8d5->enter($__internal_4ec99e74ccc34695c50dddb9f160dfef0ed7f2bda3261bbdd42417eff7faf8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4ec99e74ccc34695c50dddb9f160dfef0ed7f2bda3261bbdd42417eff7faf8d5->leave($__internal_4ec99e74ccc34695c50dddb9f160dfef0ed7f2bda3261bbdd42417eff7faf8d5_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_4db152daa307b9b52fe26d46ffe1e7c4ac903e332b2efb1d5d99e36c5f45ad6f = $this->env->getExtension("native_profiler");
        $__internal_4db152daa307b9b52fe26d46ffe1e7c4ac903e332b2efb1d5d99e36c5f45ad6f->enter($__internal_4db152daa307b9b52fe26d46ffe1e7c4ac903e332b2efb1d5d99e36c5f45ad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4db152daa307b9b52fe26d46ffe1e7c4ac903e332b2efb1d5d99e36c5f45ad6f->leave($__internal_4db152daa307b9b52fe26d46ffe1e7c4ac903e332b2efb1d5d99e36c5f45ad6f_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59e7b2d715fa489fc2a4a2eb6f40a56fdb9ed24ce7f0a05fcb90ceb96ced397e = $this->env->getExtension("native_profiler");
        $__internal_59e7b2d715fa489fc2a4a2eb6f40a56fdb9ed24ce7f0a05fcb90ceb96ced397e->enter($__internal_59e7b2d715fa489fc2a4a2eb6f40a56fdb9ed24ce7f0a05fcb90ceb96ced397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_59e7b2d715fa489fc2a4a2eb6f40a56fdb9ed24ce7f0a05fcb90ceb96ced397e->leave($__internal_59e7b2d715fa489fc2a4a2eb6f40a56fdb9ed24ce7f0a05fcb90ceb96ced397e_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b6328765a46fe0dbe5e796bb5666c8817544f1a874e2f720de6bfe96ff4deb2 = $this->env->getExtension("native_profiler");
        $__internal_6b6328765a46fe0dbe5e796bb5666c8817544f1a874e2f720de6bfe96ff4deb2->enter($__internal_6b6328765a46fe0dbe5e796bb5666c8817544f1a874e2f720de6bfe96ff4deb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b6328765a46fe0dbe5e796bb5666c8817544f1a874e2f720de6bfe96ff4deb2->leave($__internal_6b6328765a46fe0dbe5e796bb5666c8817544f1a874e2f720de6bfe96ff4deb2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_583d22c1cfc32155524a1226b463a2bcb1f812c15ff8e756da79bd3019e44a8c = $this->env->getExtension("native_profiler");
        $__internal_583d22c1cfc32155524a1226b463a2bcb1f812c15ff8e756da79bd3019e44a8c->enter($__internal_583d22c1cfc32155524a1226b463a2bcb1f812c15ff8e756da79bd3019e44a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_583d22c1cfc32155524a1226b463a2bcb1f812c15ff8e756da79bd3019e44a8c->leave($__internal_583d22c1cfc32155524a1226b463a2bcb1f812c15ff8e756da79bd3019e44a8c_prof);

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
