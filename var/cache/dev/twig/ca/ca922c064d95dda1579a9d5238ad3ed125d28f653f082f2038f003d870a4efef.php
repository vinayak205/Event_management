<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ba807ce172cca2569b5f2c1dd35de7ceeb62cf5dd26ee1c76b19e790427f532a extends Twig_Template
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
        $__internal_562e2aaaa9d6d8bce7bc2ef089815d85e7abe4e5124499376839d83b6a7a7be0 = $this->env->getExtension("native_profiler");
        $__internal_562e2aaaa9d6d8bce7bc2ef089815d85e7abe4e5124499376839d83b6a7a7be0->enter($__internal_562e2aaaa9d6d8bce7bc2ef089815d85e7abe4e5124499376839d83b6a7a7be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_562e2aaaa9d6d8bce7bc2ef089815d85e7abe4e5124499376839d83b6a7a7be0->leave($__internal_562e2aaaa9d6d8bce7bc2ef089815d85e7abe4e5124499376839d83b6a7a7be0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
