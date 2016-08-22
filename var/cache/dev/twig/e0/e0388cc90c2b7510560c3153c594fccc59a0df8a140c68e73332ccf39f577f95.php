<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_937e91c19faf10092b9d1e5b698034d7abee2ea967236dab861e481ac8de9ee0 extends Twig_Template
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
        $__internal_8863088f0eb861367fc82992c3ab3b32fc96cdf2caad4a59f4b8c128e61d8c14 = $this->env->getExtension("native_profiler");
        $__internal_8863088f0eb861367fc82992c3ab3b32fc96cdf2caad4a59f4b8c128e61d8c14->enter($__internal_8863088f0eb861367fc82992c3ab3b32fc96cdf2caad4a59f4b8c128e61d8c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8863088f0eb861367fc82992c3ab3b32fc96cdf2caad4a59f4b8c128e61d8c14->leave($__internal_8863088f0eb861367fc82992c3ab3b32fc96cdf2caad4a59f4b8c128e61d8c14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
