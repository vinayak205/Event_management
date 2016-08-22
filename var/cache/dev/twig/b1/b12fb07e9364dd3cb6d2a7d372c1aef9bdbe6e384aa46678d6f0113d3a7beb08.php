<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9ae2cdb0197c62a97e2defd1f1440f4932815af3e6ccfa768bfe676502357fe2 extends Twig_Template
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
        $__internal_a050f51699c876d4ea1fe81ab8d9260cc62bb61d67fa755abaaf7a41a877f068 = $this->env->getExtension("native_profiler");
        $__internal_a050f51699c876d4ea1fe81ab8d9260cc62bb61d67fa755abaaf7a41a877f068->enter($__internal_a050f51699c876d4ea1fe81ab8d9260cc62bb61d67fa755abaaf7a41a877f068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a050f51699c876d4ea1fe81ab8d9260cc62bb61d67fa755abaaf7a41a877f068->leave($__internal_a050f51699c876d4ea1fe81ab8d9260cc62bb61d67fa755abaaf7a41a877f068_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
