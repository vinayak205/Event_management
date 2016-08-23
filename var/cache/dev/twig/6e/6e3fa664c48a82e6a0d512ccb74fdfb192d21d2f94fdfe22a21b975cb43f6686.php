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
        $__internal_b136700d3c1f56537617c9dc1160591e2c1da78db289dfc4e7207d642687ec4d = $this->env->getExtension("native_profiler");
        $__internal_b136700d3c1f56537617c9dc1160591e2c1da78db289dfc4e7207d642687ec4d->enter($__internal_b136700d3c1f56537617c9dc1160591e2c1da78db289dfc4e7207d642687ec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "
            </div>
        </div>

     
    </div><!-- /.container -->
    ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "  </body>
</html>

";
        
        $__internal_b136700d3c1f56537617c9dc1160591e2c1da78db289dfc4e7207d642687ec4d->leave($__internal_b136700d3c1f56537617c9dc1160591e2c1da78db289dfc4e7207d642687ec4d_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_a99058dfaa040940f26e3905fe3667f1aa6e3d14a66287fa73501a22e1c22466 = $this->env->getExtension("native_profiler");
        $__internal_a99058dfaa040940f26e3905fe3667f1aa6e3d14a66287fa73501a22e1c22466->enter($__internal_a99058dfaa040940f26e3905fe3667f1aa6e3d14a66287fa73501a22e1c22466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a99058dfaa040940f26e3905fe3667f1aa6e3d14a66287fa73501a22e1c22466->leave($__internal_a99058dfaa040940f26e3905fe3667f1aa6e3d14a66287fa73501a22e1c22466_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4262367addf1325be442e32c3bc9076874fa4e1352d1cfa2601987189348de1b = $this->env->getExtension("native_profiler");
        $__internal_4262367addf1325be442e32c3bc9076874fa4e1352d1cfa2601987189348de1b->enter($__internal_4262367addf1325be442e32c3bc9076874fa4e1352d1cfa2601987189348de1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4262367addf1325be442e32c3bc9076874fa4e1352d1cfa2601987189348de1b->leave($__internal_4262367addf1325be442e32c3bc9076874fa4e1352d1cfa2601987189348de1b_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3b3a038ffd6e65893c4e4bedac59d6e9f5961ad960041c37110d7faea05cf6a = $this->env->getExtension("native_profiler");
        $__internal_f3b3a038ffd6e65893c4e4bedac59d6e9f5961ad960041c37110d7faea05cf6a->enter($__internal_f3b3a038ffd6e65893c4e4bedac59d6e9f5961ad960041c37110d7faea05cf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3b3a038ffd6e65893c4e4bedac59d6e9f5961ad960041c37110d7faea05cf6a->leave($__internal_f3b3a038ffd6e65893c4e4bedac59d6e9f5961ad960041c37110d7faea05cf6a_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ebf5c389b61389619927f38f08daea61d1edecc04c25ca9b90a9a7d4604f655 = $this->env->getExtension("native_profiler");
        $__internal_8ebf5c389b61389619927f38f08daea61d1edecc04c25ca9b90a9a7d4604f655->enter($__internal_8ebf5c389b61389619927f38f08daea61d1edecc04c25ca9b90a9a7d4604f655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8ebf5c389b61389619927f38f08daea61d1edecc04c25ca9b90a9a7d4604f655->leave($__internal_8ebf5c389b61389619927f38f08daea61d1edecc04c25ca9b90a9a7d4604f655_prof);

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
        return array (  194 => 78,  183 => 71,  172 => 17,  160 => 12,  150 => 79,  148 => 78,  140 => 72,  137 => 71,  128 => 69,  124 => 68,  114 => 60,  110 => 58,  106 => 56,  104 => 55,  99 => 52,  95 => 50,  92 => 49,  85 => 44,  83 => 43,  77 => 39,  74 => 38,  72 => 37,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
