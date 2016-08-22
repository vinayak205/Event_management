<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_470a4b6b1ad82199414e3e9def7159fe3c9eb7cc820289e2220263d5c4127ca9 extends Twig_Template
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
        $__internal_512016e1cb45948b2fab8ebbff20abb9cacd94c95cc8487a02b78ba5265eed4a = $this->env->getExtension("native_profiler");
        $__internal_512016e1cb45948b2fab8ebbff20abb9cacd94c95cc8487a02b78ba5265eed4a->enter($__internal_512016e1cb45948b2fab8ebbff20abb9cacd94c95cc8487a02b78ba5265eed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_512016e1cb45948b2fab8ebbff20abb9cacd94c95cc8487a02b78ba5265eed4a->leave($__internal_512016e1cb45948b2fab8ebbff20abb9cacd94c95cc8487a02b78ba5265eed4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
