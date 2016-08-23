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
        $__internal_9d2c9047812def6d2d2f9cf87b8bcd5deac1b485432a503f62045a1f1324d8a6 = $this->env->getExtension("native_profiler");
        $__internal_9d2c9047812def6d2d2f9cf87b8bcd5deac1b485432a503f62045a1f1324d8a6->enter($__internal_9d2c9047812def6d2d2f9cf87b8bcd5deac1b485432a503f62045a1f1324d8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2c9047812def6d2d2f9cf87b8bcd5deac1b485432a503f62045a1f1324d8a6->leave($__internal_9d2c9047812def6d2d2f9cf87b8bcd5deac1b485432a503f62045a1f1324d8a6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a2e137d6184fbc2c67cf3e1b642c9e03162c88c5e80b34d70f153b20c766720 = $this->env->getExtension("native_profiler");
        $__internal_5a2e137d6184fbc2c67cf3e1b642c9e03162c88c5e80b34d70f153b20c766720->enter($__internal_5a2e137d6184fbc2c67cf3e1b642c9e03162c88c5e80b34d70f153b20c766720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a2e137d6184fbc2c67cf3e1b642c9e03162c88c5e80b34d70f153b20c766720->leave($__internal_5a2e137d6184fbc2c67cf3e1b642c9e03162c88c5e80b34d70f153b20c766720_prof);

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
