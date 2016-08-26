<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_da47f5603ab6d21d719bf1e575d67e0b3ea3feb67af641a7cd03874bd69acb80 extends Twig_Template
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
        $__internal_129d0e44c912a542ff04e85fff65795e266592bd542eb4df8621e53de8d513c0 = $this->env->getExtension("native_profiler");
        $__internal_129d0e44c912a542ff04e85fff65795e266592bd542eb4df8621e53de8d513c0->enter($__internal_129d0e44c912a542ff04e85fff65795e266592bd542eb4df8621e53de8d513c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_129d0e44c912a542ff04e85fff65795e266592bd542eb4df8621e53de8d513c0->leave($__internal_129d0e44c912a542ff04e85fff65795e266592bd542eb4df8621e53de8d513c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
