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
        $__internal_743209198529bf861a51cce4f7da9f6e33511eaa127f1d87c5a2c411b2f38e96 = $this->env->getExtension("native_profiler");
        $__internal_743209198529bf861a51cce4f7da9f6e33511eaa127f1d87c5a2c411b2f38e96->enter($__internal_743209198529bf861a51cce4f7da9f6e33511eaa127f1d87c5a2c411b2f38e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_743209198529bf861a51cce4f7da9f6e33511eaa127f1d87c5a2c411b2f38e96->leave($__internal_743209198529bf861a51cce4f7da9f6e33511eaa127f1d87c5a2c411b2f38e96_prof);

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
