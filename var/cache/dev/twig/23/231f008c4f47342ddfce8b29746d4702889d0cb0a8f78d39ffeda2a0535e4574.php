<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_df6ca7b45738664a71e72ddfab75b65abb18ac0a3ee1dcd34e06bc304e0f2df5 extends Twig_Template
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
        $__internal_09f4112016da6ce75372684b8d5f55e1f6ec3d0b3d94da8bd56fb0d3c7b02514 = $this->env->getExtension("native_profiler");
        $__internal_09f4112016da6ce75372684b8d5f55e1f6ec3d0b3d94da8bd56fb0d3c7b02514->enter($__internal_09f4112016da6ce75372684b8d5f55e1f6ec3d0b3d94da8bd56fb0d3c7b02514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_09f4112016da6ce75372684b8d5f55e1f6ec3d0b3d94da8bd56fb0d3c7b02514->leave($__internal_09f4112016da6ce75372684b8d5f55e1f6ec3d0b3d94da8bd56fb0d3c7b02514_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
