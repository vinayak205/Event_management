<?php

/* :default:test.html.twig */
class __TwigTemplate_266db6afcded26bb831084e84acd98bd5a318330831481eb0a61f19175f32feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "html", array()), "twig", array()), ":default:test.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20b5874e815d86bed4142411b31a2b75ce5b02066cc1520ce75f59a362486b89 = $this->env->getExtension("native_profiler");
        $__internal_20b5874e815d86bed4142411b31a2b75ce5b02066cc1520ce75f59a362486b89->enter($__internal_20b5874e815d86bed4142411b31a2b75ce5b02066cc1520ce75f59a362486b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20b5874e815d86bed4142411b31a2b75ce5b02066cc1520ce75f59a362486b89->leave($__internal_20b5874e815d86bed4142411b31a2b75ce5b02066cc1520ce75f59a362486b89_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eab7031ac9149c52c32d2d1e1253e3f8cda0c264586b52d41d0c0e3c06d82f94 = $this->env->getExtension("native_profiler");
        $__internal_eab7031ac9149c52c32d2d1e1253e3f8cda0c264586b52d41d0c0e3c06d82f94->enter($__internal_eab7031ac9149c52c32d2d1e1253e3f8cda0c264586b52d41d0c0e3c06d82f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_eab7031ac9149c52c32d2d1e1253e3f8cda0c264586b52d41d0c0e3c06d82f94->leave($__internal_eab7031ac9149c52c32d2d1e1253e3f8cda0c264586b52d41d0c0e3c06d82f94_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  33 => 2,  18 => 1,);
    }
}
/* {% extends base.html.twig %}*/
/* {% block body %}*/
/* 	Test*/
/* {% endblock %}*/
