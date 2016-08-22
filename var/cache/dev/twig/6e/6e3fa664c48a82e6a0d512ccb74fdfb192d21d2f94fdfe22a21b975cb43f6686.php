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
        $__internal_0d344c157f6bb3c41c0245fc7438b4c24560bd2d34fe0f086fb63c4e98da2b0a = $this->env->getExtension("native_profiler");
        $__internal_0d344c157f6bb3c41c0245fc7438b4c24560bd2d34fe0f086fb63c4e98da2b0a->enter($__internal_0d344c157f6bb3c41c0245fc7438b4c24560bd2d34fe0f086fb63c4e98da2b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0d344c157f6bb3c41c0245fc7438b4c24560bd2d34fe0f086fb63c4e98da2b0a->leave($__internal_0d344c157f6bb3c41c0245fc7438b4c24560bd2d34fe0f086fb63c4e98da2b0a_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_41576382845c0b1df05cab5ddf539a45067a09c4dfecf26738a4d241f7ccc7b0 = $this->env->getExtension("native_profiler");
        $__internal_41576382845c0b1df05cab5ddf539a45067a09c4dfecf26738a4d241f7ccc7b0->enter($__internal_41576382845c0b1df05cab5ddf539a45067a09c4dfecf26738a4d241f7ccc7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41576382845c0b1df05cab5ddf539a45067a09c4dfecf26738a4d241f7ccc7b0->leave($__internal_41576382845c0b1df05cab5ddf539a45067a09c4dfecf26738a4d241f7ccc7b0_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94d88c3f25c74fb5f01b1fe7094a1b2c5bebb590552891fd0c39acb72213da99 = $this->env->getExtension("native_profiler");
        $__internal_94d88c3f25c74fb5f01b1fe7094a1b2c5bebb590552891fd0c39acb72213da99->enter($__internal_94d88c3f25c74fb5f01b1fe7094a1b2c5bebb590552891fd0c39acb72213da99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94d88c3f25c74fb5f01b1fe7094a1b2c5bebb590552891fd0c39acb72213da99->leave($__internal_94d88c3f25c74fb5f01b1fe7094a1b2c5bebb590552891fd0c39acb72213da99_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd0f7a98a6d8b721f089b529ad09d0f7f810b671eb72a6df8bef80a4f093a5a1 = $this->env->getExtension("native_profiler");
        $__internal_dd0f7a98a6d8b721f089b529ad09d0f7f810b671eb72a6df8bef80a4f093a5a1->enter($__internal_dd0f7a98a6d8b721f089b529ad09d0f7f810b671eb72a6df8bef80a4f093a5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd0f7a98a6d8b721f089b529ad09d0f7f810b671eb72a6df8bef80a4f093a5a1->leave($__internal_dd0f7a98a6d8b721f089b529ad09d0f7f810b671eb72a6df8bef80a4f093a5a1_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bbc1c44155809aba8b794a2d1729a23bd05f62bd01851213501364dbd8bb70b = $this->env->getExtension("native_profiler");
        $__internal_7bbc1c44155809aba8b794a2d1729a23bd05f62bd01851213501364dbd8bb70b->enter($__internal_7bbc1c44155809aba8b794a2d1729a23bd05f62bd01851213501364dbd8bb70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7bbc1c44155809aba8b794a2d1729a23bd05f62bd01851213501364dbd8bb70b->leave($__internal_7bbc1c44155809aba8b794a2d1729a23bd05f62bd01851213501364dbd8bb70b_prof);

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
