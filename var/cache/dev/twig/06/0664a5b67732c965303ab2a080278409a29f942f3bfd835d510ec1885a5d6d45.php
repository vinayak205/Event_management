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
        $__internal_06592930fcb1f32d1e69276f04169af0be06b18894178f03539416bca20ab3f5 = $this->env->getExtension("native_profiler");
        $__internal_06592930fcb1f32d1e69276f04169af0be06b18894178f03539416bca20ab3f5->enter($__internal_06592930fcb1f32d1e69276f04169af0be06b18894178f03539416bca20ab3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_06592930fcb1f32d1e69276f04169af0be06b18894178f03539416bca20ab3f5->leave($__internal_06592930fcb1f32d1e69276f04169af0be06b18894178f03539416bca20ab3f5_prof);

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
