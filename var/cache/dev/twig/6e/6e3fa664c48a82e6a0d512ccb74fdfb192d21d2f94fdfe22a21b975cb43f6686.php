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
        $__internal_5909397600c360a89395a4b65b456cd0c93a70060cb15076635cc03c53c94eb8 = $this->env->getExtension("native_profiler");
        $__internal_5909397600c360a89395a4b65b456cd0c93a70060cb15076635cc03c53c94eb8->enter($__internal_5909397600c360a89395a4b65b456cd0c93a70060cb15076635cc03c53c94eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 51
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
            </div>
        </div>

     
    </div><!-- /.container -->
    ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "  </body>
</html>

";
        
        $__internal_5909397600c360a89395a4b65b456cd0c93a70060cb15076635cc03c53c94eb8->leave($__internal_5909397600c360a89395a4b65b456cd0c93a70060cb15076635cc03c53c94eb8_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_88e91d324eca9b9d132dc63c45ec75341f6cbfadc75f149ea72a12949c18394e = $this->env->getExtension("native_profiler");
        $__internal_88e91d324eca9b9d132dc63c45ec75341f6cbfadc75f149ea72a12949c18394e->enter($__internal_88e91d324eca9b9d132dc63c45ec75341f6cbfadc75f149ea72a12949c18394e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_88e91d324eca9b9d132dc63c45ec75341f6cbfadc75f149ea72a12949c18394e->leave($__internal_88e91d324eca9b9d132dc63c45ec75341f6cbfadc75f149ea72a12949c18394e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d23cd47fe03ae884a58621add730169335e44adc7e30e5dfb306f568cb614156 = $this->env->getExtension("native_profiler");
        $__internal_d23cd47fe03ae884a58621add730169335e44adc7e30e5dfb306f568cb614156->enter($__internal_d23cd47fe03ae884a58621add730169335e44adc7e30e5dfb306f568cb614156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d23cd47fe03ae884a58621add730169335e44adc7e30e5dfb306f568cb614156->leave($__internal_d23cd47fe03ae884a58621add730169335e44adc7e30e5dfb306f568cb614156_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea450da03f51a052d3bc8e4f24a72325ee0a39cb1125675f811d3eeb035e6543 = $this->env->getExtension("native_profiler");
        $__internal_ea450da03f51a052d3bc8e4f24a72325ee0a39cb1125675f811d3eeb035e6543->enter($__internal_ea450da03f51a052d3bc8e4f24a72325ee0a39cb1125675f811d3eeb035e6543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea450da03f51a052d3bc8e4f24a72325ee0a39cb1125675f811d3eeb035e6543->leave($__internal_ea450da03f51a052d3bc8e4f24a72325ee0a39cb1125675f811d3eeb035e6543_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56fbe4747ef6a74bf310bb4a5a9ed81ec9c4652a10499083e3ccf1fe0b0e52d3 = $this->env->getExtension("native_profiler");
        $__internal_56fbe4747ef6a74bf310bb4a5a9ed81ec9c4652a10499083e3ccf1fe0b0e52d3->enter($__internal_56fbe4747ef6a74bf310bb4a5a9ed81ec9c4652a10499083e3ccf1fe0b0e52d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_56fbe4747ef6a74bf310bb4a5a9ed81ec9c4652a10499083e3ccf1fe0b0e52d3->leave($__internal_56fbe4747ef6a74bf310bb4a5a9ed81ec9c4652a10499083e3ccf1fe0b0e52d3_prof);

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
        return array (  155 => 60,  144 => 53,  133 => 17,  121 => 12,  111 => 61,  109 => 60,  101 => 54,  98 => 53,  89 => 51,  85 => 50,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
