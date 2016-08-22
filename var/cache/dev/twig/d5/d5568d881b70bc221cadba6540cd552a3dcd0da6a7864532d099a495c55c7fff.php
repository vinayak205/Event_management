<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_63699552e353660f21775032fc635fcd4c10287934e185d6486fc0fcf242132b extends Twig_Template
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
        $__internal_74247baffbe1084502fc9a0c668676a52403a9fbe0ecd6c1b3127f7da328e342 = $this->env->getExtension("native_profiler");
        $__internal_74247baffbe1084502fc9a0c668676a52403a9fbe0ecd6c1b3127f7da328e342->enter($__internal_74247baffbe1084502fc9a0c668676a52403a9fbe0ecd6c1b3127f7da328e342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_74247baffbe1084502fc9a0c668676a52403a9fbe0ecd6c1b3127f7da328e342->leave($__internal_74247baffbe1084502fc9a0c668676a52403a9fbe0ecd6c1b3127f7da328e342_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
