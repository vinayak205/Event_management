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
        $__internal_98a67b5f1cf92e98c350466658f85fb1d0e7701ecf11dc42dc5856aedd67b02e = $this->env->getExtension("native_profiler");
        $__internal_98a67b5f1cf92e98c350466658f85fb1d0e7701ecf11dc42dc5856aedd67b02e->enter($__internal_98a67b5f1cf92e98c350466658f85fb1d0e7701ecf11dc42dc5856aedd67b02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_98a67b5f1cf92e98c350466658f85fb1d0e7701ecf11dc42dc5856aedd67b02e->leave($__internal_98a67b5f1cf92e98c350466658f85fb1d0e7701ecf11dc42dc5856aedd67b02e_prof);

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
