<?php

/* default/login.html.twig */
class __TwigTemplate_07e267ece97e6e100d0ca03545c65bd0c8a94ceb2cab26906772001c44c4fd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
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
        $__internal_713ad29fc1286299505f14e26b49de91610699ea832eb9994f931c8c102272b2 = $this->env->getExtension("native_profiler");
        $__internal_713ad29fc1286299505f14e26b49de91610699ea832eb9994f931c8c102272b2->enter($__internal_713ad29fc1286299505f14e26b49de91610699ea832eb9994f931c8c102272b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_713ad29fc1286299505f14e26b49de91610699ea832eb9994f931c8c102272b2->leave($__internal_713ad29fc1286299505f14e26b49de91610699ea832eb9994f931c8c102272b2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2905e381b8880d4393ad02594d09843c53d4df55706e6ebfcff74cca4797b839 = $this->env->getExtension("native_profiler");
        $__internal_2905e381b8880d4393ad02594d09843c53d4df55706e6ebfcff74cca4797b839->enter($__internal_2905e381b8880d4393ad02594d09843c53d4df55706e6ebfcff74cca4797b839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/asset/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_2905e381b8880d4393ad02594d09843c53d4df55706e6ebfcff74cca4797b839->leave($__internal_2905e381b8880d4393ad02594d09843c53d4df55706e6ebfcff74cca4797b839_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d2bd1407d9142d4970bb92dbf6d947f9c8f56832db7796bed50f63a7fc0e0e5 = $this->env->getExtension("native_profiler");
        $__internal_9d2bd1407d9142d4970bb92dbf6d947f9c8f56832db7796bed50f63a7fc0e0e5->enter($__internal_9d2bd1407d9142d4970bb92dbf6d947f9c8f56832db7796bed50f63a7fc0e0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d2bd1407d9142d4970bb92dbf6d947f9c8f56832db7796bed50f63a7fc0e0e5->leave($__internal_9d2bd1407d9142d4970bb92dbf6d947f9c8f56832db7796bed50f63a7fc0e0e5_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
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
