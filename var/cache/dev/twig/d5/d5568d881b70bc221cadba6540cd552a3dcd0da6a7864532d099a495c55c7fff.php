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
        $__internal_ca91ac92abe38a7a9500ec8a0701a220225d4c5b24cd8afd3e46e38339b57d9c = $this->env->getExtension("native_profiler");
        $__internal_ca91ac92abe38a7a9500ec8a0701a220225d4c5b24cd8afd3e46e38339b57d9c->enter($__internal_ca91ac92abe38a7a9500ec8a0701a220225d4c5b24cd8afd3e46e38339b57d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ca91ac92abe38a7a9500ec8a0701a220225d4c5b24cd8afd3e46e38339b57d9c->leave($__internal_ca91ac92abe38a7a9500ec8a0701a220225d4c5b24cd8afd3e46e38339b57d9c_prof);

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
