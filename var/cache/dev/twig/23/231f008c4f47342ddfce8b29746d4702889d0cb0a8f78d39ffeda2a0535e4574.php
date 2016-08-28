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
        $__internal_3a39dec4d82edcb55a95016f8b890e9a13500133c526ec76976916e0cc602834 = $this->env->getExtension("native_profiler");
        $__internal_3a39dec4d82edcb55a95016f8b890e9a13500133c526ec76976916e0cc602834->enter($__internal_3a39dec4d82edcb55a95016f8b890e9a13500133c526ec76976916e0cc602834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3a39dec4d82edcb55a95016f8b890e9a13500133c526ec76976916e0cc602834->leave($__internal_3a39dec4d82edcb55a95016f8b890e9a13500133c526ec76976916e0cc602834_prof);

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
