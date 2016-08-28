<?php

/* :default:login.html.twig */
class __TwigTemplate_07e267ece97e6e100d0ca03545c65bd0c8a94ceb2cab26906772001c44c4fd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94da961f5b3bf61e7050cd9cffc931ade48e129b9c407dd99d17974209867c5e = $this->env->getExtension("native_profiler");
        $__internal_94da961f5b3bf61e7050cd9cffc931ade48e129b9c407dd99d17974209867c5e->enter($__internal_94da961f5b3bf61e7050cd9cffc931ade48e129b9c407dd99d17974209867c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94da961f5b3bf61e7050cd9cffc931ade48e129b9c407dd99d17974209867c5e->leave($__internal_94da961f5b3bf61e7050cd9cffc931ade48e129b9c407dd99d17974209867c5e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_578151fc9ae424e09608c28601cd98dbe190491219a8a2d31858e98741ecf588 = $this->env->getExtension("native_profiler");
        $__internal_578151fc9ae424e09608c28601cd98dbe190491219a8a2d31858e98741ecf588->enter($__internal_578151fc9ae424e09608c28601cd98dbe190491219a8a2d31858e98741ecf588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/asset/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_578151fc9ae424e09608c28601cd98dbe190491219a8a2d31858e98741ecf588->leave($__internal_578151fc9ae424e09608c28601cd98dbe190491219a8a2d31858e98741ecf588_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bccb4da911b4e8f5ae9b70260ab3fbeb9f893247daebbbba70fb9773bf161498 = $this->env->getExtension("native_profiler");
        $__internal_bccb4da911b4e8f5ae9b70260ab3fbeb9f893247daebbbba70fb9773bf161498->enter($__internal_bccb4da911b4e8f5ae9b70260ab3fbeb9f893247daebbbba70fb9773bf161498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4 col-md-offset-4\">
            <h1 class=\"text-center login-title\">Please Sign in</h1>
            
                <form class=\"form-signin\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
                <input type=\"text\" class=\"form-control\" placeholder=\"UserName\" id=\"username\" name=\"_username\" required autofocus>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">
                    Sign in</button>
                
                </form>
            
            <a href=\"/register\" class=\"text-center new-account\">Create an account </a>
        </div>
    </div>
</div>
";
        
        $__internal_bccb4da911b4e8f5ae9b70260ab3fbeb9f893247daebbbba70fb9773bf161498->leave($__internal_bccb4da911b4e8f5ae9b70260ab3fbeb9f893247daebbbba70fb9773bf161498_prof);

    }

    public function getTemplateName()
    {
        return ":default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  51 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/* <link href="{{asset('/asset/css/login.css')}}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-6 col-md-4 col-md-offset-4">*/
/*             <h1 class="text-center login-title">Please Sign in</h1>*/
/*             */
/*                 <form class="form-signin" action="{{ path('login') }}" method="post">*/
/*                 <input type="text" class="form-control" placeholder="UserName" id="username" name="_username" required autofocus>*/
/*                 <input type="password" id="password" name="_password" class="form-control" placeholder="Password" required>*/
/*                 <button class="btn btn-lg btn-primary btn-block" type="submit">*/
/*                     Sign in</button>*/
/*                 */
/*                 </form>*/
/*             */
/*             <a href="/register" class="text-center new-account">Create an account </a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
