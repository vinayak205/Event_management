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
        $__internal_a142bbdd0a3c84134d1a1f0c31722173217d54438eb5a819c3524cce2e07589a = $this->env->getExtension("native_profiler");
        $__internal_a142bbdd0a3c84134d1a1f0c31722173217d54438eb5a819c3524cce2e07589a->enter($__internal_a142bbdd0a3c84134d1a1f0c31722173217d54438eb5a819c3524cce2e07589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a142bbdd0a3c84134d1a1f0c31722173217d54438eb5a819c3524cce2e07589a->leave($__internal_a142bbdd0a3c84134d1a1f0c31722173217d54438eb5a819c3524cce2e07589a_prof);

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
