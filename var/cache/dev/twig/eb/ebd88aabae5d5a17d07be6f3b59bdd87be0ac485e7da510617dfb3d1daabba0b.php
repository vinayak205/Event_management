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
        $__internal_1bc2f62ce6fea63a590b9682c185b8a112e759e8ab63c1e6007994224996c03a = $this->env->getExtension("native_profiler");
        $__internal_1bc2f62ce6fea63a590b9682c185b8a112e759e8ab63c1e6007994224996c03a->enter($__internal_1bc2f62ce6fea63a590b9682c185b8a112e759e8ab63c1e6007994224996c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1bc2f62ce6fea63a590b9682c185b8a112e759e8ab63c1e6007994224996c03a->leave($__internal_1bc2f62ce6fea63a590b9682c185b8a112e759e8ab63c1e6007994224996c03a_prof);

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
