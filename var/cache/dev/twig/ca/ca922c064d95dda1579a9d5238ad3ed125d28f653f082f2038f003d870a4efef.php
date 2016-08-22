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
        $__internal_c036d08a4a1288f8b26ec9564964a1af6e46cb664d152ddbe319b63694577dd4 = $this->env->getExtension("native_profiler");
        $__internal_c036d08a4a1288f8b26ec9564964a1af6e46cb664d152ddbe319b63694577dd4->enter($__internal_c036d08a4a1288f8b26ec9564964a1af6e46cb664d152ddbe319b63694577dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c036d08a4a1288f8b26ec9564964a1af6e46cb664d152ddbe319b63694577dd4->leave($__internal_c036d08a4a1288f8b26ec9564964a1af6e46cb664d152ddbe319b63694577dd4_prof);

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
