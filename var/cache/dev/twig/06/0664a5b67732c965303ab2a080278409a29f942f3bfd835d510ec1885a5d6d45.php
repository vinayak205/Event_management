<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ef7aaaddc931b20788b7f826b836ac83ee6a8a4a4e0aaa1b12a751fe5ad914cf extends Twig_Template
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
        $__internal_5d7a3820027fa3fffc6a9f9f7e53d008a9eb7529b0762942e07942d62de128c2 = $this->env->getExtension("native_profiler");
        $__internal_5d7a3820027fa3fffc6a9f9f7e53d008a9eb7529b0762942e07942d62de128c2->enter($__internal_5d7a3820027fa3fffc6a9f9f7e53d008a9eb7529b0762942e07942d62de128c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5d7a3820027fa3fffc6a9f9f7e53d008a9eb7529b0762942e07942d62de128c2->leave($__internal_5d7a3820027fa3fffc6a9f9f7e53d008a9eb7529b0762942e07942d62de128c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
