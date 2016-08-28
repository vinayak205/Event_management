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
        $__internal_94f1cefab9a632a2a4c387841c848ee7a4aed0d385261258f9e7fcc900fefce8 = $this->env->getExtension("native_profiler");
        $__internal_94f1cefab9a632a2a4c387841c848ee7a4aed0d385261258f9e7fcc900fefce8->enter($__internal_94f1cefab9a632a2a4c387841c848ee7a4aed0d385261258f9e7fcc900fefce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_94f1cefab9a632a2a4c387841c848ee7a4aed0d385261258f9e7fcc900fefce8->leave($__internal_94f1cefab9a632a2a4c387841c848ee7a4aed0d385261258f9e7fcc900fefce8_prof);

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
