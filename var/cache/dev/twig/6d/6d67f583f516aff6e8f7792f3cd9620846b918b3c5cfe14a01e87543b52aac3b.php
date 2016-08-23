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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34de98120189988cbd806873c9a49241ef12a8ab6ffc9cb7e277cdeeb94d846c = $this->env->getExtension("native_profiler");
        $__internal_34de98120189988cbd806873c9a49241ef12a8ab6ffc9cb7e277cdeeb94d846c->enter($__internal_34de98120189988cbd806873c9a49241ef12a8ab6ffc9cb7e277cdeeb94d846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34de98120189988cbd806873c9a49241ef12a8ab6ffc9cb7e277cdeeb94d846c->leave($__internal_34de98120189988cbd806873c9a49241ef12a8ab6ffc9cb7e277cdeeb94d846c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_92b7bc01eba6b01f5bf5f24aba6ce9ee056351ce7812bb73cc99c22840e7b437 = $this->env->getExtension("native_profiler");
        $__internal_92b7bc01eba6b01f5bf5f24aba6ce9ee056351ce7812bb73cc99c22840e7b437->enter($__internal_92b7bc01eba6b01f5bf5f24aba6ce9ee056351ce7812bb73cc99c22840e7b437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_92b7bc01eba6b01f5bf5f24aba6ce9ee056351ce7812bb73cc99c22840e7b437->leave($__internal_92b7bc01eba6b01f5bf5f24aba6ce9ee056351ce7812bb73cc99c22840e7b437_prof);

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
        return array (  59 => 10,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*     <button type="submit">login</button>*/
/* </form>*/
/* {% endblock %}*/
/* */
