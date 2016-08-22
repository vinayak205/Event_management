<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_52073780a946c1be3d590d0f7c2398b39a3a6306491fece404bf5a8b2d2b44d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f4dfa69859224e9a07447d932fa4ff76aba8bbb63d4c50652c70f7e5bf45771 = $this->env->getExtension("native_profiler");
        $__internal_2f4dfa69859224e9a07447d932fa4ff76aba8bbb63d4c50652c70f7e5bf45771->enter($__internal_2f4dfa69859224e9a07447d932fa4ff76aba8bbb63d4c50652c70f7e5bf45771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2f4dfa69859224e9a07447d932fa4ff76aba8bbb63d4c50652c70f7e5bf45771->leave($__internal_2f4dfa69859224e9a07447d932fa4ff76aba8bbb63d4c50652c70f7e5bf45771_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
